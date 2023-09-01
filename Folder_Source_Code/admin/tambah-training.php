<?php include 'header.php' ?>
session_start();
<!-- content -->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Tambah Data Training
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
                        <input type="number" name="bindo" placeholder=" Masukkan Nilai B.Indo" class="input-control" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="agama" placeholder=" Masukkan Nilai Agama" class="input-control" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="mulok" placeholder=" Masukkan Nilai Muatan Lokal" class="input-control" required>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select name="status" class="input-control" required>
                            <option value="">Pilih</option>
                            <option value="Negeri">Negeri</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                    </div>

                    <button type="button" class="btn" onclick="window.location = 'data_training.php'">Kembali</button>

                    <input type="submit" name="submit" value="Simpan" class="btn btn-blue">
                </form>
                <?php
// ...

if (isset($_POST['submit'])) {
    $nama = addslashes(ucwords($_POST['nama']));
    $matematika = addslashes($_POST['matematika']);
    $ipa = addslashes($_POST['ipa']);
    $ips = addslashes($_POST['ips']);
    $pkn = addslashes($_POST['pkn']);
    $bindo = addslashes($_POST['bindo']);
    $agama = addslashes($_POST['agama']);
    $mulok = addslashes($_POST['mulok']);
    $status = addslashes($_POST['status']);

    // Ambil informasi pengguna yang sedang login (misalnya menggunakan session)
    $nama_pengguna = $_SESSION['uname']; // Ganti dengan cara sesuai implementasi Anda

    // Mendapatkan waktu saat ini
    $waktu = date('Y-m-d H:i:s');

    // Ambil ID pengguna berdasarkan nama pengguna
    $query_pengguna = mysqli_query($conn, "SELECT id FROM pengguna WHERE nama_pengguna = '$nama_pengguna'");
    $data_pengguna = mysqli_fetch_assoc($query_pengguna);
    $id_pengguna = $data_pengguna['id'];

    $simpan_data_training = mysqli_query($conn, "INSERT INTO data_training ( id, nama_pengguna, nama, matematika, ipa, ips, pkn, indo, agama, muatan_lokal, status)
                                                 VALUES ('$id_pengguna', '$nama_pengguna', '$nama', '$matematika', '$ipa', '$ips', '$pkn', '$bindo', '$agama', '$mulok', '$status')");

    if ($simpan_data_training) {
        $id_data_training = mysqli_insert_id($conn);

        $simpan_pengguna_data_training = mysqli_query($conn, "INSERT INTO pengguna_data_training (id, nama_pengguna, id_data, waktu_tambah )
                                                              VALUES ('$id_pengguna', '$nama_pengguna', '$id_data_training',  '$waktu')");

        if ($simpan_pengguna_data_training) {
            echo '<div class="alert alert-success">Simpan berhasil</div>';
        } else {
            echo 'Gagal menyimpan pengguna_data_training' . mysqli_error($conn);
        }
    } else {
        echo 'Gagal menyimpan data_training' . mysqli_error($conn);
    }
}


?>


            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
