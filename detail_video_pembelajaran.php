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
                        <h1 class="breadcrumbs-title mb-17">Detail Artikel Pembelajaran PPh</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>Beranda</a></li>
                                <li><a href="pembelajaran.php"><i class="fa fa-house"></i>Pembelajaran PPh</a></li>
                                <li><a href="video_pembelajaran.php"><i class="fa fa-house"></i>Video Pembelajaran PPh</a></li>
                                <li>Detail Artikel Pembelajaran PPh</li>
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
            <div class="row col-20 d-flex justify-content-center">
                <div class="col-lg-12 col-md-12 mb-40">
                    <div class="card2">
                        <article>
                            <a style="font-size: 75px; text-align: right;" href="">
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </a>
                            <iframe style="min-height: 750px;" src="https://www.youtube.com/embed/WRq8IJMqna0?si=G1QM4Own7EnW99M8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </article>
                            <ul class="blog-meta ml-3">
                                <li style="margin-right: 50px; color: #01a0f9; width:250px;">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> 15 Maret 2024
                                    <i class="fa fa-user-o" aria-hidden="true"></i> Admin
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div><!-- .container end -->
    </div>

    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>