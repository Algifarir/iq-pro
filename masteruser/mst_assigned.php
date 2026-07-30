<?php 
	include "config/koneksi.php";
	include "fungsi/fungsi.php";
	$kopname = $_SESSION['kopname'];
	$aksi=$_GET['aksi'];
	


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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Assign User Role</strong></font><span style="float:right;"></span></h4></td>
    
   
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td><form method="post" action="index.php?pilih=1.2&aksi=search" >
								<input type="text" name="src" placeholder="User Name"/>&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    
    <td>&nbsp;&nbsp;</td>
  
  </tr>
</table>

   
  

<form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
             <th><a href="#">No</a></th>
             <th><a href="#">Full Name</a></th>
             <th><a href="#">Departement</a></th>
             <th><a href="#">Level</a></th>
             <th><a href="#">Status User</a></th>
             <th><a href="#">Role</a></th>
             <th colspan="3" align="center">&nbsp;</th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_user where usr_stat = 'Aktif' and level <> 'Admin' order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_user where usr_stat = 'Aktif' and level <> 'Admin' ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['full_name'];?></td>
            <td><?php echo $data['departement'];?></td>
             <td><?php echo $data['level'];?></td>
             <td><?php echo $data['usr_stat'];?></td>
             <td><?php echo $data['rol'];?></td>
            <td align="center">
            <?php
            if($data['rol']=='No'){
			?>
            
                <a class="btn btn-info btn-xs" href="index.php?pilih=1.2&aksi=setrol&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-list-alt"></i> Add Role</a>
           
    
	<?php
			}elseif($data['rol']=='Yes'){
	?>
   
    <a class="btn btn-facebook btn-xs" href="index.php?pilih=1.2&aksi=setrol&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit Role</a>
   
   
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
							<a href="index.php?pilih=1.2&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>

<?php
	}elseif($aksi=='setrol'){
	$id= $_REQUEST['id'];	
	
		$querys=mysql_query("select * from master_user where id ='".$id."'");
		while($data2=mysql_fetch_array($querys)){
			
			$nama = $data2['full_name'];
			$usr_add = $data2['full_name'];
			$usr_login = $data2['username'];
			$level = $data2['level'];
		}
	
?>

<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:90%;">
   <h4><font color="#990000"><strong>User Role</strong></font></h4>
   <hr width="+1">
      <form action="masteruser/proses_assigned.php?pros=tambah" method="post" >
   <table border="0">
  <tr>
    <td>
                   <table border="0">
                     <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><font color="#000000"><strong>User Id</strong></font></td>
                    <td><font color="#000000"><strong>:</strong></font></td>
                    <td>&nbsp;<input type="text" name="id" size="25" value="<?php echo "$id";?>" readonly/><input type="hidden" name="usr_login" size="25" value="<?php echo "$usr_login";?>" readonly/><input type="hidden" name="level" size="25" value="<?php echo "$level";?>" readonly/></td>
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
                  </tr>
                  <tr>
                    <td><font color="#000000"><strong>User Name</strong></font></td>
                    <td><font color="#000000"><strong>:</strong></font></td>
                    <td>&nbsp;<input type="text" name="nama" size="25" value="<?php echo "$nama";?>" readonly/></td>
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
                  </tr>
                  <tr>
                    <td><font color="#000000"><strong>Select Menu</strong></font></td>
                    <td><font color="#000000"><strong>:</strong></font></td>
                    <td>&nbsp;<select name="pilihanmenu">
  <?php
   //Membuat koneksi ke database akademik
   
	
   //Perintah sql untuk menampilkan semua data pada tabel jurusan
   $hasil=mysql_query("select * from master_menu where type_menu='1' order by order_id ASC");
    $no=0;
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
    <option value="<?php echo $dtcombo['id_menu'];?>"><?php echo $dtcombo['name_menu'];?></option>
  <?php 
	}
  ?>
</select></td>
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
                  </tr>
                  <tr>
                    <td><font color="#000000"><strong>Role</strong></font></td>
                    <td><font color="#000000"><strong>:</strong></font></td>
                    <td>&nbsp;<input type="checkbox" name="add"> Allow to Insert Data</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                   <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;<input type="checkbox" name="edit"> Allow to Edit Data</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                     <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;<input type="checkbox" name="delete"> Allow to Delete Data</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                   <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;<input type="checkbox" name="view"> Only View Data</td>
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
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td> <button class="btn btn-success">Insert Data</button>&nbsp;<a class="btn btn-warning" href="index.php?pilih=1.2">Back Front</a></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                </form>
				</td>
                <td>&nbsp;</td>
			 <td valign="top">&nbsp;
              <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
             <th><a href="#">No</a></th>
             <th><a href="#">Menu Name</a></th>
             <th><a href="#">Role Add</a></th>
             <th><a href="#">Role Edit</a></th>
             <th><a href="#">Role Delete</a></th>
             <th><a href="#">Role View</a></th>
             <th colspan="3" align="center">&nbsp;</th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_menu_user where user = '$usr_login' order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_menu_user where user = '$usr_login' ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['name_menu'];?></td>
            <td><?php echo $data['rol_add'];?></td>
             <td><?php echo $data['rol_edit'];?></td>
             <td><?php echo $data['rol_delete'];?></td>
             <td><?php echo $data['rol_view'];?></td>
            <td align="center">
                <a class="btn btn-danger btn-xs" href="masteruser/proses_assigned.php?pros=Delone&idx=<?php echo $data['id'];?>&ids=<?php echo $id;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
    
	

			</td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table>
             </td>
  </tr>
</table>
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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Assign User Role</strong></font><span style="float:right;"></span></h4></td>
    
   
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td><form method="post" action="index.php?pilih=1.2&aksi=search" >
								<input type="text" name="src" placeholder="User Name" />&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    
    <td>&nbsp;&nbsp;</td>
  
  </tr>
</table>

   
  

<form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
             <th><a href="#">No</a></th>
             <th><a href="#">Full Name</a></th>
             <th><a href="#">Departement</a></th>
             <th><a href="#">Level</a></th>
             <th><a href="#">Status User</a></th>
             <th><a href="#">Role</a></th>
             <th colspan="3" align="center">&nbsp;</th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_user where full_name like '%".$kodesrc."%' and usr_stat = 'Aktif' and level <> 'Admin' order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_user where full_name like '%".$kodesrc."%' and usr_stat = 'Aktif' and level <> 'Admin' ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['full_name'];?></td>
            <td><?php echo $data['departement'];?></td>
             <td><?php echo $data['level'];?></td>
             <td><?php echo $data['usr_stat'];?></td>
             <td><?php echo $data['rol'];?></td>
            <td align="center">
	<?php
            if($data['rol']=='No'){
			?>
            
                <a class="btn btn-info btn-xs" href="index.php?pilih=1.2&aksi=setrol&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-list-alt"></i> Add Role</a>
              
    
	<?php
			}elseif($data['rol']=='Yes'){
	?>
   
   			<a class="btn btn-facebook btn-xs" href="index.php?pilih=1.2&aksi=setrol&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit Role</a>
   
   
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
							<a href="index.php?pilih=1.2&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>



<?php
	}elseif($aksi=='ubah'){
		
		$id= $_REQUEST['id'];
	
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:80%;">
   <h4 class="mb"><font color="#990000"><strong>Update User <?php echo $nama;?></strong></font></h4>
   <hr width="+1">
  
</div></div></div>
<?php
	}
?>

