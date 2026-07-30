<?php
	include "../config/koneksi.php";
	//require ('root.php');
	//$lib = new root();
	$pros=$_REQUEST['pros'];
	$kode_user=$_POST['kode_user'];
	$kode_petugas=$_POST['kode_petugas'];
	$level=$_POST['level'];	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$tgl_entri=$_POST['tgl_entri'];
	$nama=$_POST['nama'];


	if(isset($kode_jenisBR)==""){
		$kode_jenisBR=$_REQUEST['kode_jenisBR'];
	
	}else{
		
		$kode_jenisBR=$_POST['kode_jenisBR'];
	
	}
	
	
	switch ($pros)
	{
		case "tambah" :
		
	
	$qxtambah=mysql_query("INSERT INTO t_user (kode_user,username,password,nama,tgl_entri,level) values ('$kode_user','$username','$password','$nama','$tgl_entri','$level');");
					if($xqtambah)
						{
							header("location:../index.php?pilih=4.3");
						}
		break;
		case "hapus" :
				//$lib->hapus($kode_pegawai,$nama_pegawai,$initial,$email,$hp,$npwp,$bank,$cabang,$norek);
				
				$qdelete=mysql_query("DELETE FROM t_jenis_br WHERE kode_jenisBR='$kode_jenisBR'");
				
				if($qdelete){
								header("location:../index.php?pilih=1.3");
								
				}else{
								echo "Hapus Data Gagal!!!!";
							}
		break;
		
		default : break; 
	}
	
?>