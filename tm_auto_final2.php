<?php
	
	include "config/koneksi.php";
	
		//$id = $_REQUEST['id'];
		//$id = $_POST['id'];
		$inspeci = mysql_real_escape_string($_POST['inspeci']);
	
		$qptenginie1=mysql_query("UPDATE transmisi_proses_inspection_detail SET hasil_running_ok='&#10004', update_item='2' WHERE inspection_number='$inspeci' AND group_tab ='Top' AND update_item <> '3'");
		
		$qptenginie2=mysql_query("UPDATE transmisi_proses_inspection_detail SET hasil_running_ok='&#10004', update_item='2' WHERE inspection_number='$inspeci' AND group_tab ='Right' AND update_item <> '3'");
		
			$qptenginie3=mysql_query("UPDATE transmisi_proses_inspection_detail SET hasil_running_ok='&#10004', update_item='2' WHERE inspection_number='$inspeci' AND group_tab ='Left' AND update_item <> '3'");
			
			$qptenginie3=mysql_query("UPDATE transmisi_proses_inspection_detail SET hasil_running_ok='&#10004', update_item='2' WHERE inspection_number='$inspeci' AND group_tab ='Front' AND update_item <> '3'");
		//header("location:ct_2x.php?inspection_number=$inspection_number");
		
		
?>