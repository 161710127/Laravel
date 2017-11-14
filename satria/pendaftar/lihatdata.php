<!DOCTYPE html>
<html>
<head>
<title>Pendaftar</title>
</head>
<body>
<center>
<table border="3">
  <th>Nomor</th>
  <th>Nama</th>
  <th>Tempat Lahir</th>
  <th>Tanggal Lahir</th>
  <th>Jenis Kelamin</th>
  <th>Agama</th>
  <th>Nomor Telepon</th>
  <th colspan="3"><center>Opsi</center></th>
<?php
include('koneksi.php');
$ma =mysqli_query($koneksi,"SELECT * FROM pendaftar");
$no = 1;
foreach ($ma as $data) {
echo "<tr>
<td>$no</td>
<td>".$data ['nama']."</td>
<td>".$data ['tempat_lahir']."</td>
<td>".$data ['tanggal_lahir']."</td>
<td>".$data ['jenis_kelamin']."</td>
<td>".$data ['agama']."</td>
<td>".$data ['phone']."</td>
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
<center><a href="tambah.php">&plus;Tambah Data Jurusan</a></center>
</font>
</body>
</html>