
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
	$inspection_back_engine	= $_POST['inspection_back_engine'];
	
	

	

		switch ($pros){
		case "tambah" :
		
		$sqlx=mysql_query("SELECT * transmisi_back_tm where inspection_back_engine ='".$inspection_back_engine."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

					if($jumlah > 0){
			
								
						header("location:../index.php?pilih=5.7&aksi=tambah&ec1=$form_code&ec2=$inspection_back_engine&err=1");
				 }else{
									
$qxtambah=mysql_query("INSERT INTO transmisi_back_tm (form_code,inspection_back_engine,user_name,user_dept) values ('$form_code','$inspection_back_engine','$kopname','$kopname')");
 									
						$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('insert Item BAck','$kopname','$kopname','7')");
						
			
			
					if($qxtambah)
						{
							header("location:../index.php?pilih=5.7");
							
							
						}
					 
				
				}
						
		break;
		
		case "edit" :
				
			$qubah=mysql_query("UPDATE transmisi_back_tm SET form_code='$form_code'
												,inspection_back_engine = '$inspection_back_engine'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Item Back','$kopname','$kopname','7')");

					if($qubah)	{
										header("location:../index.php?pilih=5.7");
					}else{
										echo "Edit Data Gagal!!!";
								}
									
				
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
		$qdelete=mysql_query("DELETE FROM transmisi_back_tm WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Item Back','Admin','Admin','7')");
				
				if($qdelete){
								header("location:../index.php?pilih=5.7");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>