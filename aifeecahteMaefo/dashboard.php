<?php
include('header.php');
include('function.php')

?>

<div class="row">

	<div class="col-sm-3">
		<div class="card">
			<div class="card-body">
				<h1 class="mt-1 mb-3"><?= $jml_siswa ?></h1>
				<div class="mb-1">
					<span class="text-muted">Jumlah Siswa</span>
				</div>
			</div>
		</div>
	</div>


	<div class="col-sm-3">
		<div class="card">
			<div class="card-body">
				<h1 class="mt-1 mb-3"><?= $jml_guru ?></h1>
				<div class="mb-1">
					<span class="text-muted">Jumlah Guru & Karyawan TU</span>
				</div>
			</div>
		</div>
	</div>


	<div class="col-sm-3">
		<div class="card">
			<div class="card-body">
				<h1 class="mt-1 mb-3"><?= $jml_kelas ?></h1>
				<div class="mb-1">
					<span class="text-muted">Jumlah Kelas</span>
				</div>
			</div>
		</div>
	</div>


	<div class="col-sm-3">
		<div class="card">
			<div class="card-body">
				<h1 class="mt-1 mb-3"><?= $jml_mapel ?></h1>
				<div class="mb-1">
					<span class="text-muted">Jumlah Mata Pelajaran</span>
				</div>
			</div>
		</div>
	</div>

</div>

<?php include('footer.php') ?>
