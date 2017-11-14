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
	$c =mysqli_query($koneksi,"SELECT jurusan.id,jurusan.nama,jurusan.nilai_lulus FROM jurusan WHERE jurusan.id='$id'");
	$data =mysqli_fetch_array($c);
?>
	<br><fieldset style="width: 50%; margin: auto;">
	<center><legend>Ubah Data Jurusan</legend></center>
	<form action="editproses.php" method="post">
	<p>
		Nama
		<input type="text" name="a" class="form-control" value="<?php echo $data['nama'];?>">
	</p>
	<p>
		Nilai lulus
		<input type="text" name="b" class="form-control" value="<?php echo $data['nilai_lulus'];?>">
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