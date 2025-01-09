<!DOCTYPE html>
<html lang="ko">
<head>
    <!-- 문자 인코딩 설정 및 뷰포트 설정 -->
    <meta charset="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- 페이지 제목 설정 -->
    <title>솔루션 상세 페이지</title>
    
    <!-- Bootstrap 5 CSS 로드 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- 헤더 부분, 공통 헤더를 PHP 파일로 포함 -->
    <?php include "inc_header.php";?>
    
    <!-- 페이지 제목과 설명이 들어있는 상단 배너 -->
    <header class="text-center py-4">
        <div class="container">
            <!-- 페이지 주요 제목 -->
            <h1 class="display-5 text-dark">IT 솔루션 상세 페이지</h1>
            <!-- 페이지 부제목 (설명) -->
            <p class="lead text-dark">우리의 혁신적인 솔루션을 통해 비즈니스를 성장시키세요.</p>
        </div>
    </header>

    <!-- 솔루션 정보가 들어갈 본문 영역 -->
    <div class="container my-5">
        <div class="row">
            <!-- 첫 번째 솔루션 카드: AI 기반 데이터 분석 솔루션 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <!-- 이미지 -->
                    <img src="https://via.placeholder.com/500x300.png?text=AI+Solution" class="card-img-top img-fluid" alt="AI 기반 데이터 분석 솔루션">
                    <div class="card-body">
                        <!-- 카드 제목 -->
                        <h5 class="card-title">AI 기반 데이터 분석 솔루션</h5>
                        <!-- 카드 설명 -->
                        <p class="card-text">우리의 AI 기반 데이터 분석 솔루션은 기업이 데이터를 효과적으로 관리하고 분석할 수 있도록 지원합니다. 이 솔루션은 실시간 데이터 처리와 고급 분석 기능을 제공하여 비즈니스 인사이트를 극대화합니다.</p>
                        <!-- 자세히 보기 버튼 -->
                        <a href="#" class="btn btn-primary">자세히 보기</a>
                    </div>
                </div>
            </div>
            
            <!-- 두 번째 솔루션 카드: 클라우드 통합 관리 플랫폼 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <!-- 이미지 -->
                    <img src="https://via.placeholder.com/500x300.png?text=Cloud+Platform" class="card-img-top img-fluid" alt="클라우드 통합 관리 플랫폼">
                    <div class="card-body">
                        <!-- 카드 제목 -->
                        <h5 class="card-title">클라우드 통합 관리 플랫폼</h5>
                        <!-- 카드 설명 -->
                        <p class="card-text">클라우드 통합 관리 플랫폼은 다양한 클라우드 서비스를 하나의 인터페이스에서 관리할 수 있도록 도와줍니다. 이를 통해 운영 효율성을 높이고, 비용을 절감할 수 있습니다.</p>
                        <!-- 자세히 보기 버튼 -->
                        <a href="#" class="btn btn-primary">자세히 보기</a>
                    </div>
                </div>
            </div>
            
            <!-- 세 번째 솔루션 카드: 보안 강화 솔루션 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <!-- 이미지 -->
                    <img src="https://via.placeholder.com/500x300.png?text=Security+Solution" class="card-img-top img-fluid" alt="보안 강화 솔루션">
                    <div class="card-body">
                        <!-- 카드 제목 -->
                        <h5 class="card-title">보안 강화 솔루션</h5>
                        <!-- 카드 설명 -->
                        <p class="card-text">보안 강화 솔루션은 기업의 IT 인프라를 보호하고, 데이터 유출을 방지하는 데 중점을 둡니다. 최신 보안 기술을 적용하여 안전한 비즈니스 환경을 제공합니다.</p>
                        <!-- 자세히 보기 버튼 -->
                        <a href="#" class="btn btn-primary">자세히 보기</a>
                    </div>
                </div>
            </div>
            
            <!-- 네 번째 솔루션 카드: 고객 맞춤형 서비스 -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <!-- 이미지 -->
                    <img src="https://via.placeholder.com/500x300.png?text=Custom+Service" class="card-img-top img-fluid" alt="고객 맞춤형 서비스">
                    <div class="card-body">
                        <!-- 카드 제목 -->
                        <h5 class="card-title">고객 맞춤형 서비스</h5>
                        <!-- 카드 설명 -->
                        <p class="card-text">고객의 요구에 맞춘 맞춤형 서비스를 제공하여, 비즈니스 목표를 달성하는 데 필요한 최적의 지원을 제공합니다. 고객의 성공을 최우선으로 생각합니다.</p>
                        <!-- 자세히 보기 버튼 -->
                        <a href="#" class="btn btn-primary">자세히 보기</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- 푸터 부분, 공통 푸터를 PHP 파일로 포함 -->
    <?php include "inc_footer.php";?>

    <!-- jQuery 및 Bootstrap JS 파일 로드 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
