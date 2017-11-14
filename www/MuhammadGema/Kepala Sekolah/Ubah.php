<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KEPALA SEKOLAH</title>
	<link href="/Boots/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
	include('/laragon/www/debe.php');
	$id =$_GET['id'];
	$c =mysqli_query($koneksi,"SELECT kepsek.id,kepsek.nip,kepsek.nama FROM kepsek WHERE kepsek.id='$id'");
	$data =mysqli_fetch_array($c);
?>
	<br><fieldset style="width: 50%; margin: auto;">
	<center><legend>Ubah Data KEPSEK</legend></center>
	<form action="editproses.php" method="post">
	<p>
		NIP
		<input type="number" name="a" class="form-control" value="<?php echo $data['nip'];?>">
	</p>
	<p>
		Nama
		<input type="text" name="b" class="form-control" value="<?php echo $data['nama'];?>">
	</p>
	<p>
		<input type="submit" class="btn btn-success" value="Simpan">
	</p>
	</form>
	</fieldset><br />
	<center><a href="index.php" class="btn btn-primary">&Lt; Kembali Ke Tabel KEPSEK</a></center>
</font>
</body>
</html>