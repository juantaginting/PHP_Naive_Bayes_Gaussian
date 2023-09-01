<?php include 'header.php' ?>

<!-- content -->
<div class="content">
	<div class="container">
		<div class="box">
			<div class="box-header">
				Tambah Pengguna
			</div>
			<div class="box-body">
				<form action="" method="POST">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required>
					</div>

					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" placeholder="Username" class="input-control" required>
					</div>

					<div class="form-group">
						<label>Level</label>
						<select name="level" class="input-control" required>
							<option value="">Pilih</option>
							<option value="Super Admin">Super Admin</option>
							<option value="Admin">Admin</option>
						</select>
					</div>

					<button type="button" class="btn" onclick="window.location = 'Pengguna.php'">Kembali</button>
					<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
				</form>

				<?php
				if (isset($_POST['submit'])) {
					$nama_pengguna = addslashes(ucwords($_POST['nama']));
					$user = addslashes($_POST['user']);
					$level = $_POST['level'];
					$pass = '123456';

					$cek = mysqli_query($conn, "SELECT username FROM pengguna WHERE username = '".$user."'");
					if (mysqli_num_rows($cek) > 0) {
						echo '<div class="alert alert-error">Username Telah Digunakan</div>';
					} else {
						$simpan1 = mysqli_query($conn, "INSERT INTO pengguna (nama_pengguna, username, password, level) VALUES (
							'".$nama_pengguna."',
							'".$user."',
							'".md5($pass)."',
							'".$level."'
						)");

						$simpan2 = mysqli_query($conn, "INSERT INTO pengguna_data_training (nama_pengguna,id) VALUES (
							'".$nama_pengguna."',
							'".$id."',
							
						)");

						if ($simpan1) {
							echo '<div class="alert alert-success">Simpan1 berhasil</div>';
						} else {
							echo 'Gagal menyimpan: ' . mysqli_error($conn);
						}
					}
				}
				?>

			</div>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>
