<?php
	
	include "config/koneksi.php";
	$kopname= $_SESSION['kopname'];
	//$id = $_REQUEST['id'];
	 $query_pt3x=mysql_query("INSERT into master_engine(material,engine_name,engine_number,engine_model,engine_status) select material,engine_name,engine_number,engine_model,engine_status from master_engine_temp2");
 
 $query_del=mysql_query("delete from master_engine_temp2");
 
	header("location:../index.php?pilih=2.2&kopname='$kopname'&level='$level'");
?>