
<?php
	


	include "../config/koneksi.php";
	
	$pros = $_REQUEST['pros'];
	if(isset($_POST['id'])){
		$id	= $_POST['id'];
		
	}else{
		$id	= $_REQUEST['id'];
	}
	$kopname	= $_POST['kopname'];
	$area_code	= $_POST['area_code'];
	$area_name	= $_POST['area_name'];
	$area_address	= $_POST['area_address'];
	$area_status	= $_POST['area_status'];
	

	

		switch ($pros){
		case "tambah" :
		
				$sqlx=mysql_query("SELECT * FROM transmisi_master_area where area_code ='".$area_code."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

					if($jumlah > 0){
			
								
						header("location:../index.php?pilih=5.0&aksi=tambah&ac1=$area_code&ac2=$area_name&ac3=$area_address&err=1");
				 }else{
									
$qxtambah=mysql_query("INSERT INTO transmisi_master_area (area_code,area_name,area_address,area_status) values ('$area_code','$area_name','$area_address','$area_status')");
 									
						$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('insert Data Area','$kopname','$kopname','2')");
						
			
			
					if($qxtambah)
						{
							header("location:../index.php?pilih=5.0");
							
							
						}
					 
				 }
						
		break;
		
		case "edit" :
				
			
			
			$qubah=mysql_query("UPDATE transmisi_master_area SET area_name='$area_name'
												,area_address = '$area_address'
												,area_status = '$area_status'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Data Area','$kopname','$kopname','2')");
					if($qubah)	{
										header("location:../index.php?pilih=5.0");
					}else{
										echo "Edit Data Gagal!!!";
								}
	
		
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM transmisi_master_area WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Data area','Admin','Admin','2')");
				
				if($qdelete){
								header("location:../index.php?pilih=5.0");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>