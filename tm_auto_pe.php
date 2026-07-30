<?php
	
include "config/koneksi.php";
$inspection_numberx = $_POST['inspection_numberx'];
echo "<script type='text/javascript'>alert('".$inspection_numberx."');</script>";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$id=mysql_real_escape_string($_POST['id']);
$hasil=mysql_real_escape_string($_POST['hasil']);



	  	
		$query_pt=mysql_query("UPDATE transmisi_problem SET pic='$hasil' WHERE id='$id'");
		
		



}




		



//header("location:ct_1x.php?form_code=$form_code&inspection_number=$inspection_number&akso=$akso");

	
?>