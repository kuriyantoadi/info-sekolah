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


    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "tambah-berhasil") {
            echo "
						<div class='alert alert-info ' role='alert'>
							<center>Data Guru Berhasil Ditambah</div>";
        } elseif ($_GET['pesan'] == "tambah-gagal") {
            echo "
						<div class='alert alert-danger' role='alert'>
							<center>Data Guru Gagal Ditambah
						</div>
                        ";
        } elseif ($_GET['pesan'] == "hapus-berhasil") {
            echo "
						<div class='alert alert-info' role='alert'>
							<center>Data Berhasil Dihapus
						</div>
						";
        } elseif ($_GET['pesan'] == "hapus-gagal") {
            echo "
						<div class='alert alert-danger' role='alert'>
							<center>Maaf, Proses Hapus Gagal
						</div>";
        }
    }
    ?>

    <table class="table table-bordered table-hover" id="domainsTable">
        <thead>
            <tr>
                <th>
                    <center>No
                </th>
                <th>
                    <center>Nama Guru
                </th>
                <th>
                    <center>Lihat Guru
                </th>

            </tr>
        </thead>
        <?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * from tb_guru ORDER BY nama_guru ");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td>
                    <center><?php echo $no++ ?>
                </td>
                <td>
                    <?php echo $d['nama_guru']; ?>
                </td>
                <td>
                    <center>
                        </a><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#guru<?php echo $d['id_guru'] ?>" id=".$d['id_guru'].">Detail Guru</button>
                </td>
            </tr>

    <?php include('modal.php'); ?>

        <?php
        } ?>
    </table>
</div>

</div>

<?php include('footer.php') ?>