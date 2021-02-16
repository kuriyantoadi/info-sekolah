<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_guru = $_POST['id_guru'];
$username = $_POST['username'];
// $password = md5($_POST['password']);
$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$tugas_tambahan = $_POST['tugas_tambahan'];
$kode_kelas = $_POST['kode_kelas'];
$nama_mapel = $_POST['nama_mapel'];
$s_pegawai = $_POST['s_pegawai'];
$bag_pegawai = $_POST['bag_pegawai'];
$kondisi_peg = $_POST['kondisi_peg'];
$photo_ada = $_POST['photo_ada']; //kondisi photo sudah ada

// echo $photo_ada;

if (empty($photo_ada)) {

    // echo "photo tidak ada";
    // jika photo tidak ada
    if ($_POST['upload']) {
        $ekstensi_diperbolehkan = array('jpg', 'png', 'jpeg');
        $waktu = date('d-m-Y');
        $photo_up = "photo";
        $photo = $_FILES['photo']['name'];
        $x = explode('.', $photo);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['photo']['size'];
        $file_tmp = $_FILES['photo']['tmp_name'];
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1500000) {
                move_uploaded_file($file_tmp, '../asset/photo_guru/' . $nama_guru . '.jpg');
            } else {
                echo 'photo';
                echo 'UKURAN FILE TERLALU BESAR';
                exit;
            }
        } else {
            echo 'File photo tidak .jpg';
            echo "<br>";
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            // header("location:gagal-upload.php");
            exit;
        }
    }

    //upload photo
    $cek_edit = mysqli_query($koneksi, "UPDATE tb_guru SET
            username='$username',
            nip='$nip',
            nama_guru='$nama_guru',
            tugas_tambahan='$tugas_tambahan',
            kode_kelas='$kode_kelas',
            nama_mapel='$nama_mapel',
            s_pegawai='$s_pegawai',
            bag_pegawai='$bag_pegawai',
            kondisi_peg='$kondisi_peg',
            photo='$nama_guru.jpg'
             where id_guru='$id_guru'
             ");



} else {
    // echo "photo ada";

    // jika photo tidak ada
    $cek_edit = mysqli_query($koneksi, "UPDATE tb_guru SET
            username='$username',
            nip='$nip',
            nama_guru='$nama_guru',
            tugas_tambahan='$tugas_tambahan',
            kode_kelas='$kode_kelas',
            nama_mapel='$nama_mapel',
            s_pegawai='$s_pegawai',
            bag_pegawai='$bag_pegawai',
            kondisi_peg='$kondisi_peg'
             where id_guru='$id_guru'
             ");

}

if ($cek_tambah) {
    header("location:guru.php?pesan=edit-gagal");
} else {
    header("location:guru.php?pesan=edit-berhasil");
}
