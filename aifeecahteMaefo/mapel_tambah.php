<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$nama_mapel = $_POST['nama_mapel'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_mapel Values('','$nama_mapel')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:mapel.php?pesan=tambah-berhasil");
} else {
    // echo "tambah gagal";
    header("location:mapel.php?pesan=tambah-gagal");
}
