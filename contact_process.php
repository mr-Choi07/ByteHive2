<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $company = $_POST['company'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $category = $_POST['category'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // 이메일 내용 구성
    $to = "chltmdwo2007@naver.com";
    $subject = "[ByteHive] 새로운 문의가 접수되었습니다.";
    
    $email_content = "이름: $name\n";
    $email_content .= "회사명: $company\n";
    $email_content .= "이메일: $email\n";
    $email_content .= "연락처: $phone\n";
    $email_content .= "문의유형: $category\n\n";
    $email_content .= "문의내용:\n$message";
    
    $headers = "From: $email";
    
    // 이메일 발송
    if(mail($to, $subject, $email_content, $headers)) {
        echo "<script>
            alert('문의가 성공적으로 접수되었습니다.');
            window.location.href = 'contact.php';
        </script>";
    } else {
        echo "<script>
            alert('문의 접수 중 오류가 발생했습니다. 다시 시도해주세요.');
            window.history.back();
        </script>";
    }
}
?> 