<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kuis</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
.quiz-box {
    border: 1px solid #ccc;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px; /* Mengatur sudut melengkung */
    overflow: hidden; /* Memastikan gambar tidak melintasi sudut yang melengkung */
    width: 600px; /* Menetapkan lebar kotak */
    height: 250px; /* Menetapkan tinggi kotak */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan di belakang kotak */
}

.quiz-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
}

.quiz-logo {
    width: 50px; /* Sesuaikan ukuran logo sesuai kebutuhan */
    height: auto;
    margin-right: 10px;
}
.quiz-button {
    position: absolute; /* Menetapkan posisi absolut untuk tombol */
    bottom: 40px; /* Menetapkan jarak dari bawah */
    right: 80px; /* Menetapkan jarak dari kanan */
    padding: 5px 10px; /* Menetapkan padding tombol */
    font-size: 14px; /* Menetapkan ukuran font tombol */    
}
.quiz-button1 {
    position: absolute; /* Menetapkan posisi absolut untuk tombol */
    bottom: 40px; /* Menetapkan jarak dari bawah */
    right: 100px; /* Menetapkan jarak dari kanan */
    padding: 5px 10px; /* Menetapkan padding tombol */
    font-size: 14px; /* Menetapkan ukuran font tombol */
}

    </style>
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
                        <h1 class="breadcrumbs-title mb-17">Kuis</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-house"></i>PPH 21</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 style="color:#276392;">Kuis Yang Tersedia</h2>
            </div>
        </div>
        <div class="container">
    <div class="row">
        <div class="col-md-6"> <!-- Menggunakan setengah kolom untuk kuis pertama -->
            <div class="quiz-box">
                <div class="quiz-header">
                    <img src="img/kuislogo.png" alt="Logo Kuis" class="quiz-logo">
                    <h3>Kuis PPh 21: Tes Pemahaman tentang Pajak Gaji</h3>
                </div>
                <div class="quiz-button">
                    <a href="quiz1_pajak.php" class="btn btn-primary btn-block">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-6"> <!-- Menggunakan setengah kolom untuk kuis kedua -->
            <div class="quiz-box">
                <div class="quiz-header">
                    <img src="img/kuislogo.png" alt="Logo Kuis" class="quiz-logo">
                    <h3>Kuis PPh 21: Tes Pemahaman tentang Pajak Gaji</h3>
                </div>
                <div class="quiz-button">
                    <a href="link_kuis_2" class="btn btn-primary btn-block">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center"> <!-- Menggunakan baris baru dan posisi tengah -->
        <div class="col-md-6"> <!-- Menggunakan setengah kolom untuk kuis ketiga -->
            <div class="quiz-box">
                <div class="quiz-header">
                    <img src="img/kuislogo.png" alt="Logo Kuis" class="quiz-logo">
                    <h3>Kuis PPh 21: Perhitungan PPh 21</h3>
                </div>
                <div class="quiz-button1">
                    <a href="link_kuis_3" class="btn btn-primary btn-block">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</div>
        
    <!-- Privacy Policy End -->
    <?php include './layout/footer.php'; ?>
</body>

</html>
