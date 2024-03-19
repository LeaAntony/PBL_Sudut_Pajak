<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pembelajaran PPh</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <style>
        /* Custom CSS untuk mengatur tinggi kartu */
        .single-about {
            height: 300px;
        }

        .single-about>p {
            color: black;
        }
    </style>
</head>

<body>
    <?php

    session_start();
    // include './connection.php';
    ?>
    <!-- Header Section Start-->
    <?php include 'konsultasi/navbar4.php'; ?>
    <!-- Header Menu End -->

    <!-- Breadcrumbs Start -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="images/bg.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Pembelajaran PPh</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li>Pembelajaran PPh</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Privacy Policy Start -->
    <div class="neuron-about gray-bg pt-90 pb-100 md-pt-70 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-45">
                <h2 class="title extra-none title-color mb-0">Layanan Kami</h2>
            </div>
            <div class="row col-20 d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 mb-40">
                    <a href="artikel_pembelajaran.php">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Artikel Pembelajaran PPh</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Artikel pembelajaran PPh berisi panduan praktis dan mendalam tentang konsep dasar, aturan, serta strategi optimalisasi pajak penghasilan untuk individu dan bisnis.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <a href="video_pembelajaran.php">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Video Pembelajaran PPh</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Video pembelajaran PPh memberikan panduan komprehensif tentang konsep dasar, aturan, dan strategi efektif untuk mengelola pajak penghasilan.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <a href="infografis_pembelajaran.php">
                        <div class="single-about style4 box-shadow">
                            <div class="about-title">
                                <h2 class="title">Infografis Pembelajaran PPh</h2>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Infografis pembelajaran PPh memberikan gambaran ringkas dan informatif tentang konsep dasar, aturan, serta tips dan trik untuk mengelola pajak penghasilan dengan lebih efektif</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><!-- .container end -->
    </div>

    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>