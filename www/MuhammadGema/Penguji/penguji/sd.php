<?php
include('/laragon/www/debe.php');
$id =$_POST['id'];
$nama =$_POST['a'];
$jabatan =$_POST['b'];
$edit ="UPDATE penguji SET nama='$nama',jabatan='$jabatan' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:a.php");
?>