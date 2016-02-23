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
<link rel="stylesheet" type="text/css" href="satu.css">
</head>
<body>
<form name=form action="save.php" method="POST" onsubmit='return validasiFormSaatSubmit(this)'>
<pre>
<p>Nama                   <input type="text" name="nama" id="nm" onFocus ='getValue(this)' onBlur ='setValue(this)' />*  </p>
<p>Alamat                
                       <textarea name="alamat" cols="30" rows="5" ></textarea></p>
<p>Email                 <input type="text" name="email" id="email" onBlur = 'validasiEmail()'>*</p>
<p>Semester              <select name="semester"> 
                         <option value="">Semester </option>
                           <?php 
                           include "koneksi.php";
                           $Q = "select * from semester";
                           $hasil = mysql_query($Q);
                           while ($row = mysql_fetch_array($hasil)) {
                           echo "<option value= $row[semester] >$row[semester]</option><br/>";} ?> 
                          </select> * </p>
<p>Jenis Kelamin         
                      <input type="radio" name="jenis_kelamin" value="Laki-laki" /> Laki-laki
                      <input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan *</p>
<p>Status            <!-- <input type=checkbox   name=status value ="1" />  Aktif </p> -->
                      <input type=checkbox   name=status <?php if (checked== true) { $status = "Aktif"; } 
                     else $status == "Non-Aktif"; ?> />  Aktif     </p>                
          <p> <input type=submit value="SAVE"> <input type=reset value="Cancel" onclick="goback()"></p>
</pre> </form>
</body>
</html>

