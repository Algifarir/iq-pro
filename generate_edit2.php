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
	$supply_num = $_POST['supply_num'];
	



$hasil=mysql_query("select * from proses_inspection_header where form_code='$form_code'  AND inspection_number ='$inspection_number'");
    while ($dtno=mysql_fetch_array($hasil)) 
	{
	
		$it1 = $dtno['inspection_time'];

	}
	
	
$query_pt=mysql_query("UPDATE proses_inspection_header SET user_input='$kopname',  operator_name = '$kopname', inspection_area='$area', inspection_date='$dt', faktor_koreksi='$supply_num' WHERE inspection_number='$inspection_number'");
	
	
$query_pt2=mysql_query("UPDATE proses_inspection_detail SET inspection_area='$area',dt_proses='$dt' WHERE inspection_number='$inspection_number'");


header("location:input_sdi2.php?form_code=$form_code&inspection_number=$inspection_number&aksi=insert&en=$en&em=$em&area=$area&dt=$dt&kopname=$kopname&ip=$ip&supply_num=$supply_num&it1=$it1");

	
	?>