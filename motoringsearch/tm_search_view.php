<?php


	include "config/koneksi.php";
	$level=$_SESSION['level'];
	
	$kopname = $_SESSION['kopname'];
	$form_code = $_REQUEST['form_code'];
	$inspection_number = $_REQUEST['inspection_number'];
	$aksi = $_REQUEST['aksi'];
	$en = $_REQUEST['en'];
	$em = $_REQUEST['em'];
	$area = $_REQUEST['area'];
	$dt = $_REQUEST['dt'];	
	$desc = $_REQUEST['desc'];
	$sts = $_REQUEST['sts'];
		$ecu = $_REQUEST['ecu'];
	$sp = $_REQUEST['sp'];
	$src = $_REQUEST['src'];
	$hal = $_REQUEST['hal'];
	
	if($sts=="SDI")
	{
		
		$stsx="QFL2";
	}else{
		
		$stsx = $sts;
	}
	
	$sql_pro=mysql_query("select * from transmisi_proses_inspection_header_log where inspection_number='".$inspection_number."'and inspection_status='".$stsx."'");
		while ($res=mysql_fetch_array($sql_pro))
													
			{
				$operator_name = $res['operator_name'];
				$desc_running = $res['desc_running'];
				
				
			}
			
			
$queimage1=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='TM Sisi Atas & Belakang' Limit 1");
		while($datimg1=mysql_fetch_array($queimage1)){
			
			$url1 = $datimg1['nama_file'];
		}
		
	$queimage2=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='TM Sisi Kanan' Limit 1");
		while($datimg2=mysql_fetch_array($queimage2)){
			
			$url2 = $datimg2['nama_file'];
		}
		
		$queimage3=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='TM Sisi Kiri' Limit 1");
		while($datimg3=mysql_fetch_array($queimage3)){
			
			$url3 = $datimg3['nama_file'];
		}


		$queimage4=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='TM Sisi Depan' Limit 1");
		while($datimg4=mysql_fetch_array($queimage4)){
			
			$url4 = $datimg4['nama_file'];
		}
		
		$queimage5=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='Right Test' Limit 1");
		while($datimg5=mysql_fetch_array($queimage5)){
			
			$url5 = $datimg5['nama_file'];
		}
		
		$queimage6=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='Left Test' Limit 1");
		while($datimg6=mysql_fetch_array($queimage6)){
			
			$url6 = $datimg6['nama_file'];
		}
		
		$queimage7=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='Top Test' Limit 1");
		while($datimg7=mysql_fetch_array($queimage7)){
			
			$url7 = $datimg7['nama_file'];
		}
	$sql_pro2=mysql_query("select * from transmisi_upload where inspection_number='".$inspection_number."'");
		while ($res2=mysql_fetch_array($sql_pro2))
													
			{
				$nama_file = $res2['nama_file'];
				$url = $res2['url'];
				
			}
	
	?>

   

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MKM INspection</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
        
         <script>
            $(function() {
                $("#engine_model").autocomplete({
                    source: 'auto_model.php'
                });
            });
        </script>
         <script>
            $(function() {
                $("#engine_number").autocomplete({
                    source: 'auto_engine.php'
                });
            });
        </script>
		
		<script language="javascript">
var popupWindow = null;
function centeredPopup(url,winName,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
popupWindow = window.open(url,winName,settings)
}
</script>
        
 
<title>MKM Inspection</title>
</head>


<body>
<div class="container">

<p>

<table border="0">
  <tr>
    <td>Form Code&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $form_code ?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Date Time&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $dt ?></td>
  </tr>
  <tr>
    <td>Inspection Number&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $inspection_number ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Shop/Area&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $area ?></td>
  </tr>
  <tr>
    <td>TM Number&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $en ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Variant&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $em ?></td>
  </tr>
  <tr>
    <td>Operator&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $operator_name;?></td>
	 <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	
    </tr>
	<tr>
    <td>Status&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $stsx; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
     <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>Description&nbsp;</td>
    <td>&nbsp;:</td>
    <td colspan="10">&nbsp;<?php echo $desc_running;?></td>
    </tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="10"><a href="javascript:void(0);" onclick="javascript:window.open('tm_pi_inspection2.php?form_code=<?php echo $form_code ?>&inspection_number=<?php echo $inspection_number ?>&aksi=<?php echo "insert"; ?>&en=<?php echo $en ?>&em=<?php echo $em ?>&dt=<?php echo $dt ?>&area=<?php echo $area ?>&desc=<?php echo $desc_running;?>&sts=<?php echo $sts;?>&ecu=<?php echo $ecu;?>&sp=<?php echo $sp;?>', '_Details', 'width=750, height=500, scrollbars=1, resizable=1');"><i class='icon-print'></i>Print Preview</a></a>&nbsp;&nbsp;&nbsp;<a class="btn btn-success btn-xs" href="index.php?pilih=6.6&aksi=search&src=<?php echo $src ?>&halaman=<?php echo $hal ?>">Back To Front</a>
	</td>
    </tr>
</table>

<br />
 
<?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail_log where inspection_number='$inspection_number' AND group_tab='Leak'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query))
						{
							$cek_udt_sts= $data['update_item'];
							$verifikasi= $data['verifikasi'];
							
							if($verifikasi=="Kebocoran U/Gear Shift")
							
							{
								$tm1=$data['description'];
								$verifikasi1= $data['verifikasi'];
								$runningok = $data['hasil_running_ok'];
								$hasil_final_ok = $data['hasil_final_ok'];
								$id1 = $data['id'];
								$cek_udt_sts1= $data['update_item'];
								
							}elseif($verifikasi=="Kebocoran Plate Poppet"){
								
								$tm12=$data['description'];
								$verifikasi2= $data['verifikasi'];
								$runningok2 = $data['hasil_running_ok'];
								$hasil_final_ok2 = $data['hasil_final_ok'];
								$id2 = $data['id'];
								$cek_udt_sts2= $data['update_item'];
								
							}elseif($verifikasi=="Kebocoran Front Retainer"){
								
								$tm123=$data['description'];
								$verifikasi23= $data['verifikasi'];
								$runningok23 = $data['hasil_running_ok'];
								$hasil_final_ok23 = $data['hasil_final_ok'];
								$id23 = $data['id'];
								$cek_udt_sts3= $data['update_item'];
								
							}elseif($verifikasi=="Kebocoran Rear Cover"){
								
								$tm1234=$data['description'];
								$verifikasi234= $data['verifikasi'];
								$runningok234 = $data['hasil_running_ok'];
								$hasil_final_ok234 = $data['hasil_final_ok'];
								$id234 = $data['id'];
								$cek_udt_sts4= $data['update_item'];
								
							}elseif($verifikasi=="Ada Marking White Paintel"){
								
								$tm12345=$data['description'];
								$verifikasi2345= $data['verifikasi'];
								$runningok2345 = $data['hasil_running_ok'];
								$hasil_final_ok2345 = $data['hasil_final_ok'];
								$id2345 = $data['id'];
								$cek_udt_sts5= $data['update_item'];
								
							}else{
								
								$tm123456=$data['description'];
								$verifikasi23456= $data['verifikasi'];
								$runningok23456 = $data['hasil_running_ok'];
								$hasil_final_ok23456 = $data['hasil_final_ok'];
								$id23456 = $data['id'];
								$cek_udt_sts6= $data['update_item'];
								
							}
							
						}
						
?>

<table>
  <tr>
    <td><font color="#000000"><strong>LEAK Inspection</strong></font></td>
  </tr>
</table>
</br>
<table class="table table-bordered">
  <tr bgcolor="#990000">
    <td><strong><font color="#FFFFFF">No</font></strong></td>
    <td><strong><font color="#FFFFFF">Item Pemeriksaan</font></strong></td>
    <td><strong><font color="#FFFFFF">Verifikasi</font></strong></td>
    <td><strong><font color="#FFFFFF">Hasil</font></strong></td>
    <td><strong><font color="#FFFFFF">Catatan</font></strong></td>
  </tr>
    <?php
		if($cek_udt_sts1==1){
?>

<tr>
    <td bgcolor="#FFFFFF">1</td>
    <td bgcolor="#FFFFFF"><?php echo $tm1 ?></td>
    <td bgcolor="#FFFFFF"><?php echo $verifikasi1 ?></td>
    <td bgcolor="#FFFFFF"><?php echo $runningok ?></td>
    <td rowspan="4" bgcolor="#FFFFFF"><?php echo $hasil_final_ok?></td>
  </tr>

  <?php
		}if($cek_udt_sts1==2){
?>
<tr bgcolor="#66CCFF">
    <td>1</td>
    <td><?php echo $tm1 ?></td>
    <td><?php echo $verifikasi1 ?></td>
    <td><?php echo $runningok ?></td>
    <td rowspan="4"><?php echo $hasil_final_ok ?></td>
  </tr>
  <?php
		}if($cek_udt_sts1==3){
?>

<tr bgcolor="#FFFF99">
    <td>1</td>
    <td><?php echo $tm1 ?></td>
    <td><?php echo $verifikasi1 ?></td>
    <td><?php echo $runningok ?></td>
    <td rowspan="4"><?php echo $hasil_final_ok ?></td>
  </tr>
<?php
		}
		
?>	

 <?php
		if($cek_udt_sts2==1){
?>	

<tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><?php echo $tm12 ?></td>
    <td bgcolor="#FFFFFF"><?php echo $verifikasi2 ?></td>
    <td bgcolor="#FFFFFF"><?php echo $runningok2 ?></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
   
    </tr>

<?php
		}if($cek_udt_sts2==2){
?>
<tr bgcolor="#66CCFF">
    <td>&nbsp;</td>
    <td><?php echo $tm12 ?></td>
    <td><?php echo $verifikasi2 ?></td>
    <td><?php echo $runningok2 ?></td>
    <td>&nbsp;</td>
  
    </tr>

<?php
		}if($cek_udt_sts2==3){
?>

 <tr bgcolor="#FFFF99">
    <td>&nbsp;</td>
    <td><?php echo $tm12 ?></td>
    <td><?php echo $verifikasi2 ?></td>
    <td><?php echo $runningok2 ?></td>
    <td>&nbsp;</td>
    
    </tr>

<?php
		}
?>

<?php
		if($cek_udt_sts3==1){
?>	
 <tr bgcolor="#FFFFFF">
    <td >&nbsp;</td>
    <td><?php echo $tm123 ?></td>
    <td><?php echo $verifikasi23 ?></td>
    <td><?php echo $runningok23 ?></td>
    <td>&nbsp;</td>
    </tr>

<?php
		}if($cek_udt_sts3==2){
?>	
<tr bgcolor="#66CCFF">
    <td >&nbsp;</td>
    <td><?php echo $tm123 ?></td>
    <td><?php echo $verifikasi23 ?></td>
    <td><?php echo $runningok23 ?></td>
    <td>&nbsp;</td>
    </tr>
<?php
		}if($cek_udt_sts3==3){
?>	
 <tr bgcolor="#FFFF99">
    <td >&nbsp;</td>
    <td><?php echo $tm123 ?></td>
    <td><?php echo $verifikasi23 ?></td>
    <td><?php echo $runningok23 ?></td>
    <td>&nbsp;</td>
    
    </tr>
<?php

		}
?>

 <?php
		if($cek_udt_sts4==1){
?>	
 <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><?php echo $verifikasi234 ?></td>
    <td bgcolor="#FFFFFF"><?php echo $runningok234 ?></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
   
    </tr>
 <?php
		}if($cek_udt_sts4==2){
?>	

 <tr bgcolor="#66CCFF">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $verifikasi234 ?></td>
    <td><?php echo $runningok234 ?></td>
    <td>&nbsp;</td>
   
    </tr>
 <?php
		}if($cek_udt_sts4==3){
?>	
 <tr bgcolor="#FFFF99">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $verifikasi234 ?></td>
    <td><?php echo $runningok234 ?></td>
    <td>&nbsp;</td>
    </tr>

<?php
		}
?>


 <?php
		if($cek_udt_sts6==1){
?>	
 
   <tr>
     <td bgcolor="#FFFFFF">2</td>
     <td bgcolor="#FFFFFF"><?php echo $tm123456 ?></td>
     <td bgcolor="#FFFFFF"><?php echo $verifikasi23456 ?></td>
     <td bgcolor="#FFFFFF"><?php echo $runningok23456 ?></td>
     <td bgcolor="#FFFFFF"><?php echo $hasil_final_ok23456?></td>
   </tr>
   
 <?php
		}if($cek_udt_sts6==2){
?>	
 <tr bgcolor="#66CCFF">
     <td>2</td>
     <td><?php echo $tm123456 ?></td>
     <td><?php echo $verifikasi23456 ?></td>
     <td><?php echo $runningok23456 ?></td>
     <td><?php echo $hasil_final_ok23456?></td>
   </tr>

 <?php
		}if($cek_udt_sts6==3){
?>	
 <tr bgcolor="#FFFF99">
     <td>2</td>
     <td><?php echo $tm123456 ?></td>
     <td><?php echo $verifikasi23456 ?></td>
     <td><?php echo $runningok23456 ?></td>
     <td><?php echo $hasil_final_ok23456?></td>
   </tr>

<?php
		}
?>

<?php
		if($cek_udt_sts5==1){
?>	
<tr>
     <td bgcolor="#FFFFFF">3</td>
     <td bgcolor="#FFFFFF"><?php echo $tm12345 ?></td>
     <td bgcolor="#FFFFFF"><?php echo $verifikasi2345 ?></td>
     <td bgcolor="#FFFFFF"><?php echo $runningok2345 ?></td>
     <td bgcolor="#FFFFFF"><?php echo $hasil_final_ok2345;?></td>
   </tr>

<?php
		}if($cek_udt_sts5==2){
?>	
 <tr bgcolor="#66CCFF">
     <td>3</td>
     <td><?php echo $tm12345 ?></td>
     <td><?php echo $verifikasi2345 ?></td>
     <td><?php echo $runningok2345 ?></td>
   
     <td><?php echo $hasil_final_ok2345;?></td>
   </tr>

<?php
		}if($cek_udt_sts5==3){
?>	

<tr bgcolor="#FFFF99">
     <td>3</td>
     <td><?php echo $tm12345 ?></td>
     <td><?php echo $verifikasi2345 ?></td>
     <td><?php echo $runningok2345 ?></td>
     <td><?php echo $hasil_final_ok2345;?></td>
   </tr>

<?php

		}
?>
</table>
 

 

 <script>
		function run_ceked(lo)
			{

			var inspec = lo;
			//var running=$("checkbox#running").val();
			// memulai ajax
			$.ajax({
				url: 'tm_auto_running.php',	
				method: 'post',	
				data: {inspec:inspec},
				success:function(data){	
				
				 location.reload(true);
				}
			});
		 
			}
</script>
<script>
		function run_cekedpdi(ro)
			{
	
			var inspeci = ro;
			//var running=$("checkbox#running").val();
			// memulai ajax
			$.ajax({
				url: 'tm_auto_final2.php',	
				method: 'post',	
				data: {inspeci:inspeci},
				success:function(data){	
				
				 location.reload(true);
				}
			});
		 
			}
</script>
 <script>
		function edit_row(no)
			{
			
			var id = no;
		
			var hasil=$("input#hasilleak"+no).val();
			
			
			//alert(maxs);
			//alert(hasil2);
			//alert(rpm);
			//alert(mulai);
			//alert(akhir);
			//alert(mas);
			//alert(frm);
			//alert(fuelcc);
			//alert(cylinder);
 			//var country=document.getElementById("country_row"+no);
			 //var age=document.getElementById("age_row"+no);

			
			// memulai ajax
			$.ajax({
				url: 'tm_auto_pt.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>
</p>
<table>
  <tr>
    <td><font color="#000000"><strong>Motoring Inspection</strong></font></td>
  </tr>
</table>
</p>
<table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Pemeriksaan</font></a></th>
              <th><a href="#"><font color="#FFFFFF">Verifikasi Pemeriksaan</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK/NO</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Catatan</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail_log where inspection_number='$inspection_number' AND group_tab='Motoring' AND inspection_status='TM TEST OK'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	<tr bgcolor="#FFFFFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo $data['verifikasi'];?></td>
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>    
            
            <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo $data['verifikasi'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>      
            <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo $data['verifikasi'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>  
            <td><?php echo $data['hasil_final_ok'];?></td>  
        </tr> 

<?php
		}
?>

<?php
	$no++; } //tutup while
?>
</tbody>

    <script>
	$(document).ready(function(){
		$('.view_datas').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: '_tm_auto_save.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_datasi').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				}
			});
		});
	});
	</script> 
</table>

 
 <script>
		function edit_row2(no)
			{
			
			var id = no;
		
			var hasil=$("input#hasilmtr"+no).val();
			
			
			//alert(maxs);
			//alert(hasil2);
			//alert(rpm);
			//alert(mulai);
			//alert(akhir);
			//alert(mas);
			//alert(frm);
			//alert(fuelcc);
			//alert(cylinder);
 			//var country=document.getElementById("country_row"+no);
			 //var age=document.getElementById("age_row"+no);

			
			// memulai ajax
			$.ajax({
				url: 'tm_auto_pt.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

 </p>
 
 <table>
  <tr>
    <td><font color="#000000"><strong>Trouble Shooting</strong></font></td>
  </tr>
</table>
</p>
<table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Problem</font></a></th>
              <th><a href="#"><font color="#FFFFFF">Penyebab</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Tindakan</font></a></th>
            
       
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_problem where inspection_number='$inspection_number' AND form_code='$form_code' AND inspection_status='TM TEST OK'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							
						
?>

    	<tr bgcolor="#FFFFFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $data['problem'];?></td>
            <td><?php echo $data['penyebab'];?></td>
            <td align="center"><?php echo $data['tindakan'];?></td>
           
        </tr>  


		<script>
		function edit_pa(no)
			{
			
			var id = no;
		
			var hasil=$("input#pa"+no).val();
			
			
			
		
			$.ajax({
				url: 'tm_auto_pa.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

<script>
		function edit_pb(no)
			{
			
			var id = no;
		
			var hasil=$("input#pb"+no).val();
			
			
			
			$.ajax({
				url: 'tm_auto_pb.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

<script>
		function edit_pc(no)
			{
			
			var id = no;
		
			var hasil=$("input#pc"+no).val();
			
			
			
			$.ajax({
				url: 'tm_auto_pc.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

<script>
		function edit_pd(no)
			{
			
			var id = no;
		
			var hasil=$("input#pd"+no).val();
			
			
			
			$.ajax({
				url: 'tm_auto_pd.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

<script>
		function edit_pe(no)
			{
			
			var id = no;
		
			var hasil=$("input#pd"+no).val();
			
			
			
			$.ajax({
				url: 'tm_auto_pe.php',	
				method: 'post',+
				
				
				
				
				
				
								data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

<?php
	$no++; } //tutup while
?>
</tbody>

    
</table>
   </p>

    <table border="1">
    <thead>
		<tr bgcolor="#990000">
			 <th><a href="#"><font color="#FFFFFF">TM Sisi Atas & Belakang</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
           <td><strong><font color="#FFFFFF">Catatan</font></strong></td>
       	</tr>
    </thead><tbody id="tampil">
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url1; ?>" width="250" height="550"></td>
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='top'  AND inspection_status='TM TEST OK'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center"	bgcolor="#FFFFFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFFFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td bgcolor="#FFFFFF" align="center"><?php echo $data['hasil_running_ok'];?></td>
               
         <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		
			<td align="center" bgcolor="#66CCFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#66CCFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#66CCFF"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
           <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		
			<td align="center" bgcolor="#FFFF99"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFF99"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
           <td align="center" bgcolor="#FFFF99"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><?php echo $data['hasil_final_ok'];?></td>
        </tr> 

<?php
		}
?>

<?php
	$no++; } //tutup while
?>
</tbody>

    <script>
	$(document).ready(function(){
		$('.view_datas').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_dat').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				}
			});
		});
	});
	</script> 
</table>    
    </p>
    <table border="1">
    <thead>
		<tr bgcolor="#990000">
			<th align="center"><a href="#"><font color="#FFFFFF">TM Sisi Kanan</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
           <td><strong><font color="#FFFFFF">Catatan</font></strong></td>
       	</tr>
    </thead><tbody id="tampil">
	
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url2; ?>" width="250" height="550"></td>
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Right'  AND inspection_status='TM TEST OK'");
						$no = $mulai+1;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center" bgcolor="#FFFFFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFFFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#FFFFFF"><?php echo $data['hasil_running_ok'];?></td>
               <td><?php echo $data['hasil_final_ok'];?></td>
       
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>


			<td align="center" bgcolor="#66CCFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#66CCFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#66CCFF"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
              <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>


			<td align="center" bgcolor="#FFFF99"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFF99"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
           <td align="center" bgcolor="#FFFF99"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
           <td><?php echo $data['hasil_final_ok'];?></td>       
        </tr> 

<?php
		}
?>

<?php
	$no++; } //tutup while
?>
</tbody>

    <script>
	$(document).ready(function(){
		$('.view_datas').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_dat').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		

				data: {id:id},
				success:function(data){	
					 location.reload(true);
				}
			});
		});
	});
	</script> 
</table>
    </p>
     <table border="1">
    <thead>
		<tr bgcolor="#990000">
			 <th><a href="#"><font color="#FFFFFF">TM Sisi Kiri</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
           <td><strong><font color="#FFFFFF">Catatan</font></strong></td>
       	</tr>
    </thead><tbody id="tampil">
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url3; ?>" width="250" height="550"></td>
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Left'  AND inspection_status='TM TEST OK'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center"	bgcolor="#FFFFFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFFFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#FFFFFF"><?php echo $data['hasil_running_ok'];?></td>
              
              <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		
			<td align="center" bgcolor="#66CCFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#66CCFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#66CCFF"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		
			<td align="center" bgcolor="#FFFF99"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFF99"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
           <td align="center" bgcolor="#FFFF99"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
              <td><?php echo $data['hasil_final_ok'];?></td>
        </tr> 

<?php
		}
?>

<?php
	$no++; } //tutup while
?>
</tbody>

    <script>
	$(document).ready(function(){
		$('.view_datas').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_dat').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				}
			});
		});
	});
	</script> 
</table>    
</p>
<table border="1">
    <thead>
		<tr bgcolor="#990000">
			<th><a href="#"><font color="#FFFFFF">TM Sisi Depan</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
            <td><strong><font color="#FFFFFF">Catatan</font></strong></td>
       	</tr>
    </thead><tbody id="tampil">
	
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url4; ?>" width="250" height="550"></td>
	
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Front'  AND inspection_status='TM TEST OK'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center" bgcolor="#FFFFFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFFFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#FFFFFF"><?php echo $data['hasil_running_ok'];?></td>
           <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		
			<td align="center"  bgcolor="#66CCFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td  bgcolor="#66CCFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"  bgcolor="#66CCFF"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
          <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

	
			<td align="center" bgcolor="#FFFF99"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFF99"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
           <td align="center" bgcolor="#FFFF99"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
                   <td><?php echo $data['hasil_final_ok'];?></td>
        </tr> 

<?php
		}
?>

<?php
	$no++; } //tutup while
?>
</tbody>

    <script>
	$(document).ready(function(){
		$('.view_datas').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_dat').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				}
			});
		});
	});
	</script> 
</table>    
</p>
<table border="1" width="420">
    <thead>
		<tr bgcolor="#990000">
			<th><a href="#"><font color="#FFFFFF">Foto</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Berat / KG</font></a></th>
         
           
       	</tr>
    </thead><tbody id="tampil">
	
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $nama_file; ?>" width="300" height="550"></td>
	<td align="center"><font color="#000000" size="+2"><?php echo $ecu;?></font></td>
</tbody>

    
</table> 
       
</div>


</body>
</html>
