<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Data Guru & Karyawan</h4>
        </div>
        <div class="card-body px-4">
            <div class="row mb-3">
                <div class="col-sm">
                    <a href="guru_tambah.php" type="button" class="btn btn-info btn-sm"> Tambah Guru</a>
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    Cari Kelas : <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
                </div>
            </div>

<?php include('alert.php') ?>


<table class="table table-bordered table-hover" id="domainsTable">
    <thead>
        <tr>
            <th>
                <center>No
            </th>
            <th>
                <center>Username
            </th>
            <th>
                <center>Nama Guru
            </th>
            <th>
                <center>Status
            </th>
            <th>
                <center>Opsi
            </th>
        </tr>
    </thead>
    <?php
    include '../koneksi.php';
    // $tingkat = $_GET['tingkat'];
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * from tb_guru");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td>
                <center><?php echo $no++ ?>
            </td>
            <td>
                <center><?php echo $d['username']; ?>
            </td>
            <td>
                <center><?php echo $d['nama_guru']; ?>
            </td>
            <td>
                <center><?php echo $d['s_pegawai']; ?>
            </td>
            <td>
                <center>
                    <a type="button" class="btn btn-success btn-sm" href="guru_detail.php?id_guru=<?php echo $d['id_guru'] ?>">Detail</a>
                    <a type="button" class="btn btn-primary btn-sm" href="guru_edit.php?id_guru=<?php echo $d['id_guru'] ?>">Edit</a>
                    <a type="button" class="btn btn-danger btn-sm" href="guru_hapus.php?id_guru=<?php echo $d['id_guru']; ?>" onclick="return confirm('Anda yakin Hapus data kelas <?php echo $d['nama_guru']; ?> ?')">Hapus</a>
            </td>
        </tr>

    <?php
    } ?>
</table>
</div>
</div>
</div>
</div>


<?php include('footer.php') ?>
