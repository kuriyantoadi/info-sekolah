<?php
// session_start();
// if ($_SESSION['status']!="wali") {
//     header("location:../login/.php?pesan=belum_login");
// }

include '../koneksi.php';
$nama_repo_cek = $_POST['nama_repo'];
$nama_repo = preg_replace("/\s+/", "_", $nama_repo_cek);

// $kode_kelas = $_POST['kode_kelas'];

// pdf_raport
if ($_POST['upload']) {
    $ekstensi_diperbolehkan = array('pdf');
    $waktu = date('d-m-Y');
    $file_repo_up = "file_repo";
    $file_repo = $_FILES['file_repo']['name'];
    $x = explode('.', $file_repo);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file_repo']['size'];
    $file_tmp = $_FILES['file_repo']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 5000000) {
            move_uploaded_file($file_tmp, '../asset/repository_sk/'.$nama_repo.'.pdf');
        } else {
            echo 'file_repo';
            echo 'UKURAN FILE TERLALU BESAR';
            exit;
        }
    } else {
        echo 'File SKHUN tidak pdf';
        echo "<br>";
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        // header("location:gagal-upload.php");
        exit;
    }
}

// UPDATE `upload` SET `id_file`=[value-1],`nama_file`=[value-2] WHERE 1
$tgl_upload = date('d-m-Y');
// echo $tgl_upload;

mysqli_query($koneksi, "INSERT INTO tb_repo Values('','$tgl_upload','$nama_repo','$nama_repo.pdf')");


// node_id=<?php echo $d['node_id'];
 header("location:repo.php?pesan=tambah-berhasil");
