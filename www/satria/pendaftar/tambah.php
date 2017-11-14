<!DOCTYPE html>
<html>
<head>
<title>Tambah</title>
</head>
<body>
<br><fieldset style="width : 50%; margin: auto;">
<center><legend>Tambah Data Pendaftar</legend></center>
<form action="simpan.php" method="post">
<br>
	<p>
			Nama
			<input type="text" name="nama" class="form-control">
		</p>
		<p>
			Tempat Lahir
			<input type="text" name="tempat_lahir" class="form-control">
		</p>
		<p>
			Tanggal Lahir
			<input type="date" name="tanggal_lahir" class="form-control">
		</p>
		<p>
			Jenis Kelamin
			<input type="text" name="jenis_kelamin" class="form-control"
		</p>
		<p>
			Agama
			<input type="text" name="agama" class="form-control">
		</p>
		<p>
			Nomor Telepon
			<input type="number" name="phone" class="form-control">
		</p>
	<p>
		<input type="submit" value="Simpan" />
		<input type="reset" value="Reset" onclick="return confirm ('hapus data yang telah di input ?')">
	</p>
</form>
</fieldset>
<br />
<center>
	<a href="lihatdata.php">&Lt;Kembali Ke Tabel Penguji</a>
</center>
</body>
</html>