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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Master Checking Area Transmisi</strong></font><span style="float:right;"></span></h4></td>
    
   
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
    <td><form method="post" action="index.php?pilih=5.0&aksi=search" >
								<input type="text" name="src" />&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <?php
		if($level=="Admin"){
	?>
    	<td><a href="index.php?pilih=5.0&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Area</a> </td>
    <?php
		}else{
	?>
    <?php
	if($rol_add=='Yes'){
	?>
    <td><a href="index.php?pilih=5.0&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Area</a> </td>
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
             <th><a href="#">Area Code</a></th>
             <th><a href="#">Area Name</a></th>
			 <th><a href="#">Area Address</a></th>
             <th><a href="#">Area Status</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT count(*) as total FROM transmisi_master_area ");
						$__tot_row = mysql_fetch_array($result);
						$total = $__tot_row['total'];
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM transmisi_master_area ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['area_code'];?></td>
            <td><?php echo $data['area_name'];?></td>
			 <td><?php echo $data['area_address'];?></td>
             <td><?php echo $data['area_status'];?></td>
             <td align="center">
          <?php
				if($level=="Admin"){
		   ?>
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=5.0&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    <a class="btn btn-danger btn-xs" href="motoringarea/proses_area_motoring.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
			
      
      		<?php
				}else{
			?>
            	
      			<?php
				if($rol_edit=='Yes'){
				?>
      					<a class="btn btn-success btn-xs" href="index.php?pilih=5.0&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        
                  <?php
						}
				  ?>
                  
                  <?php
				if($rol_delete=='Yes'){
				?>
                	<a class="btn btn-danger btn-xs" href="motoringarea/proses_area_motoring.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                
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
							<a href="index.php?pilih=5.0&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>

<?php
	}elseif($aksi=='tambah'){
	$ac1= $_REQUEST['ac1'];
	$ac2= $_REQUEST['ac2'];
	$ac3= $_REQUEST['ac3'];
	$err= $_REQUEST['err'];
?>

<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:50%;">
   <h4><font color="#990000"><strong>Master Checking Area</strong></font></h4>
   <hr width="+1">
<form action="motoringarea/proses_area_motoring.php?pros=tambah" method="post" enctype="multipart/form-data" >
<table>
    	<tr>
        	<td><font color="#000000">Area Code</font></td><td>:</td><td>&nbsp;<input type="text" id="area_code" name="area_code" size="25" autocomplete="off" value = "<?php echo $ac1 ?>" required/><input type="hidden" name="kopname" value="<?php echo $kopname ?>"></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td><font color="#000000">Area Name</font></td><td>:</td><td>&nbsp;<input type="text" name="area_name" size="25" autocomplete="off" value = "<?php echo $ac2 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td><font color="#000000">Area Address</font></td><td>:</td><td>&nbsp;<input type="text" id="area_address" name="area_address" size="45" autocomplete="off" value = "<?php echo $ac3 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
      
          <tr>
        	<td><font color="#000000">Area Status</font></td><td>:</td><td>&nbsp;<select name="area_status">
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
        	<td></td><td></td><td><button class="btn btn-success">Insert Data</button>&nbsp;<a class="btn btn-danger" href="index.php?pilih=2.1">Back Front</a>&nbsp;&nbsp;
           <?php
		   		if($err=='1'){
					echo "<font color='#FF0000'#FF0000'><blink>Area Code Already Insert</blink</font>";	
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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Master Checking Area Transmisi</strong></font><span style="float:right;"></span></h4></td>
    
   
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
    <td><form method="post" action="index.php?pilih=5.0&aksi=search" >
								<input type="text" name="src" />&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    
    <td><?php
		if($level=="Admin"){
	?>
    	<td><a href="index.php?pilih=5.0&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Area</a> </td>
    <?php
		}else{
	?>
    <?php
	if($rol_add=='Yes'){
	?>
    <td><a href="index.php?pilih=5.0&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Area</a> </td>
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
             <th><a href="#">Area Code</a></th>
             <th><a href="#">Area Name</a></th>
			 <th><a href="#">Area Address</a></th>
             <th><a href="#">Area Status</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT count(*) as total FROM transmisi_master_area where area_name like '%".$kodesrc."%' ");
						$__tot_row = mysql_fetch_array($result);
						$total = $__tot_row['total'];
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM transmisi_master_area where area_name like '%".$kodesrc."%' ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
          <td><?php echo $lagi=$data['area_code'];?></td>
            <td><?php echo $data['area_name'];?></td>
			 <td><?php echo $data['area_address'];?></td>
             <td><?php echo $data['area_status'];?></td>
            <td align="center">
	 <?php
				if($level=="Admin"){
		   ?>
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=5.0&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    <a class="btn btn-danger btn-xs" href="motoringarea/proses_area_motoring.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
			
      
      		<?php
				}else{
			?>
            	
      			<?php
				if($rol_edit=='Yes'){
				?>
      					<a class="btn btn-success btn-xs" href="index.php?pilih=5.0&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        
                  <?php
						}
				  ?>
                  
                  <?php
				if($rol_delete=='Yes'){
				?>
                	<a class="btn btn-danger btn-xs" href="motoringarea/proses_area_motoring.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                
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
							<a href="index.php?pilih=5.0&aksi=search&src=<?php echo $kodesrc; ?>&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>



<?php
	}elseif($aksi=='ubah'){
		
		$id= $_REQUEST['id'];
		
		$queryarea=mysql_query("select * from transmisi_master_area where id ='".$id."'");
		while($data2=mysql_fetch_array($queryarea)){
			
			$area_code = $data2['area_code'];
			$area_name = $data2['area_name'];
			$area_address = $data2['area_address'];
			$area_status = $data2['area_status'];
		}

	
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:80%;">
   <h4 class="mb"><font color="#990000"><strong>Update Master Checking Area</strong></font></h4>
   <hr width="+1">
   <form action="motoringarea/proses_area_motoring.php?pros=edit" method="post" enctype="multipart/form-data" >
<table>
    	<tr>
        	<td><font color="#000000">Area Code</font></td><td>:</td><td>&nbsp;<input type="text" id="area_code" name="area_code" size="25" autocomplete="off" value = "<?php echo $area_code ?>" style="background:#FCC"readonly/><input type="hidden" name="id" value="<?php echo $id ?>"><input type="hidden" name="kopname" value="<?php echo $kopname ?>"></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td><font color="#000000">Area Name</font></td><td>:</td><td>&nbsp;<input type="text" name="area_name" size="25" autocomplete="off" value = "<?php echo $area_name ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td><font color="#000000">Area Address</font></td><td>:</td><td>&nbsp;<input type="text" id="area_address" name="area_address" size="45" autocomplete="off" value = "<?php echo $area_address ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
      
          <tr>
        	<td><font color="#000000">Area Status</font></td><td>:</td><td>&nbsp;<select name="area_status">
 <option value="<?php echo $area_status ?>"><?php echo $area_status ?></option>
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
        	<td></td><td></td><td><button class="btn btn-success">Update Data</button>&nbsp;<a class="btn btn-danger" href="index.php?pilih=5.0">Back Front</a>&nbsp;&nbsp;
          
            
            
            
            </td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
    </table>


</form>
</div></div></div>
<?php
	}
?>

