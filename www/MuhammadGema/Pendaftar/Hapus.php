<?php
include('/laragon/www/debe.php');
$id =$_GET['id'];
$delete ="DELETE FROM pendaftar WHERE id='$id'";
mysqli_query($koneksi,$delete);
header("location:index.php");
?>