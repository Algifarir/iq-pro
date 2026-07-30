
<?php
	


	include "../config/koneksi.php";
	
	$pros = $_REQUEST['pros'];
	
	

		$id	= $_POST['id'];
		$idx	= $_REQUEST['idx'];
		$ids	= $_REQUEST['ids'];
		$pilihanmenu = $_POST['pilihanmenu'];	
		$usr_login = $_POST['usr_login'];
		$level = $_POST['level'];	
		$nama	= $_POST['nama'];

		$querymenu=mysql_query("select * from master_menu where id_menu ='".$pilihanmenu."'");
		while($data2=mysql_fetch_array($querymenu)){
			
			$menu_name = $data2['name_menu'];
			$url = $data2['url'];
			$menu_order = $data2['menu_order'];
		}
		
		$queryct=mysql_query("select count(menu_order) as ct from master_menu_user where assigned_menu  ='".$nama."'");
		while($datm=mysql_fetch_array($queryct)){
			
			$ctm = $datm['ct'];
		}
		
		$angka = $ctm + 1;
		


		if(isset($_POST['add'])){									
			$lvl1 = 'Yes';
		}else{
			$lvl1= 'No';
		}
	
		if(isset($_POST['edit'])){									
			$lvl2 = 'Yes';
		}else{
			$lvl2= 'No';
		}
		
		if(isset($_POST['delete'])){									
			$lvl3 = 'Yes';
		}else{
			$lvl3= 'No';
		}
		
		if(isset($_POST['view'])){									
			$lvl4 = 'Yes';
		}else{
			$lvl4= 'No';
		}
	

		switch ($pros){
		case "tambah" :
			
		
									
$qxtambah=mysql_query("INSERT INTO master_menu_user (id_menu,name_menu,url,menu_order,level,rol_add,rol_edit,rol_delete,rol_view,user,assigned_menu) values ('$pilihanmenu','$menu_name','$url','$angka','$level','$lvl1','$lvl2','$lvl3','$lvl4','$usr_login','$nama')");


$qubah=mysql_query("UPDATE master_user SET rol = 'Yes' WHERE id='$id'");
							 
 									
$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log)values('".$menu_name."','Admin','".$usr_login."','1')");
						
			
			
					if($qxtambah)
						{
							


							header("location:../index.php?pilih=1.2&aksi=setrol&id=$id");
							
						}
					
						
				
			
		break;
		
		case "edit" :
				
			//header("location:../index.php?pilih=1.2");
		
		
				//$lib->edit($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
		break;
		
		case "Delone" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM master_menu_user WHERE id='".$idx."'");
				
$ins_log=mysql_query("INSERT INTO others_history_log(description,user,id_user_change,type_log)values('".$menu_name."','Admin','".$usr_login."','1')");
						
				
				if($qdelete){
								header("location:../index.php?pilih=1.2&aksi=setrol&id=".$ids."");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>