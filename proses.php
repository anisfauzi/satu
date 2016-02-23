<?php
$id = $_POST['id'];
include "koneksi.php";
$fileType = $_FILES['picture']['type'];
$fileName = $_FILES['picture']['name']; //get the file name
$fileSize = $_FILES['picture']['size']; //get the size
$fileError = $_FILES['picture']['error']; //get the error when upload
list($width, $height, $type, $attr) = getimagesize($_FILES['picture']['tmp_name']);
if($fileSize < 10240 && $fileError == 0 && $fileType == 'image/jpeg' && $width < 500 && $height < 200){ //check if the file is corrupt or error
    //$move = move_uploaded_file($_FILES['picture']['tmp_name'], '/image/'.$fileName); //save image to the folder
   $move = copy($_FILES['picture']['tmp_name'],'image/'.$fileName);
   if($move){
   mysql_query("update mahasiswa set filename = '$fileName',foto = 'image/$fileName' where id = '$id'",$koneksi) or die(mysql_error()); 
     /*  function redirect($loc){
	    echo "<script>window.location.href='".$loc."'</script>";
       }*/
   //header("location:index.php");
   echo"<script>location='newedit.php?id=$id'</script>";
   } else{
   echo "<h3>Failed! </h3>";
    }
} 

else if($fileType != 'image/jpeg') {
   echo "<h2>Failed to Upload </h2> ";
   echo "<br/><b> Typefile harus jpg/jpeg</b> <br/> File kamu: ".$fileType;
   echo "<br/> Nama file kamu : ".$fileName ; echo "<br/>";
   ?><a href="javascript:history.go(-1)"><- back </a><?php }
else if ($fileSize > 10240 ) {
   echo "<h2>Failed to Upload </h2> ";
   echo "Maximum width and height exceeded. Please upload images below 500x200 px size";
   echo "<br>width = $width height = $height";
   echo "<br/> <b>Ukuran file max 10240 bit ( 10 kb )</b> <br/> File kamu: ".$fileSize;
   echo "<br/> Nama file kamu : ".$fileName ; echo "<br/>";
   ?><a href="javascript:history.go(-1)"><- back </a><?php }
else {
   echo "<h2>Failed to Upload </h2> ";
   echo "File error : ".$fileError ; 
   echo "<br>Maximum width and height exceeded. Please upload images below 500x200 px size";
   echo "<br>Your image width = $width px height = $height px";
   
   echo " <br>Silakan cek lagi...!!!"; echo "<br/>";
   ?><a href="javascript:history.go(-1)"><- back</a><?php }

?>
