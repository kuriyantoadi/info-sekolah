<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_siswa = $_POST['id_siswa'];
$password_baru = $_POST['password_baru'];
$password_konfirmasi = $_POST['password_konfirmasi'];

if($password_baru == $password_konfirmasi){

    $password = md5($password_konfirmasi);

    $update_password = mysqli_query($koneksi, "UPDATE tb_siswa SET
            password='$password'
            where id_siswa='$id_siswa' ");

    if (empty($update_password)) {
        // echo "Ganti Password gagal";
    }else{
        // echo "Ganti Password berhasil";
        header("location:siswa_password.php?id_siswa=$id_siswa&pesan=password-diganti");
    }
         
}else {
    // echo "Password Konfirmasi Salah";
    header("location:siswa_password.php?id_siswa=$id_siswa&pesan=password-salah");
}

// if ($cek_tambah) {
//     header("location:guru.php?pesan=edit-berhasil");
// } else {
//     header("location:guru.php?pesan=edit-gagal");
// }
