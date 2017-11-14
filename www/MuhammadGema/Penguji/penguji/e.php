<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="/a/a.jpg" type="image/x-icon">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PENGUJI</title>
	<link rel="stylesheet" type="text/css" href="/uts/c.css">
	<link href="/uts/Bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/uts/Bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
	<link href="/uts/Bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
	<link href="/uts/Bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<font face="comic sans ms" color="black">
<br><fieldset style="width : 50%; margin: auto;">
<center><legend>Tambah Data Penguji</legend></center>
<form action="sd.php" method="post">
<br>
	<p>
		Nama
		<input type="text" name="a" class="form-control" required/>
	</p>
	<p>
		Jabatan
		<input type="text" name="b" class="form-control" required/>
	</p>
	<p>
		<input type="submit" class="btn btn-success" value="Simpan" />
		<input type="reset" class="btn btn-danger" value="Reset" onclick="return confirm ('hapus data yang telah di input ?')">
	</p>
</form>
</fieldset>
<br />
<center>
	<a href="a.php" class="btn btn-primary">&Lt;Kembali Ke Tabel Penguji</a>
</center>
</body>
</html>