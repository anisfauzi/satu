<?php
$id = $_POST['id'];
$nama = $_POST[nama];
$alamat = $_POST[alamat];
$semester = $_POST[semester];
//$status = $_POST[status];
$status = !empty($_POST["status"]) ? 'Aktif' : 'Non-Aktif';
$jenis_kelamin = $_POST[jenis_kelamin];
$email = $_POST[email];
include "koneksi.php";
$fileType = $_FILES['picture']['type'];
$fileName = $_FILES['picture']['name']; //get the file name
$fileSize = $_FILES['picture']['size']; //get the size
$fileError = $_FILES['picture']['error']; //get the error when upload
if($fileSize < 10240 && $fileError == 0 && $fileType == 'image/jpeg'){ //check if the file is corrupt or error
    //$move = move_uploaded_file($_FILES['picture']['tmp_name'], '/image/'.$fileName); //save image to the folder
   $move = copy($_FILES['picture']['tmp_name'],'image/'.$fileName);
   if($move){
   $q = "INSERT INTO mahasiswa (id,nama,alamat,email,semester,status,jenis_kelamin,filename,foto) 
       VALUES ('','$nama','$alamat','$email','$semester','$status','$jenis_kelamin','$fileName','image/$fileName')";
   mysql_query($q,$koneksi) or die(mysql_error()); 
     
   header("location:index.php?");
   
    
   } else{
   echo "<h3>Failed! </h3>";
    }
} 

else if($fileType != 'image/jpeg') {
   echo "<h2>Failed to Upload </h2> ";
   echo "<b>Foto harus diisi...</b><br/>";
   echo "<br/><b> Typefile harus jpg/jpeg</b> <br/> File kamu: ".$fileType;
   echo "<br/> Nama file kamu : ".$fileName ; echo "<br/>";
   ?><a href="javascript:history.go(-1)"><- back </a><?php }
else if($fileSize > 10240 ) {
   echo "<h2>Failed to Upload </h2> ";
   echo "<br/> <b>Ukuran file max 10240 bit ( 10 kb )</b> <br/> File kamu: ".$fileSize;
   echo "<br/> Nama file kamu : ".$fileName ; echo "<br/>";
   ?><a href="javascript:history.go(-1)"><- back </a><?php }
else {
   echo "<h2>Failed to Upload </h2> ";
   echo "File error : ".$fileError ; 
   echo " Silakan cek lagi...!!!"; echo "<br/>";
   ?><a href="javascript:history.go(-1)"><- back</a><?php }

?>
