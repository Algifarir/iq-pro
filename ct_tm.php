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
height:210px; 
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
    <td colspan="12"><a class="btn btn-warning" href="dashboard_tm.php">Back to Dashboard</a> &nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="tm_last_process.php?aksi=last&inspection_number=<?php echo $inspection_number ?>&kopname=<?php echo $kopname;?>&ip=<?php echo $ip;?>">Next Process</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="crul2.php">Log Out</a></td>
    </tr>
    
     <tr>
    <td colspan="12" align="center"><button type="button" id="running" name="running" value="<?php echo $inspection_number; ?>" onClick="run_ceked(this.value);">&#10004</button><font color="#FFFFFF"><strong>&nbsp;Checked ALL Leak</strong></font>&nbsp;&nbsp;<button type="button" id="runningb" name="runningb" value="<?php echo $inspection_number; ?>" onClick="run_cekedb(this.value);"><i class="fa fa-arrow-circle-o-left">@</i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="runningno" name="runningno" value="<?php echo $inspection_number; ?>" onClick="run_cekedfinal(this.value)">&#10004</button> <font color="#FFFFFF"><strong>Checked ALL Motoring</strong></font>&nbsp;&nbsp;<button type="button" id="runningb2" name="runningb2" value="<?php echo $inspection_number; ?>" onClick="run_cekedfinalb(this.value);"><i class="fa fa-arrow-circle-o-left">@</i></button></td>
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
</table>
</br>
<?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_proses_inspection_detail where inspection_number='$inspection_number' AND group_tab='Leak'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query))
						{
							$cek_udt_sts= $data['update_item'];
							$verifikasi= $data['verifikasi'];
							
							if($verifikasi=="Kebocoran U/Gear Shift")
							
							{
								$tm1=$data['description'];
								$verifikasi1= $data['verifikasi'];
								$runningok = $data['hasil_running_ok'];
								$hasil_final_ok = $data['hasil_final_ok'];
								$id1 = $data['id'];
								$cek_udt_sts1= $data['update_item'];
								
							}elseif($verifikasi=="Kebocoran Plate Poppet"){
								
								$tm12=$data['description'];
								$verifikasi2= $data['verifikasi'];
								$runningok2 = $data['hasil_running_ok'];
								$hasil_final_ok2 = $data['hasil_final_ok'];
								$id2 = $data['id'];
								$cek_udt_sts2= $data['update_item'];
								
							}elseif($verifikasi=="Kebocoran Front Retainer"){
								
								$tm123=$data['description'];
								$verifikasi23= $data['verifikasi'];
								$runningok23 = $data['hasil_running_ok'];
								$hasil_final_ok23 = $data['hasil_final_ok'];
								$id23 = $data['id'];
								$cek_udt_sts3= $data['update_item'];
								
							}elseif($verifikasi=="Kebocoran Rear Cover"){
								
								$tm1234=$data['description'];
								$verifikasi234= $data['verifikasi'];
								$runningok234 = $data['hasil_running_ok'];
								$hasil_final_ok234 = $data['hasil_final_ok'];
								$id234 = $data['id'];
								$cek_udt_sts4= $data['update_item'];
								
							}elseif($verifikasi=="Ada Marking White Paintel"){
								
								$tm12345=$data['description'];
								$verifikasi2345= $data['verifikasi'];
								$runningok2345 = $data['hasil_running_ok'];
								$hasil_final_ok2345 = $data['hasil_final_ok'];
								$id2345 = $data['id'];
								$cek_udt_sts5= $data['update_item'];
								
							}else{
								
								$tm123456=$data['description'];
								$verifikasi23456= $data['verifikasi'];
								$runningok23456 = $data['hasil_running_ok'];
								$hasil_final_ok23456 = $data['hasil_final_ok'];
								$id23456 = $data['id'];
								$cek_udt_sts6= $data['update_item'];
								
							}
							
						}
						
?>
<table>
  <tr>
    <td><font color="#000000"><strong>LEAK Inspection</strong></font></td>
  </tr>
</table>
</br>

<table border="1" id="taba1">
  <tr bgcolor="#990000">
    <td><strong><font color="#FFFFFF">No</font></strong></td>
    <td><strong><font color="#FFFFFF">Item Pemeriksaan</font></strong></td>
    <td><strong><font color="#FFFFFF">Verifikasi</font></strong></td>
    <td><strong><font color="#FFFFFF">Hasil</font></strong></td>
    <td><strong><font color="#FFFFFF">OK</font></strong></td>
    <td><strong><font color="#FFFFFF">NO</font></strong></td>
    <td><strong><font color="#FFFFFF">Catatan</font></strong></td>
  </tr>
    <?php
		if($cek_udt_sts1==1){
?>

<tr>
    <td bgcolor="#FFFFFF">1</td>
    <td bgcolor="#FFFFFF"><?php echo $tm1 ?></td>
    <td bgcolor="#FFFFFF"><?php echo $verifikasi1 ?></td>
    <td bgcolor="#FFFFFF"><?php echo $runningok ?></td>
    <td bgcolor="#FFFFFF"><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id1?>">OK</button></td>
    <td bgcolor="#FFFFFF"><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id1 ?>">NO</button></td>
    <td rowspan="4" bgcolor="#FFFFFF"><input type='text'  id='hasilleak<?php echo $id1;?>' name='hasilleak<?php echo $id1;?>' value='<?php echo $hasil_final_ok ;?>' onfocusout="edit_row(<?php echo $id1;?>)" style="width:60;height:250"  /></td>
  </tr>

  <?php
		}if($cek_udt_sts1==2){
?>
<tr bgcolor="#66CCFF">
    <td>1</td>
    <td><?php echo $tm1 ?></td>
    <td><?php echo $verifikasi1 ?></td>
    <td><?php echo $runningok ?></td>
    <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id1?>">OK</button></td>
    <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id1 ?>">NO</button></td>
    <td rowspan="4"><input type='text'  id='hasilleak<?php echo $id1;?>' name='hasilleak<?php echo $id1;?>' value='<?php echo $hasil_final_ok ;?>' onfocusout="edit_row(<?php echo $id1;?>)" style="width:60;height:250"  /></td>
  </tr>
  <?php
		}if($cek_udt_sts1==3){
?>

<tr bgcolor="#FFFF99">
    <td>1</td>
    <td><?php echo $tm1 ?></td>
    <td><?php echo $verifikasi1 ?></td>
    <td><?php echo $runningok ?></td>
    <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id1?>">OK</button></td>
    <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id1 ?>">NO</button></td>
    <td rowspan="4"><input type='text'  id='hasilleak<?php echo $id1;?>' name='hasilleak<?php echo $id1;?>' value='<?php echo $hasil_final_ok ;?>' onfocusout="edit_row(<?php echo $id1;?>)" style="width:60;height:250"  /></td>
  </tr>
<?php
		}
		
?>	

 <?php
		if($cek_udt_sts2==1){
?>	

<tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><?php echo $tm12 ?></td>
    <td bgcolor="#FFFFFF"><?php echo $verifikasi2 ?></td>
    <td bgcolor="#FFFFFF"><?php echo $runningok2 ?></td>
    <td bgcolor="#FFFFFF"><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id2?>">OK</button></td>
    <td bgcolor="#FFFFFF"><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id2 ?>">NO</button></td>
    </tr>

<?php
		}if($cek_udt_sts2==2){
?>
<tr bgcolor="#66CCFF">
    <td>&nbsp;</td>
    <td><?php echo $tm12 ?></td>
    <td><?php echo $verifikasi2 ?></td>
    <td><?php echo $runningok2 ?></td>
    <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id2?>">OK</button></td>
    <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id2 ?>">NO</button></td>
    </tr>

<?php
		}if($cek_udt_sts2==3){
?>

 <tr bgcolor="#FFFF99">
    <td>&nbsp;</td>
    <td><?php echo $tm12 ?></td>
    <td><?php echo $verifikasi2 ?></td>
    <td><?php echo $runningok2 ?></td>
    <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id2?>">OK</button></td>
    <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id2 ?>">NO</button></td>
    </tr>

<?php
		}
?>

<?php
		if($cek_udt_sts3==1){
?>	
 <tr bgcolor="#FFFFFF">
    <td >&nbsp;</td>
    <td><?php echo $tm123 ?></td>
    <td><?php echo $verifikasi23 ?></td>
    <td><?php echo $runningok23 ?></td>
    <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id23?>">OK</button></td>
    <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id23 ?>">NO</button></td>
    </tr>

<?php
		}if($cek_udt_sts3==2){
?>	
<tr bgcolor="#66CCFF">
    <td >&nbsp;</td>
    <td><?php echo $tm123 ?></td>
    <td><?php echo $verifikasi23 ?></td>
    <td><?php echo $runningok23 ?></td>
    <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id23?>">OK</button></td>
    <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id23 ?>">NO</button></td>
    </tr>
<?php
		}if($cek_udt_sts3==3){
?>	
 <tr bgcolor="#FFFF99">
    <td >&nbsp;</td>
    <td><?php echo $tm123 ?></td>
    <td><?php echo $verifikasi23 ?></td>
    <td><?php echo $runningok23 ?></td>
    <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id23?>">OK</button></td>
    <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id23 ?>">NO</button></td>
    </tr>
<?php

		}
?>

 <?php
		if($cek_udt_sts4==1){
?>	
 <tr>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF"><?php echo $verifikasi234 ?></td>
    <td bgcolor="#FFFFFF"><?php echo $runningok234 ?></td>
    <td bgcolor="#FFFFFF"><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id234?>">OK</button></td>
    <td bgcolor="#FFFFFF"><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id234 ?>">NO</button></td>
    </tr>
 <?php
		}if($cek_udt_sts4==2){
?>	

 <tr bgcolor="#66CCFF">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $verifikasi234 ?></td>
    <td><?php echo $runningok234 ?></td>
    <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id234?>">OK</button></td>
    <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id234 ?>">NO</button></td>
    </tr>
 <?php
		}if($cek_udt_sts4==3){
?>	
 <tr bgcolor="#FFFF99">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $verifikasi234 ?></td>
    <td><?php echo $runningok234 ?></td>
    <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id234?>">OK</button></td>
    <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id234 ?>">NO</button></td>
    </tr>

<?php
		}
?>


 <?php
		if($cek_udt_sts6==1){
?>	
 
   <tr>
     <td bgcolor="#FFFFFF">2</td>
     <td bgcolor="#FFFFFF"><?php echo $tm123456 ?></td>
     <td bgcolor="#FFFFFF"><?php echo $verifikasi23456 ?></td>
     <td bgcolor="#FFFFFF"><?php echo $runningok23456 ?></td>
     <td bgcolor="#FFFFFF"><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id23456?>">OK</button></td>
     <td bgcolor="#FFFFFF"><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id23456 ?>">NO</button></td>
     <td bgcolor="#FFFFFF"><input type='text'  id='hasilleak<?php echo $id23456;?>' name='hasilleak<?php echo $id23456;?>' value='<?php echo $hasil_final_ok23456?>' onfocusout="edit_row(<?php echo $id23456;?>)" style="width:60;height:48"  /></td>
   </tr>
   
 <?php
		}if($cek_udt_sts6==2){
?>	
 <tr bgcolor="#66CCFF">
     <td>2</td>
     <td><?php echo $tm123456 ?></td>
     <td><?php echo $verifikasi23456 ?></td>
     <td><?php echo $runningok23456 ?></td>
     <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id23456?>">OK</button></td>
     <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id23456 ?>">NO</button></td>
     <td><input type='text'  id='hasilleak<?php echo $id23456;?>' name='hasilleak<?php echo $id23456?>' value='<?php echo $hasil_final_ok23456?>' onfocusout="edit_row(<?php echo $id23456?>)" style="width:60;height:48"  /></td>
   </tr>

 <?php
		}if($cek_udt_sts6==3){
?>	
 <tr bgcolor="#FFFF99">
     <td>2</td>
     <td><?php echo $tm123456 ?></td>
     <td><?php echo $verifikasi23456 ?></td>
     <td><?php echo $runningok23456 ?></td>
     <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id23456?>">OK</button></td>
     <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id23456 ?>">NO</button></td>
     <td><input type='text'  id='hasilleak<?php echo $id23456;?>' name='hasilleak<?php echo $id23456;?>' value='<?php echo $hasil_final_ok23456?>' onfocusout="edit_row(<?php echo $id23456;?>)" style="width:60;height:48"  /></td>
   </tr>

<?php
		}
?>

<?php
		if($cek_udt_sts5==1){
?>	
<tr>
     <td bgcolor="#FFFFFF">3</td>
     <td bgcolor="#FFFFFF"><?php echo $tm12345 ?></td>
     <td bgcolor="#FFFFFF"><?php echo $verifikasi2345 ?></td>
     <td bgcolor="#FFFFFF"><?php echo $runningok2345 ?></td>
     <td bgcolor="#FFFFFF"><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id2345?>">OK</button></td>
     <td bgcolor="#FFFFFF"><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id2345 ?>">NO</button></td>
     <td bgcolor="#FFFFFF"><input type='text'  id='hasilleak<?php echo $id2345;?>' name='hasilleak<?php echo $id2345;?>' value='<?php echo $hasil_final_ok2345;?>' onfocusout="edit_row(<?php echo $id2345;?>)" style="width:60;height:48"  /></td>
   </tr>

<?php
		}if($cek_udt_sts5==2){
?>	
 <tr bgcolor="#66CCFF">
     <td>3</td>
     <td><?php echo $tm12345 ?></td>
     <td><?php echo $verifikasi2345 ?></td>
     <td><?php echo $runningok2345 ?></td>
     <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id2345?>">OK</button></td>
     <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id2345 ?>">NO</button></td>
     <td><input type='text'  id='hasilleak<?php echo $id2345;?>' name='hasilleak<?php echo $id2345;?>' value='<?php echo $hasil_final_ok2345;?>' onfocusout="edit_row(<?php echo $id2345;?>)" style="width:60;height:48"  /></td>
   </tr>

<?php
		}if($cek_udt_sts5==3){
?>	

<tr bgcolor="#FFFF99">
     <td>3</td>
     <td><?php echo $tm12345 ?></td>
     <td><?php echo $verifikasi2345 ?></td>
     <td><?php echo $runningok2345 ?></td>
     <td><button type="button" class="view_datas btn btn-success btn-xs"  id="<?php echo $id2345?>">OK</button></td>
     <td><button type="button" class="view_dat btn btn-danger btn-xs"  id="<?php echo $id2345 ?>">NO</button></td>
     <td><input type='text'  id='hasilleak<?php echo $id2345;?>' name='hasilleak<?php echo $id2345;?>' value='<?php echo $hasil_final_ok2345;?>' onfocusout="edit_row(<?php echo $id2345;?>)" style="width:60;height:48"  /></td>
   </tr>

<?php

		}
?>
</table>



 		
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
					// window.location.reload(true);
					history.go(0);
				//	window.location.href=window.location.href;
				}
			});
		});
	});
	</script> 
    
    <script>
	$(document).ready(function(){
		$('.view_datas').click(function(){
			var id1 = $(this).attr("id1");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id1:id1},
				success:function(data){	
				location.reload(true);
					 //window.location.reload(true);
					history.go(0);
				//	window.location.href=window.location.href;
				}
			});
		});
	});
	</script> 
     <script>
	$(document).ready(function(){
		$('.view_datas').click(function(){
			var id23 = $(this).attr("id23");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id23:id23},
				success:function(data){	
					location.reload(true);
					 //window.location.reload(true);
					history.go(0);
				//	window.location.href=window.location.href;
				}
			});
		});
	});
	</script> 
     <script>
	$(document).ready(function(){
		$('.view_datas').click(function(){
			var id234 = $(this).attr("id234");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id234:id234},
				success:function(data){	
					 location.reload(true);
				//window.location.reload(true);
					history.go(0);
				//	window.location.href=window.location.href;
				
				}
			});
		});
	});
	</script> 
     <script>
	$(document).ready(function(){
		$('.view_datas').click(function(){
			var id2345 = $(this).attr("id2345");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id2345:id2345},
				success:function(data){	
					 location.reload(true);
					//window.location.reload(true);
					history.go(0);
				//	window.location.href=window.location.href;
					
				}
			});
		});
	});
	</script> 
     <script>
	$(document).ready(function(){
		$('.view_datas').click(function(){
			var id23456 = $(this).attr("id23456");
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',		
				data: {id23456:id23456},
				success:function(data){	
					 location.reload(true);
					//window.location.reload(true);
					history.go(0);
					//window.location.href=window.location.href;
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
					//window.location.reload(true);
					history.go(0);
					//window.location.href=window.location.href;
				}
			});
		});
	});
	</script> 
    
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
				// window.location.reload(true);
					history.go(0);
					//window.location.href=window.location.href;
				}
			});
		 
			}
</script>

<script>
		function run_cekedb(lo)
			{

			var inspec = lo;
			//var running=$("checkbox#running").val();
			// memulai ajax
			$.ajax({
				url: 'tm_auto_runningb.php',	
				method: 'post',	
				data: {inspec:inspec},
				success:function(data){	
				
				 location.reload(true);
				 //window.location.reload(true);
					history.go(0);
					//window.location.href=window.location.href;
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
				url: 'tm_auto_final.php',	
				method: 'post',	
				data: {inspeci:inspeci},
				success:function(data){	
				
				location.reload(true);
				//window.location.reload(true);
					history.go(0);
					//window.location.href=window.location.href;
				}
			});
		 
			}
</script>
<script>
		function run_cekedfinalb(ro)
			{
	
			var inspeci = ro;
			//var running=$("checkbox#running").val();
			// memulai ajax
			$.ajax({
				url: 'tm_auto_finalb.php',	
				method: 'post',	
				data: {inspeci:inspeci},
				success:function(data){	
				
				 location.reload(true);
				// window.location.reload(true);
					history.go(0);
					//window.location.href=window.location.href;
				}
			});
		 
			}
</script>
 <script>
		function edit_row(no)
			{
			
			var id = no;
		
			var hasil=$("input#hasilleak"+no).val();
			
			
			//alert(hasil);
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
<table border="1">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Pemeriksaan</font></a></th>
              <th><a href="#"><font color="#FFFFFF">Verifikasi</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
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

    	<tr bgcolor="#FFFFFF" id='nox<?php echo $data['id'];?>'>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo $data['verifikasi'];?></td>
            <td align="center" ><input type='text'  id='po<?php echo $data['id'];?>' name='po<?php echo $data['id'];?>'  style="width:30;height:28" readonly/></td>
            <td><button type="button" class="view_datax btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>    </td>      
            
            <td><input type='text'  id='hasilmtr<?php echo $data['id'];?>' name='hasilmtr<?php echo $data['id'];?>'  value='<?php echo $data['hasil_final_ok'];?>' onfocusout="edit_row2(<?php echo $data['id'];?>)" style="width:60;height:48" /></td>
        </tr> 
   
<?php
		}elseif($cek_udt_sts==2){
?>


		<tr bgcolor="#66CCFF" id='nox2<?php echo $data['id'];?>'>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo $data['verifikasi'];?></td>
            <td align="center"><strong><font color="#009900" size="+2">
			<input type='text'  id='po2<?php echo $data['id'];?>' name='po<?php echo $data['id'];?>'  value='<?php echo $data['hasil_running_ok'];?>' style="width:30;height:28" readonly/>
			</font></strong></td>
            <td><button type="button" class="view_datax2 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi2 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button>   </td>      
            <td><input type='text'  id='hasilmtr<?php echo $data['id'];?>' name='hasilmtr<?php echo $data['id'];?>'  value='<?php echo $data['hasil_final_ok'];?>' onfocusout="edit_row2(<?php echo $data['id'];?>)" style="width:60;height:48" /></td>
        </tr>  
  
 <?php
		}elseif($cek_udt_sts==3){
?>

		<tr bgcolor="#FFFF99" id='nox3<?php echo $data['id'];?>'>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo $data['verifikasi'];?></td>
           <td align="center"><strong><font color="#FF0000" size="+2"><input type='text'  id='po2<?php echo $data['id'];?>' name='po3<?php echo $data['id'];?>'  value='<?php echo $data['hasil_running_ok'];?>' style="width:30;height:28" readonly/></font></strong></strong></td>
            <td><button type="button" class="view_datax3 btn btn-success btn-xs"  id="<?php echo $data['id'];?>">OK</button></td>
            <td><button type="button" class="view_datasi3 btn btn-danger btn-xs"  id="<?php echo $data['id'];?>">NO</button> </td>      
            <td><input type='text'  id='hasilmtr<?php echo $data['id'];?>' name='hasilmtr<?php echo $data['id'];?>'  value='<?php echo $data['hasil_final_ok'];?>' onfocusout="edit_row2(<?php echo $data['id'];?>)" style="width:60;height:48" /></td>  
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
		$('.view_datax').click(function(){
			var id = $(this).attr("id");
			
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',			
				data: {id:id},
				success:function(data){	
			
				document.getElementById('nox'+id).style.backgroundColor='#66CCFF';
				document.getElementById('po'+id).value='✔';
					// location.reload('#myDivx1');
					 //window.location.reload(true);
				//	history.go(0);
					//window.location.href=window.location.href;
//$('#myDiv').load(' #myDiv')
//alert('Reloaded')
				
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
					document.getElementById('nox'+id).style.backgroundColor='#FFFF99';
				document.getElementById('po'+id).value='X';
					//window.location.reload(true);
					//history.go(0);
					//window.location.href=window.location.href;
					//$('#myDiv').load(' #myDiv')
//alert('Reloaded')
				}
			});
		});
	});
	</script> 
    <script>
	
	$(document).ready(function(){
		$('.view_datax2').click(function(){
			var id = $(this).attr("id");
			
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',			
				data: {id:id},
				success:function(data){	
			
				document.getElementById('nox2'+id).style.backgroundColor='#66CCFF';
				document.getElementById('po2'+id).value='✔';
					// location.reload('#myDivx1');
					 //window.location.reload(true);
				//	history.go(0);
					//window.location.href=window.location.href;
//$('#myDiv').load(' #myDiv')
//alert('Reloaded')
				
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_datasi2').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					document.getElementById('nox2'+id).style.backgroundColor='#FFFF99';
				document.getElementById('po2'+id).value='X';
					//window.location.reload(true);
					//history.go(0);
					//window.location.href=window.location.href;
					//$('#myDiv').load(' #myDiv')
//alert('Reloaded')
				}
			});
		});
	});
	</script> 
     <script>
	
	$(document).ready(function(){
		$('.view_datax3').click(function(){
			var id = $(this).attr("id");
			
			$.ajax({
				url: 'tm_auto_save.php',	
				method: 'post',			
				data: {id:id},
				success:function(data){	
			
				document.getElementById('nox3'+id).style.backgroundColor='#66CCFF';
				document.getElementById('po3'+id).value='✔';
					// location.reload('#myDivx1');
					 //window.location.reload(true);
				//	history.go(0);
					//window.location.href=window.location.href;
//$('#myDiv').load(' #myDiv')
//alert('Reloaded')
				
				}
			});
		});
	});
	</script> 
    <script>
	$(document).ready(function(){
		$('.view_datasi3').click(function(){
			var id = $(this).attr("id");
			$.ajax({
				url: 'tm_auto_runno.php',	
				method: 'post',		
				data: {id:id},
				success:function(data){	
					document.getElementById('nox3'+id).style.backgroundColor='#FFFF99';
				document.getElementById('po3'+id).value='X';
					//window.location.reload(true);
					//history.go(0);
					//window.location.href=window.location.href;
					//$('#myDiv').load(' #myDiv')
//alert('Reloaded')
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
             <th ><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th align="center"><a href="#"><font color="#FFFFFF"><div align="center">Problem</div></font></a></th>
              <th align="center"><a href="#"><font color="#FFFFFF"><div align="center">Penyebab</div></font></a></th>
             <th align="center"><a href="#"><font color="#FFFFFF"><div align="center">Tindakan</div></font></a></th>
            
       
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM transmisi_problem where inspection_number='$inspection_number' AND form_code='$form_code'");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							
						
?>

    	<tr bgcolor="#FFFFFF">
			<td align="center"	><?php echo $no;?></td>
            <td align="center"><input type='text'  id='pa<?php echo $data['id'];?>' name='pa<?php echo $data['id'];?>' value='<?php echo $data['problem'];?>' onfocusout="edit_pa(<?php echo $data['id'];?>)" style="width:120;height:48" /></td>
            <td align="center"><input type='text'  id='pb<?php echo $data['id'];?>' name='pb<?php echo $data['id'];?>'   value='<?php echo $data['penyebab'];?>' onfocusout="edit_pb(<?php echo $data['id'];?>)" style="width:120;height:48" /></td>
            <td align="center"><input type='text'  id='pc<?php echo $data['id'];?>' name='pc<?php echo $data['id'];?>'   value='<?php echo $data['tindakan'];?>' onfocusout="edit_pc(<?php echo $data['id'];?>)" style="width:120;height:48" /></td>
           
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
				method: 'post',	
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
   


 
    
    
    
    </div>
    <div id="footer">
    <a href="" class="title">MKM Copyright</a>
    </div>
</div>
</body>
</html>