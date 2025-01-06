<?php

if(!isset($_POST['chk']) or $_POST['chk'] != 1) {
    // die("<script>
    // alert('잘못된 접근입니다.')
    // self.location.href='./stipulation.php'
    // </script>");
}

$js_array = [ 'js/member_input.js' ];

include "edu_header.php";
?>
<main class="p-5 border rounded-5 mx-auto justify-content-center w-50">
    
    <h1 class="text-center">회원가입</h1>
    <form name="input_form" method="post" enctype="multipart/form-data" acton="pg/member_process.php">
        <input type="hidden" name="mode" value="input">
        <input type="hidden" name="id_chk" value="0">
    <div class="form-group">
        <div>
            <label for="f_email">이메일</label>
            <input type="text" class="form-control mt-2" id="f_email" placeholder="이메일주소를 입력해주세요.">
        </div>
    </div>
    <button class="btn btn-secondary mt-2">이메일 중복확인</button>

    <div class="form-group mt-5">
        <div>
            <label for="f_id">아이디</label>
            <input type="text" class="form-control mt-2" id="f_id" placeholder="아이디를 입력해주세요.">
            <small style="color: gray; font-weight: lighter;">6 자리에서 ~ 12 자리 사이의 아이디</small>
        </div>
    </div>
    <button class="btn btn-secondary mt-2" id="btn_id_check">아이디 중복확인</button>

    <div class="form-group mt-5">
        <div>    
            <label for="f_password">비밀번호</label>
            <input type="text" class="form-control mt-2" id="f_password" placeholder="비밀번호를 입력해주세요.">
            <small style="color: gray; font-weight: lighter;">
                8~16자의 영문 대소문자, 숫자, 특수문자만 가능합니다. <br>
                (사용 가능한 특수문자 32자 : ! " # $ % & ' ( ) * + , - . / : ; < = > ? @ [ ₩ ] ^ _ ` { | } ~)
            </small>
        </div>
        <div>
            <label for="f_password2" class="mt-5">비밀번호 확인</label>
            <input type="text" class="form-control mt-2" id="f_password2" placeholder="비밀번호를 재입력해주세요.">
        </div>
    </div>
    
    <div class="mt-5 d-flex gap-2">
        <div>
            <label for="f_photo" class="form-label">프로필 이미지</label>
            <input type="file" name="profile" class="form-control">
        </div>
        <img src="images/person.jpg" alt="profile image" class="w-25">
    </div>

    <div class=" mt-3 d-flex justify-content-end gap-2">
        <button class="btn btn-primary">가입확인</button>
        <button class="btn btn-secondary">가입취소</button>
    </div>
</form>
</main>
<?php
include "edu_footer.php";
?>