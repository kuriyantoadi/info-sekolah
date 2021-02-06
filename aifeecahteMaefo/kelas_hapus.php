<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}
$id_kelas = $_GET['id_kelas'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_kelas where id_kelas='$id_kelas' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:kelas.php?pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:kelas.php?pesan=hapus-gagal");
}
