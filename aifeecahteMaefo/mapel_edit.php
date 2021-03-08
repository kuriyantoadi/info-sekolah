<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Edit Mata Pelajaran
            </h3>
        </div>
        <div class="card-body px-4">

            <?php
            include('alert.php');
            include('../koneksi.php');
            $id_mapel = $_GET['id_mapel'];
            $data = mysqli_query($koneksi, "SELECT * FROM tb_mapel WHERE id_mapel='$id_mapel' ");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <form class="" action="mapel_edit_update.php" method="post" enctype="multipart/form-data">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                              Nama Mata Pelajaran
                            </td>
                            <td>
                                <input type="hidden" class="form-control" name="id_mapel" value="<?= $d['id_mapel'] ?>" required>
                                <input type="text" class="form-control" name="nama_mapel" value="<?= $d['nama_mapel'] ?>" required>
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
