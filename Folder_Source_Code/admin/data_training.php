<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">
			<div class="container">
				<div class="box">
				<div class="teks_header">
					<h2>Perhitungan Naive Bayes</h2>
				</div>
				<div class="box-header">
                    <ul class="header_naive">
                            <li><a href="#data_training">Data Training</a></li>
                            <li><a href="klasifikasi_naive.php">Klasifikasi</a></li>
                            <li><a href="tingkat_akurasi.php">Tingkat Akurasi</a></li>
                        
                    </ul>
                </div>
				<div class="box-body">
					<a href="tambah-training.php" class="text-green"><i class="fa fa-plus"></i> Tambah Data Training</a>

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
                        <h3 id_data="data_training">Data Training</h3>
						<thead>
							
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Matematika</th>
								<th>IPA</th>
								<th>IPS</th>
								<th>PKN</th>
								<th>B. Indonesia</th>
								<th>Agama</th>
								<th>Muatan Lokal</th>
								<!-- <th>Sikap</th>
								<th>Keterampilan</th> -->
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>

						<tbody>
							
							<?php
							$no =1;


							
								$where = " WHERE 1=1";
								if (isset($_GET['key'])) {
									$where .= " AND nama LIKE '%".addslashes($_GET['key'])."%'";
								}


							$data_training = mysqli_query ($conn, "SELECT * fROM data_training $where ORDER BY id_data DESC");
								if (mysqli_num_rows($data_training) > 0 ) {
								 	while ($p = mysqli_fetch_array ($data_training)) {
								 
							 ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $p['nama'] ?></td>
								<td><?= $p['matematika'] ?></td>
								<td><?= $p['ipa'] ?></td>
								<td><?= $p['ips'] ?></td>
								<td><?= $p['pkn'] ?></td>
								<td><?= $p['indo'] ?></td>
								<td><?= $p['agama'] ?></td>
								<td><?= $p['muatan_lokal'] ?></td>
								<!-- <td><?= $p['sikap'] ?></td>
								<td><?= $p['keterampilan'] ?></td> -->
								<td><?= $p['status'] ?></td>
								<td>
								<a href="edit-training.php ?id_data=<?= $p['id_data']?>"  title="Edit Data" class="text-orange"><i class="fa fa-edit"></i></a>
									<a href="hapus.php ?id_data=<?= $p['id_data']?>" onclick="return confirm('yakin ingin menghapus ?')"title="Hapus Data" class="text-red"><i class="fa fa-times"></i></a>
								</td>
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
	 