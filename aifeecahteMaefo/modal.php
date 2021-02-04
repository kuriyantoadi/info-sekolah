<!-- Modal tampil user -->

<div class="modal fade" id="tambah" role="dialog">
    <div class="modal-dialog  modal-lg">
        <div class="modal-dialog modal-lg">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Tambah Siswa</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body modal -->
                <form class="" action="siswa_tambah.php" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-right">NISN</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="nisn" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-right">Nama Siswa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="nama_siswa" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-right">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="username" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-right">Password</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="password" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-right">Kelas</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="kode_kelas" required>
                                        <option value=""> Pilih Kelas</option>
                                        <?php
                                        $data1 = mysqli_query($koneksi, "select * from tb_kelas");
                                        while ($d1 = mysqli_fetch_array($data1)) {
                                        ?>
                                            <option value="<?php echo $d1['kode_kelas'] ?>"><?php echo $d1['nama_kelas'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-right">Tahun Angkatan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="tahun_angkatan" required>
                                        <option value=""> Pilih Angkatan</option>
                                        <?php
                                        $data2 = mysqli_query($koneksi, "select * from tb_angkatan");
                                        while ($d2 = mysqli_fetch_array($data2)) {
                                        ?>
                                            <option value="<?php echo $d2['tahun_angkatan'] ?>"><?php echo $d2['tahun_angkatan'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-sm-2 text-sm-right">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status" required>
                                        <option value=""> Pilih Status Siswa</option>
                                        <option value="AKTIF"> Aktif</option>
                                        <option value="Tidak Aktif"> Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <center>
                                <input type="submit" class="btn btn-success btn" name="upload" value="simpan">
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="tambah_siswa" role="dialog">
    <div class="modal-dialog  modal-lg">
        <div class="modal-dialog modal-lg">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Tambah Siswa</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body modal -->

            </div>
        </div>
    </div>
</div>