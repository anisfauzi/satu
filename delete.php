<?php
$id = $_GET['id'];
include "koneksi.php";
$sql = "DELETE FROM mahasiswa where id='$id'";
mysql_query($sql,$koneksi);
header("location:index.php"); 
?> 
