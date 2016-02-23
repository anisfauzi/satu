<html>
<head>
<title>Daftar mahasiswa</title>
<script type='text/javascript' src='js/jquery-1.6.1.min.js'></script>
<script type="text/javascript" src="warning.js"></script>
<script type="text/javascript" src="pilihan.js"></script>
<script type='text/javascript' src="checkall.js"></script>
<script type='text/javascript' src="new.js"></script>
<LINK REL=StyleSheet HREF="sata.css" TYPE="text/css" MEDIA=screen>
</head>
<body> 
<div class= body>
<h2><center>Daftar Mahasiswa</center></h2>
<form name="form1" method=post action="" id="formulirku">
<p><table id=table>
   <tr><th> ID </th><th> Nama </th><th> Alamat </th><th>Email</th><th> Semester </th><th> Status </th><th> Jenis kelamin</th><th colspan=3>Action </th>            <th colspan=2><input type=checkbox onClick="cekAll()"  name=checkall id=cekup value=1  /> Ceklis semua</th> </tr>
<?php
include "koneksi.php"; 
if($koneksi){
$batas=5;
$sqlJml = "select * from mahasiswa";
$queryJml = mysql_query($sqlJml,$koneksi);
$jumlahData = mysql_num_rows($queryJml);
$jumlahHalaman = ceil($jumlahData/$batas);
$page=$_GET[page];
if(!isset($_GET[page])) { $mulai=1; }
else { $mulai=$page*$batas; }
}

$id = $_GET['id'];
  
$sql = "SELECT * FROM mahasiswa ORDER BY id ASC limit ".$mulai.",".$batas;
$hasil = mysql_query($sql);
$count=mysql_num_rows($hasil);
while ($row = mysql_fetch_array($hasil)) {
echo "<tr><td> $row[id] </td><td>$row[nama] </td><td>$row[alamat]</td><td>$row[email]</td><td>$row[semester]</td><td>$row[status]</td><td>$row[jenis_kelamin]</td>
      <td><a href= view.php?id=$row[id]> View </a></td>
      <td><a href= newedit.php?id=$row[id]> EDIT</a></td>"; ?>
      <td><a href= "delete.php?id=<?php echo $row[id];?> "onclick= "return confirm('Are you sure to delete?');" > DELETE</a></td>
      <td> <input type=checkbox id="cek"  name="checkrow" value="<?=$row[id]?>" />Aktif  id = cek<?php echo $row[id];?> </td>
      <td> <input type=checkbox id="cek"  name="checkrow[]" value="<?=$row[id]?>" ></td>
      </tr> <?php } ?>
<tr><td colspan="12" align="center" bgcolor="#FFFFFF"><input name="aktif" type="submit" onclick="akTif();" id="aktif" value="Aktif">
                   <input name="cek2" type="submit" onclick="resetForm();" id="cek2" value="Non-Aktif"> 
                        <input name="cek3" type="submit" onclick="hapus();"  id="cek3" value="Del All"> 
                    </td></tr>
                       
</table></p></form>
<p> <?php /*echo "Jumlah count : $count <br/>";
          echo "Jumlah page  : $jumlahHalaman<br/>";
          echo "Jumlah data  : $jumlahData"; */?>
<br/><div id="isi">
<a href="newinput.php" >Add New </a>
 </div>

<div align="center">
      <a href=index.php?page=<?php echo $mulai=0; ?> >  <input type="submit" name="button" id="button" value="|<" />  </a>
      <a href=index.php?page=<?php echo max($page-1,0);?> >  <input type="submit" name="button2" id="button2" value="&lt;<" />  </a>
      <select name="hal" id="hal" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
        <?php 
         echo "<option selected>$page </option>";
         for ($i=0;$i<$jumlahHalaman;$i++) {
        echo "<option value = index.php?page=$i > $i</option>"; } ?>
        
      </select>
     <a href=index.php?page=<?php echo min($page+1,$jumlahHalaman-1);?> > <input type="submit" name="button3" id="button3" value="&gt;&gt;" />  </a>
    <a href=index.php?page=<?php echo $jumlahHalaman-1; ?> >  <input type="submit" name="button4" id="button4" value="&gt;|" /> </a>
    </div>
</div> <!-- dv body -->
</body>
</html>

