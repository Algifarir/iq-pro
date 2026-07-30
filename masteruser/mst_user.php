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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Master User</strong></font><span style="float:right;"></span></h4></td>
    
   
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td><form method="post" action="index.php?pilih=1.1&aksi=search" >
								<input type="text" name="src" />&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    
    <td><a href="index.php?pilih=1.1&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add User</a> </td>
  
  </tr>
</table>

   
  

<form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
             <th><a href="#">No</a></th>
             <th><a href="#">Full Name</a></th>
             <th><a href="#">Departement</a></th>
			 <th><a href="#">Email</a></th>
             <th><a href="#">Level</a></th>
             <th><a href="#">Status User</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_user order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_user ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['full_name'];?></td>
            <td><?php echo $data['departement'];?></td>
			 <td><?php echo $data['email'];?></td>
             <td><?php echo $data['level'];?></td>
             <td><?php echo $data['usr_stat'];?></td>
            <td align="center">
	<a class="btn btn-success btn-xs" href="index.php?pilih=1.1&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
  <script type="text/javascript">
    function hapus(){
    var msg = confirm("Apakah Anda yakin ?");
    if(msg==true){
    window.location="masteruser/proses_user.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>";  
    }
    else{
    
    }
  }
    </script>
    <a class="btn btn-danger btn-xs" href="masteruser/proses_user.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
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
							<a href="index.php?pilih=1.1&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>

<?php
	}elseif($aksi=='tambah'){
?>

<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:50%;">
   <h4><font color="#990000"><strong>Master User</strong></font></h4>
   <hr width="+1">
<form action="masteruser/proses_user.php?pros=tambah" method="post" enctype="multipart/form-data" >
<table>
    	<tr>
        	<td><font color="#000000">Full Name</font></td><td>:</td><td>&nbsp;<input type="text" id="nama" name="nama" size="25" autocomplete="off" required/><input type="hidden" name="kopname" value="<?php echo $kopname ?>"></td>
        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        	<td><input type="File" name="uploaded_file" required/></td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>Upload Foto</td>
        </tr>
        <tr>
        	<td><font color="#000000">Departement</font></td><td>:</td><td>&nbsp;<input type="text" name="dept" size="25" autocomplete="off" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td><font color="#000000">Email</font></td><td>:</td><td>&nbsp;<input type="email" id="email" name="email" size="25" autocomplete="off" placeholder="Enter your email" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td><font color="#000000">Username</font></td><td>:</td><td>&nbsp;<input type="text" name="username" size="25" autocomplete="off" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td><font color="#000000">Password</font></td><td>:</td><td>&nbsp;<input type="password" name="password" size="25" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
          <tr>
        	<td><font color="#000000">Level</font></td><td>:</td><td>&nbsp;<select name="level">
<option value="Admin">Admin</option>
<option value="Departement">Departement</option>
<option value="Operator">Operator</option>
<option value="Operator SDI">Operator SDI</option>
<option value="Operator TM Assy">Operator TM Assy</option>
<option value="PDI TM Assy">PDI TM Assy</option>
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
        	<td></td><td></td><td><button class="btn btn-success">Register</button>&nbsp;<a class="btn btn-danger" href="index.php?pilih=1.1">Back Front</a></td>
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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Master User</strong></font><span style="float:right;"></span></h4></td>
    
   
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td><form method="post" action="index.php?pilih=1.1&aksi=search" >
								<input type="text" name="src" />&nbsp;<input type="submit" value="Search" />
</form></td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    
    <td><a href="index.php?pilih=1.1&aksi=tambah" class="btn btn-primary"><span class='glyphicon glyphicon-plus'></span> Add User</a> </td>
  
  </tr>
</table>

   
  

<form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
             <th><a href="#">No</a></th>
             <th><a href="#">Full Name</a></th>
             <th><a href="#">Departement</a></th>
			 <th><a href="#">Email</a></th>
             <th><a href="#">Level</a></th>
             <th><a href="#">Status User</a></th>
             <th colspan="3"><a>Action</a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 10;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM master_user where full_name like '%".$kodesrc."%' order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM master_user where full_name like '%".$kodesrc."%' ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['full_name'];?></td>
            <td><?php echo $data['departement'];?></td>
			 <td><?php echo $data['email'];?></td>
             <td><?php echo $data['level'];?></td>
             <td><?php echo $data['usr_stat'];?></td>
            <td align="center">
	<a class="btn btn-success btn-xs" href="index.php?pilih=1.1&aksi=ubah&id=<?php echo $data['id'];?>"><i class="glyphicon glyphicon-edit"></i> Edit</a>
  <script type="text/javascript">
    function hapus(){
    var msg = confirm("Apakah Anda yakin ?");
    if(msg==true){
    window.location="masteruser/proses_user.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>";  
    }
    else{
    
    }
  }
    </script>
    <a class="btn btn-danger btn-xs" href="masteruser/proses_user.php?pros=Delone&id=<?php echo $data['id'];?>&deluxe=<?php echo $data['full_name'];?>&delkopname=<?php echo $kopname;?>"><i class="glyphicon glyphicon-trash"></i> Delete</a>
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
							<a href="index.php?pilih=1.1&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</div>
</div></div>



<?php
	}elseif($aksi=='ubah'){
		
		$id= $_REQUEST['id'];
		$querys=mysql_query("select * from master_user where id ='".$id."'");
		while($data2=mysql_fetch_array($querys)){
			
			$nama = $data2['full_name'];
			$dept = $data2['departement'];
			$email = $data2['email'];
			$username = $data2['username'];
			$p = $data2['password'];
			$level = $data2['level'];
			$url = $data2['url'];
			$nama_file = $data2['nama_file'];
			$usr_stat = $data2['usr_stat'];
			$log_status = $data2['log_status'];
		}

	
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel" style="width:80%;">
   <h4 class="mb"><font color="#990000"><strong>Update User <?php echo $nama;?></strong></font></h4>
   <hr width="+1">
   <form action="masteruser/proses_user.php?pros=edit" method="post" enctype="multipart/form-data" >
<table width="800">
    	<tr>
        	<td><font color="#000000">Full Name</font></td><td>:</td><td>&nbsp;<input type="text" id="nama" name="nama" size="25" value="<?php echo "$nama"?>" required/><input type="hidden" name="id" value="<?php echo $id ?>"><input type="hidden" name="kopname" value="<?php echo $kopname ?>"></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td rowspan="3"><img src="upload/<?php echo $nama_file; ?>" width="75" height="75">
			
			
			</td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
       	  </tr>
        <tr>
        	<td><font color="#000000">Departement</font></td><td>:</td><td>&nbsp;<input type="text" name="dept" size="25" value="<?php echo "$dept";?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
       	  </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td><font color="#000000">Email</font></td><td>:</td><td>&nbsp;<input type="email" id="email" name="email" size="25" value="<?php echo "$email";?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td><input type="File" name="uploaded_file" /></td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td><input type="checkbox" id="chf" name="chf">&nbsp;<label for="chfs">Ganti Foto</label></td>
         </tr>
        <tr>
        	<td><font color="#000000">Username</font></td><td>:</td><td>&nbsp;<input type="text" name="username" size="25" value="<?php echo "$username";?>" required/></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
         <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td><font color="#000000">Change Password</font></td><td>:</td><td>&nbsp;<input type="password" name="password" size="25" value ="<?php echo $p;?>" required/>&nbsp;<input type="checkbox" id="pwd" name="pwd">&nbsp;<label for="chfs">Chekit if Change Password</label></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
          <tr>
        	<td><font color="#000000">Level</font></td><td>:</td><td>&nbsp;<select name="level">
 <option value="<?php echo "$level";?>"><?php echo "$level";?></option>
<option value="Admin">Admin</option>
<option value="Departement">Departement</option>
<option value="Operator">Operator</option>
<option value="Operator SDI">Operator SDI</option>
</select></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
          <tr>
        	<td><font color="#000000">Status User</font></td><td>:</td><td>&nbsp;<select name="stat_user">
 <option value="<?php echo "$usr_stat";?>"><?php echo "$usr_stat";?></option>
<option value="Aktif">Aktif</option>
<option value="Tidak Aktif">Tidak Aktif</option>
</select></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
          <tr>
        	<td><font color="#000000">Login Aplikasi</font></td><td>:</td><td>&nbsp;<select name="log_status">

<option value="in">in</option>
<option value="out">out</option>
</select></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
         </tr>
        <tr>
        	<td></td><td></td><td><button class="btn btn-success">Update</button>&nbsp;<a class="btn btn-danger" href="index.php?pilih=1.1">Back Front</a></td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
    </table>


</form>
</div></div></div>
<?php
	}
?>

