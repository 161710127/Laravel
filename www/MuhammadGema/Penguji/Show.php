
<!DOCTYPE html>
<html>
<head>
<title>Data Penguji</title>
<link href="/Boots/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav navbar">
                    <!-- Authentication Links -->
                                                                    <!-- <li><a href="http://server.app/uts-xi/register">Register</a></li> -->
                                           <li><a href="/MuhammadGema/Pendaftar">Pendaftar</a></li>
                        <li><a href="/MuhammadGema/Jurusan">Jurusan</a></li>
                        <li><a href="/MuhammadGema/Penguji">Penguji</a></li>
                        <li><a href="/MuhammadGema/Kepala Sekolah">Kepala Sekolah</a></li>
                        <li><a href="/MuhammadGema/Hasil">Hasil</a></li>

                                                           </ul>
            </div>
        </div>
<br><fieldset style="width : 50%; margin: auto;">
<center><legend>Tampilkan Data Penguji</legend></center>
<?php
include('/laragon/www/debe.php');
	$id=$_GET['id'];
	$b =mysqli_query($koneksi,"SELECT * FROM penguji WHERE id='$id'");
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
		Jabatan
		<input type="text" class="form-control" value="<?php echo $data['jabatan'];?>" readonly>
	</p>
	</font>
</fieldset><br>
<center><a href="index.php" class="btn btn-primary">&Lt;Kembali Ke Tabel Penguji</a></center>
</body>
</html>