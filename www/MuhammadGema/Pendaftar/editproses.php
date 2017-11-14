<?php
include('/laragon/www/debe.php');
$id =$_POST['id'];
$nama =$_POST['a'];
$tmp =$_POST['b'];
$tgl =$_POST['c'];
$jk =$_POST['d'];
$agama =$_POST['e'];
$phone =$_POST['f'];
$edit ="UPDATE pendaftar SET nama='$nama',tempat_lahir='$tmp',tanggal_lahir='$tgl',jenis_kelamin='$jk',agama='$agama',phone='$phone'";
mysqli_query($koneksi,$edit);
header("location:index.php");
?>