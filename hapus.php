<?php
$checkrow=$_POST[checkrow];
include "koneksi.php";
foreach($checkrow as $id){
		if(mysql_query("delete from mahasiswa where id=".$id)){
    //if(mysql_query("UPDATE mahasiswa set status = 1 where id=".$id)){
			echo "<div align=center>Hapus record dengan id=".$id."--Sukses</div><br>";
		}else{
			echo "<div align=center>Hapus record dengan id=".$id."--Gagal</div><br>";
		}	
	}
 header("location:index.php");    
?>
