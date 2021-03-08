<?php
include('header.php');
?>


<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Data Angkatan</h4>
        </div>
        <div class="card-body px-4">
            <div class="row mb-3">

                <?php include('alert.php') ?>

                <div class="col-sm">
                </a><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahAngkatan">Tambah Angkatan</button>
                </div>
                <div class="col-sm">
                </div>

            </div>


            <table class="table table-bordered table-hover" id="example">
                <thead>
                    <tr>
                        <th>
                            <center>No
                        </th>
                        <th>
                            <center>Tahun Angkatan
                        </th>
                        <th>
                            <center>Kondisi
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
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT id_angkatan, tahun_angkatan, kondisi from tb_angkatan ORDER BY tahun_angkatan DESC");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td>
                            <center><?php echo $no++ ?>
                        </td>
                        <td>
                            <?php echo $d['tahun_angkatan']; ?>
                        </td>
                        <td>
                            <?php echo $d['kondisi']; ?>
                        </td>
                        <td>
                            <center><a type="button" class="btn btn-danger btn-sm" href="angkatan_hapus.php?id_angkatan=<?php echo $d['id_angkatan'] ?>"
                              onclick="return confirm('Anda yakin Hapus data angkatan <?php echo $d['tahun_angkatan']; ?> ?')">Hapus</a>
                        </td>
                        <td>
                            <center><a type="button" class="btn btn-info btn-sm" href="angkatan_edit.php?id_angkatan=<?php echo $d['id_angkatan'] ?>">Edit</a>
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
include('footer.php');

?>
