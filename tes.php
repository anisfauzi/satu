<?php
/*include "koneksi.php";
$Q = "select * from semester";
$hasil = mysql_query($Q,$koneksi);
while ($row = mysql_fetch_array($hasil)) {
// echo $row[no];
echo "<option value= $row[semester] >$row[semester]</option><br/>"; }
include "koneksi.php";
                         
*/
/*
include "koneksi.php";
$sql = "SELECT * FROM mahasiswa ";
$hasil = mysql_query($sql);
while ($row = mysql_fetch_array($hasil)) {
echo "<tr><td> $row[id] </td><td>$row[nama] </td><td>$row[alamat]</td><td>$row[semester]</td><td>$row[status]</td><td>$row[jenis]</td>
      <td><a href= $row[id]> EDIT</a></td> <td><a href= $row[id]> DELETE</a></td></tr><br/>";}
*/
$id = 6; //$_GET['id'];
include "koneksi.php";
$q = "SELECT * FROM mahasiswa WHERE id = '$id'";
$query = mysql_query($q);
while($row = mysql_fetch_array($query))
{ 
    $id = $row[id];
    $nama = $row[nama];
    $alamat = $row[alamat];
    $semester = $row[semester];
    $status = $row[status];

 echo $status,$nama,$id;} 
?>

