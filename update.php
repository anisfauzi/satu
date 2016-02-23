
<?php
$id = $_POST[id];
$nama = $_POST[nama];
$alamat = $_POST[alamat];
$semester = $_POST[semester];
//$status = $_POST[status];
$status = !empty($_POST["status"]) ? 'Aktif' : 'Non-Aktif';
$jenis_kelamin = $_POST[jenis_kelamin];
$email = $_POST[email];
include "koneksi.php";
mysql_query("update mahasiswa set nama='$nama',alamat='$alamat',email='$email',semester='$semester',status='$status',jenis_kelamin='$jenis_kelamin' where id='$id'",$koneksi) or die(mysql_error());
//header("location:index.php"); 
echo"<script>location='newedit.php?id=$id'</script>";
?>

