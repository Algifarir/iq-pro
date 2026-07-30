
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
	$inspection_top_engine	= $_POST['inspection_top_engine'];
	
	

	

		switch ($pros){
		case "tambah" :
		
		 $sqlx=mysql_query("SELECT * master_inspection_top_engine where inspection_top_engine ='".$inspection_top_engine."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

					if($jumlah > 0){
			
								
						header("location:../index.php?pilih=3.0&aksi=tambah&ec1=$form_code&ec2=$inspection_top_engine&err=1");
				 }else{
									
$qxtambah=mysql_query("INSERT INTO master_inspection_top_engine (form_code,inspection_top_engine,user_name,user_dept) values ('$form_code','$inspection_top_engine','$kopname','$kopname')");
 									
						$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('insert Item Top','$kopname','$kopname','10')");
						
			
			
					if($qxtambah)
						{
							header("location:../index.php?pilih=3.0");
							
							
						}
					 
				
				}
						
		break;
		
		case "edit" :
				
			$qubah=mysql_query("UPDATE master_inspection_top_engine SET form_code='$form_code'
												,inspection_top_engine = '$inspection_top_engine'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Item Top','$kopname','$kopname','10')");

					if($qubah)	{
										header("location:../index.php?pilih=3.0");
					}else{
										echo "Edit Data Gagal!!!";
								}
				
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM master_inspection_top_engine WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Data Top Engine','Admin','Admin','10')");
				
				if($qdelete){
								header("location:../index.php?pilih=3.0");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>