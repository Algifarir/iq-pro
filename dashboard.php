<?php

	session_start();
	include "config/koneksi.php";
	$level=$_SESSION['level'];
	$aksi=$_GET['aksi'];
	$kopname = $_SESSION['kopname'];
	$inspection_number = $_REQUEST['inspection_number'];
	if(empty($_SESSION['kopname'])||empty($_SESSION['level'])){	
	
    		header("location:browser.php");
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

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!-- Load file JS untuk JQuery dan Selec2.js melalui CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $(".select2").select2({
            });
        });
    </script>
          
        <script>
            $(function() {
			
				
				
                $("#engine_number").autocomplete({
                    source: 'auto_engine.php'
                });
            });
        </script>
       
 <script>
	function changeValue(id){
    var jur1 = id;
	
				$.ajax({
				url: 'test1.php',	
				method: 'post',	
				data: {jur1:jur1},
				success:function(data){	
				 $("#engine_number").html(data);
				}
			});
	}

</script>
<script>
	function changeValue2(id){
    var jur2 = id;

				$.ajax({
				url: 'test2.php',	
				method: 'post',	
				data: {jur2:jur2},
				success:function(data){	
				 $("#tampil").html(data);
				}
			});
	}

</script>
<script>
function validasi()
{
var pil1=(document.membuat.pilihanmenu.value);
var engkode=(document.membuat.engine_number.value);
alert(pil1);
alert(engkode);
if (pil1=="")
{
alert("Pilih Type Form");
document.membuat.pilihanmenu.focus();
return false;
}
if (engkode=="")
{
alert("Pilih Engine Number");
document.membuat.engine_number.focus();
return false;
}

}
</script>      
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
      <?php
	  	if($aksi==""){
	  ?>
        <a href="dashboard.php" class="nav-link" style="background-color:#CC9999">
        <?php
		}else{
		?>
        
        <a href="dashboard.php" class="nav-link">
        <?php
		
		}
		?>
        
        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg>
          Dashboard</a>
      </li>
      <li class="nav-item">
      <?php
	  	if($aksi=="tambah"){
	  ?>
        <a href="dashboard.php?aksi=tambah" class="nav-link" style="background-color:#336699">
        <?php
		}else{
		?>
        
       <a href="dashboard.php?aksi=tambah" class="nav-link">
        <?php
		
		}
		?>
      Create Form</a>
      </li>
      <li class="nav-item">
        <a href="dashboard_rework.php" class="nav-link">Rework Form</a>
      </li>
      <li class="nav-item">
        <a href="dashboard_pending.php" class="nav-link">Pending Form</a>
      </li>
      <li class="nav-item">
        <a href="dashboard_sdi.php" class="nav-link">SDI Form</a>
      </li>
       <li class="nav-item">
        <a href="dashboard_ok.php" class="nav-link">Engine.OK Form</a>
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
    
    <td>STATUS OPEN</td>
    
  </tr>
   <tr>
    
    <td><a href="dashboard.php?aksi=change_pwd">Ganti Password</a></td>
    <td> &nbsp;<?php echo $kopname;?></td>
  </tr>
</table>

</p>
     
         
         
         <form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#CC9999">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">No. Inspection</font></a></th>
              <th><a href="#"><font color="#FFFFFF">Date</font></a></th>
               <th><a href="#"><font color="#FFFFFF">No. Engine</font></a></th>
                <th><a href="#"><font color="#FFFFFF">Engine Model</font></a></th>
                <th><a href="#"><font color="#FFFFFF">Status</font></a></th>
             <th colspan="3"><a><font color="#FFFFFF">Action</font></a></th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 50;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM proses_inspection_header where inspection_status = 'OPEN' order by inspection_date DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM proses_inspection_header where inspection_status = 'OPEN' ORDER BY inspection_date DESC  Limit $mulai, $halaman");
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
        
	<a class="btn btn-success btn-xs" href="ct_2x.php?form_code=<?php echo $data['form_code'];?>&inspection_number=<?php echo $data['inspection_number'];?>&aksi=<?php echo "insert"; ?>&en=<?php echo $data['inspection_engine_number'];?>&em=<?php echo $data['inspection_engine_model'];?>&dt=<?php echo $data['inspection_date'];?>&area=<?php echo $data['inspection_area'];?>&kopname=<?php echo $kopname;?>&ip=<?php echo $data['ip_number'];?>&supply_num=<?php echo $data['faktor_koreksi'];?>" style="background-color:#CC9999"><i class="glyphicon glyphicon-edit"></i> </a>
  
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
							<a href="dashboard.php?&halaman=<?php echo $i; ?>&kopname=<?php echo $kopname; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
				</div>

</p>
         
<?php
	}elseif($aksi=='tambah'){
	$err = $_REQUEST['err'];
	
	if($err=="1")
	{
		echo "Engine Number Ini Sudah Ada,Edit Hub. Admin, No. Engine ini Di NonAktifkan";
	
	}elseif($err=="2"){
		
		echo "No. ECU ini Sudah Ada Dalam Database";
	}
		
?>       
<div class="container">     

<p class="login-box-msg"><strong>Pilih Formulir dibawah ini untuk Pengecekan</strong></p>
<hr size="10px" style="background-color:#990000">
  <form name="membuat" action="gnrt_number.php" method="post" >
<table border="0" align="center">
  <tr>
    <td><strong>Type Form</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp; <input type="hidden" name="kopname" value = "<?php echo $kopname;?>"/>
     <select class="form-control select2"  name="pilihanmenu" id="pilihanmenu" onchange='changeValue(this.value)' required>
		<option  value=""></option>

            <?php
          
             $hasil=mysql_query("select * from master_type_form order by id ASC");
			 $no=0;
			 while ($dtcombo=mysql_fetch_array($hasil)) {
             $no++;

            ?>
            <option  value="<?php echo $dtcombo['form_code'];?>"><?php echo $dtcombo['form_code'];?></option>
            <?php
	}
  ?>
        </select>
         </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Engine Number</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<select class="form-control select2"  name="engine_number" id="engine_number" onchange='changeValue2(this.value)' required>
			
		<option  value=""></option>

        </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Engine Model</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<div id="tampil">
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td><strong>No. ECU</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<input type="text" id="ip_number" name="ip_number" autocomplete="off"/></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td><strong>No. Supply Pump</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<input type="text" id="supply_num" name="supply_num" autocomplete="off"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Test Bench</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;
     <select name="area">
  <?php
   //Membuat koneksi ke database akademik
   
	
   //Perintah sql untuk menampilkan semua data pada tabel jurusan
   $hasil=mysql_query("select * from master_area order by id ASC");
    $no=0;
	
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
    <option value="<?php echo $dtcombo['area_name'];?>"><?php echo $dtcombo['area_code'];?>&nbsp;<?php echo $dtcombo['area_name'];?></option>
  <?php 
	}
  ?>
</select>  
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp; <button class="btn btn-success">Create Form</button>  &nbsp;&nbsp; </td>
  </tr>
  
 
</table>
</form>
</div>



 
 
 <?php
	}elseif($aksi=='last'){
	
	
		$sql_pro=mysql_query("select * from proses_inspection_header where inspection_number='".$inspection_number."'");
		while ($res=mysql_fetch_array($sql_pro))
													
			{
				$faktor_koreksi = $res['faktor_koreksi'];
				$ip_number = $res['ip_number'];
				$desc_running = $res['desc_running'];
				$final_judgement = $res['final_judgement'];
				$en = $res['inspection_engine_number'];
				$em = $res['inspection_engine_model'];
				$dt = $res['inspection_date'];
				$area = $res['inspection_area'];
				$form_code = $res['form_code'];
				
			}
	
	
	
?>      

<div class="container">     

<p class="login-box-msg"><strong>Tahap Terakhir Pengisian Formulir</strong></p>
<hr size="10px" style="background-color:#990000">
  <form action="update_vernumber.php" method="post" >
<table border="0" align="center">
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Inspection Number</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<?php echo $inspection_number;?><input type="hidden" name="inspection_number" value = "<?php echo $inspection_number;?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Catatan</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<textarea id="desc_running" name="desc_running" rows="4" cols="65">
    <?php echo $desc_running;?>
    </textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <tr>
    <td><strong>Final Judgement</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<input type="radio" name="final_judgement" value="ENGINE OK"/>&nbsp;ENGINE OK&nbsp;&nbsp;&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;<input type="radio" name="final_judgement" value="PENDING"/>&nbsp;PENDING&nbsp;&nbsp;&nbsp;</td>
  </tr>
   
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;<input type="radio" name="final_judgement" value="REWORK"/>&nbsp;REWORK&nbsp;&nbsp;&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;<input type="radio" name="final_judgement" value="SDI"/>&nbsp;SDI&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a class="btn btn-warning" href="ct_2x.php?form_code=<?php echo $form_code;?>&inspection_number=<?php echo $inspection_number;?>&aksi=<?php echo "insert"; ?>&en=<?php echo $en;?>&em=<?php echo $em;?>&dt=<?php echo $dt;?>&area=<?php echo $area;?>">Back to Form Input</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  <button class="btn btn-success">Approve Form</button>  &nbsp;&nbsp; </td>
  </tr>
  
 
</table>
</form>
</div>

 
 
 <?php
	}elseif($aksi=='change_pwd'){
	
?>        
    
    <div class="container">     

<p class="login-box-msg"><strong>Ganti Password</strong></p>
<hr size="10px" style="background-color:#990000">
  <form action="change_pwd.php" method="post" >
<table border="0" align="center">
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Operator Name</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<input type="text" name="usr" value = "<?php echo $kopname;?>" readonly/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <tr>
    <td><strong>Password</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<input type="text" name="pwd"/></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><button class="btn btn-success">Update Password</button></td>
  </tr>
  
 
</table>
</form>
</div>
    
  <?php
  }
 ?> 
       
   

    

  </div>

</body>
</html>
