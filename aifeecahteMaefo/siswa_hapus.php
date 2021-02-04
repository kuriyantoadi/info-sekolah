<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}
$id_siswa = $_GET['id_siswa'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_siswa where id_siswa='$id_siswa' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:siswa.php?pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:siswa.php?pesan=hapus-gagal");
}
