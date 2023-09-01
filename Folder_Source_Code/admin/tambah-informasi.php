<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">
			<div class="container">
				<div class="box">
				<div class="box-header">
				tambah-informasi</div>
				<div class="box-body">

					<form action="" method="POST" enctype="multipart/form-data">  
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" placeholder=" Judul" class="input-control" required>
						</div>

						<div class="form-group">
							<label>keterangan</label>
							<textarea name="keterangan" class="input-control" placeholder="Keterangan" id="keterangan"></textarea>
						</div>

						<div class="form-group">
							<label>Gambar</label>
							<input type="file" name="gambar" class="input-control" required>
						</div>
						<button type="button" class="btn" onclick="window.location = 'informasi.php'">Kembali</button>

						<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
					</form>

					<?php 
						if (isset($_POST['submit'])) {

							//print_r($_FILES['gambar']);

							$judul	= addslashes( ucwords($_POST['judul'])); // menampung nama
							$ket	= addslashes($_POST['keterangan']); // menampung keterangan

							$filename 	=$_FILES['gambar']['name'];
							$tmpname 	=$_FILES['gambar']['tmp_name'];
							$filesize 	=$_FILES['gambar']['size'];

							$formatfile = pathinfo($filename,PATHINFO_EXTENSION);
							$rename		= 'informasi'.time().'.'.$formatfile;

							$allowtype	= array('png','jpg','jpeg','gif');  // menentukan format file yang boleh diupload

							if(!in_array($formatfile, $allowtype)) {
								echo '<div class="alert alert-error">Format File Tidak Diizinkan</div>';

							
							}elseif ($filesize > 5000000) {
								echo '<div class="alert alert-error">Ukuran file tidak boleh lebih besar dari 5 MB</div>';
								
							}else{

								move_uploaded_file($tmpname,"../uploads/informasi/".$rename );


								$simpan = mysqli_query($conn, "INSERT INTO informasi VALUES (
									null,
									'".$judul."',
									'".$ket."',
									'".$rename."',
									null,
									null,
                                    '".$_SESSION['uid']."'

						)");
						

							if ($simpan) {
								echo '<div class ="alert alert-success"> simpan berhasil</div>';
							}else{
								echo 'gagal menyimpan'.mysqli_error($conn);
							}

						}
							}

					 ?>
					
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php' ?>
	