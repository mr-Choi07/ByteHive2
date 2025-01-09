<?php

// 사용자가 'chk' 값을 보내지 않거나 값이 1이 아니면 접근을 차단
if(!isset($_POST['chk']) or $_POST['chk'] != 1) {
    // 접근이 잘못되었을 때 알림창을 띄우고 이전 페이지로 돌아가게 하는 스크립트
    // die("<script>
    // alert('잘못된 접근입니다.')
    // self.location.href='./stipulation.php'
    // </script>");
}

// 페이지에서 사용할 JavaScript 파일을 배열로 설정
$js_array = [ 'js/member_input.js' ];

// 페이지 제목을 설정
$g_title = '회원가입';

// 공통 헤더 파일 포함
include "edu_header.php";
?>
<main class="p-5 border rounded-5 mx-auto justify-content-center w-50">
    
    <!-- 회원가입 페이지 제목 -->
    <h1 class="text-center">회원가입</h1>
    
    <!-- 회원가입 폼 시작 -->
    <form name="input_form" method="post" enctype="multipart/form-data" autocomplete="off" action="pg/member_process.php">
        
        <!-- 숨겨진 필드: 폼 데이터 전송 시 사용 -->
        <input type="hidden" name="mode" value="input">
        <input type="hidden" name="id_chk" value="0">
        <input type="hidden" name="email_chk" value="0">
        
        <!-- 이메일 입력란 -->
        <div class="form-group">
            <div>
                <label for="f_email">이메일</label>
                <input type="text" id="f_email" name="email" class="form-control mt-2" placeholder="이메일주소를 입력해주세요.">
            </div>
        </div>
        <!-- 이메일 중복확인 버튼 -->
        <button type="button" id="btn_email_check" class="btn btn-secondary mt-2">이메일 중복확인</button>

        <!-- 아이디 입력란 -->
        <div class="form-group mt-5">
            <div>
                <label for="f_id">아이디</label>
                <input type="text" class="form-control mt-2" id="f_id" name="id" placeholder="아이디를 입력해주세요.">
                <small style="color: gray; font-weight: lighter;">6 자리에서 ~ 12 자리 사이의 아이디</small>
            </div>
        </div>
        <!-- 아이디 중복확인 버튼 -->
        <button class="btn btn-secondary mt-2" id="btn_id_check">아이디 중복확인</button>

        <!-- 이름 입력란 -->
        <div class="form-group mt-5">
            <div>    
                <label for="f_name">이름</label>
                <input type="text" class="form-control mt-2" id="f_name" name="name" placeholder="이름을 입력해주세요.">
            </div>
        </div>

        <!-- 비밀번호 입력란 -->
        <div class="form-group mt-5">
            <div>    
                <label for="f_password">비밀번호</label>
                <input type="password" name="password" class="form-control mt-2" id="f_password" placeholder="비밀번호를 입력해주세요.">
                <small style="color: gray; font-weight: lighter;">
                    8~16자의 영문 대소문자, 숫자, 특수문자만 가능합니다. <br>
                    (사용 가능한 특수문자 32자 : ! " # $ % & ' ( ) * + , - . / : ; < = > ? @ [ ₩ ] ^ _ ` { | } ~)
                </small>
            </div>
            <!-- 비밀번호 확인 입력란 -->
            <div>
                <label for="f_password2" class="mt-5">비밀번호 확인</label>
                <input type="password" name="password2" class="form-control mt-2" id="f_password2" placeholder="비밀번호를 재입력해주세요.">
            </div>
        </div>
        
        <!-- 프로필 이미지 업로드 섹션 -->
        <div class="mt-5 d-flex gap-2">
            <div>
                <label for="f_photo" class="form-label">프로필 이미지</label>
                <input type="file" name="photo" id="f_photo" class="form-control">
            </div>
            <!-- 프로필 이미지 미리보기 (기본 이미지 설정) -->
            <img src="images/person.jpg" id="f_preview" alt="profile image" class="w-25">
        </div>

        <!-- 가입 확인 및 취소 버튼 -->
        <div class="mt-3 d-flex justify-content-end gap-2">
            <button class="btn btn-primary" id="btn_submit">가입확인</button>
            <button class="btn btn-secondary">가입취소</button>
        </div>
    </form>
</main>
<?php
// 공통 푸터 파일 포함
include "edu_footer.php";
?>
