<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}
$id_tugas_tambahan = $_GET['id_tugas_tambahan'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_tugas_tambahan where id_tugas_tambahan='$id_tugas_tambahan' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:tuta.php?pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:tuta.php?pesan=hapus-gagal");
}
