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
        html, body {
  			 margin: 0;
   			padding: 0;
			
					}
	  .box {
   			min-height: 150px;
   			width: 100%;
			}
	@media screen and (min-width: 800px) {
   .container {
       width: 800px;
       margin-left: auto;
       margin-right: auto;
	   background-color:#FFFFFF;
   }
   .centered {
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}
	</style>
  
  <style>
/* The container */
.containex {
  display: block;
  position: relative;
  padding-left: 70px;
  margin-bottom: 45px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.containex input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 70px;
  width: 70px;
  background-color: #999999;
  border-radius: 80%;
}

/* On mouse-over, add a grey background color */
.containex:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.containex input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.containex input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.containex .checkmark:after {
 	top: 22px;
	left: 22px;
	width: 25px;
	height: 25px;
	border-radius: 70%;
	background: white;
}
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MKM INspection</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.min.js"></script>
	<!-- ini buat memasukkan javascript Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
        
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
    <td colspan="10"><a class="btn btn-warning" href="dashboard.php">Back to Dashboard</a> &nbsp;&nbsp;&nbsp;<a class="btn btn-info" href="dashboard.php?aksi=last&inspection_number=<?php echo $inspection_number ?>">Next Process</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-Danger" href="crul.php">Log Out</a></td>
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
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_column = 'Page Left' AND group_tab='Running'");
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
      </td>
    <td valign="top">
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
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number' AND group_column = 'Page Right' AND group_tab='Running'");
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
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button></td>        
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
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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
             <th><a href="#"><font color="#FFFFFF"><div align="center"></div></font></a></th>
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
           
            <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' onfocusout="edit_row(<?php echo $data2['id'];?>)"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
           
            <td><strong><font color="#009900" size="+2"><?php echo $data2['hasil_pt_ok'];?></font></strong></td>
            <td>
<?php
		if($cek_omath=="Hasil PS"){
?>

<?php
}else{
?>
          <input type="button" class="btn btn-success btn-xs" id="edit_button1" value="Update"  onclick="edit_row(<?php echo $data2['id'];?>)">
<?php
}
?>
     
   
    				
</td>
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
           
            <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>'/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
           
            <td><strong><font color="#009900" size="+2"><?php echo $data2['hasil_pt_ok'];?></font></strong></td>
            <td>
<?php
		if($cek_omath=="Hasil PS"){
?>

<?php
}else{
?>
          <input type="button" class="btn btn-success btn-xs" id="edit_button1" value="Update"  onclick="edit_row(<?php echo $data2['id'];?>)">
<?php
}
?>
     
   
    				
</td>
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
           
            <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' onfocusout="edit_row(<?php echo $data2['id'];?>)"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
           
            <td><strong><font color="#FF0000" size="+2"><?php echo $data2['hasil_pt_ok'];?></font></strong></td>
            <td>
<?php
		if($cek_omath=="Hasil PS"){
?>

<?php
}else{
?>
          <input type="button" class="btn btn-success btn-xs" id="edit_button1" value="Update"  onclick="edit_row(<?php echo $data2['id'];?>)">
<?php
}
?>
     
   
    				
</td>
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
    
    
    
    
    </td>
    <td valign="top">
    
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
    
    </td>
    <td valign="top">
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

       



</body>
</html>
