<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kategori Perbidang Usaha</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="icons/uicons/css/uicons-regular-rounded.css">
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
                        <h1 class="breadcrumbs-title mb-17">Kuis</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li><a href="layanan.php"><i class="fa fa-house"></i>Layanan</a></li>
                                <li>Kuis</li>
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
                <h2 class="title extra-none title-color mb-0">Kuis Yang Tersedia</h2>
            </div>
            <div class="row col-20 d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 mb-20">
                    <div class="single-about box-shadow">
                        <div class="about-title">
                            <h2 class="row" style="font-size: 20px;">
                                <span class="card-image inline-block col" style="color: #63E6BE;">
                                    <svg class="fill-cyan-500" id="kuis" height="64" viewBox="0 0 24 24" width="64"
                                        xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                        <path
                                            d="m20.389 4.268-2.657-2.657a5.462 5.462 0 0 0 -3.889-1.611h-6.343a5.506 5.506 0 0 0 -5.5 5.5v13a5.506 5.506 0 0 0 5.5 5.5h9a5.506 5.506 0 0 0 5.5-5.5v-10.343a5.464 5.464 0 0 0 -1.611-3.889zm-3.889 16.732h-9a2.5 2.5 0 0 1 -2.5-2.5v-13a2.5 2.5 0 0 1 2.5-2.5h5.5v4a2 2 0 0 0 2 2h4v9.5a2.5 2.5 0 0 1 -2.5 2.5zm.586-9.534a1.5 1.5 0 0 1 -.052 2.12l-3.586 3.414a3.5 3.5 0 0 1 -4.923-.025l-1.525-1.355a1.5 1.5 0 1 1 2-2.24l1.586 1.414a.584.584 0 0 0 .414.206.5.5 0 0 0 .353-.146l3.613-3.44a1.5 1.5 0 0 1 2.12.052z" />
                                    </svg>
                                </span>
                                <div class="col-9">Kuis PPh 21 : Tes Pemahaman Tentang Pajak Gaji</div>
                            </h2>
                        </div>
                        <div class="about-desc text-right" style="margin-top: 120px;">
                            <div class="about-btn">
                                <a class="readon radius" href="/konsultasi">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-20">
                    <div class="single-about box-shadow">
                        <div class="about-title">
                            <h2 class="row" style="font-size: 20px;">
                                <span class="card-image inline-block col">
                                    <svg class="fill-cyan-500" id="kuis" height="64" viewBox="0 0 24 24" width="64"
                                        xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                        <path
                                            d="m20.389 4.268-2.657-2.657a5.462 5.462 0 0 0 -3.889-1.611h-6.343a5.506 5.506 0 0 0 -5.5 5.5v13a5.506 5.506 0 0 0 5.5 5.5h9a5.506 5.506 0 0 0 5.5-5.5v-10.343a5.464 5.464 0 0 0 -1.611-3.889zm-3.889 16.732h-9a2.5 2.5 0 0 1 -2.5-2.5v-13a2.5 2.5 0 0 1 2.5-2.5h5.5v4a2 2 0 0 0 2 2h4v9.5a2.5 2.5 0 0 1 -2.5 2.5zm.586-9.534a1.5 1.5 0 0 1 -.052 2.12l-3.586 3.414a3.5 3.5 0 0 1 -4.923-.025l-1.525-1.355a1.5 1.5 0 1 1 2-2.24l1.586 1.414a.584.584 0 0 0 .414.206.5.5 0 0 0 .353-.146l3.613-3.44a1.5 1.5 0 0 1 2.12.052z" />
                                    </svg>
                                </span>
                                <div class="col-9">Kuis PPh 21 : Perhitungan PPh 21</div>
                            </h2>
                        </div>
                        <div class="about-desc text-right" style="margin-top: 120px;">
                            <div class="about-btn">
                                <a class="readon radius" href="/konsultasi">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container end -->
    </div>

    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>