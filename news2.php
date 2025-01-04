<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회사 소식 - 페이지 2</title>
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
                    <h2 class="news-title">기술 혁신을 위한 새로운 연구소 설립</h2>
                    <p class="news-date">2024-02-15</p>
                    <p class="news-content">ByteHive Entertainment는 기술 혁신을 가속화하기 위해 새로운 연구소를 설립했습니다. 이 연구소는 AI와 클라우드 기술의 발전을 목표로 하며, 다양한 프로젝트를 통해 기술 고도화를 추진할 것입니다.</p>
                </div>
                <div class="news-item">
                    <h2 class="news-title">고객 맞춤형 솔루션 제공 시작</h2>
                    <p class="news-date">2024-03-01</p>
                    <p class="news-content">ByteHive Entertainment는 고객의 요구에 맞춘 맞춤형 솔루션 제공을 시작했습니다. 이를 통해 고객의 비즈니스 목표를 달성하는 데 필요한 최적의 기술 지원을 제공할 것입니다.</p>
                </div>
                <div class="news-item">
                    <h2 class="news-title">새로운 글로벌 시장 진출</h2>
                    <p class="news-date">2024-04-10</p>
                    <p class="news-content">ByteHive Entertainment는 새로운 글로벌 시장에 진출하여 국제적인 입지를 강화하고 있습니다. 이를 통해 더 많은 고객에게 혁신적인 솔루션을 제공할 계획입니다.</p>
                </div>
                <div class="news-item">
                    <h2 class="news-title">환경 친화적 기술 개발</h2>
                    <p class="news-date">2024-05-05</p>
                    <p class="news-content">ByteHive Entertainment는 환경 친화적인 기술 개발에 집중하고 있습니다. 지속 가능한 미래를 위해 친환경 기술을 연구하고, 이를 통해 사회적 책임을 다하고자 합니다.</p>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="news1.php" tabindex="-1" aria-disabled="true">이전</a>
                </li>
                <li class="page-item"><a class="page-link" href="news1.php">1</a></li>
                <li class="page-item active"><a class="page-link" href="news2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="news3.php">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="news3.php">다음</a>
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