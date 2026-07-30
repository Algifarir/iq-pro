
<?php
	


	include "../config/koneksi.php";
	
	$pros = $_REQUEST['pros'];
	if(isset($_POST['id'])){
		$id	= $_POST['id'];
		
	}else{
		$id	= $_REQUEST['id'];
		$userdel = $_REQUEST['deluxe'];
	}
	$kopname	= $_POST['kopname'];
	$form_code	= $_POST['form_code'];
	$description	= $_POST['description'];
	$rpm	= $_POST['rpm'];
	$spec_start	= $_POST['spec_start'];
	$spec_finish	= $_POST['spec_finish'];
	$uom	= $_POST['uom'];
	$group_column	= $_POST['group_column'];
	$urutan	= $_POST['urutan'];
	
	$omath	= $_POST['omath'];
	$fulconsup	= $_POST['fulconsup'];
	$cylinder	= $_POST['cylinder'];
	
	

		switch ($pros){
		case "tambah" :
		

							
							
		
				$sqlx=mysql_query("SELECT * FROM master_performance_test where description ='".$description."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

					if($jumlah > 0){
			
								
						header("location:../index.php?pilih=2.5&aksi=tambah&ec1=$form_code&ec2=$description&ec3=$rpm&ec4=$spec_start&ec5=$spec_finish&ec6=$uom&err=1");
				 }else{
									
$qxtambah=mysql_query("INSERT INTO master_performance_test (form_code,description,rpm,spec_start,spec_finish,uom,group_column,max_speed_start,operator_math,full_consup,cylinder) values ('$form_code','$description','$rpm','$spec_start','$spec_finish','$uom','$group_column','$urutan','$omath','$fulconsup','$cylinder')");
 									
						$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('insert Data Performance test','$kopname','$kopname','5')");
						
			
			
					if($qxtambah)
						{
							header("location:../index.php?pilih=2.5");
							
							
						}
					 
			}
						
		break;
		
		case "edit" :
				
			
			
			$qubah=mysql_query("UPDATE master_performance_test SET form_code='$form_code'
												,description = '$description'
												,rpm = '$rpm'
												,spec_start = '$spec_start'
												,spec_finish = '$spec_finish'
												,uom = '$uom'
												,group_column = '$group_column'
												,max_speed_start = '$urutan'
												,operator_math = '$omath'
												,full_consup = '$fulconsup'
												,cylinder = '$cylinder'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Data Item Performance Test','$kopname','$kopname','5')");

							
			
					if($qubah)	{
										header("location:../index.php?pilih=2.5");
					}else{
										echo "Edit Data Gagal!!!";
								}
		
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM master_performance_test WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Data item performance test','Admin','Admin','5')");
				
				if($qdelete){
								header("location:../index.php?pilih=2.5");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>