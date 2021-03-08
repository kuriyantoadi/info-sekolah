<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$kode_kelas = $_POST['kode_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$tingkat = $_POST['tingkat'];



$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_kelas Values('','$kode_kelas','$nama_kelas','$tingkat')");

if ($cek_tambah) {
    echo "tambah berhasil";
    // header("location:siswa.php?pesan=tambah-berhasil");
} else {
    echo "tambah gagal";
    // header("location:siswa.php?pesan=tambah-gagal");
}
