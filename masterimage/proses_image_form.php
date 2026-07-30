
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
	$group_tab	= $_POST['group_tab'];

	

		switch($pros){
		case "tambah" :
		
		
		 if(!empty($_FILES['uploaded_file']))
				{
					$path = "../upload/";
					$path = $path . basename( $_FILES['uploaded_file']['name']);
						
					$filename = $_FILES['uploaded_file']['name'];
					$extension = pathinfo($filename, PATHINFO_EXTENSION);
					
					
					
					if ($_FILES['uploaded_file']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
								echo "File too large!";
					} else {
	
						if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
						{
							
							
											$sqlx=mysql_query("SELECT * FROM master_image where form_code ='".$form_code."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

					
			
								
					
				 
		
		 			$qtambah=mysql_query("INSERT INTO master_image(form_code,group_tab,nama_file,url) values ('$form_code','$group_tab','$filename','$path')");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('Insert Type Form','Admin','Admin','3')");
				
				if($qtambah){
								header("location:../index.php?pilih=4.8");
								
				}else{
								echo "Insert Data Gagal!!!!";
							}
							
					
							
							
							
							 }else{
							
							
							
								echo "There was an error uploading the file, please try again!";
							}
			
						
						
						}
						
					}
						
		break;
		
		case "edit" :
				
			if(isset($_POST['chf'])){
											
						echo "<script type='text/javascript'>alert('atas');</script>";
				if(!empty($_FILES['uploaded_file']))
				{
					$path = "../upload/";
					$path = $path . basename( $_FILES['uploaded_file']['name']);
						
					$filename = $_FILES['uploaded_file']['name'];
					$extension = pathinfo($filename, PATHINFO_EXTENSION);
					
					
					
					if ($_FILES['uploaded_file']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
								echo "File too large!";
					} else {
	
						if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
						{
						
							
							$qubah=mysql_query("UPDATE master_image SET form_code='$form_code'
												,group_tab = '$group_tab'
												,nama_file = '$filename'
												,url = '$path'
												 WHERE id='$id'");
							
							
							
							$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('Update Type Form','Admin','Admin','3')");

					if($qubah)	{
										header("location:../index.php?pilih=4.8");
					}else{
										echo "Edit Data Gagal!!!";
						
						}
							
							
						
						}

					}
			
				}
			}else{

					$qubah=mysql_query("UPDATE master_image SET form_code='$form_code'
												,group_tab = '$group_tab'
												 WHERE id='$id'");
							
							
							
							$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('Update Type Form','Admin','Admin','3')");

					if($qubah)	{
										header("location:../index.php?pilih=4.8");
					}else{
										echo "Edit Data Gagal!!!";
						
						}


			}
			
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM master_image WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('Delete Type Form','Admin','$userdel','3')");
				
				if($qdelete){
								header("location:../index.php?pilih=4.8");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>