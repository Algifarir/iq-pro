<?php


	include "config/koneksi.php";
	$level=$_SESSION['level'];
	
	$kopname = $_POST['kopname'];
	$form_code = $_POST['form_code'];
	$inspection_number = $_POST['inspection_number'];
	$en = $_POST['en'];
	$em = $_POST['em'];
	$area = $_POST['area'];
	$dt = $_POST['dt'];	
	$ip = $_POST['ip'];	
	$sts= $_POST['sts'];
	
	
//$hasilnocu=mysql_query("select * from proses_inspection_header_log where ip_number ='$ip'");
 //   while ($dtnocu=mysql_fetch_array($hasilnocu)) 
//	{
	
//		$no_cu = $dtnocu['ip_number'];

//	}
	
//	if($no_cu==$ip){

//		header("location:dashboard_pending.php?&kopname=$kopname&aksi=updatetesbench&err=2&form_code=$form_code&inspection_number=$inspection_number&en=$en&em=$em&area=$area&ip=$ip&dt=$dt");
		
//	}else{
	
$query_pt=mysql_query("UPDATE transmisi_proses_inspection_header SET user_input='$kopname',  operator_name = '$kopname', inspection_area='$area', inspection_date='$dt'  WHERE inspection_number='$inspection_number'");
	
	
$query_pt2=mysql_query("UPDATE transmisi_proses_inspection_detail SET inspection_area='$area',dt_proses='$dt' WHERE inspection_number='$inspection_number'");


if($sts=="PDI"){
	
header("location:ct_tm_pdi2.php?form_code=$form_code&inspection_number=$inspection_number&aksi=insert&en=$en&em=$em&area=$area&dt=$dt&kopname=$kopname&ip=$ip&supply_num=$supply_num");
	
}else{
	
	header("location:ct_tm.php?form_code=$form_code&inspection_number=$inspection_number&aksi=insert&en=$en&em=$em&area=$area&dt=$dt&kopname=$kopname&ip=$ip&supply_num=$supply_num");
	
}



//	}
	?>