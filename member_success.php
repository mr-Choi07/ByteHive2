<?php

$g_title = '회원가입을 축하합니다';
$js_array = ['js/member_success.js'];

$menu_code = 'member';

include 'edu_header.php';
?>

<main class="w-75 mx-auto border rounded-5 p-5 d-flex gap-5" style="height: calc(100vh-257px)">
    <img src="images/logo.svg" alt="">
    <div>
        <h1>회원가입을 축하합니다.</h1>
        <p>ByteHiveEDU에 가입해주셔서 진심으로 감사드립니다.</p>
        <button class="btn btn-primary" id="btn_login">로그인 하기</button>
    </div>
</main>

<?php
include 'inc_footer.php';

?>