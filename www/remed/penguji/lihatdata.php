<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Penguji</title>

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
					<li><a href="/remed/kepsek/lihatdata.php">Kepala Sekolah</a></li>
					<li class="active"><a href="/remed/penguji/lihatdata.php">Penguji</a></li>
					<li><a href="/remed/jurusan/lihatdata.php">Jurusan</a></li>
					<li><a href="/remed/pendaftar/lihatdata.php">Pendaftar</a></li>
					<li><a href="/remed/hasil/lihatdata.php">Hasil</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<h1 align="center"> Data Penguji</h1>

	<div class="container">
		<br>
		<center>
			<div class="panel panel-primary">
				<div class="panel-heading"><center>Data Penguji</center></div>
				<div class="panel-body">
					<table class="table table-bordered">
						<th>Nomor</th>
						<th>Nama</th>
						<th>Jabatan</th>
						<th colspan="2">Action</th>
						<?php
						include ('koneksi.php');
						$peng = mysqli_query ($koneksi, "SELECT * FROM penguji");
						$no = 1;
						foreach ($peng as $data) {
							echo "<tr>
							<td>$no</td>
							<td>".$data['nama']."</td>
							<td>".$data['jabatan']."</td>
							<td><a href='edit.php?id=$data[id]' class='btn btn-info'>Ubah</td>
							<td><a href='delete.php?id=$data[id]' class='btn btn-danger'>Hapus</td>
							</tr>";
							$no ++;
						}
						?>
					</table>
				</center>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/remed/dist/js/bootstrap.min.js"></script>
	<center><a href="tambah.php" class="btn btn-primary">&plus; Tambah Data</a></center>
</body>
</html>