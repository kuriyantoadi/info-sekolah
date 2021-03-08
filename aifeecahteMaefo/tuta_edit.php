<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Edit Tugas Tambahan
            </h3>
        </div>
        <div class="card-body px-4">

            <?php
            include('../koneksi.php');
            $id_tugas_tambahan = $_GET['id_tugas_tambahan'];
            $data = mysqli_query($koneksi, "SELECT * FROM tb_tugas_tambahan WHERE id_tugas_tambahan='$id_tugas_tambahan' ");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <form class="" action="tuta_edit_update.php" method="post" enctype="multipart/form-data">
                    <table class="table table-bordered">
                        <tr>
                          <td>
                            Kode Kelas
                          </td>
                          <td>
                            <input type="hidden" class="form-control" name="id_tugas_tambahan" value="<?= $d['id_tugas_tambahan'] ?>" required>
                            <input type="text" class="form-control" name="tugas_tambahan" value="<?= $d['tugas_tambahan'] ?>" required>
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
