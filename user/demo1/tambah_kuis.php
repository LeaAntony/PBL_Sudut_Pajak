<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tambah Kuis | Sudut Pajak</title>
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

		.btn {
			background: linear-gradient(41deg, #09c778, #01a0f9);
		}
	</style>

</head>

<body>
	<?php include './layout/sidebar.php'; ?>
	<!-- Konten Tambah Kuis Dimulai-->
	<div class="container">
		<div class=" mt-2 ml-4 p-5">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="div-1">
						<div class="block"></div>
						<h2><strong>Tambah Kuis</strong></h2>
					</div>
				</div>
			</div>
			<div class="btn-container" type="submit">
				<div class="d-flex justify-content-end">
					<a href="jenis_kuis.php">
						<i class="fas fa-plus-circle"></i><span class="tambah" required>Buat Soal</span>
					</a>
				</div>
			</div>
			<form action="fungsi/fungsi_tambah.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label class="form-label">Judul Kuis</label>
					<input type="text" class="form-control" placeholder="Masukkan judul kuis" name="judul_kuis"
						required>
				</div><br>
				<div class="form-group">
					<label class="form-label">Waktu Pengerjaan</label>
					<input type="number" class="form-control" name="waktu_pengerjaan" required>
					<p class="keterangan">(menit)*</p>
				</div>
				<div class="form-group">
					<label class="form-label">Bobot Soal</label>
					<input type="number" class="form-control" placeholder="Masukkan bobot soal" name="bobot_soal"
						required>
				</div>
			</form>
		</div>
	</div>
	<!-- Konten Tambah Kuis Berakhir -->
	<?php include './layout/footer.php'; ?>

</body>

</html>