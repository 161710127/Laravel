<?php
include('/laragon/www/debe.php');
$id =$_POST['id'];
$nip =$_POST['a'];
$nama =$_POST['b'];
$edit ="UPDATE kepsek SET nip='$nip',nama='$nama'";
mysqli_query($koneksi,$edit);
header("location:index.php");
?>