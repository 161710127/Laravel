<?php
include 'koneksi.php';
$id =$_GET['id'];
$tambah ="UPDATE FROM pendaftar WHERE id='$id'";
mysqli_query($koneksi,$tambah);
header("location:lihatdata.php");
?>