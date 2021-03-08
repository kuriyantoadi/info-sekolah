<?php
include('header.php');
?>


<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Data Siswa</h4>
        </div>
        <div class="card-body px-4">
            <div class="row mb-3">

                <?php include('alert.php') ?>

                <div class="col-sm">
                    </a><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">Tambah Siswa</button></a>
                  <a type="button" href="siswa_lap.php" class="btn btn-success btn-sm" >Download Siswa</a>
                </div>
                <div class="col-sm">
                </div>

            </div>


            <table class="table table-bordered table-hover" id="example">
                <thead>
                    <tr>
                        <th>
                            <center>No
                        </th>
                        <th>
                            <center>NISN
                        </th>
                        <th>
                            <center>Nama Siswa
                        </th>
                        <th>
                            <center>Kelas
                        </th>
                        <th>
                            <center>Angkatan
                        </th>
                        <th>
                            <center>Hapus
                        </th>
                        <th>
                            <center>Edit
                        </th>
                        <th>
                            <center>Detail
                        </th>
                    </tr>
                </thead>
                <?php
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT id_siswa, nisn, nama_siswa, tahun_angkatan, nama_kelas from tb_siswa, tb_kelas where tb_siswa.kode_kelas=tb_kelas.kode_kelas");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td>
                            <center><?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $d['nisn']; ?>
                        </td>
                        <td>
                            <?php echo $d['nama_siswa']; ?>
                        </td>
                        <td>
                            <center><?php echo $d['nama_kelas']; ?>
                        </td>
                        <td>
                            <center><?php echo $d['tahun_angkatan']; ?>
                        </td>
                        <td>
                            <center> <a type="button" class="btn btn-danger btn-sm" href="siswa_hapus.php?id_siswa=<?php echo $d['id_siswa']; ?>" onclick="return confirm('Anda yakin Hapus data kelas <?php echo $d['nama_siswa']; ?> ?')">Hapus</a>
                        </td>
                        <td>
                            <center><a type="button" class="btn btn-primary btn-sm" href="siswa_edit.php?id_siswa=<?php echo $d['id_siswa'] ?>">Edit</a>
                        </td>
                        <td>
                            <center><a type="button" class="btn btn-success btn-sm" href="siswa_detail.php?id_siswa=<?php echo $d['id_siswa'] ?>">Detail</a>
                        </td>
                    </tr>

                <?php
                } ?>
            </table>

        </div>
    </div>
</div>
</div>


<?php
include('modal.php');
include('footer.php');

?>
