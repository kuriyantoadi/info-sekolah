<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$tugas_tambahan = $_POST['tugas_tambahan'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_tugas_tambahan Values('','$tugas_tambahan')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:tuta.php?pesan=tambah-berhasil");
} else {
    echo "tambah gagal";
    header("location:tuta.php?pesan=tambah-gagal");
}
