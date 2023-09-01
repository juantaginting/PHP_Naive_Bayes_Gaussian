<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">
			<div class="container">
				<div class="box">
				<div class="teks_header">
					<h2>Perhitungan Perhitungan Probabilitas Swasta</h2>
				</div>
				<div class="box-header">
                  
                </div>
				<div class="box-body">
		

					<?php 	

						if(isset($_GET['success'])) {
							echo "<div class='alert-success'>".$_GET['success']."</div>";
						}
					?>

					

					<table class="table">
                        <h3 id_data="data_training">Probabilitas Swasta</h3>
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
								
							</tr>
						</thead>

						<tbody>
							
							<?php
							$no =1;


							
								$where = " WHERE 1=1";
								if (isset($_GET['key'])) {
									$where .= " AND nama LIKE '%".addslashes($_GET['key'])."%'";
								}


							$data_training = mysqli_query ($conn, "SELECT * fROM probab_swasta $where ORDER BY id DESC");
								if (mysqli_num_rows($data_training) > 0 ) {
								 	while ($p = mysqli_fetch_array ($data_training)) {
                                        
							 ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $p['nama_siswa'] ?></td>
								<td><?= $p['prob_swasta_matematika'] ?></td>
								<td><?= $p['prob_swasta_ipa'] ?></td>
								<td><?= $p['prob_swasta_ips'] ?></td>
								<td><?= $p['prob_swasta_pkn'] ?></td>
								<td><?= $p['prob_swasta_indo'] ?></td>
								<td><?= $p['prob_swasta_agama'] ?></td>
								<td><?= $p['prob_swasta_muatan_lokal'] ?></td>
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
	 