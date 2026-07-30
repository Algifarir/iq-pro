
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
	$item_inspection	= $_POST['item_inspection'];
	$group_column	= $_POST['group_column'];
	$verifikasi	= $_POST['verifikasi'];


	

	

		switch ($pros){
		case "tambah" :
		
	
							
												$sqlx=mysql_query("SELECT * FROM transmisi_master_motoring_inspection where item_inspection ='".$item_inspection."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

				if($jumlah > 0){
			
								
						header("location:../index.php?pilih=5.5&aksi=tambah&ec1=$form_code&ec2=$item_inspection&ec3=$group_column&err=1");
				 }else{
									
						$qxtambah=mysql_query("INSERT INTO transmisi_master_motoring_inspection (form_code,item_inspection,group_column,user_name,user_dept,verifikasi) values ('$form_code','$item_inspection','$group_column','$kopname','Admin','$verifikasi')");
 									
						$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('insert Data Item Running','$kopname','$kopname','4')");
						
			
			
					if($qxtambah)
						{
							header("location:../index.php?pilih=5.5");
							
							
						}
					 
				 }
							
							
							
							
								
			
		
		break;
		
		case "edit" :
				
			
							
$qubah=mysql_query("UPDATE transmisi_master_motoring_inspection SET form_code='$form_code'
												,verifikasi = '$verifikasi'
												,item_inspection = '$item_inspection'
												,group_column = '$group_column'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Data Item Running','$kopname','$kopname','4')");

					if($qubah)	{
										header("location:../index.php?pilih=5.5");
					}else{
										echo "Edit Data Gagal!!!";
								}
									

					
					
				
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM transmisi_master_leak_inspection WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Data Item Running','$kopname','Admin','4')");
				
				if($qdelete){
								header("location:../index.php?pilih=5.5");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>