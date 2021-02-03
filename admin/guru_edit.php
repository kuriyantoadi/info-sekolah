<?php include('../header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Edit Guru & Pegawai
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
            $id_guru = $_GET['id_guru'];
            $data = mysqli_query($koneksi, "SELECT * FROM tb_guru, tb_kelas WHERE id_guru='$id_guru' AND tb_guru.kode_kelas=tb_kelas.kode_kelas ");

            while ($d = mysqli_fetch_array($data)) {
            ?>

                <form class="" action="guru_edit_update.php" method="post" enctype="multipart/form-data">

                    <table class="table table-bordered">
                        <tr>
                            <td>
                                Username Guru
                            </td>
                            <td>
                                <input type="hidden" class="form-control" name="id_guru" value="<?= $d['id_guru'] ?>" required>
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
                                NIP Guru
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nip" value="<?= $d['nip'] ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama Guru
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nama_guru" value="<?= $d['nama_guru'] ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tugas Tambahan
                            </td>
                            <td>
                                <input type="text" class="form-control" name="tugas_tambahan" value="<?= $d['tugas_tambahan'] ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Wali Kelas
                            </td>
                            <td>
                                <select class="form-control" name="kode_kelas" required>
                                    <option value="<?= $d['kode_kelas'] ?>"> Pilihan Awal = <?php echo $d['nama_kelas'] ?></option>
                                    <option value="-"> Bukan Wali Kelas</option>
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
                                Mata Pelajaran
                            </td>
                            <td>
                                <select class="form-control" name="nama_mapel" required>
                                    <option value="<?= $d['nama_mapel'] ?>"> Pilihan Awal = <?php echo $d['nama_mapel'] ?></option>
                                    <option value="-"> Tidak Mengajar</option>
                                    <?php
                                    $data = mysqli_query($koneksi, "select * from tb_mapel");
                                    while ($d1 = mysqli_fetch_array($data)) {
                                    ?>
                                        <option value="<?php echo $d1['nama_mapel'] ?>"><?php echo $d1['nama_mapel'] ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Status Pegawai
                            </td>
                            <td>
                                <select class="form-control" name="s_pegawai" required>
                                    <option value="<?= $d['s_pegawai'] ?>"> Pilihan Awal = <?php echo $d['s_pegawai'] ?></option>
                                    <option value="ASN"> ASN</option>
                                    <option value="Non ASN">Non ASN</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Bagian Pegawai
                            </td>
                            <td>
                                <select class="form-control" name="bag_pegawai" required>
                                    <option value="<?= $d['bag_pegawai'] ?>"> Pilihan Awal = <?php echo $d['bag_pegawai'] ?></option>
                                    <option value="Guru"> Guru </option>
                                    <option value="Pegawai/TU"> Pegawai/TU</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kondisi Pegawai
                            </td>
                            <td>
                                <select class="form-control" name="kondisi_peg" required>
                                    <option value="<?= $d['kondisi_peg'] ?>"> Pilihan Awal = <?php echo $d['kondisi_peg'] ?></option>
                                    <option value="Aktif"> Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Photo
                            </td>
                            <td>
                                <?php if (empty($d['photo'])) { ?>
                                    <br><input type="file" name="photo" class="form-control-file" value="<?= $d['photo'] ?>" required>
                                <?php } else { ?>
                                    <img src="../asset/photo_guru/<?= $d['photo'] ?>" height="300" width="300">
                                    <br><a type="button" class="btn btn-danger btn-sm" href="guru_hapus_photo.php?id_guru=<?= $d['id_guru']; ?>&nama_guru=<?= $d['nama_guru']  ?>" onclick="return confirm('Anda yakin Hapus Photo dari <?php echo $d['nama_guru']; ?> ?')">Hapus</a>
                                <?php } ?>
                            </td>
                        </tr>
                    </table>

                    <center>
                        <input type="submit" class="btn btn-info btn" style="margin-bottom: 50px" name="upload" value="simpan">
                    </center>
                </form>
        </div>
    </div>
</div>

<?php } ?>

<?php include('../footer.php') ?>