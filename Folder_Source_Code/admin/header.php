<?php
session_start();
include '../koneksi.php';
	if (!isset($_SESSION['status_login'])) {
		echo "<script>window.location = '..//login.php?msg=Harap Login terlebih dahulu!'</script>";
	}
	date_default_timezone_set("Asia/jakarta");
  ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - Nama Sekolah</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
	 integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

	 <script>
      tinymce.init({
        selector: '#keterangan'
      });
    </script>
</head>
<body class="bg-light">

	<!-- navbar -->
	<div class="navbar">
		
		<div class="container">
			
			<!-- navbar brand -->
			<h2 class="nav-brand float-left"><a href="index.php"> SD Tambang Timah</a></h2>

			<!-- navbar menu-->
			<ul class="nav-menu float-left">
				<li><a href="index.php">Dasboard</a></li>
					<?php if($_SESSION['ulevel'] == 'Super Admin') { ?>

				<li><a href="pengguna.php">Pengguna</a></li>
				
				<?php  }elseif ($_SESSION['ulevel'] == 'Admin') {?>
				<li><a href="data_training.php">Naive Bayes</a></li>
				<li>
					<a href="">Probabilitas <i class="fa fa-caret-down"></i></a>

					<!-- sub menu -->
					<ul class="dropdown">
						<li><a href="probabilitas_negeri.php">Probabilitas Negeri</a></li>
						<li><a href="probabilitas_swasta.php">Probabilitas Swasta</a></li>
						<li><a href="hasil_prediksi.php">Hasil Prediksi</a></li>
					</ul>
				</li>
				<li>
					<a href="">Informasi Tambahan <i class="fa fa-caret-down"></i></a>

					<!-- sub menu -->
					<ul class="dropdown">
						<li><a href="Galeri.php">Galeri</a></li>
						<li><a href="informasi.php">Informasi</a></li>
					</ul>
				</li>
			<?php } ?>
				<li>
					<a href="#"><?= $_SESSION['uname'] ?>   (<?= $_SESSION['ulevel'] ?>)<i class="fa fa-caret-down"></i></a>

					<!-- sub menu-->
				<ul class="dropdown">
					<li><a href="ubah-password.php">Ubah Password</a></li>
					<li><a href="logout.php">Keluar</a></li>
			</ul>
		</li>
	</ul>

	<div class="clearfix"></div>
		</div>
	</div>