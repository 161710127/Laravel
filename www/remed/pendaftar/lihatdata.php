<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Pendaftar</title>

	<link href="/remed/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">SMK Assalaam</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/remed/kepsek/lihatdata.php"><span class="label label-default">Kepala Sekolah</span></a></li>
					<li><a href="/remed/penguji/lihatdata.php"><span class="label label-success">Penguji</span></a></li>
					<li><a href="/remed/jurusan/lihatdata.php"><span class="label label-warning">Jurusan</span></a></li>
					<li class="active"><a href="/remed/pendaftar/lihatdata.php"><span class="label label-danger">Pendaftar</span></a></li>
					<li><a href="/remed/hasil/lihatdata.php"><span class="label label-priamry">Hasil</span></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<h1 align="center">Data Pendaftar</h1>

	<div class="container">
		<br>
		<center>
			<div class="panel panel-primary">
				<div class="panel-heading"><center>Data Pendaftar</center></div>
				<div class="panel-body">
					<table class="table table-bordered">
						<th>Nomor</th>
						<th>Nama</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Agama</th>
						<th>Nomor Telepon</th>
						<th colspan="2">Action</th>
						<?php
						include ('koneksi.php');
						$pen = mysqli_query ($koneksi, "SELECT * FROM pendaftar");
						$no = 1;
						foreach ($pen as $data) {
							echo "<tr>
							<td>$no</td>
							<td>".$data['nama']."</td>
							<td>".$data['tempat_lahir']."</td>
							<td>".$data['tanggal_lahir']."</td>
							<td>".$data['jenis_kelamin']."</td>
							<td>".$data['agama']."</td>
							<td>".$data['phone']."</td>
							<td><a href='edit.php?id=$data[id]' class='btn btn-primary'>Ubah</td>
							<td><a href='delete.php?id=$data[id]' class='btn btn-danger'>Hapus</td>
							</tr>";
							$no ++;
						}
						?>
					</table>
				</div>
			</div>
		</center>
	</div>
	<center><a class="btn btn-primary" href="tambah.php">&plus; Tambah Data</a></center>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/remed/dist/js/bootstrap.min.js"></script>
</body>
</html>