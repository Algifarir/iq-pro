
<?php
	
	include "config/koneksi.php";
	
		//$id = $_REQUEST['id'];
		$id = $_POST['id'];
		//$inspection_number = $_REQUEST['inspection_number'];
		
		$qptengine=mysql_query("UPDATE proses_inspection_detail SET hasil_running_ok='&#10004', update_item='2' WHERE id='$id'");
		//header("location:ct_2x.php?inspection_number=$inspection_number");
		
		
?>