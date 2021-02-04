<?php include('header.php') ?>
<div class="container">
    <center>
        <h1>Membuat Modal dengan Bootstrap | www.malasngoding.com</h1>
    </center>
    <br />
    <!-- Tombol untuk menampilkan modal-->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buka Modal</button>

    <!-- Awal Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-dialog">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Bagian heading modal</h4>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        <p>bagian body modal.</p>
                    </div>
                    <!-- footer modal -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir modal -->
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                ...
            </div>
        </div>
    </div>

    </body>

    </html>