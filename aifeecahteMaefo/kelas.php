<?php
include('header.php');
?>


<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
    <div class="card flex-fill w-100">
        <div class="card-header">
            <h3>
                <center>Data Kelas</h4>
        </div>
        <div class="card-body px-4">
            <div class="row mb-3">

                <?php include('alert.php') ?>

                <div class="col-sm">
                </a><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahKelas">Tambah Kelas</button>
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
                            <center>Nama Kelas
                        </th>
                        <th>
                            <center>Tingkat
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
                $data = mysqli_query($koneksi, "SELECT id_kelas, nama_kelas, tingkat from tb_kelas ");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td>
                            <center><?php echo $no++ ?>
                        </td>
                        <td>
                            <center><?php echo $d['nama_kelas']; ?>
                        </td>
                        <td>
                            <center><?php echo $d['tingkat']; ?>
                        </td>
                        <td>
                            <center> <a type="button" class="btn btn-danger btn-sm" href="kelas_hapus.php?id_kelas=<?php echo $d['id_kelas']; ?>"
                              onclick="return confirm('Anda yakin Hapus data kelas <?php echo $d['nama_kelas']; ?> ?')">Hapus</a>
                        </td>
                        <td>
                            <center><a type="button" class="btn btn-primary btn-sm" href="kelas_edit.php?id_kelas=<?php echo $d['id_kelas'] ?>">Edit</a>
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
