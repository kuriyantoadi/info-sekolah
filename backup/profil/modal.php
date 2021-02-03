<!-- Modal tampil guru -->

<!-- Awal Modal -->
<div class="modal fade bd-example-modal-lg" id="guru<?php echo $d['id_guru']; ?>" role="dialog">
    <!-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> -->
    <div class="modal-dialog  modal-lg">
        <div class="modal-dialog modal-lg">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h4>Detail Guru</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">NIP Guru :</label>
                            <div class="col-sm-8">
                                <p><?= $d['nip'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">Nama Guru :</label>
                            <div class="col-sm-8">
                                <p><?= $d['nama_guru'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">Tugas Tambahan :</label>
                            <div class="col-sm-8">
                                <p><?= $d['tugas_tambahan'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">Wali Kelas :</label>
                            <div class="col-sm-8">
                                <p><?= $d['kode_kelas'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">Mengajar :</label>
                            <div class="col-sm-8">
                                <p><?= $d['mengajar'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">Status Pegawai :</label>
                            <div class="col-sm-8">
                                <p><?= $d['s_pegawai'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">Bagian Pegawai :</label>
                            <div class="col-sm-8">
                                <p><?= $d['bag_pegawai'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">Kondisi Pegawai :</label>
                            <div class="col-sm-8">
                                <p><?= $d['kondisi_peg'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label font-weight-bold">Photo :</label>
                            <div class="col-sm-8">
                                <img src="../asset/photo_guru/<?= $d['photo'] ?>" height="100" width="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir modal -->