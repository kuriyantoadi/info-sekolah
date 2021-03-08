<?php include('header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <center>
                <h3 style="margin-top:  25px;"><b>Daftar File Repository</b></h3>
            </center>
        </div>

    </div>


    <div class="row mb-3">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
            Cari File Repository : <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
        </div>
    </div>

    <table class="table table-bordered table-hover" id="domainsTable">
        <thead>
            <tr>
                <th>
                    <center>No
                </th>
                <th>
                    <center>Nama File
                </th>
                <th>
                    <center>Download
                </th>


            </tr>
        </thead>
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from tb_repo ORDER BY nama_repo ASC");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td>
                    <center><?php echo $no++ ?>
                </td>
                <td>
                    <?php echo $d['nama_repo']; ?>
                </td>
                <td>
                    <center>
                    <a type="button" class="btn btn-success btn-sm" href='../asset/repository_sk/<?= $d['file_repo'] ?>'>Download</a>
                </td>
            </tr>

            <?php include('modal.php'); ?>

        <?php
        } ?>
    </table>
</div>

</div>

<?php include('footer.php') ?>
