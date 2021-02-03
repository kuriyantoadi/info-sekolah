<?php include('header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
                <h3 style="margin-top:  25px;"><b>Tambah Guru</b></h3>
            </center>
            <br>
            <!-- font ganti jenis -->
        </div>

    </div>

    <?php
    include('../koneksi.php');
    ?>

    <form class="" action="guru_tambah_update.php" method="post" enctype="multipart/form-data">

        <table class="table table-bordered">
            <tr>
                <td>
                    Username Guru
                </td>
                <td>
                    <input type="text" class="form-control" name="username" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="text" class="form-control" name="password" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    NIP Guru
                </td>
                <td>
                    <input type="text" class="form-control" name="nip" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    Nama Guru
                </td>
                <td>
                    <input type="text" class="form-control" name="nama_guru" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    Tugas Tambahan
                </td>
                <td>
                    <input type="text" class="form-control" name="tugas_tambahan" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    Wali Kelas
                </td>
                <td>
                    <select class="form-control" name="kode_kelas" required>
                        <option value=""> Pilih Kelas</option>
                        <option value="-"> Bukan Wali Kelas</option>
                        <?php
                        $data = mysqli_query($koneksi, "select * from tb_kelas");
                        while ($d1 = mysqli_fetch_array($data)) {
                        ?>
                            <option value="<?php echo $d1['kode_kelas'] ?>"><?php echo $d1['nama_kelas'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Mata Pelajaran
                </td>
                <td>
                    <select class="form-control" name="kode_kelas" required>
                        <option value=""> Pilih Mata Pelajaran</option>
                        <option value="-"> Tidak Mengajar</option>
                        <?php
                        $data = mysqli_query($koneksi, "select * from tb_mapel");
                        while ($d1 = mysqli_fetch_array($data)) {
                        ?>
                        <option value="<?php echo $d1['nama_mapel'] ?>"><?php echo $d1['nama_mapel'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Status Pegawai
                </td>
                <td>
                    <select class="form-control" name="s_pegawai" required>
                        <option value=""> Pilih Status Pegawai</option>
                        <option value="ASN"> ASN</option>
                        <option value="Non ASN">Non ASN</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Bagian Pegawai
                </td>
                <td>
                    <select class="form-control" name="bag_pegawai" required>
                        <option value=""> Pilih Bagian Pegawai</option>
                        <option value="Guru"> ASN</option>
                        <option value="TU">Non ASN</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Kondisi Pegawai
                </td>
                <td>
                    <select class="form-control" name="kondisi_peg" required>
                        <option value=""> Pilih Kondisi Pegawai</option>
                        <option value="Aktif"> Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Photo
                </td>
                <td>
                    <input type="file" name="photo" class="form-control-file" id="raport" required>
                </td>
            </tr>
        </table>



        <center>
            <input type="submit" class="btn btn-info btn" style="margin-bottom: 50px" name="upload" value="simpan">
        </center>
    </form>

</div>


</body>

</html>