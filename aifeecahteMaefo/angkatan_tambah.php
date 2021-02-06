<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$tahun_angkatan = $_POST['tahun_angkatan'];
$kondisi = $_POST['kondisi'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_angkatan Values('','$tahun_angkatan','$kondisi')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:angkatan.php?pesan=tambah-berhasil");
} else {
    // echo "tambah gagal";
    header("location:angkatan.php?pesan=tambah-gagal");
}
