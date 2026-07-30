<?php 
	include "config/koneksi.php";
	include "fungsi/fungsi.php";
	$kopname = $_SESSION['kopname'];
	$level = $_SESSION['level'];
	$aksi=$_GET['aksi'];
	
	if($_SESSION['level']=='admin')
              {
	
				  
				  
			  }else{
		$queryrol=mysql_query("select * from master_menu_user where assigned_menu ='".$kopname."'");
		while($datrol=mysql_fetch_array($queryrol)){
			
			$rol_add = $data2['rol_add'];
			$rol_edit = $data2['rol_edit'];
			$rol_delete = $data2['rol_delete'];
			$rol_view = $data2['rol_view'];
		}
	}
?>
<script>
function popupCenter(url, title, w, h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
</script>
		
<script>
  function isNumberKey(evt)
  {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

  return false;
  return true;
  }
</script>
</head>

<?php
	if(empty($aksi)){
?>
<body>  
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel">
  
  <table border="0">
  <tr>
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Master Engine</strong></font><span style="float:right;"></span></h4></td>
    
   
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td><form method="post" action="index.php?pilih=2.2&aksi=search" >
								<input type="text" name="src" placeholder="Enter Engine Number"/>&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <?php
		if($level=="Admin"){
	?>
    	<td><a href="index.php?pilih=2.2&aksi=upload" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Upload Data Engine</a>&nbsp;&nbsp;<a href="manage_data.php" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Manage Data Engine</a></td>
    <?php
		}else{
	?>
    <?php
	if($rol_add=='Yes'){
	?>
    <td><a href="index.php?pilih=2.2&aksi=upload" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Upload Data Engine</a> </td>
  <?php
	}else{
  ?>
   <td>&nbsp;&nbsp; </td>
   <?php
	}
	?>
    <?php
		}
	?>
  </tr>
</table>

   
  

<form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
             <th><a href="#">No</a></th>
             <th><a href="#">Engine Number</a></th>
             <th><a href="#">Engine Name</a></th>
			 <th><a href="#">Engine Model</a></th>
             <th><a href="#">Status</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 100;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_engine order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_engine ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['engine_number'];?></td>
            <td><?php echo $data['engine_name'];?></td>
			 <td><?php echo $data['engine_model'];?></td>
             <td><?php echo $data['engine_status'];?></td>
             <td align="center">
          <?php
				if($level=="Admin"){
		   ?>
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=2.2&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    <a class="btn btn-danger btn-xs" href="masterengine/proses_engine.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
			
      
      		<?php
				}else{
			?>
            	
      			<?php
				if($rol_edit=='Yes'){
				?>
      					<a class="btn btn-success btn-xs" href="index.php?pilih=2.2&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        
                  <?php
						}
				  ?>
                  
                  <?php
				if($rol_delete=='Yes'){
				?>
                	<a class="btn btn-danger btn-xs" href="masterengine/proses_engine.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                
                  <?php
						}
				  ?>
      		<?php
				}
			?>
            </td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table></form>
<div style="font-weight:bold;">
						Page : 
		<?php
							for ($i=1; $i<=$pages ; $i++){
						?>
							<a href="index.php?pilih=2.2&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>

<?php
	}elseif($aksi=='tambah'){
	$ec1= $_REQUEST['ec1'];
	$ec2= $_REQUEST['ec2'];
	$ec3= $_REQUEST['ec3'];
	$ec4= $_REQUEST['ec4'];
	$ec5= $_REQUEST['ec5'];
	$ec6= $_REQUEST['ec6'];
	$err= $_REQUEST['err'];
?>

<div class="row mt">
 <div class="col-lg-14">
  <div class="form-panel" style="width:80%;">
   <h4><font color="#990000"><strong>Master Engine</strong></font></h4>
   <hr width="+1">
<form action="masterengine/proses_engine.php?pros=tambah" method="post" enctype="multipart/form-data" >
<table width="800">
    	<tr>
        	<td><font color="#000000">Engine Code</font></td><td>:</td><td>&nbsp;<input type="text" id="engine_number" name="engine_number" size="25" autocomplete="off" value = "<?php echo $ec1 ?>" required/><input type="hidden" name="kopname" value="<?php echo $kopname ?>"></td>
        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        	<td>&nbsp;<input type="File" name="uploaded_file" required/></td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<font color="#000000">Engine Foto</font></td>
        </tr>
        <tr>
        	<td><font color="#000000">Engine Name</font></td><td>:</td><td>&nbsp;<input type="text" name="engine_name" size="45" autocomplete="off" value = "<?php echo $ec2 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td><font color="#000000">Engine Model</font></td><td>:</td><td>&nbsp;<input type="text" id="engine_model" name="engine_model" size="45" autocomplete="off" value = "<?php echo $ec3 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td align="center">&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
         <tr>
        	<td><font color="#000000">Engine Brand</font></td><td>:</td><td>&nbsp;<input type="text" id="engine_brand" name="engine_brand" size="45" autocomplete="off" value = "<?php echo $ec4 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
      <tr>
        	<td><font color="#000000">Car_Name</font></td><td>:</td><td>&nbsp;<input type="text" id="car_name" name="car_name" size="45" autocomplete="off" value = "<?php echo $ec5 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
          <tr>
        	<td><font color="#000000">Suplier_Name</font></td><td>:</td><td>&nbsp;<input type="text" id="engine_suplier" name="engine_suplier" size="45" autocomplete="off" value = "<?php echo $ec6 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
          <tr>
        	<td><font color="#000000">Engine Location</font></td><td>:</td><td>&nbsp;<select name="engine_area_name">
  <?php
   //Membuat koneksi ke database akademik
   $hasil=mysql_query("select * from master_area where area_status='Aktif'");
    $no=0;
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
    <option value="<?php echo $dtcombo['area_name'];?>"><?php echo $dtcombo['area_name'];?></option>
  <?php 
	}
  ?>
</select></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
          <tr>
        	<td><font color="#000000">Engine Status</font></td><td>:</td><td>&nbsp;<select name="engine_status">
<option value="Aktif">Aktif</option>
<option value="Tidak Aktif">Tdak Aktif</option>
</select></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
 
   
        <tr>
        	<td></td><td></td><td><button class="btn btn-success">Insert Data</button>&nbsp;<a class="btn btn-danger" href="index.php?pilih=2.2">Back Front</a>&nbsp;&nbsp;
           <?php
		   		if($err=='1'){
					echo "<font color='#FF0000'#FF0000'><blink>Engine Number Already Insert !!</blink</font>";	
				}
		   
		   ?>
            
            
            
            </td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
    </table>


</form>
</div></div></div>


<?php
	}elseif($aksi=='search'){
		$kodesrc= $_REQUEST['src'];
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel">
  
  <table border="0">
  <tr>
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Master Mesin</strong></font><span style="float:right;"></span></h4></td>
    
   
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td><form method="post" action="index.php?pilih=2.2&aksi=search" >
								<input type="text" name="src" placeholder="Engine Number"/>&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    
    <td>
    
      <?php
		if($level=="Admin"){
	?>
    	<td><a href="index.php?pilih=2.2&aksi=upload" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Upload Data Engine</a>&nbsp;&nbsp; <a href="manage_data.php" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Manage Data Engine</a></td>
    <?php
		}else{
	?>
    <?php
	if($rol_add=='Yes'){
	?>
    <td><a href="index.php?pilih=2.2&aksi=upload" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Upload Data Engine</a> </td>
  <?php
	}else{
  ?>
   <td>&nbsp;&nbsp; </td>
   <?php
	}
	?>
    <?php
		}
	?>
    
    
    
     </td>
  
  </tr>
</table>

   
  

<form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
              <th><a href="#">No</a></th>
             <th><a href="#">Engine Number</a></th>
             <th><a href="#">Engine Name</a></th>
			 <th><a href="#">Engine Model</a></th>
             <th><a href="#">Status</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 100;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_engine where engine_number like '%".$kodesrc."%' order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_engine where engine_number like '%".$kodesrc."%' ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['engine_number'];?></td>
            <td><?php echo $data['engine_name'];?></td>
			 <td><?php echo $data['engine_model'];?></td>
             <td><?php echo $data['engine_status'];?></td>
             
            <td align="center">
	 <?php
				if($level=="Admin"){
		   ?>
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=2.2&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    <a class="btn btn-danger btn-xs" href="masterengine/proses_engine.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
			
      
      		<?php
				}else{
			?>
            	
      			<?php
				if($rol_edit=='Yes'){
				?>
      					<a class="btn btn-success btn-xs" href="index.php?pilih=2.2&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        
                  <?php
						}
				  ?>
                  
                  <?php
				if($rol_delete=='Yes'){
				?>
                	<a class="btn btn-danger btn-xs" href="masterengine/proses_engine.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                
                  <?php
						}
				  ?>
      		<?php
				}
			?>
			</td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table></form>
<div style="font-weight:bold;">
						Page : 
		<?php
							for ($i=1; $i<=$pages ; $i++){
						?>
							<a href="index.php?pilih=2.2&aksi=search&src=<?php echo $kodesrc; ?>&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>

<?php
	}elseif($aksi=='upload'){

	
	
?>

<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:80%;">
   <h4 class="mb"><font color="#990000"><strong>Upload Data Engine</strong></font></h4>
   <hr width="+1">
   
   <form method="post" enctype="multipart/form-data" action="masterengine/import_excel.php">
   
   <table  border="0">
  <tr>
    <td>Pilih File Excel Format 97 -2003&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<input name="filepegawai" type="file" required="required"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="index.php?pilih=2.2">Back Front</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="upload" type="submit" value="Import"></td>
  </tr>
</table>

	
	 
	
</form>





   
   </div>
   </div>
   </div>

<?php
	}elseif($aksi=='ubah'){
		
		$id= $_REQUEST['id'];
		
		$queryarea=mysql_query("select * from master_engine where id ='".$id."'");
		while($data2=mysql_fetch_array($queryarea)){
			
		
	
	$engine_number	= $data2['engine_number'];
	$engine_name	= $data2['engine_name'];
	$engine_model	= $data2['engine_model'];
	$engine_brand	= $data2['engine_brand'];
	$car_name	= $data2['car_name'];
	$engine_suplier	= $data2['engine_suplier'];
	$engine_area_name	= $data2['engine_area_name'];
	$engine_status	= $data2['engine_status'];
	$nama_file	= $data2['nama_file'];
		}

	
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:80%;">
   <h4 class="mb"><font color="#990000"><strong>Update Master Engine</strong></font></h4>
   <hr width="+1">
   <form action="masterengine/proses_engine.php?pros=edit" method="post" enctype="multipart/form-data" >
<table width="800">
    	<tr>
        	<td><font color="#000000">Engine Code</font></td><td>:</td><td>&nbsp;<input type="text" id="engine_number" name="engine_number" size="25" autocomplete="off" value = "<?php echo $engine_number ?>" required/><input type="hidden" name="kopname" value="<?php echo $kopname ?>"><input type="hidden" name="id" value="<?php echo $id?>"></td>
        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        	<td>&nbsp;<input type="File" name="uploaded_file"/></td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<font color="#000000"><input type="checkbox" id="chf" name="chf">&nbsp;<label for="chfs">Ganti Foto</label></font></td>
        </tr>
        <tr>
        	<td><font color="#000000">Engine Name</font></td><td>:</td><td>&nbsp;<input type="text" name="engine_name" size="45" autocomplete="off" value = "<?php echo $engine_name ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td rowspan="14" valign="top">&nbsp;<img src="upload/<?php echo $nama_file; ?>" width="250" height="250"></td>
         </tr>
        <tr>
        	<td><font color="#000000">Engine Model</font></td><td>:</td><td>&nbsp;<input type="text" id="engine_model" name="engine_model" size="45" autocomplete="off" value = "<?php echo $engine_model ?>" required/></td>
        	<td>&nbsp;</td>
       	  </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
       	  </tr>
         <tr>
        	<td><font color="#000000">Engine Brand</font></td><td>:</td><td>&nbsp;<input type="text" id="engine_brand" name="engine_brand" size="45" autocomplete="off" value = "<?php echo $engine_brand ?>" required/></td>
        	<td>&nbsp;</td>
       	  </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
       	  </tr>
      <tr>
        	<td><font color="#000000">Car_Name</font></td><td>:</td><td>&nbsp;<input type="text" id="car_name" name="car_name" size="45" autocomplete="off" value = "<?php echo $car_name ?>" required/></td>
        	<td>&nbsp;</td>
       	  </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
       	  </tr>
          <tr>
        	<td><font color="#000000">Suplier_Name</font></td><td>:</td><td>&nbsp;<input type="text" id="engine_suplier" name="engine_suplier" size="45" autocomplete="off" value = "<?php echo $engine_suplier ?>" required/></td>
        	<td>&nbsp;</td>
       	  </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
       	  </tr>
          <tr>
        	<td><font color="#000000">Engine Location</font></td><td>:</td><td>&nbsp;<select name="engine_area_name">
  <?php
   //Membuat koneksi ke database akademik
   $hasil=mysql_query("select * from master_area where area_status='Aktif'");
    $no=0;
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
    <option value="<?php echo $engine_area_name;?>"><?php echo $engine_area_name;?></option>
    <option value="<?php echo $dtcombo['area_name'];?>"><?php echo $dtcombo['area_name'];?></option>
  <?php 
	}
  ?>
</select></td>
        	<td>&nbsp;</td>
       	  </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
       	  </tr>
          <tr>
        	<td><font color="#000000">Engine Status</font></td><td>:</td><td>&nbsp;<select name="engine_status">
 <option value="<?php echo $engine_status;?>"><?php echo $engine_status;?></option>
<option value="Aktif">Aktif</option>
<option value="Tidak Aktif">Tdak Aktif</option>
</select></td>
        	<td>&nbsp;</td>
       	  </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
       	  </tr>
 
   
        <tr>
        	<td></td><td></td><td><button class="btn btn-success">Update Data</button>&nbsp;<a class="btn btn-danger" href="index.php?pilih=2.2">Back Front</a>&nbsp;&nbsp;
            </td>
        	<td>&nbsp;</td>
       	  </tr>
    </table>


</form>
</div></div></div>
<?php
	}elseif($aksi=='proses_upload'){
	
?>

<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:80%;">
   <h4 class="mb"><font color="#990000"><strong>Upload Data Engine</strong></font></h4>
   <hr width="+1">
   
   <form method="post" enctype="multipart/form-data" action="masterengine/import_excel.php">
   
   <table  border="0">
  <tr>
    <td>Pilih File Excel Format 97 -2003&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<input name="filepegawai" type="file" required="required"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="index.php?pilih=2.2">Back Front</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="upload" type="submit" value="Import"></td>
  </tr>
</table>

	
	 
	
</form>
</p>
<?php


$tot_1=mysql_query("SELECT count(engine_number) as tot_1x from master_engine_temp1");
$jml_1=mysql_fetch_array($tot_1);
$tot_all_1=$jml_1['tot_1x'];

$tot_2=mysql_query("SELECT count(engine_number) as tot_2x from master_engine_temp2");
$jml_2=mysql_fetch_array($tot_2);
$tot_all_2=$jml_2['tot_2x'];

echo "Import Succes!";
echo "</br>";
echo "Not Duplicate :".$tot_all_2;
echo "</br>";
echo "Duplicate :".$tot_all_1;
echo "<table border=0>";
echo "<tr><td><a class='btn btn-danger' href='masterengine/export_duplicate.php'>Export Duplicate</a></td><td>&nbsp;</td><td><a class='btn btn-info' href='index.php?pilih=2.2&aksi=proses_upload2'>Process</a></td><td>&nbsp;</td><td><a class='btn btn-warning' href='index.php?pilih=2.2&aksi=proses_cancel'>Cancel</a></td></tr>"; 
echo "</table>";

$queryx = "SELECT Distinct engine_number, engine_name FROM master_engine_temp1"; 
$resultx = mysql_query($queryx);

echo "<table>";

while($row = mysql_fetch_array($resultx)){   
echo "<tr><td>" . $row['engine_number'] . "</td><td>" . $row['engine_name'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>";


?>




   
   </div>
   </div>
   </div>
   
   
   <?php
	}elseif($aksi=='proses_upload2'){
	
	
	 $query_pt3x=mysql_query("INSERT into master_engine(material,engine_name,engine_number,engine_model,engine_status,tgl) select material,engine_name,engine_number,engine_model,engine_status,tgl from master_engine_temp2");
	 
 $query_del=mysql_query("delete from master_engine_temp2");
	
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel">
  
  <table border="0">
  <tr>
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Master Engine</strong></font><span style="float:right;"></span></h4></td>
    
   
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td><form method="post" action="index.php?pilih=2.2&aksi=search" >
								<input type="text" name="src" placeholder="Enter Engine Name"/>&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <?php
		if($level=="Admin"){
	?>
    	<td><a href="index.php?pilih=2.2&aksi=upload" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Upload Data Engine</a> &nbsp;&nbsp; <a href="manage_data.php" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Manage Data Engine</a></td>
    <?php
		}else{
	?>
    <?php
	if($rol_add=='Yes'){
	?>
    <td><a href="index.php?pilih=2.2&aksi=upload" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Upload Data Engine</a> </td>
  <?php
	}else{
  ?>
   <td>&nbsp;&nbsp; </td>
   <?php
	}
	?>
    <?php
		}
	?>
  </tr>
</table>

   
  

<form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
             <th><a href="#">No</a></th>
             <th><a href="#">Engine Number</a></th>
             <th><a href="#">Engine Name</a></th>
			 <th><a href="#">Engine Model</a></th>
             <th><a href="#">Status</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 100;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_engine order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_engine ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['engine_number'];?></td>
            <td><?php echo $data['engine_name'];?></td>
			 <td><?php echo $data['engine_model'];?></td>
             <td><?php echo $data['engine_status'];?></td>
             <td align="center">
          <?php
				if($level=="Admin"){
		   ?>
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=2.2&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    <a class="btn btn-danger btn-xs" href="masterengine/proses_engine.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
			
      
      		<?php
				}else{
			?>
            	
      			<?php
				if($rol_edit=='Yes'){
				?>
      					<a class="btn btn-success btn-xs" href="index.php?pilih=2.2&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        
                  <?php
						}
				  ?>
                  
                  <?php
				if($rol_delete=='Yes'){
				?>
                	<a class="btn btn-danger btn-xs" href="masterengine/proses_engine.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                
                  <?php
						}
				  ?>
      		<?php
				}
			?>
            </td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table></form>
<div style="font-weight:bold;">
						Page : 
		<?php
							for ($i=1; $i<=$pages ; $i++){
						?>
							<a href="index.php?pilih=2.2&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>

<?php
	}elseif($aksi=='proses_cancel'){
	
	

 $query_del1=mysql_query("delete from master_engine_temp1");
$query_del2=mysql_query("delete from master_engine_temp2");
	
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel">
  
  <table border="0">
  <tr>
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Master Engine</strong></font><span style="float:right;"></span></h4></td>
    
   
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td><form method="post" action="index.php?pilih=2.2&aksi=search" >
								<input type="text" name="src" placeholder="Enter Engine Name"/>&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <?php
		if($level=="Admin"){
	?>
    	<td><a href="index.php?pilih=2.2&aksi=upload" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Upload Data Engine</a> &nbsp;&nbsp; <a href="manage_data.php" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Manage Data Engine</a></td>
    <?php
		}else{
	?>
    <?php
	if($rol_add=='Yes'){
	?>
    <td><a href="index.php?pilih=2.2&aksi=upload" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Upload Data Engine</a> </td>
  <?php
	}else{
  ?>
   <td>&nbsp;&nbsp; </td>
   <?php
	}
	?>
    <?php
		}
	?>
  </tr>
</table>

   
  

<form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
             <th><a href="#">No</a></th>
             <th><a href="#">Engine Number</a></th>
             <th><a href="#">Engine Name</a></th>
			 <th><a href="#">Engine Model</a></th>
             <th><a href="#">Status</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 100;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_engine order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_engine ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['engine_number'];?></td>
            <td><?php echo $data['engine_name'];?></td>
			 <td><?php echo $data['engine_model'];?></td>
             <td><?php echo $data['engine_status'];?></td>
             <td align="center">
          <?php
				if($level=="Admin"){
		   ?>
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=2.2&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    <a class="btn btn-danger btn-xs" href="masterengine/proses_engine.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
			
      
      		<?php
				}else{
			?>
            	
      			<?php
				if($rol_edit=='Yes'){
				?>
      					<a class="btn btn-success btn-xs" href="index.php?pilih=2.2&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        
                  <?php
						}
				  ?>
                  
                  <?php
				if($rol_delete=='Yes'){
				?>
                	<a class="btn btn-danger btn-xs" href="masterengine/proses_engine.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                
                  <?php
						}
				  ?>
      		<?php
				}
			?>
            </td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table></form>
<div style="font-weight:bold;">
						Page : 
		<?php
							for ($i=1; $i<=$pages ; $i++){
						?>
							<a href="index.php?pilih=2.2&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>

<?php
	}elseif($aksi=='manage'){
		$kodesrc= $_REQUEST['src'];
?>



<?php
	}
?>

