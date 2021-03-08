<?php
session_start();
if ($_SESSION['status'] != "beegerewaepemoG") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_repo = $_POST['id_repo'];
$nama_repo = $_POST['nama_repo'];
$nama_repo_lama = $_POST['nama_repo_lama'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_repo SET
        nama_repo='$nama_repo',
        file_repo='$nama_repo.pdf'
        where id_repo='$id_repo'
        ");

$fileAwal = "../asset/repository_sk/$nama_repo_lama.pdf";
// echo $fileAwal;

$fileBaru = "../asset/repository_sk/$nama_repo.pdf";

rename($fileAwal, $fileBaru); // mengubah nama file

if ($cek_edit) {
  // echo "berhasil";
    header("location:repo.php?&pesan=edit-berhasil");
} else {
  // echo "gagal";
    header("location:repo.php?pesan=edit-gagal");
}
