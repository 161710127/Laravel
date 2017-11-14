<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
</head>
<body>
<fieldset style="width : 50%; margin: auto;">
<center><legend>Edit Data Penguji</legend></center>
<form action="edit.php" method="post">
<?php
	include('koneksi.php');
	$id =$_GET['id'];
	$a =mysqli_query($koneksi,"SELECT * FROM pendaftar WHERE id='$id'");
	$data =mysqli_fetch_array($a);
?>
		<p>
			Nama
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>">
		</p>
		<p>
			Tempat Lahir
			<input type="text" name="Tempat Lahir" class="form-control" value="<?php echo $data['tempat_lahir'];?>">
		</p>
		<p>
			Tanggal Lahir
			<input type="date" name="Tanggal Lahir" class=form-control" value="<?php echo $data['tanggal_lahir'];?>">
		</p>
		<p>
			Jenis Kelamin
			<input type="text" name="jenis kelamin" class="form-control" value="<?php echo $data['jenis_kelamin'];?>">
		</p>
		<p>
			Agama
			<input type="text" name="agama" class="form-control" value="<?php echo $data['agama'];?>">
		</p>
		<p>
			Phone
			<input type="number" name="phone" class="form-control" value="<?php echo $data['phone'];?>">
		</p>
		<p>
			<input type="submit" value="Simpan">
		</p>
	</form>
	</fieldset><br />
	<center><a href="lihatdata.php" >&Lt; Kembali Ke Tabel Penguji</a></center>
</font>
</body>
</html>