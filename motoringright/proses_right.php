
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
	$inspection_right_side	= $_POST['inspection_right_side'];
	
	

	

		switch ($pros){
		case "tambah" :
		
		$sqlx=mysql_query("SELECT * from transmisi_inspection_right_tm where inspection_right_side ='".$inspection_right_side."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

					if($jumlah > 0){
			
								
						header("location:../index.php?pilih=5.8&aksi=tambah&ec1=$form_code&ec2=$inspection_right_side&err=1");
				 }else{
									
$qxtambah=mysql_query("INSERT INTO transmisi_inspection_right_tm (form_code,inspection_right_side,user_name,user_dept) values ('$form_code','$inspection_right_side','$kopname','$kopname')");
 									
						$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('insert Item Right','$kopname','$kopname','8')");
						
			
			
					if($qxtambah)
						{
							header("location:../index.php?pilih=5.8");
							
							
						}
					 
				
				}
						
		break;
		
		case "edit" :
				
			$qubah=mysql_query("UPDATE transmisi_inspection_right_tm SET form_code='$form_code'
												,inspection_right_side = '$inspection_right_side'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Item Right','$kopname','$kopname','8')");

					if($qubah)	{
										header("location:../index.php?pilih=5.8");
					}else{
										echo "Edit Data Gagal!!!";
								}
									
				
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM transmisi_inspection_right_tm WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Item Right','Admin','Admin','8')");
				
				if($qdelete){
								header("location:../index.php?pilih=5.8");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>