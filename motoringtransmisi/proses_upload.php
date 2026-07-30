<?php
	
	include "config/koneksi.php";
	$kopname= $_SESSION['kopname'];
	//$id = $_REQUEST['id'];
	 $query_pt3x=mysql_query("INSERT into transmisi_master_transmisi(material,engine_name,engine_number,engine_model,engine_status) select material,engine_name,engine_number,engine_model,engine_status from master_engine_temp2_trans");
 
 $query_del=mysql_query("delete from master_engine_temp2_trans");
 
	header("location:../index.php?pilih=5.1&kopname='$kopname'&level='$level'");
?>