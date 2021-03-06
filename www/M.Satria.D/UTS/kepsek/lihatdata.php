<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Data Kepala Sekolah</title>

		<link href="/UTS/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-warning">
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
					<li class="active"><a href="/UTS/kepsek/lihatdata.php"><span class="label label-primary">Kepala Sekolah</span></a></li>
					<li><a href="/UTS/penguji/lihatdata.php"><span class="label label-info">Penguji</span></a></li>
					<li><a href="/UTS/jurusan/lihatdata.php"><span class="label label-warning">Jurusan</span></a></li>
					<li><a href="/UTS/pendaftar/lihatdata.php"><span class="label label-danger">Pendaftar</span></a></li>
					<li><a href="/UTS/hasil/lihatdata.php"><span class="label label-default">Hasil</span></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<?php
		include ('koneksi.php');
		$kep = mysqli_query ($koneksi, "SELECT * FROM kepsek");
		foreach ($kep as $data) {
	?>
	<div class="container">
		<div class="panel panel-default" align="center">
			<div class="panel-heading"><center>Kepala Sekolah</center></div>
			<div class="panel-body">
				<table>
					<center><h2>Kepala Sekolah</h2></center>
					<p>
						<h3><?php echo $data['nama'];?></h3>
					</p>
					<p>
						NIP : <?php echo $data['nip']?>
					</p>
					<?php
					echo "<tr>
					<td><a href='edit.php?id=$data[id]' class='btn btn-success'>Ubah</td>
					</tr>";
					?>
				</table>
			</div>
	<?php
		}
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/UTS/dist/js/bootstrap.min.js"></script>
</body>
</html>