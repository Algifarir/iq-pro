<?php
	
	include "config/koneksi.php";
	
		//$id = $_REQUEST['id'];
		//$id = $_POST['id'];
		$inspec = mysql_real_escape_string($_POST['inspec']);
		
		$qptengine=mysql_query("UPDATE transmisi_proses_inspection_detail SET hasil_running_ok='&#10004', update_item='2' WHERE inspection_number='$inspec' AND update_item <> '3' AND group_tab='Leak'");
		//header("location:ct_2x.php?inspection_number=$inspection_number");
		
		
?>