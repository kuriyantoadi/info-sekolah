<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$tugas_tambahan = $_POST['tugas_tambahan'];
$kode_kelas = $_POST['kode_kelas'];
$mapel = $_POST['mapel'];
$s_pegawai = $_POST['s_pegawai'];
$bag_pegawai = $_POST['bag_pegawai'];
$kondisi_peg = $_POST['kondisi_peg'];
// $photo = $_POST['photo'];
// $status = $_POST['status'];

if ($_POST['upload']) {
    $ekstensi_diperbolehkan = array('jpg','png','jpeg');
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


$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_guru Values('','$username','$password','$nip','$nama_guru',
'$tugas_tambahan','$kode_kelas','$mapel','$s_pegawai','$bag_pegawai','$kondisi_peg','$nama_guru.jpg','aktif')");

if ($cek_tambah) {
    header("location:guru.php?pesan=tambah-berhasil");
} else {
    header("location:guru.php?pesan=tambah-gagal");
}


