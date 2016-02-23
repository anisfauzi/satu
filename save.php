<?php
$nama = $_POST[nama];
$alamat = $_POST[alamat];
$semester = $_POST[semester];
$status = $_POST[status];
$jenis_kelamin = $_POST[jenis_kelamin];
$email = $_POST[email];
include "koneksi.php";
$Q = "INSERT INTO mahasiswa (id,nama,alamat,email,semester,status,jenis_kelamin) 
       VALUES ('','$nama','$alamat','$email','$semester','$status','$jenis_kelamin')";
mysql_query($Q);
header("location:index.php");
?>
