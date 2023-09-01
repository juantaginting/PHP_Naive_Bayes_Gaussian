<?php include 'header.php' ?>

<?php 
	date_default_timezone_set("Asia/jakarta");
	$jurusan = mysqli_query($conn, "SELECT * fROM data_training WHERE id_data = '".$_GET['id_data']."'");

	if(mysqli_num_rows($jurusan) == 0) {
		echo "<script>window.location='pengguna.php'</script";
	}
		 $p = mysqli_fetch_object($jurusan);
?>
		<!-- content -->
		<div class="content">
			<div class="container">
				<div class="box">
				<div class="box-header">
				Edit Data Training</div>
				<div class="box-body">

					<form action="" method="POST" enctype="multipart/form-data">  
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" placeholder=" Nama Jurusan"  value="<?=$p->nama ?>" class="input-control" required>
						</div>
                        <div class="form-group">
							<label>Matematika</label>
							<input type="number" name="matematika" placeholder=" Nilai Matematika"  value="<?=$p->matematika ?>" class="input-control" required>
						</div>
                        <div class="form-group">
							<label>Ipa</label>
							<input type="number" name="ipa" placeholder=" Nilai Ipa"  value="<?=$p->ipa ?>" class="input-control" required>
						</div>
                        <div class="form-group">
							<label>Ips</label>
							<input type="number" name="ips" placeholder=" Nilai ips"  value="<?=$p->ips ?>" class="input-control" required>
						</div>
                        <div class="form-group">
							<label>Pkn</label>
							<input type="number" name="pkn" placeholder=" Nilai pkn"  value="<?=$p->pkn ?>" class="input-control" required>
						</div>
                        <div class="form-group">
							<label>Indo</label>
							<input type="number" name="indo" placeholder=" Nilai indo"  value="<?=$p->indo ?>" class="input-control" required>
						</div>
                        <div class="form-group">
							<label>agama</label>
							<input type="number" name="agama" placeholder=" Nilai agama"  value="<?=$p->agama ?>" class="input-control" required>
						</div>
                        <div class="form-group">
							<label>mulok</label>
							<input type="number" name="muatan_lokal" placeholder=" Nilai mulok"  value="<?=$p->muatan_lokal ?>" class="input-control" required>
						</div>

                        <div class="form-group">
							<label>Level</label>
							<select name="status" class="input-control" required>
								<option value="">Pilih</option>
								<option value="Negeri" <?= ($p->status == 'Negeri')? 'selected':' '; ?>>Negeri</option>
								<option value="Swasta" <?= ($p->status == 'Swasta')? 'selected':''; ?>>Swasta</option>	
							</select>
						</div>
						<button type="button" class="btn" onclick="window.location = 'data_training.php'">Kembali</button>

						<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
					</form>

					<?php 
						if (isset($_POST['submit'])) {

							$nama	= addslashes( ucwords($_POST['nama'])); // menampung nama
							$matematika	= $_POST['matematika']; // menampung keterangan
							$ipa	= $_POST['ipa']; // menampung ipa
							$ips	= $_POST['ips']; // menampung ips
							$pkn	= $_POST['pkn']; // menampung pkn
							$indo	= $_POST['indo']; // menampung indo
							$agama	= $_POST['agama']; // menampung agama
							$muatan_lokal	= $_POST['muatan_lokal']; // menampung mulok
							$status = $_POST['status'];	// status
							

							// query untuk meng update data
							
							$update = mysqli_query($conn, "UPDATE data_training SET 
									nama = '".$nama."',
									matematika = '".$matematika."',
									ipa = '".$ipa."',	
									ips = '".$ips."',	
									pkn = '".$pkn."',	
									indo = '".$indo."',	
									agama = '".$agama."',	
									muatan_lokal = '".$muatan_lokal."',	
									status = '".$status."'	
									WHERE id_data = '".$_GET['id_data']."'
							");
							

							if ($update) {
								echo "<script>window.location='data_training.php?success=Edit Data Berhasil'</script>";
							}else{
								echo 'gagal edit'.mysqli_error($conn);
							}
						}

						?>

				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php' ?>
	