<!DOCTYPE html>
<html>
<head>
</head>
<body>
<fieldset style="width : 50%; margin: auto;">
<center><legend>Ubah Data Penguji</legend></center>
<link href="/Boots/css/bootstrap.min.css" rel="stylesheet">
<form action="editproses.php" method="post">
<?php
	include('/laragon/www/debe.php');
	$id =$_GET['id'];
	$c =mysqli_query($koneksi,"SELECT * FROM pendaftar WHERE id='$id'");
	$data =mysqli_fetch_array($c);
?>
		<p>
			Nama
			<input type="text" name="a" class="form-control" value="<?php echo $data['nama'];?>">
		</p>
		<p>
			Tempat Lahir
			<input type="text" name="b" class="form-control" value="<?php echo $data['tempat_lahir'];?>">
		</p>
		<p>
			Tanggal Lahir
			<input type="date" name="c" class="form-control" value="<?php echo $data['tanggal_lahir'];?>">
		</p>
		<p>
			Jenis Kelamin
			<input type="text" name="d" class="form-control" value="<?php echo $data['jenis_kelamin'];?>">
		</p>
		<p>
			Agama
			<input type="text" name="e" class="form-control" value="<?php echo $data['agama'];?>">
		</p>
		<p>
			Handphone
			<input type="number" name="f" class="form-control" value="<?php echo $data['phone'];?>">
		</p>
		<p>
			<input type="submit" class="btn btn-success" value="Simpan">
		</p>
	</form>
	</fieldset><br />
	<center><a href="index.php" class="btn btn-primary">&Lt; Kembali Ke Tabel Penguji</a></center>
</font>
</body>
</html>