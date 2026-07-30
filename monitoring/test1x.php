

<?php
	
include "config/koneksi.php";


$jur1=$_POST['jur1'];
$gondrong = substr($jur1,0,4);
echo $gondrong;
echo $jur1;
$hasil=mysql_query("select * from master_engine where substr(material,1,4) ='". $gondrong."' AND engine_status ='Aktif' order by id ASC");
 //echo "<select class='form-control select2' multiple='multiple' name='jur2' id='jur2'>";

 echo "<option value=''></option>";
 
    while ($dtcombo=mysql_fetch_array($hasil)) {
  
	
    echo "<option value='".$dtcombo['engine_number']."'>".$dtcombo['engine_number']."</option>";
 
	}


//echo "</select>";

	



		



//header("location:ct_1x.php?form_code=$form_code&inspection_number=$inspection_number&akso=$akso");

	
?>