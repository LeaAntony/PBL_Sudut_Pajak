<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Soal Kuis | Sudut Pajak</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .main-content {
            margin-left: 170px;
            padding: 50px;
            position: relative;
            overflow-y: auto;
        }

        .div-1 {
            display: flex;
            align-items: center;
            margin-top: 40px;
            margin-bottom: 20px;
            margin-right: 10px;
        }

        .btn-container {
            position: absolute;
            top: 180px;
            right: 70px;
            display: flex;
            align-items: center;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 5px;
            color: white;
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }

        .fa-plus-circle {
            margin-right: 5px;
            color: white;
        }

        .tambah {
            color: white;
        }

        .block {
            display: block;
            height: 50px;
            width: 8px;
            margin-right: 5px;
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }

        .table-1 table thead {
            background: linear-gradient(41deg, #09c778, #01a0f9);
            color: white;
            text-align: center;
            padding: 800px;
        }

        .table-1 td.list-soal {
            max-width: 300px;
            text-align: left;
        }

        .kuis-container {
            margin-bottom: 30px;
        }

        .btn-delete, .btn-edit {
            color: white;
            border: none;
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }

        .btn-kirim {
            margin-top: 100px;
            color: white;
            border: none;
            width: 130px;
            background: linear-gradient(41deg, #09c778, #01a0f9);
        }

        .font {
            font-size: 18px;
        }
    </style>

</head>

<body>
    <?php include './layout/sidebar.php'; ?>
    <!-- Konten Daftar Soal Kuis Dimulai -->
    <div class="main-content">
        <div class="mt-2 ml-5 p-2">
            <div class="kuis-container">
                <div class="div-1">
                    <div class="block"></div>
                    <h2><strong>Daftar Soal Kuis</strong></h2>
                </div>
            </div>
            <div class="btn-container">
                <div class="d-flex justify-content-end">
                    <a href="jenis_kuis.php">
                        <i class="fas fa-plus-circle"></i><span class="tambah">Tambah Soal</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="table-1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Soal</th>
                                    <th scope="col">Skor</th>
                                    <th scope="col">Jawaban</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="list-soal">Bagi penerima penghasilan yang tidak memiliki NPWP, dikenakan
                                        pemotongan PPh Pasal 21 dengan tarif lebih tinggi 20% daripada tarif yang
                                        diterapkan terhadap wajib pajak yang memiliki NPWP.</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">
                                        <p style="color: green; margin-top: 30px;">Benar</p>
                                        <p>Salah</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#"><i class="fa fa-edit btn btn-edit"></i></a>
                                        <i class="fa fa-trash btn btn-delete ml-2"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-kirim"><span class="font">Kirim</span></button>
            </div>
        </div>
    </div>

    <!-- Konten Daftar Soal Kuis Berakhir -->
    <?php include './layout/footer.php'; ?>

</body>

</html>