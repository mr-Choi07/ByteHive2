<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회사 소식 - 페이지 1</title>
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
                    <h2 class="news-title">ByteHive Entertainment, 혁신적인 AI 솔루션 발표</h2>
                    <p class="news-date">2023-10-15</p>
                    <p class="news-content">ByteHive Entertainment는 최근 AI 기술을 활용한 새로운 솔루션을 발표했습니다. 이 솔루션은 클라우드 기반의 서비스로, 기업들이 디지털 혁신을 가속화할 수 있도록 지원합니다. ByteHive는 이 솔루션을 통해 비즈니스 파트너들과의 협력을 강화하고, 새로운 성장 동력을 확보할 계획입니다.</p>
                </div>
                <div class="news-item">
                    <h2 class="news-title">R&D 투자 확대, 기술 고도화 추진</h2>
                    <p class="news-date">2023-11-20</p>
                    <p class="news-content">ByteHive Entertainment는 기술 고도화를 위해 R&D 투자를 대폭 확대하고 있습니다. 이를 통해 급변하는 비즈니스 환경에 최적화된 솔루션을 제공하고, 고객에게 더 나은 가치를 제공할 수 있도록 노력하고 있습니다.</p>
                </div>
                <div class="news-item">
                    <h2 class="news-title">글로벌 파트너십 체결</h2>
                    <p class="news-date">2023-12-05</p>
                    <p class="news-content">ByteHive Entertainment는 글로벌 IT 기업과의 파트너십을 체결하여 국제 시장에서의 입지를 강화하고 있습니다. 이번 파트너십을 통해 ByteHive는 글로벌 고객에게 더 나은 서비스를 제공할 수 있는 기회를 마련했습니다.</p>
                </div>
                <div class="news-item">
                    <h2 class="news-title">신규 클라우드 서비스 출시</h2>
                    <p class="news-date">2024-01-10</p>
                    <p class="news-content">ByteHive Entertainment는 최신 클라우드 기술을 기반으로 한 새로운 서비스를 출시했습니다. 이 서비스는 기업의 데이터 관리와 분석을 혁신적으로 개선하여, 고객의 비즈니스 효율성을 높이는 데 기여할 것입니다.</p>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">이전</a>
                </li>
                <li class="page-item active"><a class="page-link" href="news1.php">1</a></li>
                <li class="page-item"><a class="page-link" href="news2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="news3.php">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="news2.php">다음</a>
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