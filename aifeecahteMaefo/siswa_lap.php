<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php
      $cetak="Data Siswa";
      header("Content-type: application/vnd-ms-excel");
      header("Content-Disposition: attachment; filename=$cetak.xls");
    ?>
</head>
<body>

	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		table{
			margin: 20px auto;
			border-collapse: collapse;
		}
		table td,
		table td{
			border: 1px solid #3c3c3c;
			padding: 3px 8px;
		}
		a{
			background: blue;
			color: #fff;
			padding: 8px 10px;
			text-decoration: none;
			border-radius: 2px;
		}
		</style>

	<table border="0 ">
		<tr>
			<th>id_siswa</th>
			<th>nisn</th>
			<th>username</th>
			<th>Password</th>
			<th>nama_siswa</th>
			<th>kode_kelas</th>
			<th>tahun_angkatan</th>
			<th>Status</th>
			<th>raport_semester1</th>
			<th>raport_semester2</th>
			<th>raport_semester3</th>
			<th>raport_semester4</th>
			<th>raport_semester5</th>
			<th>raport_scan_semester1</th>
			<th>raport_scan_semester2</th>
			<th>raport_scan_semester3</th>
			<th>raport_scan_semester4</th>
			<th>raport_scan_semester5</th>
			<th>skl</th>
			<th>skhun</th>
			<th>leg_ijazah</th>
			<th>ijazah</th>
			<th>photo</th>

		</tr>
		<?php
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from tb_siswa");
        while ($d = mysqli_fetch_array($data)) {
            ?>
			<tr>
				<td><?= $d['id_siswa'] ?></td>
				<td><?= $d['nisn'] ?></td>
				<td><?= $d['username'] ?></td>
				<td><?= $d['password'] ?></td>
				<td><?= $d['nama_siswa'] ?></td>
				<td><?= $d['kode_kelas'] ?></td>
				<td><?= $d['tahun_angkatan'] ?></td>
				<td><?= $d['status'] ?></td>
				<td><?= $d['raport_sem1'] ?></td>
				<td><?= $d['raport_sem2'] ?></td>
				<td><?= $d['raport_sem3'] ?></td>
				<td><?= $d['raport_sem4'] ?></td>
				<td><?= $d['raport_sem5'] ?></td>
				<td><?= $d['raport_scan_sem1'] ?></td>
				<td><?= $d['raport_scan_sem2'] ?></td>
				<td><?= $d['raport_scan_sem3'] ?></td>
				<td><?= $d['raport_scan_sem4'] ?></td>
				<td><?= $d['raport_scan_sem5'] ?></td>
				<td><?= $d['skl'] ?></td>
				<td><?= $d['skhun'] ?></td>
				<td><?= $d['leg_ijazah'] ?></td>
				<td><?= $d['ijazah'] ?></td>
				<td><?= $d['photo'] ?></td>
			</tr>
			<?php
        }
        ?>

		</table>
</body>
</html>
