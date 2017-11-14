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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/uts/kepsek/kepsek.php">KEPSEK</a></li>
        <li class="active"><a href="/uts/penguji/a.php">PENGUJI</a></li>
        <li><a href="/a/kelas/kelas.php">PENDAFTAR</a></li>
        <li><a href="/a/jurusan/jurusan.php">JURUSAN</a></li>
        <li><a href="/a/kelas/kelas.php">PENGUJI</a></li>
        <li><a href="/a/kelas/kelas.php">HASIL</a></li>
      </ul>
      </div>
    </div>
</nav>
	<br>
  <br>
  <fieldset style="width : 85%; margin: auto;">
<center><legend>Tabel Data Penguji</legend></center>
<center><table border="2" class="table table-striped">
  <th>Nomor</th>
  <th>Nama</th>
  <th>Jabatan</th>
  <th colspan="3"><center>Opsi</center></th>
<?php
include('/laragon/www/debe.php');
	$a =mysqli_query($koneksi,"SELECT * FROM penguji");
	$no = 1;
	foreach ($a as $data) {
	echo "<tr class='active'>
			<td>$no</td>
			<td>".$data ['nama']."</td>
			<td>".$data ['jabatan']."</td>
			<td><a class ='btn btn-info'href='b.php?id=$data[id]'>Show</a></td>
			<td><a class ='btn btn-success'href='d.php?id=$data[id]'>Ubah</a></td>
			<td><a class ='btn btn-danger'href='a.php?id=$data[id]'>Hapus</a></td>
		  </tr>";
		  $no++;
	}
?>
</table>
</center>
</fieldset>
<br>
<center><a href="e.php" class="btn btn-primary">&plus;Tambah Data Penguji</a></center>
</font>
</body>
</html>