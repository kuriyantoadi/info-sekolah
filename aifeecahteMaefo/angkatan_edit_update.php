<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_angkatan = $_POST['id_angkatan'];
$tahun_angkatan = $_POST['tahun_angkatan'];
$kondisi = $_POST['kondisi'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_angkatan SET
        tahun_angkatan='$tahun_angkatan',
        kondisi='$kondisi'
        where id_angkatan='$id_angkatan'
        ");


if ($cek_edit) {
    header("location:angkatan_edit.php?id_angkatan=$id_angkatan&pesan=edit-berhasil");
} else {
    header("location:angkatan_edit.php?id_angkatan=$id_angkatan&pesan=edit-gagal");
}
