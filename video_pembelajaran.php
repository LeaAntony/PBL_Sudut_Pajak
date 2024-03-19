<!DOCTYPE html>
<html lang="en">

<head>
    <title>Artikel Pembelajaran PPh</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
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
                        <h1 class="breadcrumbs-title mb-17">Artikel Pembelajaran PPh</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li><a href="pembelajaran.php"><i class="fa fa-house"></i>Pembelajaran PPh</a></li>
                                <li>Artikel Pembelajaran PPh</li>
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
            <div class="col-lg-12 col-md-12 mb-40 container-fluid">
                <form class="d-flex about-btn" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn readon radius" type="submit">Search</button>
                </form>
            </div>
            <div class="row col-20 d-flex justify-content-center">
                <a href="detail_video_pembelajaran.php" class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://i.ytimg.com/vi/WRq8IJMqna0/maxresdefault.jpg" alt="" style="max-height: 25rem;">
                        <article>
                            <h1 style="text-align: left;">Pengaruh Pajak Penghasilan (PPh) terhadap Cash Flow UMKM dalam Industri Fashion</h1><br>
                        </article>
                    </div>
                </a>
                <a href="" class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://i.ytimg.com/vi/KctgATrXgPc/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLAF-KS2Urd7vL0-8k3XTCGq691fuw" alt="" style="max-height: 25rem;">
                        <article>
                            <h1 style="text-align: left;">Strategi Efektif Manajemen Pajak Penghasilan (PPh) untuk Toko Retail</h1><br>
                        </article>
                    </div>
                </a>
                <a href="" class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://i.ytimg.com/vi/_LJAJRcVeQg/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDL4ZijlPfgpoKfdv7gWS_yo0U72w" alt="" style="height: 25rem;">
                        <article>
                            <h1 style="text-align: left;">Batas Waktu Pembayaran Pajak Penghasilan</h1><br>
                        </article>
                    </div>
                </a>
                <a href="" class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://i.ytimg.com/vi/PBOKkp8yv90/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDFGX3WHW8nucvnECyaajiMqNYeRA" alt="" style="height: 25rem;">
                        <article>
                            <h1 style="text-align: left;">Penyetoran dan Pelaporan Pajak Penghasilan (PPh) Pasal 21</h1><br>
                        </article>
                    </div>
                </a>
            </div>
        </div><!-- .container end -->
    </div>

    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>