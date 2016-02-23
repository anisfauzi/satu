function goback(){
//history.back();
location='index.php';
}
function newUpload() {
//alert('Yakin ganti foto???');
document.formEdit.action="proses.php";
}
function newUpdate() {
//alert('Yakin diupdate???');
document.formEdit.action="update.php";
}
