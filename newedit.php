<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title></title>
<LINK REL=StyleSheet HREF="satu.css" TYPE="text/css" MEDIA=screen>
<script type ="text/javascript" src="wedit.js"></script>
</head>
<body bgcolor= #708090> <div class=body>
<h2><center>Edit Data Mahasiswa</center></h2><hr/>
<form name=formEdit enctype="multipart/form-data" method="POST" action="">
<pre>
<?php
$id = $_GET['id'];
include "koneksi.php";
$q = "SELECT*FROM mahasiswa WHERE id='$id'";
$query = mysql_query($q,$koneksi);
$row = mysql_fetch_array($query);
    $id = $row[id];
    $nama = $row[nama];
    $alamat = $row[alamat];
    $semester = $row[semester];
    $status = $row[status];
    $jenis_kelamin = $row[jenis_kelamin];
    $email = $row[email];
    $foto = $row[foto]; ?>
ID                    :<input type=hidden name=id value=<?php echo $id; ?> > <br/>
Nama                  :<input type=text size=25 name=nama value=<?php echo $nama; ?> ><br/>
Alamat                :
                       <textarea name=alamat cols=30 rows=5><?php echo $alamat; ?> </textarea><br/>
Email                 :<input type=text name=email id=email size=25 onBlur = 'validasiEmail();' value=<?php echo $email; ?> >*<br/> 
Semester              :<select name=semester> 
                       <?php echo "<option selected> $semester</option> ";
                            
                           $Q = "select * from semester";
                           $hasil = mysql_query($Q);
                           while ($row = mysql_fetch_array($hasil)) {
                           echo "<option value= $row[semester] >$row[semester]</option><br/>";}  ?>
                          </select><br/> 
Jenis Kelamin         
                      <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($jenis_kelamin =='Laki-laki') echo "checked==1"; ?>/> Laki-laki
                      <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($jenis_kelamin =='Perempuan') echo "checked==1"; ?> /> Perempuan
                       
Status            
                      <input type="checkbox" name="status" <?php 
                      //if (checked=true) 
                      //{echo "value== Aktif"; } else { echo "value == Non-Aktif";}   
                      if($status =='Aktif'){echo 'checked="checked"';}?>/> Aktif
Ganti   foto          : <input name ="picture" type="file"/> <input type="submit" name="upload2" value="Upload" onclick="newUpload()"/>  
       
                        <div id=foto><?php  echo "   <img src=$foto>"; ?></diV>

     <div id="update"><input type=submit value="Update" onclick="newUpdate()"> <input type=reset value="Cancel" onclick="goback()"> </div>
    </pre>
    </from>
   </div>
</body>
</html>
 
