<?php 
// menghubungkan dengan koneksi

include "../config/koneksi.php";
	$kopname = $_SESSION['kopname'];
	$level = $_SESSION['level'];
// menghubungkan dengan library excel reader
include "excel_reader2.php";
	$tgl_m = date_format(date,'m');
	$tgl_y = date_format(date,'Y');;
	$Tgl_now = date('Y-m-d h:i:s');
?>
 
<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=3; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$material     = $data->val($i, 1);
	$name   = $data->val($i, 2);
	$number  = $data->val($i, 3);
	$model  = substr($number,0,4);
 	
if($material!= "" && $name != "" && $number != ""){
		// input data ke database (table data_pegawai)

$querys=mysql_query("SELECT * FROM master_engine WHERE engine_number = '$number'");
$jumlahs=mysql_num_rows($querys);


if($jumlahs > 0){

$query_pt1=mysql_query("INSERT into master_engine_temp1(material,engine_name,engine_number,engine_model,engine_status,tgl) values('$model','$material','$number','$name','Aktif','$Tgl_now')");


}else{
$query_pt2=mysql_query("INSERT into master_engine_temp2(material,engine_name,engine_number,engine_model,engine_status,tgl) values('$model','$material','$number','$name','Aktif','$Tgl_now')");

}


		$berhasil++;
	}
}



// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);
 
// alihkan halaman ke index.php
header("location:../index.php?pilih=2.2&kopname='$kopname'&level='$level'&aksi=proses_upload");
?>