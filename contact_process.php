<?php
// POST 요청인지 확인
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 입력 데이터 수신 (폼 데이터)
    $name = $_POST['name'] ?? '';         // 이름
    $company = $_POST['company'] ?? '';   // 회사명
    $email = $_POST['email'] ?? '';       // 이메일
    $phone = $_POST['phone'] ?? '';       // 연락처
    $category = $_POST['category'] ?? ''; // 문의유형
    $message = $_POST['message'] ?? '';   // 문의내용
    
    // 이메일 수신자 설정
    $to = "chltmdwo2007@naver.com"; // 문의 내용을 수신할 이메일 주소
    $subject = "[ByteHive] 새로운 문의가 접수되었습니다."; // 이메일 제목
    
    // 이메일 본문 구성
    $email_content = "이름: $name\n";             // 이름 추가
    $email_content .= "회사명: $company\n";      // 회사명 추가
    $email_content .= "이메일: $email\n";        // 이메일 추가
    $email_content .= "연락처: $phone\n";        // 연락처 추가
    $email_content .= "문의유형: $category\n\n"; // 문의유형 추가
    $email_content .= "문의내용:\n$message";     // 문의내용 추가
    
    // 이메일 헤더 구성
    $headers = "From: $email"; // 발신자 이메일로 설정
    
    // 이메일 발송 처리
    if (mail($to, $subject, $email_content, $headers)) {
        // 이메일 발송 성공 시 사용자에게 성공 메시지 알림
        echo "<script>
            alert('문의가 성공적으로 접수되었습니다.');
            window.location.href = 'contact.php'; // 문의 페이지로 리디렉션
        </script>";
    } else {
        // 이메일 발송 실패 시 사용자에게 오류 메시지 알림
        echo "<script>
            alert('문의 접수 중 오류가 발생했습니다. 다시 시도해주세요.');
            window.history.back(); // 이전 페이지로 돌아가기
        </script>";
    }
}
?>
