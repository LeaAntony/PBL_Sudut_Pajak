<!DOCTYPE html>
<html lang="en">

<head>
	<title>Jenis Soal | Sudut Pajak</title>
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

		.form-label {
			margin-top: 20px;
			margin-left: 20px;
		}

		.jenis {
			color: white;
		}

		.btn {
			background: linear-gradient(41deg, #09c778, #01a0f9);
		}
	</style>

</head>

<body>
	<?php include './layout/sidebar.php'; ?>
	<!-- Konten Jenis Soal Kuis Dimulai-->
	<div class="container">
		<div class="mt-2 ml-4 p-5">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="div-1">
						<div class="block"></div>
						<h2><strong>Kuis PPh 21: Perhitungan PPh 21</strong></h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-check mt-5 text-center">
						<h3 class="form-label">Jenis Soal</h3>
						<div class="d-flex justify-content-between mt-3">
							<a href="pilgan_kuis.php" class="btn"><span class="jenis">Pilihan Ganda<span></a>
							<a href="essai_kuis.php" class="btn"><span class="jenis">Essai</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Konten Jenis Soal Kuis Berakhir -->
	<?php include './layout/footer.php'; ?>

</body>

</html>