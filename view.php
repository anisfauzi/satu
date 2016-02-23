<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Data Pribadi Mahasiswa</title>
<link rel=stylesheet type="text/css" href="satu.css">
<script language="javascript">
function goback(){
history.back();
}
</script>
</head>
<body bgcolor= #708090>
<div class=body>
<h2><center>Data Pribadi Mahasiswa</center></h2><hr/>
<?php
$id = $_GET['id'];
include "koneksi.php";
$q = "SELECT*FROM mahasiswa WHERE id='$id'";
$query = mysql_query($q,$koneksi);
$row=mysql_fetch_array($query);
 ?>
    <label>ID </label>          : <?php echo $row[id]; ?><br/> <div id="fotoview"> <img src=<?php echo $row[foto];?> ></div>
    <label> Nama </label>       :  <b><?php echo $row[nama]; ?> </b><br/>
    <label>Alamat</label>       : <?php echo $row[alamat]; ?> <br/>
    <label>Semester </label>    : <?php echo $row[semester];?> <br/>
    <label>Jenis Kelamin</label>: <?php echo $row[jenis_kelamin]; ?> <br/>        
    <label>Status</label>       : <?php echo $row[status]; ?> <br/>
    
                         
  
    <br/><br/><br/><br/>
<p><input type=reset value="|< Back" onclick="goback()"></p>
</div>
</body>
</html>
 
