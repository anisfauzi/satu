<?php
include("php_inc/class/connection.class.php");
include("php_inc/function/config.php");

$txtProductCodeC = mysql_real_escape_string($_POST['txtProductCodeC']);
$hdnProductId = mysql_real_escape_string($_POST['hdnProductId']);
  
  $db->execute("SELECT product_id FROM ms_product_hd WHERE active_yn='1' AND product_code='$txtProductCodeC'");
  $found = $db->get_num_rows();
  if($found>0){
     $getData = $db->fetch_array();
     $productId = $getData['product_id'];
     
     $db->execute("INSERT INTO ms_product_also_like (product_id,products_id_choosen) VALUES ('$hdnProductId','$productId')");
  } else {
    echo "Wrong Product Code or Deactive Product Code ";
  } 

?>
