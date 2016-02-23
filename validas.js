function validasiFormSaatSubmit(siForm)
{
 var alasan = "";

 alasan += validasiNama(siForm.nama);
 alasan += validasiJenisKelamin(siForm.jenis_kelamin);
 alasan += validasiSemester(siForm.semester);

 if (alasan != "") {
  alert("Beberapa field harus dikoreksi:\n" + alasan);
  return false;
 }
 return true;
}

function validasiNama(isi)
{
 var pesan = "";

 if (isi.value == "") {
  isi.style.background = 'Yellow';
  pesan = "* Silakan masukkan Nama Mahasiswa..!!.\n";
 } else {
  isi.style.background = 'White';
 }
 return pesan;
}
function validasiJenisKelamin(isi)
{
 var pesan = "";

 if ((isi[0].checked == false ) && (isi[1].checked == false))
 {
  pesan = "* Silakan pilih Jenis Kelamin.\n";
 }
 return pesan;
}

function validasiSemester(isi)
{
 var pesan = "";

 if (isi.value == "") {
  isi.style.background = 'Yellow';
  pesan = "* Silakan pilih semester....\n";
 } else {
  isi.style.background = 'White';
 }
 return pesan;
}
