<?php

	session_start();
	include "config/koneksi.php";
	$level=$_SESSION['level'];
	$aksi=$_GET['aksi'];
	$kopname = $_SESSION['kopname'];
	if(empty($_SESSION['kopname'])||empty($_SESSION['level'])){	
	
    		header("location:dashboard_sdi2.php");
	}else{

	$level = $_SESSION['level'];
		$aksi=$_GET['aksi'];
	$kopname = $_SESSION['kopname'];
	
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
   }
   .centered {
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}
	</style>

<!DOCTYPE html>

<head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MKM INspection</title>
  <!-- Tell the browser to be responsive to screen width -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body bgcolor="#990000">
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <ul class="navbar-nav nav-justified w-100">
      <li class="nav-item">
        <a href="dashboard_sdi2.php" class="nav-link">SDI Form</a>
      </li>
      <li class="nav-item">
        <a href="dashboard_pending2.php" class="nav-link">Pending Form</a>
      </li>
      <li class="nav-item">
        <a href="dashboard_rework2.php" class="nav-link">Rework Form</a>
      </li>
       <li class="nav-item">
        <a href="dashboard_ok2.php" class="nav-link">Engine.OK form</a>
      </li>
      <li class="nav-item">
        <a href="crul.php" class="nav-link">Log Out</a>
      </li>
    </ul>
  </nav>
  
<div class="container">
<?php
	if(empty($aksi)){
?>


</p>
   
   <table border="0">
  <tr>
    
    <td>STATUS ENGINE OK</td>
  </tr>
  <tr>
    
    <td><form method="post" action="dashboard_ok2.php?aksi=search" >
								<input type="text" name="src" placeholder="...."/>
</form></td>
  </tr>
</table>
<p> 
         
         
         <form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#009900">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No. Inspection</font></a></th>
              <th><a href="#"><font color="#FFFFFF">Date</font></a></th>
               <th><a href="#"><font color="#FFFFFF">No. Engine</font></a></th>
                <th><a href="#"><font color="#FFFFFF">Engine Model</font></a></th>
                <th><a href="#"><font color="#FFFFFF">Status</font></a></th>
             <th colspan="3"><a><font color="#FFFFFF">Action</font></a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 100;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM proses_inspection_header_log where inspection_status = 'ENGINE OK' order by inspection_date DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM proses_inspection_header_log where inspection_status = 'ENGINE OK' ORDER BY inspection_date DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
						
						$test = $data['form_code'];
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['inspection_number'];?></td>
            <td><?php echo $data['inspection_date'];?></td>
            <td><?php echo $data['inspection_engine_number'];?></td>
            <td><?php echo $data['inspection_engine_model'];?></td>
             <td><?php echo $data['inspection_status'];?></td>
             <td align="center">
        
	<a class="btn btn-success btn-xs" href="ct_5x.php?form_code=<?php echo $data['form_code'];?>&inspection_number=<?php echo $data['inspection_number'];?>&aksi=<?php echo "insert"; ?>&en=<?php echo $data['inspection_engine_number'];?>&em=<?php echo $data['inspection_engine_model'];?>&dt=<?php echo $data['inspection_date'];?>&area=<?php echo $data['inspection_area'];?>&kopname=<?php echo $kopname;?>&ecu=<?php echo $data['ip_number'];?>&supply_num=<?php echo $data['faktor_koreksi'];?>&it1=<?php echo $data['inspection_time'];?>"style="background-color:#009900"><i class="glyphicon glyphicon-edit"></i> </a>
  
			
      
      	
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
							<a href="dashboard_ok2.php?pilih=2.6&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</p>
         
<?php
	}elseif($aksi=='tambah'){
		
?>       
<div class="container">     

<p class="login-box-msg"><strong>Pilih Formulir dibawah ini untuk Pengecekan</strong></p>
<hr size="10px" style="background-color:#990000">
  <form action="gnrt_number.php" method="post" >
<table border="0" align="center">
  <tr>
    <td><strong>Type Form</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp; <input type="hidden" name="kopname" value = "<?php echo $kopname;?>"/>
    <select name="pilihanmenu">
  <?php
   //Membuat koneksi ke database akademik
   
	
   //Perintah sql untuk menampilkan semua data pada tabel jurusan
   $hasil=mysql_query("select * from master_type_form order by id ASC");
    $no=0;
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
    <option value="<?php echo $dtcombo['form_code'];?>"><?php echo "Formulir"." : ".$dtcombo['form_code'];?></option>
  <?php 
	}
  ?>
</select>    </td>
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
    <td colspan="3" align="center">&nbsp;
      <button class="btn btn-success">Create Form</button>  &nbsp;&nbsp;    <a class="btn btn-warning" href="dashboard.php">Back Front</a></td>
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
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</div>



 
 
 <?php
	}elseif($aksi=='create_form'){
	
?>      


test
 
 
 <?php
	}elseif($aksi=='search'){
	$src= $_REQUEST['src'];
	
?>        
    
     <table border="0">
  <tr>
    
    <td>STATUS ENGINE OK</td>
  </tr>
  <tr>
    
    <td><form method="post" action="dashboard_ok2.php?aksi=search" >
								<input type="text" name="src" placeholder="...."/>&nbsp;
</form></td>
  </tr>
</table>
<p> 
         
         
         <form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#009900">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No. Inspection</font></a></th>
              <th><a href="#"><font color="#FFFFFF">Date</font></a></th>
               <th><a href="#"><font color="#FFFFFF">No. Engine</font></a></th>
                <th><a href="#"><font color="#FFFFFF">Engine Model</font></a></th>
                <th><a href="#"><font color="#FFFFFF">Status</font></a></th>
             <th colspan="3"><a><font color="#FFFFFF">Action</font></a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 100;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM proses_inspection_header_log  where inspection_status = 'ENGINE OK' AND inspection_engine_number like '%$src%' order by inspection_date DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM proses_inspection_header_log where inspection_status = 'ENGINE OK' AND inspection_engine_number like '%$src%' ORDER BY inspection_date DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
						
						$test = $data['form_code'];
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['inspection_number'];?></td>
            <td><?php echo $data['inspection_date'];?></td>
            <td><?php echo $data['inspection_engine_number'];?></td>
            <td><?php echo $data['inspection_engine_model'];?></td>
             <td><?php echo $data['inspection_status'];?></td>
             <td align="center">
        
	<a class="btn btn-success btn-xs" href="ct_5x.php?form_code=<?php echo $data['form_code'];?>&inspection_number=<?php echo $data['inspection_number'];?>&aksi=<?php echo "insert"; ?>&en=<?php echo $data['inspection_engine_number'];?>&em=<?php echo $data['inspection_engine_model'];?>&dt=<?php echo $data['inspection_date'];?>&area=<?php echo $data['inspection_area'];?>&kopname=<?php echo $kopname;?>&supply_num=<?php echo $data['faktor_koreksi'];?>&it1=<?php echo $data['inspection_time'];?>"><i class="glyphicon glyphicon-edit"></i> </a>
  
			
      
      	
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
							<a href="dashboard_ok2.php?pilih=2.6&aksi=search&src=<?php echo $src; ?>&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</p>
    
  <?php
  }
 ?> 
       
   

    

  </div>

</body>
</html>
