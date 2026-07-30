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
	
	

$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail where inspection_number='$inspection_number' AND group_tab='Leak' AND isnull(hasil_running_ok)");
			$jml = mysql_num_rows($query);
			
						
					
					
if($jml > 0 ){
?>

<script>
		alert("Anda Belum Melakukan Pemeriksaan");
		window.location="dashboard_tm.php";
	</script>

<?php
	
	}else{
	

		

	if(!isset($_POST['final_judgement'])){
	
		
	header("location:dashboard_tm.php");
	
	}else{
	
				
								
					$query_pt=mysql_query("UPDATE transmisi_proses_inspection_header SET desc_running='$desc_running', ip_number='$ip', final_judgement ='$final_judgement', inspection_status ='$final_judgement', operator_name = '$kopname',user_input='$kopname', inspection_date='$dt' WHERE inspection_number='$inspection_number'");
	
	
$query_pt2=mysql_query("UPDATE transmisi_proses_inspection_detail SET inspection_status='$final_judgement' WHERE inspection_number='$inspection_number'");

	$query_pt3=mysql_query("insert into transmisi_proses_inspection_header_log select * from transmisi_proses_inspection_header WHERE inspection_number='".$inspection_number."'");	

	$query_pt4=mysql_query("insert into transmisi_proses_inspection_detail_log select * from transmisi_proses_inspection_detail WHERE inspection_number='".$inspection_number."'");
	
	$query_pt5=mysql_query("delete from transmisi_proses_inspection_header WHERE transmisi_inspection_number='".$inspection_number."' AND final_judgement='TM TEST OK'");
	
	$query_pt6=mysql_query("delete from transmisi_proses_inspection_detail WHERE inspection_number='".$inspection_number."' AND inspection_status='TM TEST OK'");


	
					if($final_judgement=="TM TEST OK"){
					
							header("location:dashboard_tm_ok.php");
					}elseif($final_judgement=="PENDING"){
					
							header("location:dashboard_tm_pending.php");
					}elseif($final_judgement=="REWORK"){
					
							header("location:dashboard_tm_rework.php");
					}elseif($final_judgement=="PDI"){
					
							header("location:dashboard_tm.php");
							
					}
				 
		
		 			
				
			
					
							
							
							
							
			
						
						
				
						
	
	}
	
	
	
	
	
}
?>

