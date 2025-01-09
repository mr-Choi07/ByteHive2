<!DOCTYPE html>
<html lang="en">
<head>
  <!-- 문자 인코딩 설정 -->
  <meta charset="UTF-8">
  
  <!-- 뷰포트 설정, 반응형 웹을 위한 설정 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- 파비콘 설정 -->
  <link rel="icon" type="images/png" href="images/logo.png"/> 
  <link rel="B-icon" href="images/logo.png"/> 
  
  <!-- 페이지 제목 설정 -->
  <title>ByteHive</title>
  
  <!-- Bootstrap 5 CSS 연결 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
  <!-- Bootstrap 5 JS 연결 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  
  <!-- Google Fonts 연결 -->
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Doto:wght@100..900&family=Orbit&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
  
  <!-- 커스텀 폰트 CSS 연결 -->
  <link rel="stylesheet" href="css/font.css">
  
  <!-- 커스텀 스타일 시트 연결 -->
  <link rel="stylesheet" href="css/edu.css">
</head>
<body>

<!-- 공통 헤더 파일 포함 -->
<?php include "edu_header.php" ?>

<!-- 배경 비디오 설정 -->
<video autoplay muted loop class="velo-slide__vid" poster="fallback-image.jpg">
        <source src="https://sgimage.netmarble.com/netmarble/career/v1/pc/img/main/netmarble_HR02_re.mp4" type="video/mp4">
        Your browser does not support the video tag. 
</video>

<!-- 비디오 위에 오버레이 텍스트 -->
<div class="overlay-text">
  <h3>
    <span> 더나은 미래를 위한 교육</span>
    <p><span>확실한 미래, ByteHiveEDU</span></p>
  </h3>
</div>

<!-- 공통 푸터 파일 포함 -->
<?php include "edu_footer.php" ?>

</body>
</html>
