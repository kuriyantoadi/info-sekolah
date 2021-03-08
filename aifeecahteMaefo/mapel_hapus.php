<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}
$id_mapel = $_GET['id_mapel'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_mapel where id_mapel='$id_mapel' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:mapel.php?pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:mapel.php?pesan=hapus-gagal");
}
