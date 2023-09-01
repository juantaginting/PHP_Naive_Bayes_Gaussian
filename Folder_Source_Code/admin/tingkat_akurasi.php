<?php include 'header.php' ?>

<!-- Konten -->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="teks_header">
                <h2>Perhitungan Naive Bayes</h2>
            </div>
            <div class="box-header">
                <ul class="header_naive">
                    <li><a href="data_training.php#data_training">Data Training</a></li>
                    <li><a href="klasifikasi_naive.php">Klasifikasi</a></li>
                    <li><a href="tingkat_akurasi.php">Tingkat Akurasi</a></li>
                </ul>
            </div>
            <div class="box-body">
                <div class="akurasi">
                    <h2>Uji Akurasi Metode</h2>
                    <form method="POST" action="">
                        <div class="form-group">
                            <button type="submit" name="hitung">Hitung Akurasi</button>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['hitung'])) {
                        // Mendefinisikan fungsi untuk menghitung presisi, recall, dan F1-score
                        function hitungF1Score($true_positive, $false_positive, $false_negative) {
                            $precision = $true_positive / ($true_positive + $false_positive);
                            $recall = $true_positive / ($true_positive + $false_negative);
                            $f1_score = 2 * (($precision * $recall) / ($precision + $recall));

                            return $f1_score;
                        }

                        // Mengambil data prediksi dari tabel hasil_prediksi
                        $query = "SELECT p.hasil_prediksi, h.hasil_sebenarnya 
                                  FROM hasil_prediksi p
                                  JOIN hasil_sebenarnya h ON p.nama_siswa = h.nama_siswa";
                        $result = mysqli_query($conn, $query);

                        if ($result) {
                            // Inisialisasi variabel
                            $true_positive = 0;
                            $false_positive = 0;
                            $false_negative = 0;

                            // Iterasi untuk setiap data prediksi
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Mendapatkan nilai prediksi
                                $prediksi = $row['hasil_prediksi'];
                                // Mendapatkan nilai sebenarnya
                                $sebenarnya = $row['hasil_sebenarnya'];

                                // Membandingkan nilai prediksi dengan nilai sebenarnya
                                if ($prediksi == $sebenarnya && $prediksi == 'Negeri') {
                                    $true_positive++;
                                } elseif ($prediksi == 'Negeri' && $sebenarnya == 'Swasta') {
                                    $false_positive++;
                                } elseif ($prediksi == 'Swasta' && $sebenarnya == 'Negeri') {
                                    $false_negative++;
                                }
                            }

                            // Menghitung F1-score
                            $f1_score = hitungF1Score($true_positive, $false_positive, $false_negative);

                            // Menampilkan hasil presisi, recall, dan F1-score dalam persentase
                            $precision = ($true_positive / ($true_positive + $false_positive)) * 100;
                            $recall = ($true_positive / ($true_positive + $false_negative)) * 100;
                            $f1_score = ($f1_score * 100);

                            // Tampilkan hasil
                            echo "Presisi: " . round($precision, 2) . "%<br>";
                            echo "Recall: " . round($recall, 2) . "%<br>";
                            echo "F1-Score: " . round($f1_score, 2) . "%<br>";
                        } else {
                            echo "Terjadi kesalahan dalam mengambil data prediksi.";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
