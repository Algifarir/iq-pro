
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
	$inspection_left_side	= $_POST['inspection_left_side'];

	

	

		switch ($pros){
		case "tambah" :
		
		 $sqlx=mysql_query("SELECT * from transmisi_master_inspection_left_tm where master_inspection_left_side ='".$master_inspection_left_side."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

					if($jumlah > 0){
			
								
						header("location:../index.php?pilih=5.9&aksi=tambah&ec1=$form_code&ec2=$master_inspection_left_side&err=1");
				 }else{
									
$qxtambah=mysql_query("INSERT INTO transmisi_master_inspection_left_tm (form_code,inspection_left_side,user_name,user_dept) values ('$form_code','$inspection_left_side','$kopname','$kopname')");
 									
						$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('insert Item Left','$kopname','$kopname','9')");
						
			
			
					if($qxtambah)
						{
							header("location:../index.php?pilih=5.9");
							
							
						}
					 
				
				}
						
		break;
		
		case "edit" :
				
			$qubah=mysql_query("UPDATE transmisi_master_inspection_left_tm SET form_code='$form_code'
												,inspection_left_side = '$inspection_left_side'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Item Left','$kopname','$kopname','9')");

					if($qubah)	{
										header("location:../index.php?pilih=5.9");
					}else{
										echo "Edit Data Gagal!!!";
								}
				
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM transmisi_master_inspection_left_tm  WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Item Left','Admin','Admin','9')");
				
				if($qdelete){
								header("location:../index.php?pilih=5.9");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>