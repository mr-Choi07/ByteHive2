<?php
include '../inc/dbconfig.php';
include '../inc/member.php';

$mem = new member($db);

$id = $_POST['id'] ?? '';
$email = $_POST['email'] ?? '';
$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';
$mode = $_POST['mode'] ?? '';

if($mode == 'id_chk'){

    if($id == '') {
        die(json_encode(['result' => 'empty_id']));
    }
    
    if($mem->id_exists($id)) {
        die(json_encode(['result' => 'fail']));
    } else {
        die(json_encode(['result' => 'success']));
    }

    //이메일 중복확인
} else if($mode == 'email_chk') {
    if($email == '') {
        die(json_encode(['result' => 'empty_email']));
    }

    //이메일 형식 체크
    if($mem->email_format_check($email) === false) {    // ../inc/member.php에 있음
        die(json_encode(['result' => 'email_format_wrong']));
    }

    if($mem->email_exists($email)) {
        die(json_encode(['result' => 'fail']));
    } else {
        die(json_encode(['result' => 'success']));
    }
} else if ($mode == 'input') {

    //Profile 이미지 처리
    $photo = '';
    if(isset($_FILES['photo']) && $_FILES['photo']['name'] != ''){
        $tmparr = explode('.', $_FILES['photo']['name']);
        $ext = end($tmparr);
        $photo = $id.'.'.$ext;

        copy($_FILES['photo']['tmp_name'], "../data/profile/".$photo);
    }

    $arr = [
        'id' => $id,
        'email' => $email,
        'name' => $name,
        'password' => $password,
        'photo' => $photo
    ];

    $mem -> input($arr);

    echo "
    <script>
        self.location.href='../member_success.php'
    </script>
    ";


} else if($mode == 'edit') {

        //Profile 이미지 처리

        if(isset($_FILES['photo']) && $_FILES['photo']['name'] != '') {
            $new_photo = $_FILES['photo'];
            $old_photo = $mem->profile_upload($id, $new_photo, $old_photo);
        }

        session_start();

        $arr = [
            'id' => $_SESSION['ses_id'],
            'email' => $email,
            'password' => $password,
            'name' => $name,
            'photo' => $old_photo
        ];

        $mem->edit($arr);

        echo "
        <script>
            self.location.href='../index.php';
        </script>
        ";
    }
?>
