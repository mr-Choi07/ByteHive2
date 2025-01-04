<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회사 소식 - 페이지 3</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .news-item { border-bottom: 1px solid #ddd; padding: 20px 0; transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .news-item:hover { transform: translateY(-5px); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .news-title { font-size: 1.5rem; font-weight: bold; color: #333; }
        .news-date { color: #888; font-size: 0.9rem; }
        .news-content { margin-top: 10px; color: #555; }
    </style>
</head>
<body> 
    <?php include "inc_header.php";?>
    <header class="header text-center py-4">
        <div class="container">
            <h1 class="display-5">회사 소식</h1>
            <p class="lead">최신 뉴스와 업데이트를 확인하세요.</p>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="news-item">
                    <h2 class="news-title">AI 기반 고객 서비스 개선</h2>
                    <p class="news-date">2024-06-01</p>
                    <p class="news-content">ByteHive Entertainment는 AI 기술을 활용하여 고객 서비스를 개선하고 있습니다. 이를 통해 고객 만족도를 높이고, 더 나은 사용자 경험을 제공할 것입니다.</p>
                </div>
                <div class="news-item">
                    <h2 class="news-title">신규 데이터 분석 플랫폼 출시</h2>
                    <p class="news-date">2024-07-15</p>
                    <p class="news-content">ByteHive Entertainment는 새로운 데이터 분석 플랫폼을 출시했습니다. 이 플랫폼은 기업이 데이터를 효과적으로 관리하고 분석할 수 있도록 지원합니다.</p>
                </div>
                <div class="news-item">
                    <h2 class="news-title">사회적 책임을 위한 기부 활동</h2>
                    <p class="news-date">2024-08-10</p>
                    <p class="news-content">ByteHive Entertainment는 사회적 책임을 다하기 위해 다양한 기부 활동을 진행하고 있습니다. 이를 통해 지역 사회에 긍정적인 영향을 미치고자 합니다.</p>
                </div>
                <div class="news-item">
                    <h2 class="news-title">차세대 기술 연구 프로젝트 시작</h2>
                    <p class="news-date">2024-09-05</p>
                    <p class="news-content">ByteHive Entertainment는 차세대 기술 연구 프로젝트를 시작했습니다. 이 프로젝트는 미래의 기술 발전을 목표로 하며, 다양한 혁신적인 아이디어를 탐구할 것입니다.</p>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="news2.php" tabindex="-1" aria-disabled="true">이전</a>
                </li>
                <li class="page-item"><a class="page-link" href="news1.php">1</a></li>
                <li class="page-item"><a class="page-link" href="news2.php">2</a></li>
                <li class="page-item active"><a class="page-link" href="news3.php">3</a></li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">다음</a>
                </li>
            </ul>
        </nav>
    </div>
    <?php include "inc_footer.php";?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>