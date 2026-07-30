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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Item Performance Test</strong></font><span style="float:right;"></span></h4></td>
    
   
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
    <td><form method="post" action="index.php?pilih=2.5&aksi=search" >
								<input type="text" name="src" placeholder="Enter Description"/>&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
     <?php
		if($level=="Admin"){
	?>
    	<td><a href="index.php?pilih=2.5&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Item</a> </td>
    <?php
		}else{
	?>
    <?php
	if($rol_add=='Yes'){
	?>
    <td><a href="index.php?pilih=2.5&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Item</a> </td>
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
             <th><a href="#">Description</a></th>
             <th><a href="#">RPM</a></th>
             <th><a href="#">Spec Start</a></th>
             <th><a href="#">Spec Finish</a></th>
             <th><a href="#">UoM</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_performance_test order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_performance_test ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['form_code'];?></td>
            <td><?php echo $data['description'];?></td>
            <td><?php echo $lagi=$data['rpm'];?></td>
            <td><?php echo $data['spec_start'];?></td>
            <td><?php echo $data['spec_finish'];?></td>
            <td><?php echo $data['uom'];?></td>
             <td align="center">
          <?php
				if($level=="Admin"){
		   ?>
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=2.5&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> View</a>
  
			<a class="btn btn-danger btn-xs" href="masterinspection/proses_item_performance_test.php?pros=Delone&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
      
      		<?php
				}else{
			?>
            	
      			<?php
				if($rol_edit=='Yes'){
				?>
      					<a class="btn btn-success btn-xs" href="index.php?pilih=2.5&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> View</a>
                        
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
							<a href="index.php?pilih=2.5&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
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
   <h4><font color="#990000"><strong>Item Performance Test</strong></font></h4>
   <hr width="+1">
<form action="masterinspection/proses_item_performance_test.php?pros=tambah" method="post" enctype="multipart/form-data" >
<table width="800">
    	<tr>
        	<td><font color="#000000">Form Code</font></td><td>:</td><td>&nbsp;;<select name="form_code">
  <?php
   //Membuat koneksi ke database akademik
   $hasil=mysql_query("select * from master_type_form");
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
        	<td>&nbsp;<font color="#000000">Operator Math</font></td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<select name="omath">
<option value="Lebih Kecil Sama Dengan">Lebih Kecil Sama Dengan</option>
<option value="Lebih Besar Sama Dengan">Lebih Besar Sama Dengan</option>
<option value="Rumus PS">Rumus PS</option>
<option value="Hasil PS">Hasil PS</option>

<option value="Rumus TS 100">Rumus TS 1000</option>
<option value="Rumus TS 20015">Rumus TS 1500</option>
<option value="Rumus TS 20025">Rumus TS 2500</option>

</select></td>
        </tr>
        <tr>
        	<td><font color="#000000">Description</font></td><td>:</td><td>&nbsp;<input type="text" name="description" size="45" autocomplete="off" value = "<?php echo $ec2 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<font color="#000000">Full Consup.</font></td>
         </tr>
          <tr>
        	<td><font color="#000000">RPM</font></td><td>:</td><td>&nbsp;<input type="text" name="rpm" size="45" autocomplete="off" value = "<?php echo $ec3 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<input type="text" id="fulconsup" name="fulconsup" size="15" autocomplete="off"  /></td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td><font color="#000000">Spec Min</font></td><td>:</td><td>&nbsp;<input type="text" id="spec_start" name="spec_start" size="15" autocomplete="off" value = "<?php echo $ec4 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<font color="#000000">Cylinder</font></td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<input type="text" id="cylinder" name="cylinder" size="15" autocomplete="off"  /></td>
         </tr>
         <tr>
        	<td><font color="#000000">Spec Max</font></td><td>:</td><td>&nbsp;<input type="text" id="spec_finish" name="spec_finish" size="15" autocomplete="off" value = "<?php echo $ec5 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
      <tr>
        	<td><font color="#000000">UoM</font></td><td>:</td><td>&nbsp;<input type="text" id="uom" name="uom" size="15" autocomplete="off" value = "<?php echo $ec6 ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
          <tr>
        	<td><font color="#000000">Page Column</font></td><td>:</td><td>&nbsp;<select name="group_column">
<option value="Page Left">Page Left</option>
<option value="Page Right">Page Right</option>
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
        	<td><font color="#000000">Urutan</font></td><td>:</td><td>&nbsp;<select name="urutan">
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="G">G</option>
<option value="H">H</option>
<option value="I">I</option>
<option value="J">J</option>
<option value="K">K</option>
<option value="L">L</option>
<option value="M">M</option>
<option value="N">N</option>
<option value="O">O</option>
<option value="P">P</option>
<option value="Q">Q</option>
<option value="R">R</option>
<option value="S">S</option>
<option value="T">T</option>
<option value="U">U</option>
<option value="V">V</option>
<option value="W">W</option>
<option value="X">X</option>
<option value="Y">Y</option>
<option value="Z">Z</option>
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
        	<td></td><td></td><td><button class="btn btn-success">Insert Data</button>&nbsp;<a class="btn btn-danger" href="index.php?pilih=2.5">Back Front</a>&nbsp;&nbsp;
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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Item Performance Test</strong></font><span style="float:right;"></span></h4></td>
    
   
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
    <td><form method="post" action="index.php?pilih=2.5&aksi=search" >
								<input type="text" name="src" placeholder="Enter Description"/>&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    
    <td> <?php
		if($level=="Admin"){
	?>
    	<td><a href="index.php?pilih=2.5&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Item Performance</a> </td>
    <?php
		}else{
	?>
    <?php
	if($rol_add=='Yes'){
	?>
    <td><a href="index.php?pilih=2.5&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add Item Performance</a> </td>
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
             <th><a href="#">Description</a></th>
             <th><a href="#">RPM</a></th>
             <th><a href="#">Spec Start</a></th>
             <th><a href="#">Spec Finish</a></th>
             <th><a href="#">UoM</a></th>
             
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_performance_test where description like '%".$kodesrc."%' order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_performance_test where description like '%".$kodesrc."%' ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
        <td><?php echo $lagi=$data['form_code'];?></td>
            <td><?php echo $data['description'];?></td>
            <td><?php echo $lagi=$data['rpm'];?></td>
            <td><?php echo $data['spec_start'];?></td>
            <td><?php echo $data['spec_finish'];?></td>
            <td><?php echo $data['uom'];?></td>
             
            <td align="center">
	 <?php
				if($level=="Admin"){
		   ?>
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=2.5&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> View</a>
  
			<a class="btn btn-danger btn-xs" href="masterinspection/proses_item_performance_test.php?pros=Delone&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
      
      		<?php
				}else{
			?>
            	
      			<?php
				if($rol_edit=='Yes'){
				?>
      					<a class="btn btn-success btn-xs" href="index.php?pilih=2.5&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> View</a>
                        
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
							<a href="index.php?pilih=2.5&halaman=<?php echo $i; ?>&src=<?php echo $kodesrc; ?>&aksi=search" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>



<?php
	}elseif($aksi=='ubah'){
		
		$id= $_REQUEST['id'];
		
		$queryarea=mysql_query("select * from master_performance_test where id ='".$id."'");
		while($data2=mysql_fetch_array($queryarea)){
			
		
	
	$form_code	= $data2['form_code'];
	$description	= $data2['description'];
	$rpm	= $data2['rpm'];
	$spec_start	= $data2['spec_start'];
	$spec_finish	= $data2['spec_finish'];
	$uom	= $data2['uom'];
	$group_column	= $data2['group_column'];
	$operator_math	= $data2['operator_math'];
	$full_consup	= $data2['full_consup'];
	$cylinder	= $data2['cylinder'];
		}

	
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:80%;">
   <h4 class="mb"><font color="#990000"><strong>Item Performance Test</strong></font></h4>
   <hr width="+1">
   <form action="masterinspection/proses_item_performance_test.php?pros=edit" method="post" enctype="multipart/form-data" >
<table width="800">
    	<tr>
        	<td><font color="#000000">Form Code</font></td><td>:</td><td>&nbsp;;<select name="form_code">
               <?php
            	echo "<option value='$form_code'>$form_code</option>";
  
  			?>
  <?php
   //Membuat koneksi ke database akademik
   $hasil=mysql_query("select * from master_type_form");
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
        	<td>&nbsp;<font color="#000000">Operator Math</font></td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<select name="omath">
			
<option value="<?php echo $operator_math ?>"><?php echo $operator_math ?></option>
<option value="Lebih Kecil Sama Dengan">Lebih Kecil Sama Dengan</option>
<option value="Lebih Besar Sama Dengan">Lebih Besar Sama Dengan</option>
<option value="Rumus PS">Rumus PS</option>
<option value="Hasil PS">Hasil PS</option>

<option value="Rumus TS 100">Rumus TS 1000</option>
<option value="Rumus TS 20015">Rumus TS 1500</option>
<option value="Rumus TS 20025">Rumus TS 2500</option>

</select></td>
        </tr>
        <tr>
        	<td><font color="#000000">Description</font></td><td>:</td><td>&nbsp;<input type="text" name="description" size="45" autocomplete="off" value = "<?php echo $description ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<font color="#000000">Full Consup.</font></td>
         </tr>
          <tr>
        	<td><font color="#000000">RPM</font></td><td>:</td><td>&nbsp;<input type="text" name="rpm" size="45" autocomplete="off" value = "<?php echo $rpm ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<input type="text" id="fulconsup" name="fulconsup" size="15" autocomplete="off"  value = "<?php echo $full_consup?>" /></td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td><font color="#000000">Spec Min</font></td><td>:</td><td>&nbsp;<input type="text" id="spec_start" name="spec_start" size="15" autocomplete="off" value = "<?php echo $spec_start ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<font color="#000000">Cylinder</font></td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;<input type="text" id="cylinder" name="cylinder" size="15" autocomplete="off" value = "<?php echo $cylinder?>"  /></td>
         </tr>
         <tr>
        	<td><font color="#000000">Spec Max</font></td><td>:</td><td>&nbsp;<input type="text" id="spec_finish" name="spec_finish" size="15" autocomplete="off" value = "<?php echo $spec_finish ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
      <tr>
        	<td><font color="#000000">UoM</font></td><td>:</td><td>&nbsp;<input type="text" id="uom" name="uom" size="15" autocomplete="off" value = "<?php echo $uom ?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
          <tr>
        	<td><font color="#000000">Page Column</font></td><td>:</td><td>&nbsp;<select name="group_column">
 <option value="<?php echo $group_column ?>"><?php echo $group_column ?></option>
<option value="Page Left">Page Left</option>
<option value="Page Right">Page Right</option>
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
        	<td></td><td></td><td>&nbsp;<a class="btn btn-danger" href="index.php?pilih=2.5">Back Front</a>&nbsp;&nbsp;
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

