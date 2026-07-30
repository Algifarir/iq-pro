<?php
	
	include "config/koneksi.php";
	$kopname= $_SESSION['kopname'];
	//$id = $_REQUEST['id'];

// $query_del1=mysql_query("delete from master_engine_temp1");
 //$query_del2=mysql_query("delete from master_engine_temp2");
 
	header("location:../index.php?pilih=2.2&kopname='$kopname'&level='$level'&aksi=");
?>