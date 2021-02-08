<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_mapel = $_POST['id_mapel'];
$nama_mapel = $_POST['nama_mapel'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_mapel SET
        nama_mapel='$nama_mapel'
        where id_mapel='$id_mapel'
        ");


if ($cek_edit) {
  // echo "berhasil";
    header("location:mapel_edit.php?id_mapel=$id_mapel&pesan=edit-berhasil");
} else {
  // echo "gagal";
    header("location:mapel_edit.php?id_mapel=$id_mapel&pesan=edit-gagal");
}
