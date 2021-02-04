<?php
include('../koneksi.php');
$id_guru = $_GET['id_guru'];
$nama_guru = $_GET['nama_guru'];

$data = mysqli_query($koneksi, "select * from tb_guru where id_guru='$id_guru' ");
while ($d = mysqli_fetch_array($data)) {

// hapus file
unlink("../asset/photo_guru/$nama_guru.jpg");

// hapus database
mysqli_query($koneksi, "UPDATE tb_guru SET
             photo=''
             where id_guru='$id_guru'
             ");

//setelah selesai dihapus
header("location:guru_edit.php?id_guru=$id_guru");

}
