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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Item Inspection Front TM</strong></font><span style="float:right;"></span></h4></td>
    
   
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
    <td><form method="post" action="index.php?pilih=5.6&aksi=search" >
								<input type="text" name="src" placeholder="Enter Item"/>&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
   &nbsp;&nbsp;
   <?php
		if($level=="Admin"){
	?>
    	<td><a href="index.php?pilih=5.6&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Item</a> </td>
    <?php
		}else{
	?>
    <?php
	if($rol_add=='Yes'){
	?>
    <td><a href="index.php?pilih=5.6&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Item</a> </td>
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
             <th><a href="#">Form Code</a></th>
             <th><a href="#">Item Inspection Front TM</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM transmisi_master_front_tm order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM transmisi_master_front_tm ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['form_code'];?></td>
            <td><?php echo $data['inspection_front_engine'];?></td>
             <td align="center">
          <?php
				if($level=="Admin"){
		   ?>
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=5.6&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> View</a>
  
      <a class="btn btn-danger btn-xs" href="motoringfront/proses_front.php?pros=Delone&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>	
      		<?php
				}else{
			?>
            	
      			<?php
				if($rol_edit=='Yes'){
				?>
      					<a class="btn btn-success btn-xs" href="index.php?pilih=5.6&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> View</a>
                        
                  <?php
						}
				  ?>
                  
                  <?php
				if($rol_delete=='Yes'){
				?>
                	
                
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
							<a href="index.php?pilih=5.6&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
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
   <h4><font color="#990000"><strong>Item Inspection Front TM</strong></font></h4>
   <hr width="+1">
<form action="motoringfront/proses_front.php?pros=tambah" method="post" enctype="multipart/form-data" >
<table width="800">
    	<tr>
        	<td><font color="#000000">Form Code</font></td><td>:</td><td>&nbsp;<select name="form_code">
  <?php
   //Membuat koneksi ke database akademik
   $hasil=mysql_query("select * from transmisi_master_type_form");
    $no=0;
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
    <option value="<?php echo $dtcombo['form_code'];?>"><?php echo $dtcombo['form_code'];?></option>
  <?php 
	}
  ?>
</select><input type="hidden" name="kopname" value="<?php echo $kopname ?>"></td>
        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td><font color="#000000">Item Inspection Front TM</font></td><td>:</td><td>&nbsp;<input type="text" name="inspection_front_engine" size="45" autocomplete="off" value = "<?php echo $ec2 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
   
        <tr>
        	<td></td><td></td><td><button class="btn btn-success">Insert Data</button>&nbsp;<a class="btn btn-danger" href="index.php?pilih=5.6">Back Front</a>&nbsp;&nbsp;
           <?php
		   		if($err=='1'){
					echo "<font color='#FF0000'#FF0000'><blink>Item Already Insert !!</blink</font>";	
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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Item Inspection Front TM</strong></font><span style="float:right;"></span></h4></td>
    
   
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
    <td><form method="post" action="index.php?pilih=5.6&aksi=search" >
								<input type="text" name="src" placeholder="Enter Item"/>&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    
    <td> &nbsp;&nbsp;
     <?php
		if($level=="Admin"){
	?>
    	<td><a href="index.php?pilih=5.6&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Item</a> </td>
    <?php
		}else{
	?>
    <?php
	if($rol_add=='Yes'){
	?>
    <td><a href="index.php?pilih=5.6&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Item</a> </td>
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
              <th><a href="#">Form Code</a></th>
             <th><a href="#">Item Inspection Front Engine</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM transmisi_master_front_tm where inspection_front_engine like '%".$kodesrc."%' order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM transmisi_master_front_tm where inspection_front_engine like '%".$kodesrc."%' ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
        <td><?php echo $lagi=$data['form_code'];?></td>
			<td><?php echo $data['inspection_front_engine'];?></td>
             
            <td align="center">
	 <?php
				if($level=="Admin"){
		   ?>
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=5.6&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Niew</a>
    
			<a class="btn btn-danger btn-xs" href="motoringfront/proses_front.php?pros=Delone&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>	
      
      		<?php
				}else{
			?>
            	
      			<?php
				if($rol_edit=='Yes'){
				?>
      					<a class="btn btn-success btn-xs" href="index.php?pilih=5.6&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> View</a>
                        
                  <?php
						}
				  ?>
                  
                  <?php
				if($rol_delete=='Yes'){
				?>
                	
                
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
							<a href="index.php?pilih=5.6&halaman=<?php echo $i; ?>&src=<?php echo $kodesrc; ?>&aksi=search" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>



<?php
	}elseif($aksi=='ubah'){
		
		$id= $_REQUEST['id'];
		
		$queryarea=mysql_query("select * from transmisi_master_front_tm where id ='".$id."'");
		while($data2=mysql_fetch_array($queryarea)){
			
		
	
	$form_code	= $data2['form_code'];
	$inspection_front_engine = $data2['inspection_front_engine'];
	
		}

	
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:80%;">
   <h4 class="mb"><font color="#990000"><strong>Item Front TM</strong></font></h4>
   <hr width="+1">
   <form action="motoringfront/proses_front.php?pros=edit" method="post" enctype="multipart/form-data" >
<table width="800">
    	<tr>
        	<td><font color="#000000">Form Code</font></td><td>:</td><td>&nbsp;<select name="form_code">
             <?php
            	echo "<option value='$form_code'>$form_code</option>";
  
  			?>
  <?php
   //Membuat koneksi ke database akademik
   $hasil=mysql_query("select * from transmisi_master_type_form");
    $no=0;
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
    <option value="<?php echo $dtcombo['form_code'];?>"><?php echo $dtcombo['form_code'];?></option>
  <?php 
	}
  ?>
</select><input type="hidden" name="kopname" value="<?php echo $kopname ?>"><input type="hidden" name="id" value="<?php echo $id ?>"></td>
        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td><font color="#000000">Item Inspection Front</font></td><td>:</td><td>&nbsp;<input type="text" name="inspection_front_engine" size="45" autocomplete="off" value = "<?php echo $inspection_front_engine ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
   
        <tr>
        	<td></td><td></td><td>&nbsp;<a class="btn btn-danger" href="index.php?pilih=5.6">Back Front</a>&nbsp;&nbsp;
           <?php
		   		if($err=='1'){
					echo "<font color='#FF0000'#FF0000'><blink>Item Already Insert !!</blink</font>";	
				}
		   
		   ?>
            
            <button class="btn btn-success">Update Data</button>
            
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

