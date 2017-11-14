<?php
include('/laragon/www/debe.php');
$id =$_POST['id'];
$nama =$_POST['a'];
$nilai =$_POST['b'];
$edit ="INSERT INTO jurusan SET nama='$nama',nilai_lulus='$nilai'";
mysqli_query($koneksi,$edit);
header("location:index.php");
?>