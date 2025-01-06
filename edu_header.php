<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="images/png" href="images/logo.png"/> 
  <link rel="B-icon" href="images/logo.png"/> 
  <title>약관</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Doto:wght@100..900&family=Orbit&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/font.css">
</head>
<?php
  if(isset($js_array)) {
  foreach($js_array AS $var) {
    echo '<script src="'.$var.'?v='. date('YmdHis').'"></script>'.PHP_EOL;
  }
}
  ?>
  
<body>
<div class="container">
    <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="edu.php" class="d-flex align-items-center mb-5 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="images/logo.svg" alt="#" style="width: 2rem" class="me-2">
          <span class="fs-4">ByteHiveEDU</span>
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item"><a href="login.php" class="nav-link text-black">로그인</a></li>
          <li class="nav-item"><a href="stipulation.php" class="nav-link active" aria-current="page">회원가입</a></li>
        </ul>
</div>
      </header>