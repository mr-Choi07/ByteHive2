<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="images/png" href="images/logo.png"/> 
  <link rel="B-icon" href="images/logo.png"/> 
  <title><?= $g_title ?></title>
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

  <?php include 'inc/common.php'; ?>
<body>
<div class="container">
    <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="edu2.php" class="d-flex align-items-center mb-5 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="images/logo.svg" alt="#" style="width: 2rem" class="me-2">
          <span class="fs-4">ByteHiveEDU</span>
        </a>

        <ul class="nav nav-pills">
        <?php
        //로그인 상태 체크
        if(isset($ses_id) && $ses_id != '') {
        ?>
        <li class="nav-item"><a href="home.php" class="nav-link text-black">ByteHive바로가기</a></li>
        <li class="nav-item"><a href="board.php" class="nav-link active" aria-current="page">게시판</a></li>
        <?php
        if($ses_level == 10) {    //레벨 10(관리자 레벨)이면 관리자 페이지로
        ?>
        <li class="nav-item"><a href="./admin/edu2.php" class="nav-link <?= ($menu_code == 'member') ? 'active': ''; ?>">관리페이지</a></li>
        <?php
        } else {
        ?>  <!--관리자가 아니면 마이페이지로-->
        <li class="nav-item"><a href="mypage.php" class="nav-link <?= ($menu_code == 'member') ? 'active': ''; ?>">마이페이지</a></li>
        <?php
        }
        ?>

      <li class="nav-item"><a href="./pg/logout.php" class="nav-link <?= ($menu_code == 'login') ? 'active': ''; ?>">로그아웃</a></li>
      <?php
        }
      ?>
          </ul>
</div>

      </header>
      