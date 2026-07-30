<?php


	include "config/koneksi.php";
	$level=$_SESSION['level'];
	
	$kopname = $_POST['kopname'];
	$form_code = $_POST['pilihanmenu'];
	$inspection_number = $_POST['inspection_number'];
	$en = $_POST['engine_number'];
	$em = $_POST['em'];
	$area = $_POST['area'];
	$dt = $_POST['dt'];	
	$ip = $_POST['ip'];	
	$sts = $_POST['sts'];
	$desc = $_POST['desc_running'];
	$enx = $_POST['enx'];
	
	$aksix = $_POST['aksix'];	
	$halx = $_POST['halx'];
	$tgl_1x = $_POST['tgl_1x'];
	$tgl_2x = $_POST['tgl_2x'];
	
if (empty($_POST['chfs'])) {

}else{
$query_pt=mysql_query("UPDATE master_engine SET engine_status='Aktif' WHERE engine_number='$enx'");

}
	
$query_pt=mysql_query("UPDATE master_engine SET engine_status='Tidak Aktif' WHERE engine_number='$en'");


$query_pt=mysql_query("UPDATE proses_inspection_header_log SET user_input='$kopname',  operator_name = '$kopname', inspection_area='$area', inspection_date='$dt',  inspection_engine_number = '$en', inspection_engine_model='$em', ip_number='$ip',form_code='$form_code', inspection_status='$sts', final_judgement='$sts',desc_running='$desc' WHERE inspection_number='$inspection_number' AND inspection_status='$sts'");
	
	
$query_pt2=mysql_query("UPDATE proses_inspection_detail_log SET inspection_area='$area',dt_proses='$dt',form_code='$form_code',inspection_engine_number='$en',inspection_engine_model='$em',dt_proses='$dt' WHERE inspection_number='$inspection_number' inspection_status='$sts'");


header("location:index.php?pilih=3.5&aksi=$aksix&halaman=$halx&dt1=$tgl_1x&dt2=$tgl_2x");

	
	?>