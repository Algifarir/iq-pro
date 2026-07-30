<?php


	include "config/koneksi.php";
	$level=$_SESSION['level'];
	
	
	$form_code = $_REQUEST['form_code'];
	$inspection_number = $_REQUEST['inspection_number'];
	$aksi = $_REQUEST['aksi'];
	$en = $_REQUEST['en'];
	$em = $_REQUEST['em'];
	$area = $_REQUEST['area'];
	$dt = $_REQUEST['dt'];	
	$ip = $_REQUEST['ip'];
	$supply_num = $_REQUEST['supply_num'];

	if(!empty($_POST['kopname']))
		{    
    					//$idm = $_POST['idm'];
			$kopname = $_POST['kopname'];			//$engine_number = $_POST['engine_number'];
        
    // update user data
    					
    	}else{
		$kopname = $_REQUEST['kopname'];
		
		
		}



$queimage1=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='TM Sisi Atas & Belakang' Limit 1");
		while($datimg1=mysql_fetch_array($queimage1)){
			
			$url1 = $datimg1['nama_file'];
		}
		
	$queimage2=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='TM Sisi Kanan' Limit 1");
		while($datimg2=mysql_fetch_array($queimage2)){
			
			$url2 = $datimg2['nama_file'];
		}
		
		$queimage3=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='TM Sisi Kiri' Limit 1");
		while($datimg3=mysql_fetch_array($queimage3)){
			
			$url3 = $datimg3['nama_file'];
		}


		$queimage4=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='TM Sisi Depan' Limit 1");
		while($datimg4=mysql_fetch_array($queimage4)){
			
			$url4 = $datimg4['nama_file'];
		}
		
		$queimage5=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='Right Test' Limit 1");
		while($datimg5=mysql_fetch_array($queimage5)){
			
			$url5 = $datimg5['nama_file'];
		}
		
		$queimage6=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='Left Test' Limit 1");
		while($datimg6=mysql_fetch_array($queimage6)){
			
			$url6 = $datimg6['nama_file'];
		}
		
		$queimage7=mysql_query("select * from transmisi_master_image where form_code ='".$form_code."' AND group_tab='Top Test' Limit 1");
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
height:260px; 
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
    <td>&nbsp;</td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $inspection_number ?></strong></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><font color="#FFFFFF"><strong>Shop/Area&nbsp;</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $area ?></strong></font></td>
  </tr>
  <tr>
    <td><font color="#FFFFFF"><strong>TM Number&nbsp;</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $en ?></strong></font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><font color="#FFFFFF"><strong>Variant&nbsp;</strong></font></td>
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
    <td colspan="12"><a class="btn btn-warning" href="dashboard_tm_pdi.php">Back to Dashboard</a> &nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="tm_last_process.php?aksi=last&inspection_number=<?php echo $inspection_number ?>&kopname=<?php echo $kopname;?>&ip=<?php echo $ip;?>">Next Process</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="crul2.php">Log Out</a></td>
    </tr>
    
     <tr>
    <td colspan="12" align="center"><button type="button" id="running" name="running" value="<?php echo $inspection_number; ?>" onClick="run_cekedpdi(this.value);">&#10004</button><font color="#FFFFFF"><strong>&nbsp;Checked ALL PDI</strong></font></td>
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
<table>
  <tr>
    <td><font color="#000000"><strong>LEAK Inspection</strong></font></td>
  </tr>
</table>
</br>

 		<table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Pemeriksaan</font></a></th>
              <th><a href="#"><font color="#FFFFFF">Verifikasi Pemeriksaan</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK/NO</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Catatan</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail where inspection_number='$inspection_number' AND group_tab='Leak'");
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
            <td><?php echo $data['verifikasi'];?></td>
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>
            
            <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo $data['verifikasi'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>     
            <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo $data['verifikasi'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><?php echo $data['hasil_final_ok'];?></td>  
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
				url: 'tm_auto_save.php',	
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
		$('.view_dat').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
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
				url: 'tm_auto_running.php',	
				method: 'post',	
				data: {inspec:inspec},
				success:function(data){	
				
				 location.reload(true);
				}
			});
		 
			}
</script>
<script>
		function run_cekedpdi(ro)
			{
	
			var inspeci = ro;
			//var running=$("checkbox#running").val();
			// memulai ajax
			$.ajax({
				url: 'tm_auto_final2.php',	
				method: 'post',	
				data: {inspeci:inspeci},
				success:function(data){	
				
				 location.reload(true);
				}
			});
		 
			}
</script>
 <script>
		function edit_row(no)
			{
			
			var id = no;
		
			var hasil=$("input#hasilleak"+no).val();
			
			
			//alert(maxs);
			//alert(hasil2);
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
				url: 'tm_auto_pt.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>
</p>
<table>
  <tr>
    <td><font color="#000000"><strong>Motoring Inspection</strong></font></td>
  </tr>
</table>
</p>
<table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Pemeriksaan</font></a></th>
              <th><a href="#"><font color="#FFFFFF">Verifikasi Pemeriksaan</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK/NO</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Catatan</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail where inspection_number='$inspection_number' AND group_tab='Motoring'");
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
            <td><?php echo $data['verifikasi'];?></td>
            <td align="center"><?php echo $data['hasil_running_ok'];?></td>    
            
            <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		<tr bgcolor="#66CCFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo $data['verifikasi'];?></td>
            <td align="center"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>      
            <td><?php echo $data['hasil_final_ok'];?></td>
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo $data['verifikasi'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>  
            <td><?php echo $data['hasil_final_ok'];?></td>  
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
				url: '_tm_auto_save.php',	
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
				url: 'tm_auto_runno.php',	
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
		function edit_row2(no)
			{
			
			var id = no;
		
			var hasil=$("input#hasilmtr"+no).val();
			
			
			//alert(maxs);
			//alert(hasil2);
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
				url: 'tm_auto_pt.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

 </p>
 
 <table>
  <tr>
    <td><font color="#000000"><strong>Trouble Shooting</strong></font></td>
  </tr>
</table>
</p>
<table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Problem</font></a></th>
              <th><a href="#"><font color="#FFFFFF">Penyebab</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Tindakan</font></a></th>
            
       
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_problem where inspection_number='$inspection_number' AND form_code='$form_code'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							
						
?>

    	<tr bgcolor="#FFFFFF">
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $data['problem'];?></td>
            <td><?php echo $data['penyebab'];?></td>
            <td align="center"><?php echo $data['tindakan'];?></td>
          
        </tr>  


		<script>
		function edit_pa(no)
			{
			
			var id = no;
		
			var hasil=$("input#pa"+no).val();
			
			
			
		
			$.ajax({
				url: 'tm_auto_pa.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

<script>
		function edit_pb(no)
			{
			
			var id = no;
		
			var hasil=$("input#pb"+no).val();
			
			
			
			$.ajax({
				url: 'tm_auto_pb.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

<script>
		function edit_pc(no)
			{
			
			var id = no;
		
			var hasil=$("input#pc"+no).val();
			
			
			
			$.ajax({
				url: 'tm_auto_pc.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

<script>
		function edit_pd(no)
			{
			
			var id = no;
		
			var hasil=$("input#pd"+no).val();
			
			
			
			$.ajax({
				url: 'tm_auto_pd.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

<script>
		function edit_pe(no)
			{
			
			var id = no;
		
			var hasil=$("input#pd"+no).val();
			
			
			
			$.ajax({
				url: 'tm_auto_pe.php',	
				method: 'post',+
				
				
				
				
				
				
								data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>

<?php
	$no++; } //tutup while
?>
</tbody>

    
</table>
   </p>

    <table border="1" width="710">
    <thead>
		<tr bgcolor="#990000">
			 <th><a href="#"><font color="#FFFFFF">TM Sisi Atas & Belakang</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil">
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url1; ?>" width="300" height="550"></td>
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='top'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center"	bgcolor="#FFFFFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFFFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td bgcolor="#FFFFFF" align="center"><?php echo $data['hasil_running_ok'];?></td>
            <td><button type="button" class="view_datas2 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat2 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		
			<td align="center" bgcolor="#66CCFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#66CCFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#66CCFF"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas2 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat2 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		
			<td align="center" bgcolor="#FFFF99"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFF99"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
           <td align="center" bgcolor="#FFFF99"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><button type="button" class="view_datas2 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat2 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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
		$('.view_datas2').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
					history.go(0);
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_dat2').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
					 history.go(0);
				}
			});
		});
	});
	</script> 
</table>    
    </p>
    <table border="1" width="710">
    <thead>
		<tr bgcolor="#990000">
			<th align="center"><a href="#"><font color="#FFFFFF">TM Sisi Kanan</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody id="tampil">
	
	<tr>
	<td rowspan="15" valign="top"><img src="upload/<?php echo $url2; ?>" width="300" height="550"></td>
	
	<?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Right'");
						$no = $mulai+1;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center" bgcolor="#FFFFFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFFFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#FFFFFF"><?php echo $data['hasil_running_ok'];?></td>
            <td><button type="button" class="view_datas3 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat3 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>


			<td align="center" bgcolor="#66CCFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#66CCFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#66CCFF"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas3 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat3 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>


			<td align="center" bgcolor="#FFFF99"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFF99"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
           <td align="center" bgcolor="#FFFF99"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><button type="button" class="view_datas3 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat3 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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
		$('.view_datas3').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				history.go(0);
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_dat3').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
					 history.go(0);
				}
			});
		});
	});
	</script> 
</table>
    </p>
     <table border="1" width="710">
    <thead>
		<tr bgcolor="#990000">
			 <th><a href="#"><font color="#FFFFFF">TM Sisi Kiri</font></a></th>
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
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Left'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center"	bgcolor="#FFFFFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFFFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#FFFFFF"><?php echo $data['hasil_running_ok'];?></td>
            <td><button type="button" class="view_datas4 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_da4t btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		
			<td align="center" bgcolor="#66CCFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#66CCFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#66CCFF"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas4 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat4 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

		
			<td align="center" bgcolor="#FFFF99"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFF99"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
           <td align="center" bgcolor="#FFFF99"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><button type="button" class="view_datas4 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat4 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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
		$('.view_datas4').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				history.go(0);
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_dat4').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				history.go(0);
				}
			});
		});
	});
	</script> 
</table>    
</p>
<table border="1" width="710">
    <thead>
		<tr bgcolor="#990000">
			<th><a href="#"><font color="#FFFFFF">TM Sisi Depan</font></a></th>
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
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Front'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							$cek_udt_sts= $data['update_item'];
						
?>
<?php
		if($cek_udt_sts==1){
?>
    	
			<td align="center" bgcolor="#FFFFFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFFFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center" bgcolor="#FFFFFF"><?php echo $data['hasil_running_ok'];?></td>
            <td><button type="button" class="view_datas5 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat5 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            </td>
        </tr>  
<?php
		}elseif($cek_udt_sts==2){
?>

		
			<td align="center"  bgcolor="#66CCFF"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td  bgcolor="#66CCFF"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
            <td align="center"  bgcolor="#66CCFF"><strong><font color="#009900" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></td>
            <td><button type="button" class="view_datas5 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat5 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
        </tr>  
        
 <?php
		}elseif($cek_udt_sts==3){
?>

	
			<td align="center" bgcolor="#FFFF99"><font color="#000000" size="+1"><?php echo $no;?></font></td>
            <td bgcolor="#FFFF99"><font size="-2"><?php echo $lagi=$data['description'];?></font></td>
           <td align="center" bgcolor="#FFFF99"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></td>
            <td><button type="button" class="view_datas5 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_dat5 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>        
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
		$('.view_datas5').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				history.go(0);
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_dat5').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					 location.reload(true);
				history.go(0);
				}
			});
		});
	});
	</script> 
</table>    

    </div>
    <div id="footer">
    <a href="" class="title">MKM Copyright</a>
    </div>
</div>
</body>
</html>