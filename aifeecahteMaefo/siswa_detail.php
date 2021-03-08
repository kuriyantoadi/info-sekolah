<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Detail Siswa
            </h3>
        </div>
        <div class="card-body px-4">

            <?php

            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "berhasil") {
                    echo "
						<div class='alert alert-info alert-dismissible fade show' role='alert'>
                            <center>Edit Data Guru <b>Berhasil</b>
                        </div>";
                } elseif ($_GET['pesan'] == "gagal") {
                    echo "
						<div class='alert alert-warning' role='alert'>
							<center>Maaf, Edit Data Guru <b>Gagal</b>
						</div>
                        ";
                }
            }

            include('../koneksi.php');
            $id_siswa = $_GET['id_siswa'];
            $data = mysqli_query($koneksi, "SELECT * FROM tb_siswa, tb_kelas WHERE id_siswa='$id_siswa' AND tb_siswa.kode_kelas=tb_kelas.kode_kelas ");

            while ($d = mysqli_fetch_array($data)) {
            ?>

                <form class="" action="guru_edit_update.php" method="post" enctype="multipart/form-data">

                    <table class="table table-bordered">
                        <tr>
                            <td>
                                NISN Siswa
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nisn" value="<?= $d['nisn'] ?>" required readonly>
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
                                nama_siswa
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
                                Tahun_angkatan
                            </td>
                            <td>
                                <input type="text" class="form-control" name="tahun_angkatan" value="<?= $d['tahun_angkatan'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Status
                            </td>
                            <td>
                                <input type="text" class="form-control" name="status" value="<?= $d['status'] ?>" required readonly>
                            </td>
                        </tr>
                    </table>
                </form>
        </div>
    </div>
</div>

<?php } ?>

<?php include('footer.php') ?>
