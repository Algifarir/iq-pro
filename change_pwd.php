<?php
	
	include "config/koneksi.php";
	//$id = $_REQUEST['id'];

	
	
	$usr= $_POST['usr'];
	$kunci = $_POST['pwd'];
	$pass	= md5($kunci);
	
	

	
	
$query_pt2=mysql_query("UPDATE master_user SET password='$pass' WHERE full_name='$usr'");


	



	
					
							header("location:dashboard.php");
				
	
				
	

	
?>

