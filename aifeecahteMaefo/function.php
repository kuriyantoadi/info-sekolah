<?php
include('../koneksi.php');

$jml_siswa = mysqli_query($koneksi,"SELECT * FROM tb_siswa");
$jml_siswa = mysqli_num_rows($jml_siswa);
// echo $jml_siswa;

$jml_guru = mysqli_query($koneksi,"SELECT * FROM tb_guru");
$jml_guru = mysqli_num_rows($jml_guru);
// echo $jml_siswa;

$jml_kelas = mysqli_query($koneksi,"SELECT * FROM tb_kelas");
$jml_kelas = mysqli_num_rows($jml_kelas);
// echo $jml_siswa;

$jml_mapel = mysqli_query($koneksi,"SELECT * FROM tb_mapel");
$jml_mapel = mysqli_num_rows($jml_mapel);
 ?>
