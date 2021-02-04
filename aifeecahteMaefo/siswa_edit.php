<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Edit Siswa
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

                <form class="" action="siswa_edit_update.php" method="post" enctype="multipart/form-data">

                    <table class="table table-bordered">
                        <tr>
                            <td>
                                NISN Siswa
                            </td>
                            <td>
                                <input type="hidden" class="form-control" name="id_siswa" value="<?= $d['id_siswa'] ?>" required>
                                <input type="text" class="form-control" name="nisn" value="<?= $d['nisn'] ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Username
                            </td>
                            <td>
                                <input type="text" class="form-control" name="username" value="<?= $d['username'] ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td>
                                <input type="text" class="form-control" name="password" value="<?= $d['password'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama Siswa
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nama_siswa" value="<?= $d['nama_siswa'] ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kelas
                            </td>
                            <td>
                                <select class="form-control" name="kode_kelas" required>
                                    <option value="<?= $d['kode_kelas'] ?>"> Pilihan Awal = <?php echo $d['nama_kelas'] ?></option>
                                    <?php
                                    $data = mysqli_query($koneksi, "select * from tb_kelas");
                                    while ($d1 = mysqli_fetch_array($data)) {
                                    ?>
                                        <option value="<?php echo $d1['kode_kelas'] ?>"><?php echo $d1['nama_kelas'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tahun_angkatan
                            </td>
                            <td>
                                <select class="form-control" name="tahun_angkatan" required>
                                    <option value="<?= $d['tahun_angkatan'] ?>"> Pilihan Awal = <?php echo $d['tahun_angkatan'] ?></option>
                                    <?php
                                    $data = mysqli_query($koneksi, "select * from tb_angkatan");
                                    while ($d1 = mysqli_fetch_array($data)) {
                                    ?>
                                        <option value="<?php echo $d1['tahun_angkatan'] ?>"><?php echo $d1['tahun_angkatan'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Status
                            </td>
                            <td>
                                <select class="form-control" name="status" required>
                                    <option value="<?= $d['status'] ?>"> Pilihan Awal = <?php echo $d['status'] ?></option>
                                    <option value="AKTIF">AKTIF</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </td>
                        </tr>

                    </table>
                    <center>
                        <input type="submit" class="btn btn-info" name="upload" value="simpan">
                        <a type="button" class="btn btn-danger" href="siswa_password.php?id_siswa=<?php echo $d['id_siswa'] ?>">Ganti Password</a>
                    </center>
                </form>
        </div>
    </div>
</div>

<?php } ?>

<?php include('footer.php') ?>
