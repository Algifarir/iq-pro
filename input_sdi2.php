<?php


	include "config/koneksi.php";
	$level=$_SESSION['level'];
	
	$kopname = $_REQUEST['kopname'];
	$form_code = $_REQUEST['form_code'];
	$inspection_number = $_REQUEST['inspection_number'];
	$aksi = $_REQUEST['aksi'];
	$en = $_REQUEST['en'];
	$em = $_REQUEST['em'];
	$area = $_REQUEST['area'];
	$dt = $_REQUEST['dt'];	
	$ip = $_REQUEST['ip'];
	$supply_num = $_REQUEST['supply_num'];
	$it1 = $_REQUEST['it1'];

	if(isset($_POST['update']))
		{    
    					$idm = $_POST['idm'];
						$engine_number = $_POST['engine_number'];
        
    // update user data
    					echo "<script type='text/javascript'>alert('".$engine_number."');</script>";
    

		}

	$queimage1=mysql_query("select * from master_image where form_code ='".$form_code."' AND group_tab='First Inspection' Limit 1");
		while($datimg1=mysql_fetch_array($queimage1)){
			
			$url1 = $datimg1['nama_file'];
		}
		
	$queimage2=mysql_query("select * from master_image where form_code ='".$form_code."' AND group_tab='Performance Test' Limit 1");
		while($datimg2=mysql_fetch_array($queimage2)){
			
			$url2 = $datimg2['nama_file'];
		}
		
		$queimage3=mysql_query("select * from master_image where form_code ='".$form_code."' AND group_tab='Front Test' Limit 1");
		while($datimg3=mysql_fetch_array($queimage3)){
			
			$url3 = $datimg3['nama_file'];
		}


		$queimage4=mysql_query("select * from master_image where form_code ='".$form_code."' AND group_tab='Back Test' Limit 1");
		while($datimg4=mysql_fetch_array($queimage4)){
			
			$url4 = $datimg4['nama_file'];
		}
		
		$queimage5=mysql_query("select * from master_image where form_code ='".$form_code."' AND group_tab='Right Test' Limit 1");
		while($datimg5=mysql_fetch_array($queimage5)){
			
			$url5 = $datimg5['nama_file'];
		}
		
		$queimage6=mysql_query("select * from master_image where form_code ='".$form_code."' AND group_tab='Left Test' Limit 1");
		while($datimg6=mysql_fetch_array($queimage6)){
			
			$url6 = $datimg6['nama_file'];
		}
		
		$queimage7=mysql_query("select * from master_image where form_code ='".$form_code."' AND group_tab='Top Test' Limit 1");
		while($datimg7=mysql_fetch_array($queimage7)){
			
			$url7 = $datimg7['nama_file'];
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
height:220px; 
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

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content2 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close2 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close2:hover,
.close2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal3 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content3 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close3 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close3:hover,
.close3:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal4 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content4 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close4 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close4:hover,
.close4:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal5 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content5 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close5 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close5:hover,
.close5:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal6 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content6 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close6 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close6:hover,
.close6:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal7 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content7 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close7 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close7:hover,
.close7:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<html>
<head>
<title>MKM Inspection</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.min.js"></script>
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
    <td><font color="#FFFFFF"><strong>Operator</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $kopname ?></strong></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><font color="#FFFFFF"><strong>No.ECU</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $ip ?></strong></font></td>
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
    <td><font color="#FFFFFF"><strong>No. Supply Pump</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $supply_num  ?></strong></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="18"><a class="btn btn-warning" href="dashboard_sdi2.php">Back to Dashboard</a> &nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="last_process2.php?aksi=last&inspection_number=<?php echo $inspection_number ?>&kopname=<?php echo $kopname;?>">Next Process</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="crul.php">Log Out</a></td>
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
    <td colspan="18" align="center"><button type="button" id="runningno" name="runningno" value="<?php echo $inspection_number; ?>" onClick="run_cekedfinal(this.value)">&#10004</button> <font color="#FFFFFF"><strong>Checked ALL Final Test</strong></font></td>
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
    <td colspan="12">&nbsp;</td>
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
               
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
               
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            
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
		if($cek_omath=="Hasil PS" || $cek_omath=="Hasil PS 100"){
?>

  <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly" style="background-color:#CCCCCC"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>


<?php
}else{
?>
         
           <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly" style="background-color:#CCCCCC"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
         
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
		if($cek_omath=="Hasil PS" || $cek_omath=="Hasil PS 100"){
?>
 <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly" style="background-color:#CCCCCC"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>

<?php
}else{
?>
        <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly" style="background-color:#CCCCCC"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
       
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
		if($cek_omath=="Hasil PS" || $cek_omath=="Hasil PS 100"){
?>
 <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly" style="background-color:#CCCCCC"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
<?php
}else{
?>
 <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly" style="background-color:#CCCCCC"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/><input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/></td>
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

	<?php

//$date=date_create(now);
//$date1 = date_format($date,"Y-m-d H:i:s");

if($it1=="1"){
//=============right time
?>

 <table border="1">
    <thead>
		<tr bgcolor="#990000">
			 <th><a href="#"><font color="#FFFFFF">Pengechekan E/G Sisi Kiri</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil">
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url6; ?>" width="300" height="550"></td>
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Left'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center"	bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
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


<?php
}else{
?>
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
<?php
}
?>
</p>
<?php

//$date=date_create(now);
//$date1 = date_format($date,"Y-m-d H:i:s");

if($it1=="1"){
//=============right time
?>


<table border="1">
    <thead>
		<tr bgcolor="#990000">
			<th align="center"><a href="#"><font color="#FFFFFF">Pengechekan E/G Sisi Kanan</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil">
	
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url5; ?>" width="300" height="550"></td>
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Right'");
						$no = $mulai+1;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>


			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>


			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
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


<?php

}else{

?>
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
						$no = $mulai+1;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	<tr bgcolor="#FFFFFF">
			<td align="center"><?php echo $no;?></td>
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

<?php

}

?>


    </p>
	
<?php
if($it1=="1"){
//=============right time
?>

<table border="1">
    <thead>
		<tr bgcolor="#990000">
			<th><a href="#"><font color="#FFFFFF">Pengecheckan E/G Sisi Depan</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil">
	
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url3; ?>" width="300" height="550"></td>
	
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Front'");
						$no = 15+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

	
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
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

<?php

}else{
?>
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

<?php

}
?>
</p>
<?php
if($it1=="1"){
//=============right time
?>

	<table border="1">
    <thead>
		<tr bgcolor="#990000">
			<th><a href="#"><font color="#FFFFFF">Pengecheckan E/G Sisi Belakang</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil">
	
	
	
	
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url4; ?>" width="300" height="550"></td>
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Back'");
						$no = 20+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
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

<?php
}else{
?>
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

<?php
}
?>   
    </p>
<?php
if($it1=="1"){
//=============right time
?>

<table border="1">
    <thead>
		<tr bgcolor="#990000">
			<th><a href="#"><font color="#FFFFFF">Pengecheckan E/G Sisi Atas</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil">
	
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url7; ?>" width="300" height="550"></td>
	
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Top'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		
			<td align="center" bgcolor="#FF3399"><font color="#FFFF00" size="+1"><?php echo $no;?></font></td>
            <td><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
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



<?php
}else{
?>
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

 <?php
  
  }
 
 ?>
    
    
    </div>
    <div id="footer">
    <a href="" class="title">MKM Copyright</a>
    </div>
</div>
</body>
</html>