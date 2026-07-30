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

$quepending=mysql_query("select dt_proses from proses_inspection_detail_log where inspection_number ='".$inspection_number."' AND inspection_status='PENDING' Limit 1");
		while($datpen=mysql_fetch_array($quepending)){
			
			$pendate = $datpen['dt_proses'];
		}
	
$querework=mysql_query("select dt_proses from proses_inspection_detail_log where inspection_number ='".$inspection_number."' AND inspection_status='REWORK' Limit 1");
		while($datwork=mysql_fetch_array($querework)){
			
			$penwork = $datwork['dt_proses'];
		}
		
$quesdi=mysql_query("select dt_proses from proses_inspection_detail_log where inspection_number ='".$inspection_number."' AND inspection_status='SDI' Limit 1");
		while($datsdi=mysql_fetch_array($quesdi)){
			
			$pensdi = $datsdi['dt_proses'];
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
    <td><font color="#FFFFFF"><strong>No. ECU</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $ip ?></strong></font></td>
  </tr>
  <tr>
    <td><font color="#FFFFFF"><strong>No. supply Pump</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong>:</strong></font></td>
    <td>&nbsp;<font color="#FFFFFF"><strong><?php echo $supply_num ?></strong></font></td>
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
    <td colspan="12"><a class="btn btn-warning" href="dashboard.php">Back to Dashboard</a> &nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="last_process.php?aksi=last&inspection_number=<?php echo $inspection_number ?>&kopname=<?php echo $kopname;?>&ip=<?php echo $ip;?>">Next Process</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-warning" href="crul.php">Log Out</a></td>
  </tr>
  <tr>
    <td colspan="12"><font color="#CC3333"><strong>Pending:</strong></font>&nbsp;<font color="#CC3333"><strong><?php echo $pendate ?></strong></font>&nbsp;&nbsp;<font color="#CC3333"><strong>Rework:</strong></font>&nbsp;<font color="#CC3333"><strong><?php echo $penwork ?></strong></font>&nbsp;&nbsp;<font color="#CC3333"><strong>SDI:</strong></font>&nbsp;<font color="#CC3333"><strong><?php echo $pensdi ?></strong></font></td>
  </tr>
  <tr>
    <td colspan="12" align="center"><button type="button" id="running" name="running" value="<?php echo $inspection_number; ?>" onClick="run_ceked(this.value);">&#10004</button><font color="#FFFFFF"><strong>&nbsp;Checked ALL Running</strong></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="runningno" name="runningno" value="<?php echo $inspection_number; ?>" onClick="run_cekedfinal(this.value)">&#10004</button> <font color="#FFFFFF"><strong>Checked ALL Final Test</strong></font></td>
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

  <!-- Tambahan informasi dokumen (di dalam tabel, gaya header) -->
  <tr>
    <td colspan="12" align="right" style="padding-top:4px;">
      <font color="#FFFFFF" size="2">
        <strong>No Document :</strong> LD-QE-16-1083&nbsp;&nbsp;&nbsp;
        <strong>Revisi :</strong> 01&nbsp;&nbsp;&nbsp;
        <strong>Tanggal Berlaku :</strong> 06 November 2025
      </font>
    </td>
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

 		<table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Running Item Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
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
             <th><a href="#"><font color="#FFFFFF"><div align="center">Hasil</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">O/X</div></font></a></th>
            </tr>
    </thead><tbody id="tampil"><?php
	$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number' AND group_tab='Performance' order by hasil_running_no ASC");
						$no = $mulai+1;;
						while($data2=mysql_fetch_array($query)){		
						$cek_udt_sts2= $data2['update_item'];		
						$cek_omath= $data2['operator_math'];	
						$hasil_pt_ok= $data2['hail_pt_ok'];
						
						if($hasil_pt_ok=="&#10004"){
						
							$pt_hsl="";
							
						}elseif($hasil_pt_ok=="&#10006"){
						
							$pt_hsl="";
							
						
						}
?>


    	<tr bgcolor="#FFFFFF">
     
		
     
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data2['description'];?></td>
            <td><?php echo $data2['rpm'];?><input type='hidden' id='rpm<?php echo $data2['id'];?>' name='rpm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['rpm'];?>' readonly="readonly"/></td>
          <td><?php echo $data2['spec_start'];?><input type='hidden' id='mulai<?php echo $data2['id'];?>' name='mulai<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['spec_start'];?>' readonly="readonly"/></td>
            <td><?php echo $data2['spec_finish'];?><input type='hidden' id='akhir<?php echo $data2['id'];?>' name='akhir<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['spec_finish'];?>' readonly="readonly"/></td>
            
           
           
 <?php
		if($cek_omath=="Hasil PS" || $cek_omath=="Hasil PS 100"){
?>

  <td><input type='text' id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' size='6' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly" style="background-color:#CCCCCC"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/>
  <input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/>
  
  <input  type='hidden' id='maxs<?php echo $data2['id'];?>'  name='maxs<?php echo $data2['id'];?>' size='6' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly"/>
  </td>


<?php
}else{
?>
         
           <td><input type='text'  id='hasilo<?php echo $data2['id'];?>' name='hasilo<?php echo $data2['id'];?>' style="height:60px" size='6' value='<?php echo $data2['hasil_performa_test'];?>' onfocusout="proses_row(<?php echo $data2['id'];?>)"/><input  type='hidden' id='desk<?php echo $data2['id'];?>' name='desk<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['description'];?>'/>
		   <input  type='hidden' id='mas<?php echo $data2['id'];?>' name='mas<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['operator_math'];?>'/><input  type='hidden' id='frm<?php echo $data2['id'];?>' name='frm<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['form_code'];?>'/><input  type='hidden' id='fuelcc<?php echo $data2['id'];?>' name='fuelcc<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['full_consup'];?>'/><input  type='hidden' id='cylinder<?php echo $data2['id'];?>' name='cylinder<?php echo $data2['id'];?>' size='5' value='<?php echo $data2['cylinder'];?>'/>
		   
		   <input  type='hidden' id='maxs<?php echo $data2['id'];?>'  name='maxs<?php echo $data2['id'];?>' size='6' value='<?php echo $data2['hasil_performa_test'];?>' readonly="readonly"/>
		   </td>
         
<?php
}
?>
           
           
           
              
           
           
            <td><strong><strong><font color="#009900" size="+1"><input type='text' id='ceka<?php echo $data2['id'];?>' name='ceka<?php echo $data2['id'];?>'  value="<?php echo $data2['hasil_pt_ok'];?>" size="3" readonly="readonly"/></font></strong></td>
 




<?php
	$no++; } //tutup while
?>
</tbody> 

    <script>
	
function proses_row(no)
{
			
		cek_row(no);		
       edit_row(no);
		

}
</script>

<script>
function cek_row(no)
{
    var hasil = no;
    var mul_basic = "mulai"+hasil; 
    var akh_basic = "akhir"+hasil;
    var hasil3 = "hasilo"+hasil;
    var hasil4x = "ceka"+hasil;
    var ckmath = "mas"+hasil;
    var rpms = "rpm"+hasil;
    var maxs = "maxs"+hasil;
    
    // Convert ke number
    var min1 = parseFloat(document.getElementById(mul_basic).value);
    var max1 = parseFloat(document.getElementById(akh_basic).value);
    var hasil1 = parseFloat(document.getElementById(hasil3).value);
    var hasil_ckmath = document.getElementById(ckmath).value;
    var hasil_rpm = parseFloat(document.getElementById(rpms).value);
    
    var ok = "✔";
    var no = "X";
    
    // Untuk Rumus PS - CEK ELEMENT EXIST DULU!
    if(hasil_ckmath == "Rumus PS"){
        var a1 = hasil + 1;
        var a2 = "hasilo"+a1;
        var mino = "mulai"+a1;
        var akho = "akhir"+a1;
        var ceko = "ceka"+a1;
        
        // ✅ CEK apakah element row berikutnya ADA
        if(document.getElementById(a2) && 
           document.getElementById(mino) && 
           document.getElementById(akho)) {
            
            var min2 = parseFloat(document.getElementById(mino).value);
            var max2 = parseFloat(document.getElementById(akho).value);
            
            var nilai1 = (hasil1 * hasil_rpm) / 716.2;
            var rounded = Math.round((nilai1 + Number.EPSILON) * 100) / 100;
            
            document.getElementById(a2).value = rounded;
            document.getElementById(maxs).value = rounded;
            
            var hsl_ps = rounded;
            
            if (hsl_ps >= min2 && hsl_ps <= max2) {
                document.getElementById(ceko).value = ok;
                document.getElementById(ceko).style.color = "green";
            } else if ((hsl_ps >= 0 && hsl_ps < min2) || hsl_ps > max2){
                document.getElementById(ceko).value = no;
                document.getElementById(ceko).style.color = "red";
            } else if(isNaN(hsl_ps) || hsl_ps === ""){
                document.getElementById(ceko).value = "";
            }
        }
    }
    
    // Validasi current row (SELALU JALAN)
    if (!isNaN(hasil1) && hasil1 !== "") {
        if (hasil1 >= min1 && hasil1 <= max1) {
            document.getElementById(hasil4x).value = ok;
            document.getElementById(hasil4x).style.color = "green";
        } else if ((hasil1 >= 0 && hasil1 < min1) || hasil1 > max1){
            document.getElementById(hasil4x).value = no;
            document.getElementById(hasil4x).style.color = "red";
        }
    } else {
        document.getElementById(hasil4x).value = "";
    }
}
</script>


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
			var maxs=$("input#maxs"+no).val();
			
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
				url: 'auto_pt.php',	
				method: 'post',	
				data: {id:id,hasil:hasil,desk:desk,rpm:rpm,mulai:mulai,akhir:akhir,mas:mas,frm:frm,fuelcc:fuelcc,cylinder:cylinder,maxs:maxs},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>
 <script>
		function edit_maxpower(no)
			{
			
			var id = no;
		
			var hasil=$("input#hasilo"+no).val();
		
			$.ajax({
				url: 'auto_pt.php',	
				method: 'post',	
				data: {id:id,hasil:hasil},
				success:function(data){	
				
				// location.reload(true);
				}
			});
		 
			}
</script>
</table>
</p>
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
    </p>
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
</p>
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
</p>

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
</p>
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
    
    
    
    
    </div>
    <div id="footer">
    <a href="" class="title">MKM Copyright</a>
    </div>
</div>
</body>
</html>