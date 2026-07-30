
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
	$engine_number	= $_POST['engine_number'];
	$engine_name	= $_POST['engine_name'];
	$engine_model	= $_POST['engine_model'];
	$engine_brand	= $_POST['engine_brand'];
	$car_name	= $_POST['car_name'];
	$engine_suplier	= $_POST['engine_suplier'];
	$engine_area_name	= $_POST['engine_area_name'];
	$engine_status	= $_POST['engine_status'];
	

	

		switch ($pros){
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
	
						if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)){
							
							
		
				$sqlx=mysql_query("SELECT * FROM master_engine where engine_number ='".$engine_number."'");
				$jumlah=mysql_num_rows($sqlx);
				//$a=mysql_fetch_array($sqlx);

					if($jumlah > 0){
			
								
						header("location:../index.php?pilih=2.2&aksi=tambah&ec1=$engine_number&ec2=$engine_name&ec3=$engine_model&ec4=$engine_brand&ec5=$car_name&ec6=$engine_suplier&err=1");
				 }else{
									
$qxtambah=mysql_query("INSERT INTO master_engine (engine_number,engine_name,engine_model,engine_brand,car_name,engine_suplier,engine_area_name,engine_status,nama_file,url) values ('$engine_number','$engine_name','$engine_model','$engine_brand','$car_name','$engine_suplier','$engine_area_name','$engine_status','$filename','$path')");
 									
						$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('insert Data Engine','$kopname','$kopname','3')");
						
			
			
					if($qxtambah)
						{
							header("location:../index.php?pilih=2.2");
							
							
						}
					 
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
	
						if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)){
							
$qubah=mysql_query("UPDATE master_engine SET engine_number='$engine_number'
												,engine_name = '$engine_name'
												,engine_model = '$engine_model'
												,engine_brand = '$engine_brand'
												,car_name = '$car_name'
												,engine_suplier = '$engine_suplier'
												,engine_area_name = '$engine_area_name'
												,engine_status = '$engine_status'
												,nama_file = '$filename'
												,url = '$path'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Data Engine','$kopname','$kopname','2')");

					if($qubah)	{
										header("location:../index.php?pilih=2.2");
					}else{
										echo "Edit Data Gagal!!!";
								}
									

					
						}else{
							
							
							
								echo "There was an error uploading the file, please try again!";
							}
					}
				}
		
		}else{
			
			
			echo "<script type='text/javascript'>alert('bawah');</script>";
			
			$qubah=mysql_query("UPDATE master_engine SET engine_number='$engine_number'
												,engine_name = '$engine_name'
												,engine_model = '$engine_model'
												,engine_brand = '$engine_brand'
												,car_name = '$car_name'
												,engine_suplier = '$engine_suplier'
												,engine_area_name = '$engine_area_name'
												,engine_status = '$engine_status'
												WHERE id='$id'");
												
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Data Engine','$kopname','$kopname','2')");

							
			
					if($qubah)	{
										header("location:../index.php?pilih=2.2");
					}else{
										echo "Edit Data Gagal!!!";
								}
		}
		
				
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM master_engine WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Data Engine','Admin','Admin','2')");
				
				if($qdelete){
								header("location:../index.php?pilih=2.2");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>