<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Penguji</title>
<link rel="icon" type="image/x-icon" href="http://server.app/uts-xi/pp.jpg">
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
<center><legend><h1>Tabel Data Penguji</h1></legend></center>
<center><table class="table table-bordered table-striped">
  <th>Nomor</th>
  <th>Nama</th>
  <th>Jabatan</th>
  <th colspan="3"><center>Opsi</center></th>
<?php
include('/laragon/www/debe.php');
	$a =mysqli_query($koneksi,"SELECT * FROM penguji");
	$no = 1;
	foreach ($a as $data) {
	echo "<tr>
			<td>$no</td>
			<td>".$data ['nama']."</td>
			<td>".$data ['jabatan']."</td>
			<td><a href='Show.php?id=$data[id]'>Show</a></td>
			<td><a href='edit.php?id=$data[id]'>Ubah</a></td>
			<td><a href='delete.php?id=$data[id]'>Hapus</a></td>
		  </tr>";
		  $no++;
	}
?>
</table>
</center>
</fieldset>
<br>
<center><a href="add.php">&plus;Tambah Data Penguji</a></center>
</font>
</body>
</html>