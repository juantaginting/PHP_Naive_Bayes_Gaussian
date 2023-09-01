<?php include 'header.php' ?>

<?php 
	date_default_timezone_set("Asia/jakarta");
	$informasi = mysqli_query($conn, "SELECT * fROM informasi WHERE id = '".$_GET['id']."'");

	if(mysqli_num_rows($informasi) == 0) {
		echo "<script>window.location='informasi.php'</script";
	}
		 $p = mysqli_fetch_object($informasi);
?>
		<!-- content -->
		<div class="content">
			<div class="container">
				<div class="box">
				<div class="box-header">
				Edit Informasi</div>
				<div class="box-body">

					<form action="" method="POST" enctype="multipart/form-data">  
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" placeholder=" Judul"  value="<?=$p->judul ?>" class="input-control" required>
						</div>

						<div class="form-group">
							<label>keterangan</label>
							<textarea name="keterangan" class="input-control" placeholder="Keterangan" id="keterangan"><?= $p->keterangan ?></textarea>
						</div>

						<div class="form-group">
							<label>Gambar</label>
							<img src="../uploads/informasi/<?= $p->gambar ?>" width="200px" class="image">
							<input type="hidden" name="gambar2" value="<?= $p->gambar ?>">
							<input type="file" name="gambar" class="input-control">
						</div>
						<button type="button" class="btn" onclick="window.location = 'informasi.php'">Kembali</button>

						<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
					</form>

					<?php 
						if (isset($_POST['submit'])) {

							$judul	= addslashes( ucwords($_POST['judul'])); // menampung nama
							$ket	= addslashes($_POST['keterangan']); // menampung keterangan
							$currdate = date('Y-m-d H:i:s');

							
							if($_FILES['gambar']['name'] != '') {

								//echo 'user ganti gambar';


							$nama	= addslashes( ucwords($_POST['nama'])); // menampung nama
							$ket	= addslashes($_POST['keterangan']); // menampung keterangan

							$filename 	=$_FILES['gambar']['name'];
							$tmpname 	=$_FILES['gambar']['tmp_name'];
							$filesize 	=$_FILES['gambar']['size'];

							$formatfile = pathinfo($filename,PATHINFO_EXTENSION);
							$rename		= 'informasi'.time().'.'.$formatfile;

							$allowtype	= array('png','jpg','jpeg','gif');  // menentukan format file yang boleh diupload


							if(!in_array($formatfile, $allowtype)) {
								echo '<div class="alert alert-error">Format File Tidak Diizinkan</div>';

								return false;

							
							}elseif ($filesize > 10000000) {
								echo '<div class="alert alert-error">Ukuran file tidak boleh lebih besar dari 5 MB</div>';

								return false; 
								
							}else{

							if (file_exists("../uploads/informasi/".$_POST['gambar2'])) { // proses ganti gambar lama ke baru
								unlink("../uploads/informasi/".$_POST['gambar2']);
							}
							move_uploaded_file($tmpname,"../uploads/informasi/".$rename );

								}


							}else{
								//echo 'user tidak ganti gambar';

								$rename 	=$_POST['gambar2'];
							}

							$update = mysqli_query($conn, "UPDATE informasi SET 
									judul = '".$judul."',
									keterangan = '".$ket."',
									gambar = '".$rename."',	
									updated_at = '".$currdate."'
									WHERE id = '".$_GET['id']."'
							");
						

						if ($update) {
							echo "<script>window.location='informasi.php?success=Edit Data Berhasil'</script>";
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
	