<!-- Modal tampil user -->

<!-- Tambah Siswa -->
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


<!-- Tambah Angkatan -->
<div class="modal fade" id="tambahAngkatan" role="dialog">
    <div class="modal-dialog  modal-md">
        <div class="modal-dialog modal-md">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Tambah Angkatan</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body modal -->
                <form class="" action="angkatan_tambah.php" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4 row">
                                <label class="col-form-label col-sm-3 text-sm-right">Tahun Angkatan</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="tahun_angkatan" required>
                                      <option value=""> Pilih Tahun Angkatan</option>
                                      <?php for ($tahun=2015; $tahun < 2030 ; $tahun++) { ?>
                                        <option value="<?= $tahun ?>"><?= $tahun; ?></option>
                                      <?php } ?>
                                  </select>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label class="col-form-label col-sm-3 text-sm-right">Kondisi</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="kondisi" required>
                                      <option value=""> Pilih Kondisi</option>
                                      <option value="Aktif">Aktif</option>
                                      <option value="Tidak Aktif">Tidak Aktif</option>
                                  </select>
                                </div>
                            </div>
                            <center>
                                <input type="submit" class="btn btn-success btn" value="simpan">
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Tambah Angkatan -->
<div class="modal fade" id="tambahKelas" role="dialog">
    <div class="modal-dialog  modal-md">
        <div class="modal-dialog modal-md">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Tambah Kelas</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body modal -->
                <form class="" action="kelas_tambah.php" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4 row">
                                <label class="col-form-label col-sm-3 text-sm-right">Kode Kelas</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" value="" name="kode_kelas" required>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label class="col-form-label col-sm-3 text-sm-right">Nama Kelas</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" value="" name="nama_kelas" required>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label class="col-form-label col-sm-3 text-sm-right">Tingkat</label>
                                <div class="col-sm-8">
                                  <select class="form-control" name="tingkat" required>
                                      <option value=""> Pilih Tingkat</option>
                                      <option value="X">Tingkat X</option>
                                      <option value="XI">Tingkat XI</option>
                                      <option value="XII">Tingkat XII</option>
                                      <option value="Almuni">Almuni</option>

                                  </select>
                                </div>
                            </div>
                            <center>
                                <input type="submit" class="btn btn-success btn" value="simpan">
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Tambah Tugas Tambahan -->
<div class="modal fade" id="tambahTuta" role="dialog">
    <div class="modal-dialog  modal-md">
        <div class="modal-dialog modal-md">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Tambah Tugas Tambahan</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body modal -->
                <form class="" action="tuta_tambah.php" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4 row">
                                <label class="col-form-label col-sm-3 text-sm-right">Tugas tambahan</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" value="" name="tugas_tambahan" required>
                                </div>
                            </div>
                            <center>
                                <input type="submit" class="btn btn-success btn" value="simpan">
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Tambah Mata Pelajaran -->
<div class="modal fade" id="tambahMapel" role="dialog">
    <div class="modal-dialog  modal-md">
        <div class="modal-dialog modal-md">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Tambah Mata Pelajaran</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body modal -->
                <form class="" action="mapel_tambah.php" method="post">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4 row">
                                <label class="col-form-label col-sm-3 text-sm-right">Mata Pelajaran</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" value="" name="nama_mapel" required>
                                </div>
                            </div>
                            <center>
                                <input type="submit" class="btn btn-success btn" value="simpan">
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Tambah File Repo -->
<div class="modal fade" id="tambahFileRepo" role="dialog">
    <div class="modal-dialog  modal-md">
        <div class="modal-dialog modal-md">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Tambah File Repository</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body modal -->
                <form class="" action="repo_tambah.php" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4 row">
                                <label class="col-form-label col-sm-3 text-sm-right">Nama File</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" value="" name="nama_repo" required>
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label class="col-form-label col-sm-3 text-sm-right">Upload File</label>
                                <div class="col-sm-8">
                                  <input type="file" name="file_repo" accept="application/pdf" class="form-control-file" id="upload" required>
                                </div>
                            </div>
                            <center>
                                <input type="submit" class="btn btn-success btn" value="upload" name="upload">
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
