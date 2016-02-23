<html>
<head>
<title>Input Data Mahasiswa</title>
<script language="javascript">
function goback(){
history.back();
}
</script>
<script type='text/javascript' src='validas.js'></script>
<script type='text/javascript' src='validEmail.js'></script>
<link rel="StyleSheet" type="text/css" href="satu.css" media="screen">
</head>
<body bgcolor= #708090>
 <div class=body>
<h1><center>Input data Mahasiswa</center></h1><hr/><br/>
<form name=form enctype="multipart/form-data" action="newsave.php" method="POST" onsubmit='return validasiFormSaatSubmit(this)'>
<pre>
Nama                      <input type="text" name="nama" id="nm" onFocus ='getValue(this)' onBlur ='setValue(this)' />*  
Alamat                
                          <textarea name="alamat" cols="30" rows="5" ></textarea>

Email                     <input type="text" name="email" id="email" onBlur = 'validasiEmail()'>*

Semester                  <select name="semester"> 
                             <option value="">Semester </option>
                              <?php 
                              include "koneksi.php";
                              $Q = "select * from semester";
                              $hasil = mysql_query($Q);
                              while ($row = mysql_fetch_array($hasil)) {
                              echo "<option value= $row[semester] >$row[semester]</option><br/>";} ?> 
                               </select> * 

Jenis Kelamin                <input type="radio" name="jenis_kelamin" value="Laki-laki" /> Laki-laki
                             <input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan *

Status                       <input type=checkbox   name=status <?php if (checked== true) { $status = "Aktif"; } 
                             else $status == "Non-Aktif"; ?> />  Aktif  
   
Foto                      <input name ="picture" type="file"/> 
               
                          <input type=submit value="SAVE"> <input type=reset value="Cancel" onclick="goback()">
</pre> </form>
</div>
</body>
</html>

