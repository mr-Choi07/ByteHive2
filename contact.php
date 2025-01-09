<!DOCTYPE html>
<html lang="ko">
<head>
    <!-- 메타 정보 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ByteHive - 문의하기</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <!-- 공통 헤더 파일 포함 -->
    <?php include "inc_header.php" ?>

    <!-- 페이지 메인 컨텐츠 -->
    <div class="container py-5">
        <!-- 페이지 제목 -->
        <h1 class="text-center mb-5">문의하기</h1>
        
        <div class="row">
            <!-- 왼쪽: 문의 양식 -->
            <div class="col-lg-7 mb-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title h4 mb-4">문의 양식</h2>
                        <form id="contactForm" action="contact_process.php" method="POST">
                            <!-- 이름 입력 -->
                            <div class="mb-3">
                                <label for="name" class="form-label">이름 *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            
                            <!-- 회사명 입력 -->
                            <div class="mb-3">
                                <label for="company" class="form-label">회사명</label>
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                            
                            <!-- 이메일 입력 -->
                            <div class="mb-3">
                                <label for="email" class="form-label">이메일 *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <!-- 연락처 입력 -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">연락처 *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            
                            <!-- 문의 유형 선택 -->
                            <div class="mb-3">
                                <label for="category" class="form-label">문의 유형 *</label>
                                <select class="form-select" id="category" name="category" required>
                                    <option value="">선택해주세요</option>
                                    <option value="service">서비스 문의</option>
                                    <option value="business">사업 제휴</option>
                                    <option value="recruit">채용 문의</option>
                                    <option value="other">기타 문의</option>
                                </select>
                            </div>
                            
                            <!-- 문의 내용 입력 -->
                            <div class="mb-3">
                                <label for="message" class="form-label">문의 내용 *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            
                            <!-- 개인정보 수집 동의 -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="privacy" required>
                                <label class="form-check-label" for="privacy">
                                    개인정보 수집 및 이용에 동의합니다. *
                                </label>
                            </div>
                            
                            <!-- 제출 버튼 -->
                            <button type="submit" class="btn btn-primary">문의하기</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- 오른쪽: 연락처 정보 및 FAQ -->
            <div class="col-lg-5">
                <!-- 연락처 정보 -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title h4 mb-4">연락처 정보</h2>
                        
                        <div class="mb-4">
                            <h3 class="h5 mb-3">주소</h3>
                            <p class="mb-1">부산광역시 수영구 광안로41번길 7-1 1층</p>
                        </div>

                        <div class="mb-4">
                            <h3 class="h5 mb-3">연락처</h3>
                            <p class="mb-1">전화: 010-2164-5040</p>
                            <p class="mb-1">이메일: chltmdwo2007@naver.com</p>
                        </div>

                        <div class="mb-4">
                            <h3 class="h5 mb-3">근무시간</h3>
                            <p class="mb-1">평일: 09:00 ~ 18:00</p>
                            <p class="mb-1">점심시간: 12:00 ~ 13:00</p>
                            <p class="mb-1">주말 및 공휴일 휴무</p>
                        </div>
                    </div>
                </div>

                <!-- 자주 묻는 질문 -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title h4 mb-4">자주 묻는 질문</h2>
                        
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        서비스 견적은 어떻게 받을 수 있나요?
                                    </button>
                                </h3>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        문의 양식을 통해 상담 신청을 해주시면, 담당자가 검토 후 연락드립니다.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        방문 상담도 가능한가요?
                                    </button>
                                </h3>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        네, 사전 예약 후 방문 상담이 가능합니다. 전화나 이메일로 문의해주세요.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 공통 푸터 파일 포함 -->
    <?php include "inc_footer.php" ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
