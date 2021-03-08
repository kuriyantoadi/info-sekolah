<?php include('header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-4">
            <center>
                <h3 style="margin-top:  25px;"><b>Daftar Siswa Kelas XII</b></h3>
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
                    <center>Nama Siswa
                </th>
                <th>
                    <center>Kelas
                </th>
                <th>
                    <center>Angkatan
                </th>
                <th>
                    <center>Status
                </th>


            </tr>
        </thead>
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT nama_siswa, nama_kelas, status, tahun_angkatan from tb_siswa, tb_kelas WHERE tb_siswa.kode_kelas=tb_kelas.kode_kelas AND tingkat='12'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td>
                    <center><?php echo $no++ ?>
                </td>
                <td>
                    <?php echo $d['nama_siswa']; ?>
                </td>
                <td>
                    <?php echo $d['nama_kelas']; ?>
                </td>
                <td>
                    <center><?php echo $d['tahun_angkatan']; ?>
                </td>
                <td>
                    <?php echo $d['status']; ?>
                </td>

            </tr>

            <?php include('modal.php'); ?>

        <?php
        } ?>
    </table>
</div>

</div>

<?php include('footer.php') ?>
