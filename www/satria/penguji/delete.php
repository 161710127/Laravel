<?php
$id =$_GET['id'];
$delete ="DELETE FROM penguji WHERE id='$id'";
mysqli_query($koneksi,$delete);
header("location:delete.php");
?>