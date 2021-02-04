<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Detail Guru & Pegawai
            </h3>
        </div>
        <?php
        include('../koneksi.php');
        $id_guru = $_GET['id_guru'];
        $data = mysqli_query($koneksi, "SELECT * FROM tb_guru, tb_kelas WHERE id_guru='$id_guru' AND tb_guru.kode_kelas=tb_kelas.kode_kelas ");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <div class="card-body px-4">
                    <table class="table table-bordered">

                        <tr>
                            <td>
                                Username Guru
                            </td>
                            <td>
                                <input type="text" class="form-control" name="username" value="<?= $d['username'] ?>" required readonly>
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
                                NIP Guru
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nip" value="<?= $d['nip'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama Guru
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nama_guru" value="<?= $d['nama_guru'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tugas Tambahan
                            </td>
                            <td>
                                <input type="text" class="form-control" name="tugas_tambahan" value="<?= $d['tugas_tambahan'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Wali Kelas
                            </td>
                            <td>
                                <input type="text" class="form-control" value="<?= $d['nama_kelas'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mata Pelajaran
                            </td>
                            <td>
                                <input type="text" class="form-control" value="<?= $d['nama_mapel'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Status Pegawai
                            </td>
                            <td>
                                <input type="text" class="form-control" value="<?= $d['s_pegawai'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Bagian Pegawai
                            </td>
                            <td>
                                <input type="text" class="form-control" value="<?= $d['bag_pegawai'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kondisi Pegawai
                            </td>
                            <td>
                                <input type="text" class="form-control" value="<?= $d['kondisi_peg'] ?>" required readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Photo
                            </td>
                            <td>
                                <?php if (empty($d['photo'])) { ?>
                                    Belum ada Photo
                                <?php } else { ?>
                                    <img src="../asset/photo_guru/<?= $d['photo'] ?>" height="300" width="300">
                                <?php } ?>
                            </td>
                        </tr>

                    </table>
        </div>
    </div>
</div>

<?php } ?>


<?php include('footer.php') ?>
