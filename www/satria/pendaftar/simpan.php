<?php
include('koneksi.php');
$id =$_POST['id'];
$nama =$_POST['nama'];
$tempat_lahir =$_POST['tempat_lahir'];
$tanggal_lahir =$_POST['tanggal_lahir'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$agama =$_POST['agama'];
$phone =$_POST['Nomor Telepon'];
$edit ="UPDATE pendaftar SET nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',phone='$phone'";
mysqli_query($koneksi,$edit);
header("location:lihatdata.php");
?>