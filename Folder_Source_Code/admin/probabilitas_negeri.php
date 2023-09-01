<?php
include 'header.php';

// Mengatur pesan sukses
$successMessage = "";
if (isset($_GET['success'])) {
    $successMessage = "<div class='alert-success'>" . $_GET['success'] . "</div>";
}
?>

<!-- content -->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="teks_header">
                <h2>Hasil Perhitungan Probabilitas Negeri</h2>
            </div>
            <div class="box-header">
                   
            </div>
            <div class="box-body">

                <?php
                echo $successMessage;
                ?>

              
                <table class="table">
                    <h3 id_data="data_training">Probabilitas Negeri</h3>
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
                        $no = 1;
                        $where = " WHERE 1=1";
                        if (isset($_GET['key'])) {
                            $where .= " AND nama LIKE '%" . addslashes($_GET['key']) . "%'";
                        }

                        // Inisialisasi koneksi database
                        $conn = mysqli_connect("localhost", "root", "", "naive_bayes1");

                        // Memeriksa koneksi
                        if (mysqli_connect_errno()) {
                            echo "Koneksi database gagal: " . mysqli_connect_error();
                            exit();
                        }

                        $probabilitas_negeri = mysqli_query($conn, "SELECT * FROM probabilitas_negeri $where ORDER BY id DESC");
                        if (mysqli_num_rows($probabilitas_negeri) > 0) {
                            while ($p = mysqli_fetch_array($probabilitas_negeri)) {
                        ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $p['nama_siswa'] ?></td>
                                    <td><?= $p['prob_negeri_matematika'] ?></td>
                                    <td><?= $p['prob_negeri_ipa'] ?></td>
                                    <td><?= $p['prob_negeri_ips'] ?></td>
                                    <td><?= $p['prob_negeri_pkn'] ?></td>
                                    <td><?= $p['prob_negeri_indo'] ?></td>
                                    <td><?= $p['prob_negeri_agama'] ?></td>
                                    <td><?= $p['prob_negeri_muatan_lokal'] ?></td>
                                </tr>
                        <?php
                            }
                        } else {
                        ?>
                            <tr>
                                <td colspan="9">Data Tidak Ditemukan</td>
                            </tr>
                        <?php
                        }

                        // Menutup koneksi
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
