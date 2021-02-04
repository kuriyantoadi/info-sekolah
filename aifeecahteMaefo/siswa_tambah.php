<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$nisn = $_POST['nisn'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$nama_siswa = $_POST['nama_siswa'];
$kode_kelas = $_POST['kode_kelas'];
$tahun_angkatan = $_POST['tahun_angkatan'];
$status = $_POST['status'];


$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_siswa Values('','$nisn','$username','$password','$nama_siswa','$kode_kelas',
'$tahun_angkatan','$status')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:siswa.php?pesan=tambah-berhasil");
} else {
    echo "tambah gagal";
    header("location:siswa.php?pesan=tambah-gagal");
}
