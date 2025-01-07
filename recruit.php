<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ByteHive - 채용정보</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <?php include "inc_header.php" ?>
    
    <div class="container py-5">
        <h1 class="text-center mb-5">인재채용</h1>
        
        <!-- 기업문화 섹션 -->
        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <h2 class="mb-4">ByteHive의 문화</h2>
                <p class="lead mb-5">우리는 혁신적인 기술과 창의적인 아이디어를 존중합니다</p>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h3 class="card-title">자율성</h3>
                        <p class="card-text">자유로운 근무 환경과<br>창의적인 문제 해결을<br>지원합니다</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h3 class="card-title">성장</h3>
                        <p class="card-text">지속적인 학습과<br>개인의 발전을<br>응원합니다</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h3 class="card-title">협력</h3>
                        <p class="card-text">팀워크를 통한<br>시너지 창출을<br>추구합니다</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 채용공고 섹션 -->
        <div class="row mb-5">
            <h2 class="text-center mb-4">채용 공고</h2>
            
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">AI 개발자 (신입/경력)</h3>
                        <p class="text-muted">모집기간: 2024.03.01 ~ 2024.03.31</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4>주요업무</h4>
                                <ul>
                                    <li>AI 모델 개발 및 최적화</li>
                                    <li>데이터 전처리 및 분석</li>
                                    <li>AI 서비스 구현</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>자격요건</h4>
                                <ul>
                                    <li>Python, TensorFlow/PyTorch 사용 가능자</li>
                                    <li>AI/ML 관련 프로젝트 경험</li>
                                    <li>컴퓨터공학 또는 관련 전공자</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">웹 개발자 (경력)</h3>
                        <p class="text-muted">모집기간: 2024.03.01 ~ 2024.03.31</p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4>주요업무</h4>
                                <ul>
                                    <li>웹 서비스 개발 및 유지보수</li>
                                    <li>프론트엔드/백엔드 개발</li>
                                    <li>데이터베이스 설계 및 관리</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>자격요건</h4>
                                <ul>
                                    <li>3년 이상의 웹 개발 경력</li>
                                    <li>PHP, JavaScript 능숙자</li>
                                    <li>MySQL 데이터베이스 경험</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 복리후생 섹션 -->
        <div class="row">
            <h2 class="text-center mb-4">복리후생</h2>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5">근무환경</h3>
                        <ul class="list-unstyled">
                            <li>✓ 유연근무제</li>
                            <li>✓ 재택근무 가능</li>
                            <li>✓ 최신 장비 지원</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5">교육/성장</h3>
                        <ul class="list-unstyled">
                            <li>✓ 교육비 지원</li>
                            <li>✓ 도서구입비 지원</li>
                            <li>✓ 컨퍼런스 참가 지원</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h5">생활지원</h3>
                        <ul class="list-unstyled">
                            <li>✓ 점심식대 지원</li>
                            <li>✓ 야근식대 지원</li>
                            <li>✓ 경조사 지원</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "inc_footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 