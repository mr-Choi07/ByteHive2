<?php
try {
    include '../inc/dbconfig.php';
    include '../inc/member.php';
    
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    if (empty($id) || empty($pw)) {
        throw new Exception("아이디 또는 비밀번호가 없습니다.");
    }

    $mem = new Member($db);

    if ($mem->login($id, $pw)) {
        $arr = ['result' => 'login_success'];

        $memArr = $mem->getInfo($id);

        $name = $memArr['name'];

        // 'level' 키가 없는 경우를 처리
        $level = isset($memArr['level']) ? $memArr['level'] : null;

        session_start();
        $_SESSION['ses_id'] = $id;
        $_SESSION['ses_level'] = $level;  // 'level' 값을 세션에 저장

    } else {
        $arr = ['result' => 'login_fail'];
    }
} catch (Exception $e) {
    // 예외 발생 시 JSON으로 에러 메시지 반환
    $arr = ['result' => 'error', 'message' => $e->getMessage()];
}

die(json_encode($arr));
?>