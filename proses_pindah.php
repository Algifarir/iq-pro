
<?php
	


	include "config/koneksi.php";
	
	$pros = $_REQUEST['pros'];
	$engine_number	= $_POST['engine_number'];
	$engine_status	= $_POST['engine_status'];
	

	

		switch ($pros){
		case "pindah1" :
		
		
					
					if($engine_status=="Tidak Aktif"){
					
						
						$ins_logstatus=mysql_query("INSERT INTO master_engine_backup select * from master_engine where engine_status='Tidak Aktif'");
						
						
						if($ins_logstatus){
								$qdelete=mysql_query("DELETE FROM master_engine where engine_status='Tidak Aktif'");
								header("location:index.php?pilih=2.2");
								
						}else{
								echo "Pindah Data Gagal!!!!";
						}
							
							
					
					}elseif($engine_status="ALL"){
					
							$ins_logeng=mysql_query("INSERT INTO master_engine_backup select * from master_engine");
						
						if($ins_logeng){
								$qdelete=mysql_query("DELETE FROM master_engine");
								header("location:index.php?pilih=2.2");
								
						}else{
								echo "Pindah Data Gagal!!!!";
						}
						
						
						
					}
					
		
		 		
					
						
		break;
		
		case "kembalikan" :
				
				$ins_logeng_out=mysql_query("INSERT INTO master_engine (engine_number, engine_name, engine_model, engine_status, material) select engine_number, engine_name, engine_model, engine_status, material from master_engine_backup where engine_number='$engine_number'");
						
						if($ins_logeng_out){
								$qxdelete=mysql_query("DELETE FROM master_engine_backup where engine_number='$engine_number'");
								header("location:index.php?pilih=2.2");
								
						}else{
								echo "Kembalikan Data Gagal!!!!";
						}
			
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				
		break;
		
		default : break; 
	}
	
?>