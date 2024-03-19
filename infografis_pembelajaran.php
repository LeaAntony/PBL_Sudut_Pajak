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
                        <h1 class="breadcrumbs-title mb-17">Infografis Pembelajaran PPh</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li><a href="pembelajaran.php"><i class="fa fa-house"></i>Pembelajaran PPh</a></li>
                                <li>Infografis Pembelajaran PPh</li>
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
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img src="https://i.pinimg.com/originals/2c/fd/d7/2cfdd7e07ccf3598e41e0edb27386d45.jpg" data-toggle="modal" data-target="#exampleModal" style="max-height: 50rem;">
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true" style="height: auto; min-width: 700px;">
                            <div class="modal-dialog modal-fullscreen modal-lg" role="document" style="height: auto; min-width: 700px;">
                                <div class="modal-content" style="height: auto; min-width: 700px;">
                                    <div class="modal-header" style="height: auto; min-width: 700px;">
                                        <!-- w-100 class so that header
                                        div covers 100% width of parent div -->
                                        <h5 class="modal-title" id="exampleModalLabel">
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                ×
                                            </span>
                                        </button>
                                    </div>
                                    <!--Modal body with image-->
                                    <div class="modal-body" style="height: auto; min-width: 700px;">
                                        <img src="https://i.pinimg.com/originals/2c/fd/d7/2cfdd7e07ccf3598e41e0edb27386d45.jpg"
                                        style="height: auto; min-width: 700px;">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <article>
                            <h1 style="text-align: left;">Kode Akun dan Kode Jenis Setoran PPajak yang Sering Digunakan</h1><br>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://img.inews.co.id/media/600/files/inews_new/2023/01/07/WhatsApp_Image_2023_01_07_at_1_34_53_PM.jpeg" alt="" style="max-height: 50rem;">
                        <article>
                            <h1 style="text-align: left;">Golongan yang Wajib Bayar Pajak</h1><br>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://pbs.twimg.com/media/ESy-AaUUwAczMUA?format=jpg&name=4096x4096" alt="" style="height: 50rem;">
                        <article>
                            <h1 style="text-align: left;">Cara Hitung Pajak Honor PNS</h1><br>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://cdn.antaranews.com/cache/infografis/1140x2100/2021/02/07/20210207insentif-pajak-2021-01.jpg?quality=80" alt="" style="height: 50rem;">
                        <article>
                            <h1 style="text-align: left;">Perpanjang Insentif Pajak 2021</h1><br>
                        </article>
                    </div>
                </div>
            </div>
        </div><!-- .container end -->
    </div>

    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>