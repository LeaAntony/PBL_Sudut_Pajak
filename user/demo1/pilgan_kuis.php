<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Soal Pilihan Ganda | Sudut Pajak</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            overflow-y: auto;
        }

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
            margin-left: 180px;
        }

        #jawaban td input[type="radio"] {
            margin-left: 15px;
        }

        #btn-tambah td button[type="button"] {
            background: linear-gradient(41deg, #09c778, #01a0f9);
            padding: 8px 15px 8px 15px;
            color: white;
            border: none;
        }

        .btn-simpan {
            background: linear-gradient(41deg, #09c778, #01a0f9);
            padding: 8px 15px 8px 15px;
            width: 130px;
            color: white;
            border: none;
        }

        .btn-silang {
            background: linear-gradient(41deg, #09c778, #01a0f9);
            padding: 8px 15px 8px 15px;
            color: white;
            border: none;
        }

        .font {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <?php include './layout/sidebar.php'; ?>
    <!-- Konten Soal Kuis Pilgan Dimulai -->
    <div class="container">
        <div class="mt-2 ml-4 p-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="div-1">
                        <div class="block"></div>
                        <h2><strong>Kuis PPh 21: Perhitungan PPh 21</strong></h2>
                    </div>
                </div>
            </div>
            <h2>Tambah Soal Pilihan Ganda</h2>
            <form action="" method="POST">
                <p>
                    <label>Soal</label><br>
                    <textarea cols="50" rows="6" name="deskripsi" required></textarea>
                </p>
                <p>
                    <label>Skor</label><br>
                    <input type="number" name="skor" required>
                </p>
                <div>
                    <strong>Jawaban</strong>
                    <table>
                        <thead>
                            <tr>
                                <td>Deskripsi</td>
                                <td>Benar</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody id="jawaban">
                            <tr>
                                <td><input type="text" name="jawaban[1]" required></td>
                                <td><input type="radio" name="benar" value="1" required></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="jawaban[2]" required></td>
                                <td><input type="radio" name="benar" value="2"></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot id="btn-tambah">
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button type="button" onclick="tambah()"><i class="fas fa-plus"></i></button></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="btn-container">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-simpan"><span class="font">Simpan</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Konten Soal Kuis Pilgan Berakhir -->
    <?php include './layout/footer.php'; ?>

    <!-- JS -->
    <script>
        let jumlah = 2;

        function tambah() {
            jumlah++;
            let content = '<td><input type="text" name="jawaban[' + jumlah + ']" required/></td>' +
                '<td><input type="radio" name="benar" value="' + jumlah + '" required/></td>' +
                '<td><button type="button" class="btn-silang" onclick="hapus(' + jumlah +
                ')"><i class="fas fa-times"></i></button></td>';

            const tr = document.createElement('tr');
            tr.innerHTML = content;
            tr.setAttribute('id', 'jawaban-' + jumlah);
            document.getElementById('jawaban').append(tr);
        }

        function hapus(id) {
            document.getElementById('jawaban-' + id).remove();
        }
    </script>
</body>

</html>