<?php
	session_start();
	include "config/koneksi.php";
	
	$usr = $_SESSION['kopname'];
	$query_ptx=mysql_query("UPDATE master_user set log_status = 'out' where full_name='$usr'");
	
	session_destroy();
	header("location:tm_login.php");
?>
