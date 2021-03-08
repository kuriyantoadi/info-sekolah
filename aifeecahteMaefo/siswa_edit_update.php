<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_siswa = $_POST['id_siswa'];
$username = $_POST['username'];
$nama_siswa = $_POST['nama_siswa'];
$kode_kelas = $_POST['kode_kelas'];
$tahun_angkatan = $_POST['tahun_angkatan'];
$status = $_POST['status'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_siswa SET
        username='$username',
        nama_siswa='$nama_siswa',
        kode_kelas='$kode_kelas',
        tahun_angkatan='$tahun_angkatan',
        status='$status'
        where id_siswa='$id_siswa'
        ");


if ($cek_edit) {
    header("location:siswa_edit.php?id_siswa=$id_siswa&pesan=edit-berhasil");
} else {
    header("location:siswa_edit.php?id_siswa=$id_siswa&pesan=edit-gagal");
}
