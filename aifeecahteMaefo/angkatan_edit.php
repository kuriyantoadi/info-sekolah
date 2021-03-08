<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Edit Angkatan
            </h3>
        </div>
        <div class="card-body px-4">

            <?php
            include('../koneksi.php');
            $id_angkatan = $_GET['id_angkatan'];
            $data = mysqli_query($koneksi, "SELECT * FROM tb_angkatan WHERE id_angkatan='$id_angkatan' ");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <form class="" action="angkatan_edit_update.php" method="post" enctype="multipart/form-data">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                Tahun Angkatan
                            </td>
                            <td>
                                <input type="hidden" class="form-control" name="id_angkatan" value="<?= $d['id_angkatan'] ?>" required>
                                <select class="form-control" name="tahun_angkatan" required>
                                    <option value="<?= $d['tahun_angkatan'] ?>"> Pilihan Awal = <?= $d['tahun_angkatan'] ?></option>
                                    <?php for ($tahun=2015; $tahun < 2030 ; $tahun++) { ?>
                                      <option value="<?= $tahun ?>"><?= $tahun; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kondisi
                            </td>
                            <td>
                              <select class="form-control" name="kondisi" required>
                                  <option value="<?= $d['konisi'] ?>"> Pilihan Awal = <?= $d['kondisi'] ?></option>
                                  <option value="Aktif">Aktif</option>
                                  <option value="Tidak Aktif">Tidak Aktif</option>
                              </select>
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

<?php include('footer.php') ?>
