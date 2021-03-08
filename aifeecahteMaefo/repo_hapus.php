<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}
$id_repo = $_GET['id_repo'];
$nama_file = $_GET['$nama_file'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_repo where id_repo='$id_repo' ");
unlink("../asset/$d[$nama_file]");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:repo.php?pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:repo.php?pesan=hapus-gagal");
}
