
<?php
	


	include "../config/koneksi.php";
	
	$pros = $_REQUEST['pros'];
	if(isset($_POST['id'])){
		$id	= $_POST['id'];
		
	}else{
		$id	= $_REQUEST['id'];
		$userdel = $_REQUEST['deluxe'];
		$delkopname = $_REQUEST['delkopname'];
	}
	$kopname	= $_POST['kopname'];
	$nama	= $_POST['nama'];
	$email	= $_POST['email'];
	$user	= $_POST['username'];
	$dept	= $_POST['dept'];
	$level	= $_POST['level'];
	$stat_user	= $_POST['stat_user'];
	$log_status = $_POST['log_status'];
	
	$kunci = $_POST['password'];
	$kunci2 = md5($_POST['password']);
	if(isset($_POST['pwd'])){
			
			$pass	= md5($kunci);
	}else{
			$pass	= $kunci;
	}

	

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
									
$qxtambah=mysql_query("INSERT INTO master_user (full_name,departement,email,username,password,level,nama_file,url,usr_stat,rol,log_status) values ('$nama','$dept','$email','$user','$kunci2','$level','$filename','$path','Aktif','No','out')");
 									
						$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Data User','$kopname','$user','0')");
						
			
			
					if($qxtambah)
						{
							header("location:../index.php?pilih=1.1");
							
							
						}
					
						}else{
							
							
							
								echo "There was an error uploading the file, please try again!";
							}
					}
				}
		break;
		
		case "edit" :
				
			if(isset($_POST['chf'])){
											
					
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
							
$qubah=mysql_query("UPDATE master_user SET full_name='$nama',departement='$dept',email='$email',username='$user',password ='$pass',level='$level',nama_file='$filename',url='$path',usr_stat='$stat_user',log_status='$log_status' WHERE id='$id'");

$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Data User','$kopname','$user','0')");
					if($qubah)	{
										header("location:../index.php?pilih=1.1");
					}else{
										echo "Edit Data Gagal!!!";
								}
									

					
						}else{
							
							
							
								echo "There was an error uploading the file, please try again!";
							}
					}
				}
		
		}else{
			
			$qubah=mysql_query("UPDATE master_user SET full_name='$nama'
												,departement = '$dept'
												,email = '$email'
												,username = '$user'
												,password = '$pass'
												,level = '$level'
												,usr_stat = '$stat_user'
												,log_status='$log_status'
							
							 WHERE id='$id'");
			$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('update Data User','$kopname','$user','0')");
					if($qubah)	{
										header("location:../index.php?pilih=1.1");
					}else{
										echo "Edit Data Gagal!!!";
								}
		}
		
		
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM master_user WHERE id='$id'");
				$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log) values ('delete Data User','$delkopname','$userdel','0')");
				
				if($qdelete){
								header("location:../index.php?pilih=1.1");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>