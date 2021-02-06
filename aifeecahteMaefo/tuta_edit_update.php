<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_tugas_tambahan = $_POST['id_tugas_tambahan'];
$tugas_tambahan = $_POST['tugas_tambahan'];


$cek_edit = mysqli_query($koneksi, "UPDATE tb_tugas_tambahan SET
        tugas_tambahan='$tugas_tambahan'
        where id_tugas_tambahan='$id_tugas_tambahan'
        ");


// if ($cek_edit) {
//     header("location:tuta_edit.php?id_tugas_tambahan=$id_tugas_tambahan&pesan=edit-berhasil");
// } else {
//     header("location:tuta_edit.php?id_tugas_tambahan=$id_tugas_tambahan&pesan=edit-gagal");
// }
