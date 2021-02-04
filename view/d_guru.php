<?php include('header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <center>
                <h3 style="margin-top:  25px;"><b>Daftar Guru dan Karyawan</b></h3>
            </center>
        </div>

    </div>


    <div class="row mb-3">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
            Cari Guru : <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
        </div>
    </div>

    <table class="table table-bordered table-hover" id="domainsTable">
        <thead>
            <tr>
                <th>
                    <center>No
                </th>
                <th>
                    <center>NIP
                </th>
                <th>
                    <center>Nama Guru
                </th>
                <th>
                    <center>Keterangan
                </th>
                <th>
                    <center>Detail
                </th>


            </tr>
        </thead>
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from tb_guru ");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td>
                    <center><?php echo $no++ ?>
                </td>
                <td>
                    <?php echo $d['nip']; ?>
                </td>
                <td>
                    <?php echo $d['nama_guru']; ?>
                </td>
                <td>
                    <?php echo $d['s_pegawai']; ?>
                </td>
                <td>
                    <center>
                        </a><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#guru<?php echo $d['id_guru'] ?>" id=".$d['id_guru'].">Detail</button>
                </td>
            </tr>

            <?php include('modal.php'); ?>

        <?php
        } ?>
    </table>
</div>

</div>

<?php include('footer.php') ?>