<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status']!="beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}
    $id_angkatan = $_GET['id_angkatan'];
    // menghapus data dari database
    $cek_hapus = mysqli_query($koneksi, "delete from tb_angkatan where id_angkatan='$id_angkatan' ");

    // mengalihkan halaman kembali ke index.php
    if($cek_hapus) {
      // echo "hapus berhasil";
      header("location:angkatan.php?pesan=hapus-berhasil");
    }else{
      // echo "hapus gagal";
      header("location:angkatan.php?pesan=hapus-gagal");
    }
