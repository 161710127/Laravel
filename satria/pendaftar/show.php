<!DOCTYPE html>
<html>
<head>
<title>Show</title>
<br><fieldset style="width : 50%; margin: auto;">
<center><legend>Tampilkan Data Penguji</legend></center>
<?php
include('koneksi.php');
	$id=$_GET['id'];
	$b =mysqli_query($koneksi,"SELECT * FROM pendaftar WHERE id='$id'");
	$data = mysqli_fetch_array($b);
	?>
	<p>
		ID
		<input type="number" class="form-control" value="<?php echo $data['id'];?>" readonly>
	</p>
	<p>
		Nama
		<input type="text" class="form-control" value="<?php echo $data['nama'];?>" readonly>
	</p>
	<p>
		Tempat Lahir
		<input type="text" class="form-control" value="<?php echo $data['tempat_lahir'];?>" readonly>
	</p>
	<p>
		Tanggal Lahir
		<input type="date" class="form-control" value="<?php echo $data['tanggal_lahir'];?>" readonly>
	</p>
	<p>
		Jenis Kelamin
		<input type="text" class="form-control" value="<?php echo $data['jenis_kelamin'];?>" readonly>
	</p>
	<p>
		Agama
		<input type="text" class="form-control" value="<?php echo $data['agama'];?>" readonly>
	</p>
	<p>
		Nomor Telepon
		<input type="text" class="form-control" value="<?php echo $data['phone'];?>" readonly>
	</p>
	</font>
</fieldset><br>
<center><a href="lihatdata.php">&Lt;Kembali Ke Tabel Pendaftar</a></center>
</body>
</html>