

<?php
	
include "config/koneksi.php";


$jur2=$_POST['jur2'];
//echo $jur2;
$hasil_model=mysql_query("select * from master_engine where engine_number ='". $jur2."'"); 
     //echo "<option value=''></option>";
 
    while ($dtcombo=mysql_fetch_array($hasil_model)) {
  
	
	echo "<option value='".$dtcombo['engine_model']."'>".$dtcombo['engine_model']."</option>";

 
	}

//echo "</select>";





		



//header("location:ct_1x.php?form_code=$form_code&inspection_number=$inspection_number&akso=$akso");

	
?>