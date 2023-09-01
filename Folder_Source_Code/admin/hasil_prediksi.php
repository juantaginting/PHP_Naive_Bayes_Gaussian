<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">
			<div class="container">
				<div class="box">
				<div class="teks_header">
					<h2>Hasil Prediksi</h2>
				</div>
				<div class="box-header">
                    <ul class="header_naive">
                            <li><a href="#data_training">Data Training</a></li>
                            <li><a href="klasifikasi_naive.php">Klasifikasi</a></li>
                            <li><a href="tingkat_akurasi.php">Tingkat Akurasi</a></li>
                        
                    </ul>
                </div>
				<div class="box-body">

					<?php 	

						if(isset($_GET['success'])) {
							echo "<div class='alert-success'>".$_GET['success']."</div>";
						}
					?>

					<form action="">
						<div class="input-group">
							<input type="text" name="key" placeholder="Pencarian">
							<button type="submit"><i class="fa fa-search" ></i></button>

							
						</div>
					</form>

					<table class="table">
						<thead>
							
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Total Probabilitas Negeri</th>
								<th>Total Probabilitas Swasta</th>
								<th>Hasil Prediksi</th>
							</tr>
						</thead>

						<tbody>
							
							<?php
							$no =1;


							
								$where = " WHERE 1=1";
								if (isset($_GET['key'])) {
									$where .= " AND nama_siswa LIKE '%".addslashes($_GET['key'])."%'";
								}


							$hasil_prediksi = mysqli_query ($conn, "SELECT * fROM hasil_prediksi $where ORDER BY id_hasil DESC");
								if (mysqli_num_rows($hasil_prediksi) > 0 ) {
								 	while ($p = mysqli_fetch_array ($hasil_prediksi)) {
								 
							 ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $p['nama_siswa'] ?></td>
								<td><?= $p['total_prob_negeri'] ?></td>
								<td><?= $p['total_prob_swasta'] ?></td>
								<td><?= $p['hasil_prediksi'] ?></td>
							</tr>

							<?php }}else {	?>
										<tr>
											<td colspan="5">Data Tidak Ditemukan</td>
										</tr>
										<?php } ?>
						</tbody>
					</table>



				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php' ?>
	 