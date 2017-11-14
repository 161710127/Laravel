<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kepala Sekolah</title>
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
<center><legend><h1>Kepala Sekolah</h1></legend></center>
<center><table class="table table-bordered table-striped">
  <th>Nomor</th>
  <th>nip</th>
  <th>Nama</th>
  <th colspan="1"><center>Opsi</center></th>
<?php
include('/laragon/www/debe.php');
	$a =mysqli_query($koneksi,"SELECT * FROM kepsek");
	$no = 1;
	foreach ($a as $data) {
	echo "<tr>
			<td>$no</td>
			<td>".$data ['nip']."</td>
			<td>".$data ['nama']."</td>
			<td><a href='Ubah.php?id=$data[id]'>Ubah</a></td>
		  </tr>";
		  $no++;
	}
?>
</table>
</center>
</fieldset>
<br>
</font>
</body>
</html>