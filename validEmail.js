function validasiEmail(){
//var email = document.getElementById(email).value;
var email = document.form.email.value;
var regex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if(email == "" || regex.test(email)==false){
alert("email tidak valid");
}else{
alert("email sudah valid");
} 
//alert('Bisa nyambung');
}
