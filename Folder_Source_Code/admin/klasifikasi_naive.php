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
                    <li><a href="data_training.php #data_training">Data Training</a></li>
                    <li><a href="klasifikasi_naive.php">Klasifikasi</a></li>
                    <li><a href="tingkat_akurasi.php">Tingkat Akurasi</a></li>
                
            </ul>
        </div>
        <div class="box-body">

            <form action="" method="POST" enctype="multipart/form-data">  
                <div class="form-group">
                    <input type="text" name="nama" placeholder=" Nama" class="input-control" required>
                </div>
                <div class="form-group">
                    <input type="number" name="matematika" placeholder=" Masukkan Nilai Matematika" class="input-control" required>
                </div>
                <div class="form-group">
                    <input type="number" name="ipa" placeholder=" Masukkan Nilai IPA" class="input-control" required>
                </div>
                <div class="form-group">
                    
                <input type="number" name="ips" placeholder=" Masukkan Nilai IPS" class="input-control" required>
                </div>
                <div class="form-group">
                <input type="number" name="pkn" placeholder=" Masukkan Nilai PKN" class="input-control" required>
                </div>
                <div class="form-group">
                    <input type="number" name="indo" placeholder=" Masukkan Nilai B.Indo" class="input-control" required>
                </div>
                <div class="form-group">
                    <input type="number" name="agama" placeholder=" Masukkan Nilai Agama" class="input-control" required>
                </div>
                <div class="form-group">
                    <input type="number" name="muatan_lokal" placeholder=" Masukkan Nilai Muatan Lokal" class="input-control" required>
                </div>
                <button type="button" class="btn" onclick="window.location = 'data_training.php'">Kembali</button>

                <input type="submit" name="submit" value="Submit" class="btn btn-blue">
            </form>




<?php

if (isset($_POST['submit'])) {
$jumlah_digit_desimal = 55;
// Ambil nilai-nilai input dari form
$nama = addslashes(ucwords($_POST['nama']));
$matematika = addslashes($_POST['matematika']);
$ipa = addslashes($_POST['ipa']);
$ips = addslashes($_POST['ips']);
$pkn = addslashes($_POST['pkn']);
$indo = addslashes($_POST['indo']);
$agama = addslashes($_POST['agama']);
$muatan_lokal = addslashes($_POST['muatan_lokal']);

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// Menghitung rata-rata status Negeri di Data Training
$query_avg_negeri = "SELECT AVG(matematika) AS avg_negeri_matematika, AVG(ipa) AS avg_negeri_ipa, AVG(ips) AS avg_negeri_ips, AVG(pkn) AS avg_negeri_pkn, AVG(indo) AS avg_negeri_indo, AVG(agama) AS avg_negeri_agama, AVG(muatan_lokal) AS avg_negeri_muatan_lokal FROM data_training WHERE status='Negeri' ";
$result_avg_negeri = mysqli_query($conn, $query_avg_negeri);
$row_avg_negeri = mysqli_fetch_assoc($result_avg_negeri);
$avg_negeri_matematika = $row_avg_negeri['avg_negeri_matematika'];
$avg_negeri_ipa = $row_avg_negeri['avg_negeri_ipa'];
$avg_negeri_ips = $row_avg_negeri['avg_negeri_ips'];
$avg_negeri_pkn = $row_avg_negeri['avg_negeri_pkn'];
$avg_negeri_indo = $row_avg_negeri['avg_negeri_indo'];
$avg_negeri_agama = $row_avg_negeri['avg_negeri_agama'];
$avg_negeri_muatan_lokal = $row_avg_negeri['avg_negeri_muatan_lokal'];

// Menghitung standar deviasi dengan status negeri di data training
$query_stddev_negeri = "SELECT STDDEV(matematika) AS stddev_negeri_matematika, STDDEV(ipa) AS stddev_negeri_ipa, STDDEV(ips) AS stddev_negeri_ips, STDDEV(pkn) AS stddev_negeri_pkn, STDDEV(indo) AS stddev_negeri_indo, STDDEV(agama) AS stddev_negeri_agama, STDDEV(muatan_lokal) AS stddev_negeri_muatan_lokal FROM data_training WHERE status = 'Negeri' ";
$result_stddev_negeri = mysqli_query($conn, $query_stddev_negeri);
$row_stddev_negeri = mysqli_fetch_assoc($result_stddev_negeri);
$stddev_negeri_matematika = $row_stddev_negeri['stddev_negeri_matematika'];
$stddev_negeri_ipa = $row_stddev_negeri['stddev_negeri_ipa'];
$stddev_negeri_ips = $row_stddev_negeri['stddev_negeri_ips'];
$stddev_negeri_pkn = $row_stddev_negeri['stddev_negeri_pkn'];
$stddev_negeri_indo = $row_stddev_negeri['stddev_negeri_indo'];
$stddev_negeri_agama = $row_stddev_negeri['stddev_negeri_agama'];
$stddev_negeri_muatan_lokal = $row_stddev_negeri['stddev_negeri_muatan_lokal'];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//..................................................................................................................................
// Menghitung rata-rata status Swasta di Data Training
$query_avg_swasta = "SELECT AVG(matematika) AS avg_swasta_matematika, AVG(ipa) AS avg_swasta_ipa, AVG(ips) AS avg_swasta_ips, AVG(pkn) AS avg_swasta_pkn, AVG(indo) AS avg_swasta_indo, AVG(agama) AS avg_swasta_agama, AVG(muatan_lokal) AS avg_swasta_muatan_lokal FROM data_training WHERE status = 'Swasta'";
$result_avg_swasta = mysqli_query($conn, $query_avg_swasta);
$row_avg_swasta = mysqli_fetch_assoc($result_avg_swasta);

$avg_swasta_matematika = $row_avg_swasta['avg_swasta_matematika'];
$avg_swasta_ipa = $row_avg_swasta['avg_swasta_ipa'];
$avg_swasta_ips = $row_avg_swasta['avg_swasta_ips'];
$avg_swasta_pkn = $row_avg_swasta['avg_swasta_pkn'];
$avg_swasta_indo = $row_avg_swasta['avg_swasta_indo'];
$avg_swasta_agama = $row_avg_swasta['avg_swasta_agama'];
$avg_swasta_muatan_lokal = $row_avg_swasta['avg_swasta_muatan_lokal'];


// Menghitung standar deviasi dengan status Swasta di data training
$query_stddev_swasta = "SELECT STDDEV(matematika) AS stddev_swasta_matematika, STDDEV(ipa) AS stddev_swasta_ipa, STDDEV(ips) AS stddev_swasta_ips, STDDEV(pkn) AS stddev_swasta_pkn, STDDEV(indo) AS stddev_swasta_indo, STDDEV(agama) AS stddev_swasta_agama, STDDEV(muatan_lokal) AS stddev_swasta_muatan_lokal FROM data_training WHERE status = 'Swasta' ";
$result_stddev_swasta = mysqli_query($conn, $query_stddev_swasta);
$row_stddev_swasta = mysqli_fetch_assoc($result_stddev_swasta);
$stddev_swasta_matematika = $row_stddev_swasta['stddev_swasta_matematika'];
$stddev_swasta_ipa = $row_stddev_swasta['stddev_swasta_ipa'];
$stddev_swasta_ips = $row_stddev_swasta['stddev_swasta_ips'];
$stddev_swasta_pkn = $row_stddev_swasta['stddev_swasta_pkn'];
$stddev_swasta_indo = $row_stddev_swasta['stddev_swasta_indo'];
$stddev_swasta_agama = $row_stddev_swasta['stddev_swasta_agama'];
$stddev_swasta_muatan_lokal = $row_stddev_swasta['stddev_swasta_muatan_lokal'];
//................................................................................................................................


// menghitung jumlah negeri di atribut status tabel data_training
$query_jumlah_negeri = "SELECT COUNT(*) AS jumlah_negeri FROM data_training WHERE status = 'Negeri'";
$result_jumlah_negeri = mysqli_query($conn, $query_jumlah_negeri);
$row_jumlah_negeri = mysqli_fetch_assoc($result_jumlah_negeri);
$jumlah_negeri = $row_jumlah_negeri['jumlah_negeri'];


$query_jumlah_swasta = "SELECT COUNT(*) AS jumlah_swasta FROM data_training WHERE status = 'Swasta'";
$result_jumlah_swasta = mysqli_query($conn, $query_jumlah_swasta);
$row_jumlah_swasta = mysqli_fetch_assoc($result_jumlah_swasta);
$jumlah_swasta = $row_jumlah_swasta['jumlah_swasta'];

$total_data_training = $jumlah_negeri + $jumlah_swasta;

// Menghitung $probabilitas kelas
$prob_kelas_negeri = $jumlah_negeri / $total_data_training;
$prob_kelas_swasta = $jumlah_swasta / $total_data_training;


////////////////////////////////////////////////////////////////////////////////MENGHITUNG PROBABILITAS DATA UJI////////////////////////////////////////////////////////////////

// Menghitung probabilitas Gaussian untuk atribut "Matematika" kelas "Negeri"
$prob_matematika_negeri = (1 / (sqrt(2 * 3.14) * $stddev_negeri_matematika)) * exp(-0.5 * pow(($matematika - $avg_negeri_matematika) / $stddev_negeri_matematika, 2));

// Menghitung probabilitas Gaussian untuk atribut "IPA" kelas "Negeri"
$prob_ipa_negeri = (1 / (sqrt(2 * 3.14) * $stddev_negeri_ipa)) * exp(-0.5 * pow(($ipa - $avg_negeri_ipa) / $stddev_negeri_ipa, 2));

// Menghitung probabilitas Gaussian untuk atribut "IPS" kelas "Negeri"
$prob_ips_negeri = (1 / (sqrt(2 * 3.14) * $stddev_negeri_ips)) * exp(-0.5 * pow(($ips - $avg_negeri_ips) / $stddev_negeri_ips, 2));

// Menghitung probabilitas Gaussian untuk atribut "PKN" kelas "Negeri"
$prob_pkn_negeri = (1 / (sqrt(2 * 3.14) * $stddev_negeri_pkn)) * exp(-0.5 * pow(($pkn - $avg_negeri_pkn) / $stddev_negeri_pkn, 2));

// Menghitung probabilitas Gaussian untuk atribut "Indo" kelas "Negeri"
$prob_indo_negeri = (1 / (sqrt(2 * 3.14) * $stddev_negeri_indo)) * exp(-0.5 * pow(($indo - $avg_negeri_indo) / $stddev_negeri_indo, 2));

// Menghitung probabilitas Gaussian untuk atribut "Agama" kelas "Negeri"
$prob_agama_negeri = (1 / (sqrt(2 * 3.14) * $stddev_negeri_agama)) * exp(-0.5 * pow(($agama - $avg_negeri_agama) / $stddev_negeri_agama, 2));

// Menghitung probabilitas Gaussian untuk atribut "Muatan Lokal" kelas "Negeri"
$prob_muatan_lokal_negeri = (1 / (sqrt(2 * 3.14) * $stddev_negeri_muatan_lokal)) * exp(-0.5 * pow(($muatan_lokal - $avg_negeri_muatan_lokal) / $stddev_negeri_muatan_lokal, 2));



// Menghitung probabilitas Gaussian untuk atribut "Matematika" kelas "Tidak Lulus"
$prob_matematika_swasta = (1 / (sqrt(2 * 3.14) * $stddev_swasta_matematika)) * exp(-0.5 * pow(($matematika - $avg_swasta_matematika) / $stddev_swasta_matematika, 2));

// Menghitung probabilitas Gaussian untuk atribut "IPA" kelas "Tidak Lulus"
    $prob_ipa_swasta = (1 / (sqrt(2 * 3.14) * $stddev_swasta_ipa)) * exp(-0.5 * pow(($ipa - $avg_swasta_ipa) / $stddev_swasta_ipa, 2));

// Menghitung probabilitas Gaussian untuk atribut "IPS" kelas "Tidak Lulus"
    $prob_ips_swasta = (1 / (sqrt(2 * 3.14) * $stddev_swasta_ips)) * exp(-0.5 * pow(($ips - $avg_swasta_ips) / $stddev_swasta_ips, 2));

// Menghitung probabilitas Gaussian untuk atribut "PKN" kelas "Tidak Lulus"
    $prob_pkn_swasta = (1 / (sqrt(2 * 3.14) * $stddev_swasta_pkn)) * exp(-0.5 * pow(($pkn - $avg_swasta_pkn) / $stddev_swasta_pkn, 2));

// Menghitung probabilitas Gaussian untuk atribut "Indo" kelas "Tidak Lulus"
    $prob_indo_swasta = (1 / (sqrt(2 * 3.14) * $stddev_swasta_indo)) * exp(-0.5 * pow(($indo - $avg_swasta_indo) / $stddev_swasta_indo, 2));

// Menghitung probabilitas Gaussian untuk atribut "Agama" kelas "Tidak Lulus"
    $prob_agama_swasta = (1 / (sqrt(2 * 3.14) * $stddev_swasta_agama)) * exp(-0.5 * pow(($agama - $avg_swasta_agama) / $stddev_swasta_agama, 2));

// Menghitung probabilitas Gaussian untuk atribut "Muatan Lokal" kelas "Tidak Lulus"
    $prob_muatan_lokal_swasta = (1 / (sqrt(2 * 3.14) * $stddev_swasta_muatan_lokal)) * exp(-0.5 * pow(($muatan_lokal - $avg_swasta_muatan_lokal) / $stddev_swasta_muatan_lokal, 2));


 // Menghitung probabilitas kelas diberikan atribut data uji
     $prob_siswa_negeri = $prob_matematika_negeri * $prob_ipa_negeri * $prob_ips_negeri * $prob_pkn_negeri * $prob_indo_negeri * $prob_agama_negeri * $prob_muatan_lokal_negeri * $prob_kelas_negeri;

// Menghitung probabilitas kelas diberikan atribut data uji
    $prob_siswa_swasta = $prob_matematika_swasta * $prob_ipa_swasta * $prob_ips_swasta * $prob_pkn_swasta * $prob_indo_swasta * $prob_agama_swasta * $prob_muatan_lokal_swasta * $prob_kelas_swasta;


///////////////////////////////////////////////////////////////////////AKHIR PERHITUNGAN PROBABILITAS////////////////////////////////////////////////////////////////////////////////////////////////

// Memilih kelas dengan probabilitas tertinggi sebagai hasil prediksi
// Menentukan hasil prediksi
if ($prob_siswa_negeri > $prob_siswa_swasta) {
$hasil_prediksi = 'Negeri';
echo '<div class="alert alert-success">Hasil prediksi: ' . $hasil_prediksi . '</div>';
} else {
$hasil_prediksi = 'Swasta';
echo '<div class="alert alert-success">Hasil prediksi: ' . $hasil_prediksi . '</div>';
}



//======================================================================SIMPAN KE DATABASE==========================================================================================================

// Menyimpan hasil perhitungan ke dalam database untuk khusus probabilitas swasta    
$query_insert_probabilitas_swasta = "INSERT INTO probab_swasta (nama_siswa, prob_swasta_matematika, prob_swasta_ipa, prob_swasta_ips, prob_swasta_pkn, prob_swasta_indo, prob_swasta_agama, prob_swasta_muatan_lokal ) VALUES ('$nama', '$prob_matematika_swasta', '$prob_ipa_swasta', '$prob_ips_swasta', '$prob_pkn_swasta', '$prob_indo_swasta', '$prob_agama_swasta', '$prob_muatan_lokal_swasta ')
ON DUPLICATE KEY UPDATE prob_swasta_matematika = '$prob_matematika_swasta', prob_swasta_ipa = '$prob_ipa_swasta', prob_swasta_ips = '$prob_ips_swasta', prob_swasta_pkn = '$prob_pkn_swasta', prob_swasta_indo = '$prob_indo_swasta', prob_swasta_agama = '$prob_agama_swasta', prob_swasta_muatan_lokal = '$prob_muatan_lokal_swasta'";
$result_insert = mysqli_query($conn, $query_insert_probabilitas_swasta);

if ($result_insert) {
  echo "<br>Data probabilitas Swasta berhasil disimpan atau diperbarui.";
} else {
  echo "Gagal menyimpan atau memperbarui data probabilitas Swasta: " . mysqli_error($conn);
}


// Menjalankan query INSERT dengan ON DUPLICATE KEY UPDATE
$query_insert_probabilitas_negeri = "INSERT INTO probabilitas_negeri (nama_siswa, prob_negeri_matematika, prob_negeri_ipa, prob_negeri_ips, prob_negeri_pkn, prob_negeri_indo, prob_negeri_agama, prob_negeri_muatan_lokal ) VALUES ('$nama', '$prob_matematika_negeri', '$prob_ipa_negeri', '$prob_ips_negeri', '$prob_pkn_negeri', '$prob_indo_negeri', '$prob_agama_negeri', '$prob_muatan_lokal_negeri ')
ON DUPLICATE KEY UPDATE prob_negeri_matematika = '$prob_matematika_negeri', prob_negeri_ipa = '$prob_ipa_negeri', prob_negeri_ips = '$prob_ips_negeri', prob_negeri_pkn = '$prob_pkn_negeri', prob_negeri_indo = '$prob_indo_negeri', prob_negeri_agama = '$prob_agama_negeri', prob_negeri_muatan_lokal = '$prob_muatan_lokal_negeri'";

$result_insert = mysqli_query($conn, $query_insert_probabilitas_negeri);

if ($result_insert) {
  echo "<br>Data probabilitas Negeri berhasil disimpan atau diperbarui.";
} else {
  echo "Gagal menyimpan atau memperbarui data probabilitas Negeri: " . mysqli_error($conn);
}


// Mengecek apakah data siswa sudah ada dalam tabel
$query_check = "SELECT * FROM hasil_prediksi WHERE nama_siswa = '$nama'";
$result_check = mysqli_query($conn, $query_check);

if (mysqli_num_rows($result_check) > 0) {
  // Jika data siswa sudah ada, melakukan UPDATE
  $query_update = "UPDATE hasil_prediksi SET total_prob_negeri = '$prob_siswa_negeri', total_prob_swasta = '$prob_siswa_swasta', hasil_prediksi = '$hasil_prediksi' WHERE nama_siswa = '$nama'";
  $result_update = mysqli_query($conn, $query_update);

  if ($result_update) {
    echo "<br>Data siswa berhasil diperbarui/n.";
  } else {
    echo "Gagal memperbarui data siswa: " . mysqli_error($conn);
  }
} else {
  // Jika data siswa belum ada, melakukan INSERT
  $query_insert_hasil = "INSERT INTO hasil_prediksi (nama_siswa, total_prob_negeri, total_prob_swasta, hasil_prediksi) VALUES ('$nama', '$prob_siswa_negeri', '$prob_siswa_swasta', '$hasil_prediksi')";
  $result_insert = mysqli_query($conn, $query_insert_hasil);

  if ($result_insert) {
    echo "<br>Data siswa berhasil disimpan.";
  } else {
    echo "Gagal menyimpan data siswa: " . mysqli_error($conn);
  }
}

     


////////////////////////////////////////////////////////////////AKHIR SIMPAN DATA////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}

?>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php' ?>