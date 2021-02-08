<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Data Mata Pelajaran</h4>
        </div>
        <div class="card-body px-4">
            <div class="row mb-3">
                <div class="col-sm">
                </a><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahMapel">Tambah Mata Pelajaran</button>
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    Cari Mata Pelajaran : <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
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
                <center>Nama Mapel
            </th>
            <th>
                <center>Hapus
            </th>
            <th>
                <center>Edit
            </th>
        </tr>
    </thead>
    <?php
    include '../koneksi.php';
    // $tingkat = $_GET['tingkat'];
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * from tb_mapel");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td>
                <center><?php echo $no++ ?>
            </td>
            <td>
                <?php echo $d['nama_mapel']; ?>
            </td>
            <td>
                <center>
                    <a type="button" class="btn btn-danger btn-sm" href="mapel_hapus.php?id_mapel=<?php echo $d['id_mapel'] ?>"
                      onclick="return confirm('Anda yakin Hapus data kelas <?php echo $d['nama_mapel']; ?> ?')">Hapus</a>
            </td>
            <td>
                <center>
                    <a type="button" class="btn btn-primary btn-sm" href="mapel_edit.php?id_mapel=<?php echo $d['id_mapel']; ?>" >Edit</a>
            </td>
        </tr>

    <?php
    } ?>
</table>
</div>
</div>
</div>
</div>


<?php
include('modal.php');
include('footer.php')
?>
