
<?php
	
	include "config/koneksi.php";
	
	$pros = $_REQUEST['pros'];
	$form_code = $_POST['form_code'];
	$inspection_number = $_POST['inspection_number'];
	$area = $_POST['area'];
	$noip = $_POST['noip'];
	$engine_number = $_POST['engine_number'];
	$engine_model = $_POST['engine_model'];
	$koreksi = $_POST['koreksi'];
	$approve_fg = $_POST['approve_fg'];
	$desc_running = $_POST['desc_running'];
	
	
	//performa
	$ket1 = $_POST['ket1'];
	$ket2 = $_POST['ket2'];
	$ket3 = $_POST['ket3'];
	$ket4 = $_POST['ket4'];
	$ket5 = $_POST['ket5'];
	$ket6 = $_POST['ket6'];
	$ket7 = $_POST['ket7'];
	$ket8 = $_POST['ket8'];
	$ket9 = $_POST['ket9'];
	$ket10 = $_POST['ket10'];
	$ket11 = $_POST['ket11'];
	$ket12 = $_POST['ket12'];
	$ket13 = $_POST['ket13'];
	$ket14 = $_POST['ket14'];
	$ket15 = $_POST['ket15'];
	$ket16 = $_POST['ket16'];
	
	$hasil1 = $_POST['hasil1'];
	$hasil2 = $_POST['hasil2'];
	$hasil3 = $_POST['hasil3'];
	$hasil4 = $_POST['hasil4'];
	$hasil5 = $_POST['hasil5'];
	$hasil6 = $_POST['hasil6'];
	$hasil7 = $_POST['hasil7'];
	$hasil8 = $_POST['hasil8'];
	$hasil9 = $_POST['hasil9'];
	$hasil10 = $_POST['hasil10'];
	$hasil11 = $_POST['hasil11'];
	$hasil12 = $_POST['hasil12'];
	$hasil13 = $_POST['hasil13'];
	$hasil14 = $_POST['hasil14'];
	$hasil15 = $_POST['hasil15'];
	$hasil16 = $_POST['hasil16'];
	
	$ok1 = $_POST['ok1'];
	$ok2 = $_POST['ok2'];
	$ok3 = $_POST['ok3'];
	$ok4 = $_POST['ok4'];
	$ok5 = $_POST['ok5'];
	$ok6 = $_POST['ok6'];
	$ok7 = $_POST['ok7'];
	$ok8 = $_POST['ok8'];
	$ok9 = $_POST['ok9'];
	$ok10 = $_POST['ok10'];
	$ok11 = $_POST['ok11'];
	$ok12 = $_POST['ok12'];
	$ok13 = $_POST['ok13'];
	$ok14 = $_POST['ok14'];
	$ok15 = $_POST['ok15'];
	$ok16 = $_POST['ok16'];
	
	$no1 = $_POST['no1'];
	$no2 = $_POST['no2'];
	$no3 = $_POST['no3'];
	$no4 = $_POST['no4'];
	$no5 = $_POST['no5'];
	$no6 = $_POST['no6'];
	$no7 = $_POST['no7'];
	$no8 = $_POST['no8'];
	$no9 = $_POST['no9'];
	$no10 = $_POST['no10'];
	$no11 = $_POST['no11'];
	$no12 = $_POST['no12'];
	$no13 = $_POST['no13'];
	$no14 = $_POST['no14'];
	$no15 = $_POST['no15'];
	$no16 = $_POST['no16'];

		switch ($pros){
		case "tambahsave" :
		
		
    
    
   
	
	
	echo "<script type='text/javascript'>alert('".$ket4."');</script>";

		
	//	$sqlx=mysql_query("SELECT * proses_inspection_header where inspection_number ='".$inspection_number."'");
		//		$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

			//		if($jumlah > 0){
			
			
					$qubah=mysql_query("UPDATE proses_inspection_header SET inspection_area='$area'
												,ip_number = '$noip'
												,inspection_engine_number = '$engine_number'
												,inspection_engine_model = '$engine_model'
												,faktor_koreksi = '$koreksi'
												,final_judgement = '$approve_fg'
												,inspection_status = '$approve_fg'
												,desc_running = '$desc_running'
												WHERE inspection_number='$inspection_number'");
												
$qptengine=mysql_query("UPDATE proses_inspection_detail SET inspection_engine_number='$engine_number' WHERE inspection_number='$inspection_number'");	
												
$qpt1=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil1', hasil_pt_ok = '$ok1', hasil_pt_no = '$no1' WHERE description='$ket1' AND inspection_number='$inspection_number'");		

$qpt2=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil2', hasil_pt_ok = '$ok2', hasil_pt_no = '$no2' WHERE description='$ket2' AND inspection_number='$inspection_number'");	

$qpt3=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil3', hasil_pt_ok = '$ok3', hasil_pt_no = '$no3' WHERE description='$ket3' AND inspection_number='$inspection_number'");							
												
$qpt4=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil4', hasil_pt_ok = '$ok4', hasil_pt_no = '$no4' WHERE description='$ket4' AND inspection_number='$inspection_number'");

$qpt5=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil5', hasil_pt_ok = '$ok5', hasil_pt_no = '$no5' WHERE description='$ket5' AND inspection_number='$inspection_number'");


$qpt6=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil6', hasil_pt_ok = '$ok6', hasil_pt_no = '$no6' WHERE description='$ket6' AND inspection_number='$inspection_number'");		

$qpt7=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil7', hasil_pt_ok = '$ok7', hasil_pt_no = '$no7' WHERE description='$ket7' AND inspection_number='$inspection_number'");	

$qpt8=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil8', hasil_pt_ok = '$ok8', hasil_pt_no = '$no8' WHERE description='$ket8' AND inspection_number='$inspection_number'");							
												
$qpt9=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil9', hasil_pt_ok = '$ok9', hasil_pt_no = '$no9' WHERE description='$ket9' AND inspection_number='$inspection_number'");

$qpt10=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil10', hasil_pt_ok = '$ok10', hasil_pt_no = '$no10' WHERE description='$ket10' AND inspection_number='$inspection_number'");

$qpt11=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil11', hasil_pt_ok = '$ok11', hasil_pt_no = '$no11' WHERE description='$ket11' AND inspection_number='$inspection_number'");		

$qpt12=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil2', hasil_pt_ok = '$ok12', hasil_pt_no = '$no12' WHERE description='$ket12' AND inspection_number='$inspection_number'");	

$qpt13=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil13', hasil_pt_ok = '$ok13', hasil_pt_no = '$no13' WHERE description='$ket13' AND inspection_number='$inspection_number'");							
												
$qpt14=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil14', hasil_pt_ok = '$ok14', hasil_pt_no = '$no14' WHERE description='$ket14' AND inspection_number='$inspection_number'");

$qpt15=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil15', hasil_pt_ok = '$ok15', hasil_pt_no = '$no15' WHERE description='$ket15' AND inspection_number='$inspection_number'");

$qpt16=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil16', hasil_pt_ok = '$ok16', hasil_pt_no = '$no16' WHERE description='$ket16' AND inspection_number='$inspection_number'");												
												//running tes update
												 if (empty($_POST['chkrunyes'])) {

														}	else{
														
													
														
														$idx = $_POST['chkrunyes'];
														$jml_dipilih=count($idx);
															
															for($x=0;$x<$jml_dipilih;$x++){
															
												mysql_query("UPDATE proses_inspection_detail set hasil_running_ok='Y' where id ='".$idx[$x]."'");
															
													
															}
														
														}
														
														
														 if (empty($_POST['chkrunno'])) {
														
														
													
														}	else{
														
															
														
														$idxs = $_POST['chkrunno'];
														$jml_dipilihs=count($idxs);
															
															for($xs=0;$xs<$jml_dipilihs;$xs++){
															
											mysql_query("UPDATE proses_inspection_detail set hasil_running_no='N' where id ='".$idxs[$xs]."'");
															
															}
														
														}
											//selesai running
											

											
											
											
						
				//	$qxtambah=mysql_query("INSERT INTO master_inspection_back_engine (form_code,inspection_back_engine,user_name,user_dept) values ('$form_code','$inspection_back_engine','$kopname','$kopname')");	
					//if($qxtambah)
					//	{
							//header("location:ct_1.php?form_code=6D16T&inspection_number=6D16T.102021.18&aksi=insert");
							
							header("location:dashboard.php");
					//	}			
								
								
						
				// }else{
									

					 
				
			//	}
						
		break;
		
		case "edit" :
				
			$qubah=mysql_query("UPDATE master_inspection_back_engine SET form_code='$form_code'
												,inspection_back_engine = '$inspection_back_engine'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Item Back','$kopname','$kopname','7')");

					if($qubah)	{
										header("location:../index.php?pilih=2.7");
					}else{
										echo "Edit Data Gagal!!!";
								}
									
				
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
		$qdelete=mysql_query("DELETE FROM master_inspection_back_engine WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Item Back','Admin','Admin','7')");
				
				if($qdelete){
								header("location:../index.php?pilih=2.7");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>