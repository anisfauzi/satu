<?php 
function update() {
if(isset($_POST['checkrow']) &&
   $_POST['checkrow'] =1)
  {
    include 'koneksi.php';
    $data = $_POST['id']; //get all the id book that will be deleted

     foreach($data as $data1) { //looping according to the total data that checked
	       echo $data1;
	       $query = "UPDATE mahasiswa set status='$checkrow[id]' where id='$id'"; //the query to delete data according to id
	       $result = mysql_query($query);
         }
   
    if ($result) {
	   header("location:index.php");
                  } 
}
else
{
    echo "Do not Need wheelchair access.";
}

}
?>
