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
            <div class="row col-20 d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://indonesiafashionweek.id/wp-content/uploads/2020/11/123553863_3453752961370211_3707274402065282295_n.jpg" alt="" style="max-height: 20rem;">
                        <article>
                            <h1 style="text-align: left;">Pengaruh Pajak Penghasilan (PPh) terhadap Cash Flow UMKM dalam Industri Fashion</h1><br>
                            <?php
                                $artikel1 = "Pajak Penghasilan (PPh) merupakan kewajiban yang tak terhindarkan bagi Usaha Mikro, Kecil, dan Menengah (UMKM) di industri fashion. Bagaimana PPh memengaruhi aliran kas (cash flow) merupakan perhatian serius bagi para pelaku usaha ini. Dalam industri fashion yang dinamis, setiap penerimaan dan pengeluaran memiliki dampak signifikan terhadap kelangsungan bisnis. PPh menjadi salah satu faktor yang dapat mengganggu keseimbangan aliran kas, terutama jika tidak dikelola dengan bijak.";
                            ?>
                            <p style="text-align: justify;"><?= substr($artikel1, 0, 180) ?> <a href="detail_artikel_pembelajaran.php">baca selengkapnya</a></p>
                            <ul class="blog-meta">
                                <li style="margin-right: 50px; color: #01a0f9; width:250px"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 15 Maret 2024 <i class="fa fa-user-o" aria-hidden="true"></i> Admin</li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://ik.imagekit.io/zwip3gy73r/ewz-indibiz-pub-prod/article/images/large/c2644c2addcd645a8e34a97b006b8a08969bd727550a7c6922c878c796d53fa4.webp" alt="" style="max-height: 20rem;">
                        <article>
                            <h1 style="text-align: left;">Strategi Efektif Manajemen Pajak Penghasilan (PPh) untuk Toko Retail</h1><br>
                            <?php
                                $artikel2 = "Pajak Penghasilan (PPh) merupakan bagian tak terpisahkan dari operasional toko retail. Dalam menjalankan bisnisnya, pemilik toko harus memahami dengan baik aturan PPh yang berlaku. Ini melibatkan pengetahuan tentang tarif pajak yang diterapkan, jenis-jenis penghasilan yang dikenai pajak, serta kewajiban terkait pelaporan dan pembayaran pajak secara berkala. Manajemen keuangan yang efisien menjadi kunci utama dalam mengelola PPh bagi toko
                                retail.";
                            ?>
                            <p style="text-align: justify;"><?= substr($artikel2, 0, 180) ?> <a href="detail_berita.php">baca selengkapnya</a></p>
                            <ul class="blog-meta">
                                <li style="margin-right: 50px; color: #01a0f9; width:250px"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 01 Februari 2024 <i class="fa fa-user-o" aria-hidden="true"></i> Admin</li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://www.online-pajak.com/wp-content/uploads/2023/01/Tata_Cara_Pembayaran_Pajak_Penghasilan.jpg" alt="" style="height: 20rem;">
                        <article>
                            <h1 style="text-align: left;">Batas Waktu Pembayaran Pajak Penghasilan</h1><br>
                            <?php
                                $artikel3 = "Berdasarkan jenis pajak penghasilannya, pembayaran pajak memiliki perbedaan antara satu dengan yang lainnya, khususnya dalam hal batas waktu tanggal pembayarannya.

                                Untuk PPh Pasal 4 ayat (2), PPh Pasal 15, PPh Pasal 21, PPh Pasal 23 dan PPh Pasal 26 yang dipotong oleh pemotong Pajak Penghasilan (PPh), harus disetor paling lama tanggal 10 bulan berikutnya setelah masa pajak berakhir.
                                
                                Sedangkan PPh Pasal 4 ayat (2) dan PPh Pasal 15 yang harus dibayar sendiri oleh wajib pajak, serta PPh Pasal 25 harus dibayar paling lama tanggal 15 bulan berikutnya setelah masa pajak berakhir.
                                
                                Untuk peraturan selengkapnya mengenai batas waktu tanggal pembayaran dapat dilihat pada Peraturan Menteri Keuangan (PMK) Nomor 80/PMK.03/2010, sebagaimana statusnya telah dicabut dan diganti dengan peraturan terbaru PMK No. 242/PMK.03/2014.";
                            ?>
                            <p style="text-align: justify;"><?= substr($artikel3, 0, 180) ?> <a href="detail_berita.php">baca selengkapnya</a></p>
                            <ul class="blog-meta">
                                <li style="margin-right: 50px; color: #01a0f9; width:250px"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 18 januari 2024 <i class="fa fa-user-o" aria-hidden="true"></i> Admin</li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="card2">
                        <img class="thumb" src="https://www.pajakku.com/_next/image?url=https%3A%2F%2Fstatic.pajakku.com%2Fportal%2Fportal%2Fstatic%2Fimages%2Fe9f10bbce4fee4594e5189a7b6be0749&w=1080&q=100" alt="" style="height: 20rem;">
                        <article>
                            <h1 style="text-align: left;">Penyetoran dan Pelaporan Pajak Penghasilan (PPh) Pasal 21</h1><br>
                            <?php
                                $artikel4 = "Guna memenuhi pengeluaran yang digunakan untuk terlaksananya pembangunan negara, pembayaran pajak digunakan untuk memenuhi kebutuhan negara guna mewujudkan pembangunan nasional, maka diperlukannya kesadaran masyarakat Indonesia dan juga memahami tentang perpajakan yang ada di Indonesia.

                                Peranan pajak dalam Anggaran Pendapatan dan Belanja Negara, sangat besar per tahunnya, hingga mencapai setengah bagian yang didapatkan negara dari keseluruhan, karena masyarakat Indonesia sangat berperan besar terhadap sistem perpajakan yang ada di Indonesia. Sebagai seorang Wajib Pajak dalam negeri maupun Wajib Pajak dalam negeri yang mempunyai penghasilan diluar negeri yang baik, akan melakukan penyetoran pajak tepat pada waktu dan sesuai peraturan yang sudah ditetapkan. Didalam hal ini tidak hanya saja dalam melakukan pemenuhan pembayaran pajak sesuai dengan ketentuan yang ada, yang sudah ditetapkan oleh Direktorat Jenderal Pajak.";
                            ?>
                            <p style="text-align: justify;"><?= substr($artikel4, 0, 180) ?> <a href="detail_berita.php">baca selengkapnya</a></p>
                            <ul class="blog-meta">
                                <li style="margin-right: 50px; color: #01a0f9; width:250px"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> 20 Juli 2023 <i class="fa fa-user-o" aria-hidden="true"></i> Admin</li>
                            </ul>
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