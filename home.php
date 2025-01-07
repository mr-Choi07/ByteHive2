<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ByteHive</title>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Doto:wght@100..900&family=Orbit&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* 비디오 섹션 크기 및 라운드 */
        .video-section {
            height: 100vh;
            border-radius: 20px;
            overflow: hidden;
        }

        /* 캐러셀 섹션 크기 및 라운드 */
        .carousel-section {
            height: 100vh;
            border-radius: 20px;
            overflow: hidden;
        }

        /* 비디오 및 캐러셀을 나란히 배치 */
        .video-carousel-row {
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 100vh;
        }

        .video-section {
            flex: 8; /* 비디오 섹션의 80% */
        }

        .carousel-section {
            flex: 2; /* 캐러셀 섹션의 20% */
        }

        /* 아이콘 위치 조정 */
        .icon-adjust {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .icon-adjust i {
            font-size: 2rem;
            color: white;
        }
    </style>
</head>
<body>
    <?php include "inc_header.php" ?>
    
    <div class="container-fluid p-0">
        <div class="video-carousel-row">
            <!-- 비디오 섹션 -->
            <div class="video-section position-relative">
                <video autoplay muted loop class="w-100 h-80x object-fit-cover">
                    <source src="https://t1.kakaocdn.net/kakaocorp/kakaocorp/admin/heroVisual/9b2e2582019300001.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                
                <div class="position-absolute ms-4 mt-4 text-white" style="top: 50px; left: 50px;">
                    <h3 class="fw-bold" style="font-size: 2.5rem;">
                        <span>시니어를 디지털 일상으로</span>
                        <p class="mb-0"><span>더 가깝게, ByteHive</span></p>
                    </h3>
                </div>
            </div>

            <!-- 캐러셀 섹션 -->
            <div class="carousel-section d-flex align-items-end">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="history.php">
                                <img src="https://t1.kakaocdn.net/thumb/C570x328.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fwidget%2F34daf24d018d00001.gif" 
                                     class="d-block" 
                                     style="width: 100%; height: 200px; object-fit: cover;"
                                     alt="회사 연혁">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;">회사 연혁</h5>
                                    <p style="color: black;">ByteHive의 발자취를 소개합니다.</p>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="introduce.php">
                                <img src="https://t1.kakaocdn.net/thumb/C80x80.fwebp.q100/?fname=https%3A%2F%2Ft1.kakaocdn.net%2Fkakaocorp%2Fkakaocorp%2Fadmin%2Fwidget%2Fc9200ae4018c00001.png" 
                                     class="d-block" 
                                     style="width: 100%; height: 200px; object-fit: contain;"
                                     alt="회사 소개">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black;">회사 소개</h5>
                                    <p style="color: black;">ByteHive를 소개합니다.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php include "inc_footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
