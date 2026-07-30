

<?php
include "config/koneksi.php";
	$aksi="insert";;
	$form_code=$_POST['pilihanmenu'];
	$engine_number=$_POST['engine_number'];
	$engine_model=$_POST['engine_model'];
	$area=$_POST['area'];
	$tgl = date_default_timezone_set('Asia/Jakarta');
	$date = new DateTime();
	
	$tgl_m = date_format($date,'m');
	$tgl_y = date_format($date,'Y');;
	$Tgl_now = date_format($date,'Y-m-d h:i:s');
	$form_code=$_POST['pilihanmenu'];
	
	$level=$_SESSION['level'];
	$sts = "OPEN";
	$kopname = $_POST['kopname'];
	$it1 = '1';
	



	
$hasilku=mysql_query("select * from transmisi_proses_inspection_header_log where inspection_engine_number='$engine_number'");
    while ($dtnos=mysql_fetch_array($hasilku)) 
	{
	
		$no_fermos = $dtnos['inspection_engine_number'];

	}
	
if($no_fermos==$engine_number){

header("location:dashboard_tm.php?&kopname=$kopname&aksi=tambah&err=1");
$query_pt=mysql_query("UPDATE transmisi_master_transmisi SET engine_status='Tidak Aktif' WHERE engine_number='$engine_number'");
}else{
	
	
$query_pt=mysql_query("UPDATE transmisi_master_transmisi SET engine_status='Tidak Aktif' WHERE engine_number='$engine_number'");


$hasil=mysql_query("select count(number) as no_frm from transmisi_number");
    while ($dtno=mysql_fetch_array($hasil)) 
	{
	
		$no_frm = $dtno['no_frm'];

	}
	$no_urut=$no_frm+1;
	$no_inspection = $form_code.".".$tgl_m.$tgl_y.".".$no_urut;
	
	$qxtambah=mysql_query("INSERT INTO transmisi_proses_inspection_header (form_code,inspection_number,inspection_date,operator_name,inspection_status,bln,thn,user_input,created_fname,inspection_update_status,final_judgement,inspection_engine_number,inspection_engine_model,inspection_area,inspection_time) values ('$form_code','$no_inspection','$Tgl_now','$kopname','$sts','$tgl_m','$tgl_y','$kopname','$kopname','1','$sts','$engine_number','$engine_model','$area','$it1')");
 		

	

			//isi item inspection		 
						 
		$sql=mysql_query("select * from transmisi_master_leak_inspection where form_code='".$form_code."'");
		while ($ros=mysql_fetch_array($sql))
														
			{
				$item = $ros['item_inspection'];
			    $group_column = $ros['group_column'];
				$verifikasi = $ros['verifikasi'];
			 
				$ins_running=mysql_query("INSERT INTO transmisi_proses_inspection_detail (form_code,inspection_number,description,group_tab,group_column,update_item,inspection_engine_number,inspection_engine_model,inspection_area,dt_proses,verifikasi) values ('$form_code','$no_inspection','$item','Leak','$group_column','1','$engine_number','$engine_model','$area','$Tgl_now','$verifikasi')");
										
			}					
			
		$sql2=mysql_query("select * from transmisi_master_motoring_inspection where form_code='".$form_code."'");
		while ($ras=mysql_fetch_array($sql2))
													
			{
				$item = $ras['item_inspection'];
			    $group_column = $ras['group_column'];
				$verifikasi = $ras['verifikasi'];
				
				$ins_running=mysql_query("INSERT INTO transmisi_proses_inspection_detail (form_code,inspection_number,description,group_tab,group_column,update_item,inspection_engine_number,inspection_engine_model,inspection_area,dt_proses,verifikasi) values ('$form_code','$no_inspection','$item','Motoring','$group_column','1','$engine_number','$engine_model','$area','$Tgl_now','$verifikasi')");
										
			}					
						
						
		$sql3=mysql_query("select * from transmisi_master_top_tm where form_code='".$form_code."'");
		while ($res=mysql_fetch_array($sql3))
													
			{
				$item = $res['inspection_top_engine'];
			 
				$ins_running=mysql_query("INSERT INTO transmisi_proses_inspection_detail (form_code,inspection_number,description,group_tab,update_item,inspection_engine_number,inspection_engine_model,inspection_area,dt_proses) values ('$form_code','$no_inspection','$item','Top','1','$engine_number','$engine_model','$area','$Tgl_now')");
										
			}			
			
			
				$sql4=mysql_query("select * from transmisi_inspection_right_tm where form_code='".$form_code."'");
		while ($ris=mysql_fetch_array($sql4))
													
			{
				$item = $ris['inspection_right_side'];
			 
				$ins_running=mysql_query("INSERT INTO transmisi_proses_inspection_detail (form_code,inspection_number,description,group_tab,update_item,inspection_engine_number,inspection_engine_model,inspection_area,dt_proses) values ('$form_code','$no_inspection','$item','Right','1','$engine_number','$engine_model','$area','$Tgl_now')");
										
			}						
		
		
			$sql5=mysql_query("select * from transmisi_master_inspection_left_tm where form_code='".$form_code."'");
		while ($res=mysql_fetch_array($sql5))
													
			{
				$item = $res['inspection_left_side'];
			 
				$ins_running=mysql_query("INSERT INTO transmisi_proses_inspection_detail (form_code,inspection_number,description,group_tab,update_item,inspection_engine_number,inspection_engine_model,inspection_area,dt_proses) values ('$form_code','$no_inspection','$item','Left','1','$engine_number','$engine_model','$area','$Tgl_now')");
										
			}	
			
			$sql6=mysql_query("select * from transmisi_master_front_tm where form_code='".$form_code."'");
		while ($ras=mysql_fetch_array($sql6))
													
			{
				$item = $ras['inspection_front_engine'];
			 
				$ins_running=mysql_query("INSERT INTO transmisi_proses_inspection_detail (form_code,inspection_number,description,group_tab,update_item,inspection_engine_number,inspection_engine_model,inspection_area,dt_proses) values ('$form_code','$no_inspection','$item','Front','1','$engine_number','$engine_model','$area','$Tgl_now')");
										
			}			
			
			
			$sql7=mysql_query("select * from transmisi_back_tm where form_code='".$form_code."'");
		while ($rfs=mysql_fetch_array($sql7))
													
			{
				$item = $rfs['inspection_back_engine'];
			 
				$ins_running=mysql_query("INSERT INTO transmisi_proses_inspection_detail (form_code,inspection_number,description,group_tab,update_item,inspection_engine_number,inspection_engine_model,inspection_area,dt_proses) values ('$form_code','$no_inspection','$item','Back','1','$engine_number','$engine_model','$area','$Tgl_now')");
										
			}		
			
			
$ins_p1=mysql_query("INSERT INTO transmisi_problem (form_code,inspection_number) values ('$form_code','$no_inspection')");

$ins_p2=mysql_query("INSERT INTO transmisi_problem (form_code,inspection_number) values ('$form_code','$no_inspection')");

$ins_p3=mysql_query("INSERT INTO transmisi_problem (form_code,inspection_number) values ('$form_code','$no_inspection')");

$ins_p4=mysql_query("INSERT INTO transmisi_problem (form_code,inspection_number) values ('$form_code','$no_inspection')");

$ins_p5=mysql_query("INSERT INTO transmisi_problem (form_code,inspection_number) values ('$form_code','$no_inspection')");
	//selesai isi							
										
	
	$ins_num=mysql_query("INSERT INTO transmisi_number (number) values ('1')");				
	
	
	if($qxtambah)
						{ 
						
					//	$query_pt3=mysql_query("insert into transmisi_proses_inspection_header_log select * from proses_inspection_header WHERE inspection_number='".$no_inspection."'");	

	//$query_pt4=mysql_query("insert into transmisi_proses_inspection_detail_log select * from proses_inspection_detail WHERE inspection_number='".$no_inspection."'");
						
							if($form_code=="6D16T"){
							
									header("location:ct_2x.php?form_code=$form_code&inspection_number=$no_inspection&aksi=$aksi&en=$engine_number&em=$engine_model&area=$area&dt=$Tgl_now&kopname=$kopname&ip=$ip_number");
									

						
							}else{
							
									header("location:ct_tm.php?form_code=$form_code&inspection_number=$no_inspection&aksi=$aksi&en=$engine_number&em=$engine_model&area=$area&dt=$Tgl_now&kopname=$kopname&ip=$ip_number&supply_num=$supply_num");
							
							}
								
							
					}else{
						
							header("location:dashboard_tm.php?&kopname=$kopname");
						}
	
	
	}
	
	

?>

