<?php include('header.php') ?>

<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
  <div class="card flex-fill w-100">
    <div class="card-header">
      <h3>
        <center>Data Repository</h4>
    </div>
    <div class="card-body px-4">
      <div class="row mb-3">
        <div class="col-sm">
          </a><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahFileRepo">Tambah File</button>
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
          Cari Repository : <input type='text' class="form-control" id='input' onkeyup='searchTable()'>
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
              <center>Tanggal Upload
            </th>
            <th>
              <center>Nama Repo
            </th>
            <th>
              <center>Nama File
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
    $data = mysqli_query($koneksi, "SELECT * from tb_repo");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
          <td>
            <center><?php echo $no++ ?>
          </td>
          <td>
            <?php echo $d['tgl_upload']; ?>
          </td>
          <td>
            <?php echo $d['nama_repo']; ?>
          </td>
          <td>
            <?php echo $d['file_repo']; ?>
          </td>
          <td>
            <center>
              <a type="button" class="btn btn-danger btn-sm" href="repo_hapus.php?id_repo=<?php echo $d['id_repo'] ?>&file_repo=<?= $d['file_repo'] ?>" onclick="return confirm('Anda yakin Hapus  <?php echo $d['nama_repo']; ?> ?')">Hapus</a>
              <a type="button" class="btn btn-info btn-sm" href="repo_edit.php?id_repo=<?php echo $d['id_repo']; ?>">Edit</a>
              <a type="button" class="btn btn-success btn-sm" href='../asset/repository_sk/<?= $d['file_repo'] ?>'>Unduh</a>
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
