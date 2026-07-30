<?php
	
	include "config/koneksi.php";
	//$id = $_REQUEST['id'];
	$desc_running = $_POST['desc_running'];
	$inspection_number = $_POST['inspection_number'];
	$form_code = $_POST['form_code'];
	$kopname = $_POST['kopname'];
	$aksi = $_REQUEST['aksi'];
	$final_judgement = $_POST['final_judgement'];
	$dt = $_POST['dt'];
	$berat = $_POST['berat'];
	

echo "<script>alert($form_code);</script>";
	if(!isset($_POST['final_judgement'])){
	
		
	header("location:dashboard_tm_pdi2.php?aksi=last&inspection_number=$inspection_number");
	
	}else{
	if(isset($_POST['chf'])){
		
		 if(!empty($_FILES['uploaded_file']))
				{
					$path = "c:/wamp64/www/iq-pro/upload/";
					$path = $path . basename( $_FILES['uploaded_file']['name']);
						
					$filename = $_FILES['uploaded_file']['name'];
					$extension = pathinfo($filename, PATHINFO_EXTENSION);
					
					
					
					
	
						if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
						{
							
							
											
			
			$query_pt2=mysql_query("UPDATE transmisi_upload SET nama_file='$filename', url='$path' WHERE inspection_number='$inspection_number'");
			
								
					$query_pt=mysql_query("UPDATE transmisi_proses_inspection_header SET desc_running='$desc_running', ip_number='$berat', final_judgement ='$final_judgement', inspection_status ='$final_judgement', operator_name = '$kopname',user_input='$kopname', inspection_date='$dt' WHERE inspection_number='$inspection_number'");
	
	
$query_pt2=mysql_query("UPDATE transmisi_proses_inspection_detail SET inspection_status='$final_judgement' WHERE inspection_number='$inspection_number'");

	$query_pt3=mysql_query("insert into transmisi_proses_inspection_header_log select * from transmisi_proses_inspection_header WHERE inspection_number='".$inspection_number."'");	

	$query_pt4=mysql_query("insert into transmisi_proses_inspection_detail_log select * from transmisi_proses_inspection_detail WHERE inspection_number='".$inspection_number."'");
	
	$query_pt5=mysql_query("delete from transmisi_proses_inspection_header WHERE transmisi_inspection_number='".$inspection_number."' AND final_judgement='TM TEST OK'");
	
	$query_pt6=mysql_query("delete from transmisi_proses_inspection_detail WHERE inspection_number='".$inspection_number."' AND inspection_status='TM TEST OK'");


	
					if($final_judgement=="TM TEST OK"){
					
							header("location:dashboard_tm_pdi2.php");
					}elseif($final_judgement=="PENDING"){
					header("location:dashboard_tm_pdi2.php");
							//header("location:dashboard_tm_pending.php");
					}elseif($final_judgement=="REWORK"){
					header("location:dashboard_tm_pdi2.php");
							//header("location:dashboard_tm_rework.php");
					}elseif($final_judgement=="PDI"){
					
							//header("location:dashboard_tm_pdi.php");
							
					}
				 
		
		 			
				
			
					
							
							
							
							 }else{
							
							
							
								echo "There was an error uploading the file, please try again!";
							}
			
						
						
				
						
					}
		
	}else{
	
	 if(!empty($_FILES['uploaded_file']))
				{
					
					
					$path = "c:/wamp64/www/iq-pro/upload/";
					$path = $path . basename( $_FILES['uploaded_file']['name']);
						
					$filename = $_FILES['uploaded_file']['name'];
					$extension = pathinfo($filename, PATHINFO_EXTENSION);
					
					
					
					
	
						if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
						{
							
							
											
			
			$qtambah=mysql_query("INSERT INTO transmisi_upload(form_code,inspection_number,nama_file,url) values ('$form_code','$inspection_number','$filename','$path')");
			
								
					$query_pt=mysql_query("UPDATE transmisi_proses_inspection_header SET desc_running='$desc_running', ip_number='$berat', final_judgement ='$final_judgement', inspection_status ='$final_judgement', operator_name = '$kopname',user_input='$kopname', inspection_date='$dt' WHERE inspection_number='$inspection_number'");
	
	
$query_pt2=mysql_query("UPDATE transmisi_proses_inspection_detail SET inspection_status='$final_judgement' WHERE inspection_number='$inspection_number'");

	$query_pt3=mysql_query("insert into transmisi_proses_inspection_header_log select * from transmisi_proses_inspection_header WHERE inspection_number='".$inspection_number."'");	

	$query_pt4=mysql_query("insert into transmisi_proses_inspection_detail_log select * from transmisi_proses_inspection_detail WHERE inspection_number='".$inspection_number."'");
	
	$query_pt5=mysql_query("delete from transmisi_proses_inspection_header WHERE transmisi_inspection_number='".$inspection_number."' AND final_judgement='TM TEST OK'");
	
	$query_pt6=mysql_query("delete from transmisi_proses_inspection_detail WHERE inspection_number='".$inspection_number."' AND inspection_status='TM TEST OK'");


	
					if($final_judgement=="TM TEST OK"){
					
							header("location:dashboard_tm_pdi2.php");
					}elseif($final_judgement=="PENDING"){
					header("location:dashboard_tm_pdi2.php");
							//header("location:dashboard_tm_pending.php");
					}elseif($final_judgement=="REWORK"){
					header("location:dashboard_tm_pdi2.php");
							//header("location:dashboard_tm_rework.php");
					}elseif($final_judgement=="PDI"){
					
							//header("location:dashboard_tm_pdi.php");
							
					}
				 
		
		 			
				
			
					
							
							
							
							 }else{
							
							
							
								echo "There was an error uploading the file, please try ";
							
						
							}
			
						
						
				
						
					}
	
			
	}
	
	}
	
?>

