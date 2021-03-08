<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Data Tugas Tambahan</h4>
        </div>
        <div class="card-body px-4">
            <div class="row mb-3">
                <div class="col-sm">
                  </a><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahTuta">Tambah Tugas Tambahan</button>
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
                <center>Tugas Tambahan
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
    $data = mysqli_query($koneksi, "SELECT * from tb_tugas_tambahan");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td>
                <center><?php echo $no++ ?>
            </td>
            <td>
                <?php echo $d['tugas_tambahan']; ?>
            </td>
            <td>
                <center>
                    <a type="button" class="btn btn-danger btn-sm" href="tuta_hapus.php?id_tugas_tambahan=<?php echo $d['id_tugas_tambahan'] ?>"
                      onclick="return confirm('Anda yakin Hapus data kelas <?php echo $d['tugas_tambahan']; ?> ?')">Hapus</a>
            </td>
            <td>
                <center>
                    <a type="button" class="btn btn-primary btn-sm" href="tuta_edit.php?id_tugas_tambahan=<?php echo $d['id_tugas_tambahan']; ?>" >Edit</a>
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
