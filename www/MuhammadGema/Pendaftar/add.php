
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<br><fieldset style="width : 50%; margin: auto;">
<center><legend>Tambah Data Pendaftar</legend></center>
<link href="/Boots/css/bootstrap.min.css" rel="stylesheet">
<form action="addproses.php" method="post">
<br>
	<p>
			Nama
			<input type="text" name="a" class="form-control" ">
		</p>
		<p>
			Tempat Lahir
			<input type="text" name="b" class="form-control" ">
		</p>
		<p>
			Tanggal Lahir
			<input type="date" name="c" class="form-control" ">
		</p>
		<p>
			Jenis Kelamin
			<input type="text" name="d" class="form-control" ">
		</p>
		<p>
			Agama
			<input type="text" name="e" class="form-control" ">
		</p>
		<p>
			Handphone
			<input type="number" name="f" class="form-control" ">
		</p>
		<p>
			<input type="submit" class="btn btn-success" value="Simpan">
		</p>
	<p>
		<input type="submit" class="btn btn-success" value="Simpan" />
		<input type="reset" class="btn btn-danger" value="Reset" onclick="return confirm ('hapus data yang telah di input ?')">
	</p>
</form>
</fieldset>
<br />
<center>
	<a href="index.php" class="btn btn-primary">&Lt;Kembali Ke Tabel Penguji</a>
</center>
</body>
</html>