
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
	$form_type	= $_POST['form_type'];
	$form_title	= $_POST['form_title'];
	

		switch($pros){
		case "tambah" :
		
		
	
							
											$sqlx=mysql_query("SELECT * FROM transmisi_master_type_form where form_code ='".$form_code."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

					if($jumlah > 0){
			
								
						header("location:../index.php?pilih=5.2&aksi=tambah&ec1=$form_code&ec2=$form_type&ec3=$form_title&err=1");
				 }else{
				 
		
		 			$qtambah=mysql_query("INSERT INTO transmisi_master_type_form(form_code,form_type,form_title,user_name,user_dept,nama_file,url) values ('$form_code','$form_type','$form_title','$kopname','Admin','$filename','$path')");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('Insert Type Form','Admin','Admin','3')");
				
				if($qtambah){
								header("location:../index.php?pilih=5.2");
								
				}else{
								echo "Insert Data Gagal!!!!";
							}
							
				}
			
						
				
						
		
						
		break;
		
		case "edit" :
				
		
						
							
							$qubah=mysql_query("UPDATE transmisi_master_type_form SET form_code='$form_code'
												,form_type = '$form_type'
												,nama_file = '$filename'
												,url = '$path'
												,form_title = '$form_title' WHERE id='$id'");
							
							
							
							$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('Update Type Form','Admin','Admin','3')");

					if($qubah)	{
										header("location:../index.php?pilih=5.2");
					}else{
										echo "Edit Data Gagal!!!";
						
						}
							
							
						
			

			
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM transmisi_master_type_form WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('Delete Type Form','Admin','$userdel','3')");
				
				if($qdelete){
								header("location:../index.php?pilih=5.2");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>