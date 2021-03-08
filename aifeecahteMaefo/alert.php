<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "tambah-berhasil") {
        echo "
        <div class='alert alert-primary alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Tambah Data <strong>Berhasil</strong>
          </div>
        </div>
        ";
    } elseif ($_GET['pesan'] == "tambah-gagal") {
        echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Tambah Data <strong>Gagal</strong>
          </div>
        </div>
        ";
    } elseif ($_GET['pesan'] == "hapus-berhasil") {
        echo "
        <div class='alert alert-primary alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Hapus Data <strong>Berhasil</strong>
          </div>
        </div>
        ";
    } elseif ($_GET['pesan'] == "hapus-gagal") {
        echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Hapus Data <strong>Gagal</strong>
          </div>
        </div>
      ";
    } elseif ($_GET['pesan'] == "edit-berhasil") {
        echo "
        <div class='alert alert-primary alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Edit Data <strong>Berhasil</strong>
          </div>
        </div>
        ";
    } elseif ($_GET['pesan'] == "edit-gagal") {
        echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Edit Data <strong>Gagal</strong>
          </div>
        </div>
      ";
    } elseif ($_GET['pesan'] == "password-salah") {
    echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Password konfirmasi salah <strong>ganti password gagal</strong>
          </div>
        </div>
      ";
    } elseif ($_GET['pesan'] == "password-diganti") {
    echo "
          <div class='alert alert-primary alert-dismissible' role='alert'>
            <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
            <div class='alert-message'>
              <strong>Berhasil</strong> Menganti Password
            </div>
          </div>
          ";
      } 
}
?>
