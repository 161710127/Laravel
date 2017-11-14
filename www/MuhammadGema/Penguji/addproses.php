<?php
include('/laragon/www/debe.php');
$id =$_POST['id'];
$nama =$_POST['a'];
$jabatan =$_POST['b'];
$edit ="INSERT INTO penguji SET nama='$nama',jabatan='$jabatan'";
mysqli_query($koneksi,$edit);
header("location:index.php");
?>