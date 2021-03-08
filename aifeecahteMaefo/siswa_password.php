<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Ganti Password Siswa
            </h3>
        </div>
        <div class="card-body px-4">

            <?php
            include('alert.php');

            include('../koneksi.php');
            $id_siswa = $_GET['id_siswa'];
            $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa, tb_kelas WHERE id_siswa='$id_siswa' AND tb_siswa.kode_kelas=tb_kelas.kode_kelas ");

            while ($d = mysqli_fetch_array($data)) {
            ?>

                <form class="" action="siswa_password_update.php" method="post" enctype="multipart/form-data">

                    <table class="table table-bordered">
                        <tr>
                            <td>
                                NISN Siswa
                            </td>
                            <td>
                                <input type="hidden" class="form-control" name="id_siswa" value="<?= $d['id_siswa'] ?>" required readonly>
                                <input type="text" class="form-control" name="nisn" value="<?= $d['nisn'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama Siswa
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nama_siswa" value="<?= $d['nama_siswa'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kelas
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nama_kelas" value="<?= $d['nama_kelas'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password Baru
                            </td>
                            <td>
                                <input type="text" class="form-control" name="password_baru" value="" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password Konfirmasi
                            </td>
                            <td>
                                <input type="text" class="form-control" name="password_konfirmasi" value="" required>
                            </td>
                        </tr>

                    </table>
                    <center>
                        <input type="submit" class="btn btn-info" name="upload" value="simpan">
                    </center>
                </form>
        </div>
    </div>
</div>

<?php } ?>

<?php include('footer.php') ?>
