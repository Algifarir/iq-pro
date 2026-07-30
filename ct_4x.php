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
    <td>Catatan&nbsp;</td>
    <td>&nbsp;:</td>
    <td colspan="10">&nbsp;<textarea id="desc_running" name="desc_running" rows="4" cols="65">
    
    </textarea></td>
    </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="10"> <button type="submit" class="btn btn-success">Submit</button> <a class="btn btn-success" href="auto_save.php">Pending</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="dashboard.php?aksi=tambah">Pending</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-Danger" href="dashboard.php?aksi=tambah">Log Out</a></td>
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

<br />
 

 <table>
  <tr>
    <td valign="top">
    <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Inspection</font></a></th>
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
             <th><a href="#"><font color="#FFFFFF">Item Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_column = 'Page Right' AND group_tab='Running'");
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
    
    <table class="table table-bordered">
    <thead>
   
		<tr bgcolor="#990000">
             <th valign="top"><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Description</font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">RPM</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Spec Min</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Spec Max</font></div></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">UoM</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Hasil</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">O</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">X</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center"></div></font></a></th>
            </tr>
    </thead><tbody><?php
	
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Performance'");
						$no = $mulai+1;;
						while($data2=mysql_fetch_array($query)){
						$cek_udt_sts_pt= $data2['update_item'];
						
?>

 <?php
		if($cek_udt_sts_pt==1){
 ?>
    	<tr bgcolor="#FFFFFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data2['description'];?></td>
            <td><?php echo $data2['rpm'];?></td>
          <td><?php echo $data2['spec_start'];?></td>
            <td><?php echo $data2['spec_finish'];?></td>
            <td><?php echo $data2['uom'];?></td>
            <td><?php echo $data2['hasil_performa_test'];?></td>
            <td><?php echo $data2['hasil_pt_ok'];?></td>
           <td><?php echo $data2['hasil_pt_no'];?></td>
            <td><button type="button" class="view_data btn btn-success btn-xs" data-toggle="modal" id="<?php echo $data2['id'];?>" data-target="#myModal<?php echo $data2['id'];?>"><i class="fa fa-edit"></i></button>
	<div class="modal fade" id="myModal<?php echo $data2['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
            <div class="modal-header">
					<h6 class="modal-title text-left" id="myModalLabel"><?php echo $data2['description']; ?></h4>
			</div>
				<div class="modal-body" id="">
                <form name="pft" action="auto_pt.php" class ="view_datasopi" method="post">         
					<table  border="0">
  <tr>
    <td>&nbsp;<input type='hidden' id='id' name='id' size='5' autocomplete='off' value='<?php echo $data2['id'];?>'/></td>
    <td>&nbsp;<input type='text'  id='hasils' name='hasil' size='5' autocomplete='off' value=''/><input type='hidden'  id='inspection_number' name='inspection_number' size='5' autocomplete='off' value='<?php echo $data2['inspection_number'];?>'/><input type='text'  id='hasils' name='hasil' size='5' autocomplete='off' value=''/><input type='text'  id='inspection_numberx' name='inspection_numberx' size='5' autocomplete='off' value="≤"/><input type='hidden'  id='form_code' name='form_code' size='5' autocomplete='off' value='<?php echo $data2['form_code'];?>'/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
 <button type="submit" class="btn-danger btn-xs" value="pft" name="pft">rt</button>
</form>

			 </div>
				<!-- selesai konten dinamis -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
              
            </td> 
        </tr> 
 <?php
		}elseif($cek_udt_sts_pt==2){
		$akso = $_REQUEST['akso'];
  ?>
  
  <tr bgcolor="#FFFFFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data2['description'];?></td>
            <td><?php echo $data2['rpm'];?></td>
          <td><?php echo $data2['spec_start'];?></td>
            <td><?php echo $data2['spec_finish'];?></td>
            <td><?php echo $data2['uom'];?></td>
            <td><?php echo $data2['hasil_performa_test'];?>
			<?php
			
					if($akso=="akso"){
							echo "<input type='text' id='atu' name='atu' size='5' autocomplete='off' value='$data2[hasil_performa_test]' autofocus/>";
							
 			
					}else{
							echo "<input type='hidden' id='atu' name='atu' size='5' autocomplete='off'/>";
					}
			?>
			</td>
           
            <td><?php echo $data2['hasil_pt_ok'];?></td>
           <td><?php echo $data2['hasil_pt_no'];?></td>
            <td><button type="button" class="view_data btn btn-success btn-xs" data-toggle="modal" id="<?php echo $data2['id'];?>" data-target="#myModal<?php echo $data2['id'];?>"><i class="fa fa-edit"></i></button>
	<div class="modal fade" id="myModal<?php echo $data2['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
            <div class="modal-header">
					<h6 class="modal-title text-left" id="myModalLabel"><?php echo $data2['description']; ?></h4>
			</div>
				<div class="modal-body" id="">
                <form name="pft" action="auto_pt.php?akso=akso" class ="view_datasopi" method="post">         
					<table  border="0">
  <tr>
    <td>&nbsp;<input  type='hidden' id='id' name='id' size='5' autocomplete='off' value='<?php echo $data2['id'];?>'/></td>
    <td>&nbsp;<input type='text'  id='hasils' name='hasil' size='5' autocomplete='off' value=''/><input type='hidden'  id='inspection_number' name='inspection_number' size='5' autocomplete='off' value='<?php echo $data2['inspection_number'];?>'/><input type='hidden'  id='form_code' name='form_code' size='5' autocomplete='off' value='<?php echo $data2['form_code'];?>'/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
 <button type="submit" class="btn-danger btn-xs" value="pft" name="pft">rt</button>
</form>

			 </div>
				<!-- selesai konten dinamis -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
              
  
  
  <?php
		}elseif($cek_udt_sts_pt==3){
	?>
    
    <?php
		}
	?>
   
    
<?php
	$no++; } //tutup while
?>
</tbody>  
</table>




    
    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>


    

       
</div>


</body>
</html>
