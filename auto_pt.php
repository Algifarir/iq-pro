<?php
	
include "config/koneksi.php";
$inspection_numberx = $_POST['inspection_numberx'];
echo "<script type='text/javascript'>alert('".$inspection_numberx."');</script>";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$id=mysql_real_escape_string($_POST['id']);
$hasil=mysql_real_escape_string($_POST['hasil']);
$desk=mysql_real_escape_string($_POST['desk']);
$rpm=mysql_real_escape_string($_POST['rpm']);
$mulai=mysql_real_escape_string($_POST['mulai']);
$akhir=mysql_real_escape_string($_POST['akhir']);
$mas=mysql_real_escape_string($_POST['mas']);
$frm=mysql_real_escape_string($_POST['frm']);
$fuelcc=mysql_real_escape_string($_POST['fuelcc']);
$cylinder=mysql_real_escape_string($_POST['cylinder']);
$hasil3=mysql_real_escape_string($_POST['maxs']);

if($mas=="Lebih Kecil Sama Dengan"){

						if ($hasil <= $akhir) {
						$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil', hasil_pt_ok='&#10004', update_item='2' WHERE id='$id'");		  
						}elseif ($hasil >= $akhir){
								
						$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil', hasil_pt_ok='&#10006', update_item='3' WHERE id='$id'");
						
						}else{
						
						
						}


}elseif($mas=="Lebih Besar Sama Dengan"){


				if ($hasil >= $akhir) {
						$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil', hasil_pt_ok='&#10004', update_item='2' WHERE id='$id'");		  
						}elseif ($hasil <= $akhir){
								
						$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil', hasil_pt_ok='&#10006', update_item='3' WHERE id='$id'");
						
						}else{
						
						
						}			

}elseif($mas=="Rumus PS"){

		//$nilai1 = ($hasil * $rpm)/ 716.2;
		//$nilai2 = round($nilai1,2);
	
		
  	if ($hasil >= $mulai && $hasil <= $akhir) {
			$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil', hasil_pt_ok='&#10004', update_item='2' WHERE id='$id'");
			
			$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil3', hasil_pt_ok='&#10004', update_item='2' WHERE operator_math ='Hasil PS' and form_code='$frm'");
			
			$query_pt100=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil3', hasil_pt_ok='&#10004', update_item='2' WHERE operator_math ='Hasil PS 100' and form_code='$frm'");
			
			$query_pt200a=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil3', hasil_pt_ok='&#10004', update_item='2' WHERE operator_math ='Hasil TS 20015' and form_code='$frm'");
			
			$query_pt200b=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil3', hasil_pt_ok='&#10004', update_item='2' WHERE operator_math ='Hasil TS 20025' and form_code='$frm'");	
      
      }else if (($hasil >= 0 && $hasil < $mulai) || $hasil > $akhir){
	  	
		$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil', hasil_pt_ok='&#10006', update_item='3' WHERE id='$id'");
		$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil3', hasil_pt_ok='&#10006', update_item='3' WHERE operator_math ='Hasil PS' and form_code='$frm'");
		
		$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil3', hasil_pt_ok='&#10006', update_item='3' WHERE operator_math ='Hasil PS 100' and form_code='$frm'");
		
		$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil3', hasil_pt_ok='&#10006', update_item='3' WHERE operator_math ='Hasil TS 20015' and form_code='$frm'");
		
		$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil3', hasil_pt_ok='&#10006', update_item='3' WHERE operator_math ='Hasil TS 20025' and form_code='$frm'");
		
	  }else if($hasil==""){
	  	
	  }




}elseif($mas=="Rumus TS" || $mas=="Rumus TS 100" || $mas=="Rumus TS 20015" || $mas=="Rumus TS 20025"){


		$f = (3.6 * $fuelcc) / $hasil;
		$q = ($f / ($rpm * ($cylinder/2) * 60)) * 1000000;
		$nil_f = round($f,2);
		$nil_q = round($q,2);
		
		
		if ($hasil >= $mulai && $hasil <= $akhir) {
			$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil', hasil_pt_ok='&#10004', update_item='2', hasil_f='$nil_f', hasil_q = '$nil_q' WHERE id='$id'");
			
			
      
      }else if (($hasil > 0 && $hasil < $mulai) || $hasil > $akhir){
	  	
		$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil', hasil_pt_ok='&#10006', update_item='3', hasil_f='$nil_f', hasil_q = '$nil_q' WHERE id='$id'");
		
		
		
	  }else if($hasil==""){
	  	
	  }
	  


}else{

	if ($hasil >= $mulai && $hasil <= $akhir) {
			$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil', hasil_pt_ok='&#10004', update_item='2' WHERE id='$id'");
			
			
      
      }else if (($hasil >= 0 && $hasil < $mulai) || $hasil > $akhir){
	  	
		$query_pt=mysql_query("UPDATE proses_inspection_detail SET hasil_performa_test='$hasil', hasil_pt_ok='&#10006', update_item='3' WHERE id='$id'");
		
		
	  }else if($hasil==""){
	  	
	  }


}




		


}
//header("location:ct_1x.php?form_code=$form_code&inspection_number=$inspection_number&akso=$akso");

	
?>