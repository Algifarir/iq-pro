<?php
	
	include "config/koneksi.php";
	//$id = $_REQUEST['id'];
	$desc_running = $_POST['desc_running'];
	$inspection_number = $_POST['inspection_number'];
	$ip = $_POST['ip'];
	
	$aksi = $_REQUEST['aksi'];
	$kopname = $_POST['kopname'];
	$dt = $_POST['dt'];
	
	
	if(!isset($_POST['final_judgement'])){
	
		
	header("location:dashboard.php?aksi=last&inspection_number=$inspection_number");
	
	}else{
	
	
				$final_judgement = $_POST['final_judgement'];			
	
	

	
	$query_pt=mysql_query("UPDATE proses_inspection_header SET desc_running='$desc_running', ip_number='$ip', final_judgement ='$final_judgement', inspection_status ='$final_judgement', operator_name = '$kopname',user_input='$kopname', inspection_date='$dt' WHERE inspection_number='$inspection_number'");
	
	
$query_pt2=mysql_query("UPDATE proses_inspection_detail SET inspection_status='$final_judgement' WHERE inspection_number='$inspection_number'");

	$query_pt3=mysql_query("insert into proses_inspection_header_log select * from proses_inspection_header WHERE inspection_number='".$inspection_number."'");	

	$query_pt4=mysql_query("insert into proses_inspection_detail_log select * from proses_inspection_detail WHERE inspection_number='".$inspection_number."'");
	
	$query_pt5=mysql_query("delete from proses_inspection_header WHERE inspection_number='".$inspection_number."' AND final_judgement='ENGINE OK'");
	
	$query_pt6=mysql_query("delete from proses_inspection_detail WHERE inspection_number='".$inspection_number."' AND inspection_status='ENGINE OK'");


	
					if($final_judgement=="ENGINE OK"){
					
							header("location:dashboard_ok.php");
					}elseif($final_judgement=="PENDING"){
					
							header("location:dashboard_pending.php");
					}elseif($final_judgement=="REWORK"){
					
							header("location:dashboard_rework.php");
					}elseif($final_judgement=="SDI"){
					
							header("location:dashboard_sdi.php");
							
					}
	
				
	
	}
	
?>

