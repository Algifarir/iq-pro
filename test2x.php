

<?php
	
include "config/koneksi.php";


$jur2=$_POST['jur2'];
//echo $jur2;
$hasil_model=mysql_query("select engine_model from transmisi_master_transmisi where engine_number ='". $jur2."'"); 
     //echo "<option value=''></option>";
 
    while ($dtcombo=mysql_fetch_array($hasil_model)) {
  
	
	echo "<input type='text' id='engine_model' name='engine_model' value='".$dtcombo['engine_model']."'/>";

 
	}

//echo "</select>";





		



//header("location:ct_1x.php?form_code=$form_code&inspection_number=$inspection_number&akso=$akso");

	
?>