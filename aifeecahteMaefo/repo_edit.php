<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Edit File Repository
            </h3>
        </div>
        <div class="card-body px-4">

            <?php
            include('alert.php');
            include('../koneksi.php');
            $id_repo = $_GET['id_repo'];
            $data = mysqli_query($koneksi, "SELECT * FROM tb_repo WHERE id_repo='$id_repo' ");

            while ($d = mysqli_fetch_array($data)) {
            ?>

                <form class="" action="repo_update.php" method="post">

                    <table class="table table-bordered">
                        <tr>
                            <td>
                                Nama Repo
                            </td>
                            <td>
                                <input type="hidden" class="form-control" name="id_repo" value="<?= $d['id_repo'] ?>" required>
                                <input type="hidden" class="form-control" name="nama_repo_lama" value="<?= $d['nama_repo'] ?>" required>
                                <input type="text" class="form-control" name="nama_repo" value="<?= $d['nama_repo'] ?>" required>
                            </td>
                        </tr>

                    </table>
                    <center>
                        <input type="submit" class="btn btn-info" name="upload" value="simpan">
                    </center>
                </form>
        </div>
    </div>
</div>

<?php } ?>

<?php include('footer.php') ?>
