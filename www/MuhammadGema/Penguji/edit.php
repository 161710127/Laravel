<!DOCTYPE html>
<html>
<head>
</head>
<body>
<fieldset style="width : 50%; margin: auto;">
<center><legend>Ubah Data Penguji</legend></center>
<form action="editproses.php" method="post">
<?php
	include('/laragon/www/debe.php');
	$id =$_GET['id'];
	$c =mysqli_query($koneksi,"SELECT * FROM penguji WHERE id='$id'");
	$data =mysqli_fetch_array($c);
?>
		<p>
			Nama
			<input type="text" name="a" class="form-control" value="<?php echo $data['nama'];?>">
		</p>
		<p>
			Jabatan
			<input type="text" name="b" class="form-control" value="<?php echo $data['jabatan'];?>">
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