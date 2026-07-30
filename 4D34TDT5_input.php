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
	


	if(isset($_POST['update']))
		{    
    					$idm = $_POST['idm'];
						$engine_number = $_POST['engine_number'];
        
    // update user data
    					echo "<script type='text/javascript'>alert('".$engine_number."');</script>";
    

		}

	
	?>
<style>
*{
margin:0px auto; /*supaya layer otomatis mengisi dan ke tengah*/
}
body{font-family:calibri, verdana, sans-serif;}
 
#wrapper{
width:100%;
}
 
#header{
width:100%; /*mengatur header supaya full width*/
z-index:1000; 
position:fixed;
height:160px; 
background:#999999
}
#header a.title{
color:#ffffff; 
font-weight:bold; 
text-decoration:none; 
font-size:30px; 
line-height:60px; 
padding:0px 20px; /*mengatur jarak antara di kiri dan kanan saja*/
}
 
#content{
position:relative;
background:#eee;
margin:0px 20px;
}
 
#footer{
position:relative;
background:#999999;
height:40px;
}
#footer a.title
{
color:#ffffff; 
text-decoration:none; 
font-size:30px; 
line-height:40px; 
float:right;
padding:0px 20px;
}

</style>
<html>
<head>
<title>MKM Inspection</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<div id="wrapper">
    <div id="header">
        <table border="0" id="header-fixed">
  <tr>
    <td><font color="#FFFFFF"><strong>Form Code&nbsp;</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $form_code ?></strong></font></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><font color="#FFFFFF"><strong>Date Time&nbsp;</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $dt ?></strong></font></td>
  </tr>
  <tr>
    <td><font color="#FFFFFF"><strong>Inspection Number&nbsp;</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $inspection_number ?></strong></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><font color="#FFFFFF"><strong>Test Bench&nbsp;</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $area ?></strong></font></td>
  </tr>
  <tr>
    <td><font color="#FFFFFF"><strong>Engine Number&nbsp;</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $en ?></strong></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><font color="#FFFFFF"><strong>Engine Model&nbsp;</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $em ?></strong></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="10"><a class="btn btn-warning" href="dashboard.php">Back to Dashboard</a> &nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="dashboard.php?aksi=last&inspection_number=<?php echo $inspection_number ?>">Next Process</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="crul.php">Log Out</a></td>
    </tr>
    <tr>
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
    <td colspan="12" align="center"><button type="button" id="running" name="running" value="<?php echo $inspection_number; ?>" onclick="run_ceked(this.value);">&#10004</button><font color="#FFFFFF"><strong>&nbsp;Checked ALL Running</strong></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="runningno" name="runningno" value="<?php echo $inspection_number; ?>" onclick="run_cekedfinal(this.value)">&#10004</button> <font color="#FFFFFF"><strong>Checked ALL Final Test</strong></font></td>
    </tr>
</table>
    </div>
    <div id="content">
    <table border="0">
 	<tr>
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
</table>
</br>

 		<table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Running Item Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number' AND group_tab='Running'");
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
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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

 <script>
		function run_ceked(lo)
			{

			var inspec = lo;
			//var running=$("checkbox#running").val();
			// memulai ajax
			$.ajax({
				url: 'auto_running.php',	
				method: 'post',	
				data: {inspec:inspec},
				success:function(data){	
				
				 location.reload(true);
				}
			});
		 
			}
</script>
<script>
		function run_cekedfinal(ro)
			{
		alert(ro);
			var inspeci = ro;
			//var running=$("checkbox#running").val();
			// memulai ajax
			$.ajax({
				url: 'auto_final.php',	
				method: 'post',	
				data: {inspeci:inspeci},
				success:function(data){	
				
				 location.reload(true);
				}
			});
		 
			}
</script>
</p>
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
	$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number' AND group_tab='Performance'");
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
            <td><?php echo $data2['rpm'];?><input type='hidden' id='rpm<?php echo $data2['id'];?>' name='rpm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['rpm'];?>' readonly="readonly"/></td>
          <td><?php echo $data2['spec_start'];?><input type='hidden' id='mulai<?php echo $data2['id'];?>' name='mulai<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['spec_start'];?>' readonly="readonly"/></td>
            <td><?php echo $data2['spec_finish'];?><input type='hidden' id='akhir<?php echo $data2['id'];?>' name='akhir<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['spec_finish'];?>' readonly="readonly"/></td>
            <td><?php echo $data2['uom'];?></td>
           
           
 <?php
		if($cek_omath=="Hasil PS"){
?>

  <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly" style="background-color:#CCCCCC"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>


<?php
}else{
?>
         
           <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' onfocusout="edit_row(<?php echo $data2['id'];?>)"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
         
<?php
}
?>
           
           
           
           
          
           
            <td><strong><font color="#009900" size="+1"><?php echo $data2['hasil_pt_ok'];?></font></strong></td>
           
   </tr> 
   
   
 <?php
		}elseif($cek_udt_sts2==2){
?>

<tr bgcolor="#66CCFF">
     
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data2['description'];?></td>
            <td><?php echo $data2['rpm'];?><input type='hidden' id='rpm<?php echo $data2['id'];?>' name='rpm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['rpm'];?>' readonly="readonly"/></td>
          <td><?php echo $data2['spec_start'];?><input type='hidden' id='mulai<?php echo $data2['id'];?>' name='mulai<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['spec_start'];?>' readonly="readonly"/></td>
            <td><?php echo $data2['spec_finish'];?><input type='hidden' id='akhir<?php echo $data2['id'];?>' name='akhir<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['spec_finish'];?>' readonly="readonly"/></td>
            <td><?php echo $data2['uom'];?></td>
            
            
<?php
		if($cek_omath=="Hasil PS"){
?>
 <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly" style="background-color:#CCCCCC"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>

<?php
}else{
?>
        <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' onfocusout="edit_row(<?php echo $data2['id'];?>)"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
       
<?php
}
?>

           
           
           
            <td><strong><font color="#009900" size="+1"><?php echo $data2['hasil_pt_ok'];?></font></strong></td>
        
   </tr> 
   
   <?php
		}elseif($cek_udt_sts2==3){
?>

<tr bgcolor="#FFFF99">
     
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data2['description'];?></td>
            <td><?php echo $data2['rpm'];?><input type='hidden' id='rpm<?php echo $data2['id'];?>' name='rpm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['rpm'];?>' readonly="readonly"/></td>
          <td><?php echo $data2['spec_start'];?><input type='hidden' id='mulai<?php echo $data2['id'];?>' name='mulai<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['spec_start'];?>' readonly="readonly"/></td>
            <td><?php echo $data2['spec_finish'];?><input type='hidden' id='akhir<?php echo $data2['id'];?>' name='akhir<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['spec_finish'];?>' readonly="readonly"/></td>
            <td><?php echo $data2['uom'];?></td>
           
           
 <?php
		if($cek_omath=="Hasil PS"){
?>
 <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly" style="background-color:#CCCCCC"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
<?php
}else{
?>
         <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' onfocusout="edit_row(<?php echo $data2['id'];?>)"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
<?php
}
?>
     
           
           
            <td><strong><font color="#FF0000" size="+1"><?php echo $data2['hasil_pt_ok'];?></font></strong></td>
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
</p>
 <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Right Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Right'");
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
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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
    </p>
    <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Left Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Left'");
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
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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
</p>
<table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Front Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Front'");
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
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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
</p>

 <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Top Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Top'");
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
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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
</p>
  <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Back Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Back'");
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
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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
    
    
    
    
    </div>
    <div id="footer">
    <a href="" class="title">MKM Copyright</a>
    </div>
</div>
</body>
</html>