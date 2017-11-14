<!DOCTYPE html>
<html>
<head>

</head>
<body>
<center><legend><h1>Tabel Data Penguji</h1></legend></center>
<center><table border="2">
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
			<td><a href='Ubah.php?id=$data[id]'>Ubah</a></td>
			<td><a href='Hapus.php?id=$data[id]'>Hapus</a></td>
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