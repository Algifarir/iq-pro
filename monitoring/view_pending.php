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
	$src = $_REQUEST['aksi'];
	$hal = $_REQUEST['hal'];
	$tgl_1 = $_REQUEST['dt1'];
	$tgl_2 = $_REQUEST['dt2'];
	$ip = $_REQUEST['ip'];
	
	if($sts=="SDI")
	{
		
		$stsx="QFL2";
	}else{
		
		$stsx = $sts;
	}
						
	$sql_pro=mysql_query("select * from proses_inspection_header_log where inspection_number='".$inspection_number."'and inspection_status='".$sts ."'");
		while ($res=mysql_fetch_array($sql_pro))
													
			{
				$operator_name = $res['operator_name'];
				$desc_running = $res['desc_running'];
				
				
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
    <td>Test Bench&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $area ?></td>
  </tr>
  <tr>
    <td>Engine Number&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $en ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Engine Model&nbsp;</td>
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
    <td>Supply Pump</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $sp ?></td>
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
    <td>No. ECU</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $ecu ?></td>
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
    <td colspan="10">&nbsp;&nbsp;&nbsp;<a class="btn btn-success btn-xs" href="index.php?pilih=4.1&aksi=<?php echo $src ?>&halaman=<?php echo $hal ?>&dt1=<?php echo $tgl_1 ?>&dt2=<?php echo $tgl_2?>">Back To Front</a></td>
    </tr>
</table>

<br />
 

 <table>
  <tr>
    <td valign="top">
    <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Running Item Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_column = 'Page Left' AND group_tab='Running' AND inspection_status ='$sts'");
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
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>       
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
				url: 'auto_save.php',	
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
				url: 'auto_runno.php',	
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
      </td>
    <td valign="top">
    <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Running Item Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number' AND group_column = 'Page Right' AND group_tab='Running' AND inspection_status ='$sts'");
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
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>       
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>
		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>       
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>
		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>       
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
				url: 'auto_save.php',	
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
				url: 'auto_runno.php',
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
  </td>
  </tr>
</table>

<p>

 <table border="0">
  <tr>
    <td valign="top">
 
    <table class="table table-bordered" id="tabeldata">
    <thead>
		<tr bgcolor="#990000">
             <th valign="top"><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Description Performance Test</font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">RPM</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Spec Min</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Spec Max</font></div></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">UoM</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Hasil</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">O/X</div></font></a></th>
            </tr>
    </thead><tbody id="tampil"><?php
	$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number' AND group_tab='Performance'AND inspection_status ='$sts' AND description <> '' order by hasil_running_no ASC");
						$no = $mulai+1;;
						while($data2=mysql_fetch_array($query)){		
						$cek_udt_sts2= $data2['update_item'];		
						$cek_omath= $data2['operator_math'];	
?>

<?php
		if($cek_udt_sts2==1){
?>

    	<tr bgcolor="#FFFFFF">
     
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data2['description'];?></td>
            <td><?php echo $data2['rpm'];?></td>
          <td><?php echo $data2['spec_start'];?></td>
            <td><?php echo $data2['spec_finish'];?></td>
            <td><?php echo $data2['uom'];?></td>
           
            <td><?php echo $data2['hasil_performa_test'];?><?php echo "<input type='hidden' id='hasil$data2[id]' name='hasil$data2[id]' size='5' autocomplete='off' value='$data2[hasil_performa_test]'/>";?><?php echo "<input type='hidden' id='inspec$data2[inspection_number]' name='inspec$data2[inspection_number]'' size='5' autocomplete='off' value='$data2[inspection_number]'/>";?></td>
           
            <td><?php echo $data2['hasil_pt_ok'];?></td>
            

            
   </tr> 
   
 <?php
		}elseif($cek_udt_sts2==2){
?>

<tr bgcolor="#66CCFF">
     
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data2['description'];?></td>
            <td><?php echo $data2['rpm'];?></td>
          <td><?php echo $data2['spec_start'];?></td>
            <td><?php echo $data2['spec_finish'];?></td>
            <td><?php echo $data2['uom'];?></td>
           
            <td><?php echo $data2['hasil_performa_test'];?><?php echo "<input type='hidden' id='hasil$data2[id]' name='hasil$data2[id]' size='5' autocomplete='off' value='$data2[hasil_performa_test]'/>";?><?php echo "<input type='hidden' id='inspec$data2[inspection_number]' name='inspec$data2[inspection_number]'' size='5' autocomplete='off' value='$data2[inspection_number]'/>";?></td>
           
            <td><strong><font color="#009900" size="+2"><?php echo $data2['hasil_pt_ok'];?></font></strong></td>
            
   </tr> 
   
   <?php
		}elseif($cek_udt_sts2==3){
?>

<tr bgcolor="#FFFF99">
     
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data2['description'];?></td>
            <td><?php echo $data2['rpm'];?></td>
          <td><?php echo $data2['spec_start'];?></td>
            <td><?php echo $data2['spec_finish'];?></td>
            <td><?php echo $data2['uom'];?></td>
           
            <td><?php echo $data2['hasil_performa_test'];?><?php echo "<input type='hidden' id='hasil$data2[id]' name='hasil$data2[id]' size='5' autocomplete='off' value='$data2[hasil_performa_test]'/>";?><?php echo "<input type='hidden' id='inspec$data2[inspection_number]' name='inspec$data2[inspection_number]'' size='5' autocomplete='off' value='$data2[inspection_number]'/>";?></td>
           
            <td><strong><font color="#FF0000" size="+2"><?php echo $data2['hasil_pt_ok'];?></font></strong></td>
            
   </tr> 
   


<?php
		}
?>


<?php
	$no++; } //tutup while
?>
</tbody> 
    <script>
		function edit_row(no)
			{
			
			var id = no;
			var hasil=$("input#hasilo"+no).val();
			var desk=$("input#desk"+no).val();
			var rpm=$("input#rpm"+no).val();
			var mulai=$("input#mulai"+no).val();
			var akhir=$("input#akhir"+no).val();
			var mas=$("input#mas"+no).val();
			var frm=$("input#frm"+no).val();
			var fuelcc=$("input#fuelcc"+no).val();
			var cylinder=$("input#cylinder"+no).val();
			//alert(desk);
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
				url: 'auto_pt.php',	
				method: 'post',	
				data: {id:id,hasil:hasil,desk:desk,rpm:rpm,mulai:mulai,akhir:akhir,mas:mas,frm:frm,fuelcc:fuelcc,cylinder:cylinder},
				success:function(data){	
				
				 location.reload(true);
				}
			});
		 
			}
</script>
</table>




    
    
    </td>
  </tr>
</table>

</br>
     <table border="0">
  <tr>
    <td valign="top">
    
    <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Right Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>

       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Right' AND inspection_status ='$sts'");
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
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>    
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>    
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></t        
        ></tr> 

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
				url: 'auto_save.php',	
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
				url: 'auto_runno.php',	
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
    
    
    
    
    </td>
    <td valign="top">
    
 <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Left Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Left' AND inspection_status ='$sts'");
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
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>  
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>    
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>      
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
				url: 'auto_save.php',	
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
				url: 'auto_runno.php',	
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
    
    
    
    
    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">
    <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Front Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Front' AND inspection_status ='$sts'");
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
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>     
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>        
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
				url: 'auto_save.php',	
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
				url: 'auto_runno.php',	
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
    
    </td>
    <td valign="top">
     <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Top Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Top' AND inspection_status ='$sts'");
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
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>   
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>     
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>        
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
				url: 'auto_save.php',	
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
				url: 'auto_runno.php',	
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
    
    
    
    
    </td>
  </tr>
  <tr>
    <td valign="top">
    
    <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Back Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Back' AND inspection_status ='$sts'");
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
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>   
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>     
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>   
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
				url: 'auto_save.php',	
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
				url: 'auto_runno.php',	
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
    
    
    
    
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

       
</div>


</body>
</html>
