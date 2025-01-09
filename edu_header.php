<!-- header -->
<!DOCTYPE html>
<html lang="ko">
<!-- HTML 문서의 언어 설정: 한국어 -->

<head>
  <!-- 메타데이터 섹션 -->
  <meta charset="UTF-8">
  <!-- 문서의 문자 인코딩 설정: UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 반응형 웹 디자인을 위한 설정 -->
  
  <!-- 사이트 아이콘 설정 -->
  <link rel="icon" type="images/png" href="images/logo.png"/> 
  <link rel="B-icon" href="images/logo.png"/> 
  
  <!-- 문서 제목 설정 -->
  <title><?= $g_title ?></title>
  
  <!-- 부트스트랩 CSS 라이브러리 로드 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <!-- 부트스트랩 JavaScript 라이브러리 로드 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  
  <!-- Google Fonts 추가 -->
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Doto:wght@100..900&family=Orbit&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
  
  <!-- 사용자 정의 CSS 추가 -->
  <link rel="stylesheet" href="css/font.css">
</head>

<!-- PHP를 사용하여 동적으로 JavaScript 파일 로드 -->
<?php
  if(isset($js_array)) { // $js_array 변수가 설정된 경우
    foreach($js_array AS $var) { 
      // 각 JavaScript 파일을 동적으로 로드하며, 버전을 현재 시간으로 추가
      echo '<script src="'.$var.'?v='. date('YmdHis').'"></script>'.PHP_EOL;
    }
  }
?>
  
<body>
<!-- 컨테이너 설정 -->
<div class="container">
    <div class="container">
      <!-- 헤더 섹션 -->
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <!-- 로고 및 사이트 이름 -->
        <a href="edu.php" class="d-flex align-items-center mb-5 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="images/logo.svg" alt="#" style="width: 2rem" class="me-2">
          <!-- 사이트 이름 -->
          <span class="fs-4">ByteHiveEDU</span>
        </a>

        <!-- 내비게이션 메뉴 -->
        <ul class="nav nav-pills">
          <!-- ByteHive 바로가기 -->
          <li class="nav-item"><a href="home.php" class="nav-link text-black">ByteHive바로가기</a></li>
          <!-- 로그인 페이지 -->
          <li class="nav-item"><a href="login.php" class="nav-link text-black">로그인</a></li>
          <!-- 회원가입 페이지 -->
          <li class="nav-item"><a href="stipulation.php" class="nav-link active" aria-current="page">회원가입</a></li>
        </ul>
      </header>
    </div>
</div>
