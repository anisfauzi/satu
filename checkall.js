var flag="false";
function cekAll(){	
	if(document.form1.checkall.checked==true){
			for(i=0;i<document.form1.checkrow.length;i++){
				document.form1.checkrow[i].checked=true;
			}
	}
		
		else{
			for(i=0;i<document.form1.checkrow.length;i++){
				document.form1.checkrow[i].checked=false;
			}
		
	}
} 
var ss = document.form1.status.value;
function resetForm(){	// non-aktif
alert ("perhatikan Checkbox nya...!! Yakin mau di Non-Aktifkan???");
		 document.form1.action = 'refresh.php';
}
function akTif() { // aktifkan
alert("Yakin mau diaktifkan semua???");
        document.form1.action = 'aktif.php';
 }
function hapus() { // hapus
alert("Yakin akan dihapus semua...???");
document.form1.action = 'hapus.php';
}

// cek halaman (paging)
function halaman()
{ var sc = document.getElementById.hal;
location.href= sc.value;
//document.location.onChange.checked 
//alert("hai??? Mau apa???");
}
		
