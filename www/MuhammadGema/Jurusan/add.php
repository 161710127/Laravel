
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<br><fieldset style="width : 50%; margin: auto;">
<center><legend>Tambah Data Penguji</legend></center>
<form action="addproses.php" method="post">
<br>
	<p>
		Nama Jurusan
		<input type="text" name="a" class="form-control" required/>
	</p>
	<p>
		Nilai Lulus
		<input type="number" name="b" class="form-control" required/>
	</p>
	<p>
		<input type="submit" class="btn btn-success" value="Simpan" />
		<input type="reset" class="btn btn-danger" value="Reset" onclick="return confirm ('hapus data yang telah di input ?')">
	</p>
</form>
</fieldset>
<br />
<center>
	<a href="index.php" class="btn btn-primary">&Lt;Kembali Ke Tabel Jurusan</a>
</center>
</body>
</html>