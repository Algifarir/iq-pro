
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
	$inspection_front_engine = $_POST['inspection_front_engine'];

	

	

		switch ($pros){
		case "tambah" :
		
							
							
		
				$sqlx=mysql_query("SELECT * transmisi_master_front_tm where inspection_front_engine ='".$inspection_front_engine."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

					if($jumlah > 0){
			
								
						header("location:../index.php?pilih=5.6&aksi=tambah&ec1=$form_code&ec2=$inspection_front_engine&err=1");
				 }else{
									
$qxtambah=mysql_query("INSERT INTO transmisi_master_front_tm (form_code,inspection_front_engine,user_name,user_dept) values ('$form_code','$inspection_front_engine','$kopname','$kopname')");
 									
						$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('insert Item Front','$kopname','$kopname','6')");
						
			
			
					if($qxtambah)
						{
							header("location:../index.php?pilih=5.6");
							
							
						}
					 
				
				}
						
		break;
		
		case "edit" :
				
			
$qubah=mysql_query("UPDATE transmisi_master_front_tm SET form_code='$form_code'
												,inspection_front_engine = '$inspection_front_engine'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Item Front','$kopname','$kopname','6')");

					if($qubah)	{
										header("location:../index.php?pilih=5.6");
					}else{
										echo "Edit Data Gagal!!!";
								}
									

					
					
	
		
				
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM transmisi_master_front_tm WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Item Front','Admin','Admin','6')");
				
				if($qdelete){
								header("location:../index.php?pilih=5.6");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>