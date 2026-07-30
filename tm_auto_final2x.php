<?php
	
	include "config/koneksi.php";
	
		//$id = $_REQUEST['id'];
		//$id = $_POST['id'];
		$inspeci = mysql_real_escape_string($_POST['inspeci']);
	
		$qptenginie1=mysql_query("UPDATE transmisi_proses_inspection_detail SET hasil_running_ok='', update_item='1' WHERE inspection_number='$inspeci' AND group_tab ='Top'");
		
		$qptenginie2=mysql_query("UPDATE transmisi_proses_inspection_detail SET hasil_running_ok='', update_item='1' WHERE inspection_number='$inspeci' AND group_tab ='Right'");
		
			$qptenginie3=mysql_query("UPDATE transmisi_proses_inspection_detail SET hasil_running_ok='', update_item='1' WHERE inspection_number='$inspeci' AND group_tab ='Left'");
			
			$qptenginie3=mysql_query("UPDATE transmisi_proses_inspection_detail SET hasil_running_ok='', update_item='1' WHERE inspection_number='$inspeci' AND group_tab ='Front'");
		//header("location:ct_2x.php?inspection_number=$inspection_number");
		
		
?>