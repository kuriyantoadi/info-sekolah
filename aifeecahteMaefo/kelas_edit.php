<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Edit Kelas
            </h3>
        </div>
        <div class="card-body px-4">

            <?php
            include('../koneksi.php');
            $id_kelas = $_GET['id_kelas'];
            $data = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas='$id_kelas' ");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <form class="" action="kelas_edit_update.php" method="post" enctype="multipart/form-data">
                    <table class="table table-bordered">
                        <tr>
                          <td>
                            Kode Kelas
                          </td>
                          <td>
                            <input type="hidden" class="form-control" name="id_kelas" value="<?= $d['id_kelas'] ?>" required>
                            <input type="text" class="form-control" name="kode_kelas" value="<?= $d['kode_kelas'] ?>" required>
                          </td>
                        </tr>
                        <tr>
                            <td>
                              Nama Kelas
                            </td>
                            <td>
                                <input type="text" class="form-control" name="nama_kelas" value="<?= $d['nama_kelas'] ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kondisi
                            </td>
                            <td>
                              <select class="form-control" name="tingkat" required>
                                  <option value="<?= $d['tingkat'] ?>"> Pilihan Awal = <?= $d['tingkat']; ?></option>
                                  <option value="X">Tingkat X</option>
                                  <option value="XI">Tingkat XI</option>
                                  <option value="XII">Tingkat XII</option>
                                  <option value="Alumni">Alumni</option>
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
