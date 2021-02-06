<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_kelas = $_POST['id_kelas'];
$kode_kelas = $_POST['kode_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$tingkat = $_POST['tingkat'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_kelas SET
        kode_kelas='$kode_kelas',
        nama_kelas='$nama_kelas',
        tingkat='$tingkat'
        where id_kelas='$id_kelas'
        ");


if ($cek_edit) {
    header("location:siswa_edit.php?id_siswa=$id_siswa&pesan=edit-berhasil");
} else {
    header("location:siswa_edit.php?id_siswa=$id_siswa&pesan=edit-gagal");
}
