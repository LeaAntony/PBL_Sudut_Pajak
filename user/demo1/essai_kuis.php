<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Soal Essai | Sudut Pajak</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .div-1 {
            display: flex;
            align-items: center;
            margin-top: 60px;
            margin-bottom: 45px;
            margin-right: 10px;
        }

        .block {
            display: block;
            height: 50px;
            width: 8px;
            margin-right: 5px;
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }

        .btn-container {
            margin-top: 50px;
            margin-left: 150px;
        }

        .btn-simpan {
            background: linear-gradient(41deg, #09c778, #01a0f9);
            padding: 8px 15px 8px 15px;
            color: white;
            border: none;
        }
    </style>
</head>

<body>
    <?php include './layout/sidebar.php'; ?>
    <!-- Konten Soal Kuis Essai Dimulai -->
    <div class="container" style="overflow-y: auto;">
        <div class="mt-2 ml-4 p-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="div-1">
                        <div class="block"></div>
                        <h2><strong>Kuis PPh 21: Perhitungan PPh 21</strong></h2>
                    </div>
                </div>
            </div>
            <h2>Tambah Soal Essai</h2>
            <form action="" method="POST">
                <p>
                    <label>Soal</label><br>
                    <textarea cols="50" rows="6" name="deskripsi" required></textarea>
                </p>
                <div class="btn-container">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-simpan">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Konten Soal Kuis Essai Berakhir -->
    <?php include './layout/footer.php'; ?>

</body>

</html>