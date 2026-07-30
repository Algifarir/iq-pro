<?php


	include "config/koneksi.php";
	$level=$_SESSION['level'];
	
	$kopname = $_SESSION['kopname'];
	$form_code = $_REQUEST['form_code'];
	$inspection_number = $_REQUEST['inspection_number'];
	$aksi = $_REQUEST['aksi'];
	
	if($aksi == "insert")
	{
					$cari=mysql_query("select * from proses_inspection_header where inspection_number='$inspection_number'");
					while ($dtno=mysql_fetch_array($cari)) 
					{
					
						$tgl_now = $dtno['inspection_date'];
						
				
					}
		
			
	}elseif($aksi == "edit"){
		
				
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
	   background-color:#FFFFFF;
   }
   .centered {
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}
	</style>
  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MKM INspection</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
         <script>
            $(function() {
                $("#engine_model").autocomplete({
                    source: 'auto_model.php'
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
function getItems()
{
  	  var min1 = document.getElementById('min1').value;
      var max1 = document.getElementById('max1').value;
	  var hasil1 = document.getElementById('hasil1').value;
      var ok1 = document.getElementById('ok1').value;
	  var no1 = document.getElementById('no1').value;
    
      if (hasil1 >= min1 && hasil1 <= max1) {
         document.getElementById('ok1').value = "OK";
		 document.getElementById('no1').value = "";
      }else if ((hasil1 > 0 && hasil1 < min1) || hasil1 > max1){
	  	document.getElementById('no1').value = "NO";
		document.getElementById('ok1').value = "";
	  }else if(hasil1==""){
	  	document.getElementById('no1').value = "";
		document.getElementById('ok1').value = "";
	  }
 
 
 
 	 var min2 = document.getElementById('min2').value;
      var max2 = document.getElementById('max2').value;
	  var hasil2 = document.getElementById('hasil2').value;
      var ok2 = document.getElementById('ok2').value;
	  var no2 = document.getElementById('no2').value;
    
      if (hasil2 >= min2 && hasil2 <= max2) {
         document.getElementById('ok2').value = "OK";
		 document.getElementById('no2').value = "";
      }else if ((hasil2 > 0 && hasil2 < min2) || hasil2 > max2){
	  	document.getElementById('no2').value = "NO";
		document.getElementById('ok2').value = "";
	  }else if(hasil2==""){
	  	document.getElementById('no2').value = "";
		document.getElementById('ok2').value = "";
	  }
 
 
 	
	 var min3 = document.getElementById('min3').value;
      var max3 = document.getElementById('max3').value;
	  var hasil3 = document.getElementById('hasil3').value;
      var ok3 = document.getElementById('ok3').value;
	  var no3 = document.getElementById('no3').value;
    
      if (hasil3 >= min3 && hasil3 <= max3) {
         document.getElementById('ok3').value = "OK";
		 document.getElementById('no3').value = "";
      }else if ((hasil3 > 0 && hasil3 < min3) || hasil3 > max3){
	  	document.getElementById('no3').value = "NO";
		document.getElementById('ok3').value = "";
	  }else if(hasil3==""){
	  	document.getElementById('no3').value = "";
		document.getElementById('ok3').value = "";
	  }
 
 
 	var min4 = document.getElementById('min4').value;
      var max4 = document.getElementById('max4').value;
	  var hasil4 = document.getElementById('hasil4').value;
      var ok4 = document.getElementById('ok4').value;
	  var no4 = document.getElementById('no4').value;
    
      if (hasil4 >= min4 && hasil4 <= max4) {
         document.getElementById('ok4').value = "OK";
		 document.getElementById('no4').value = "";
      }else if ((hasil4 > 0 && hasil4 < min4) || hasil4 > max4){
	  	document.getElementById('no4').value = "NO";
		document.getElementById('ok4').value = "";
	  }else if(hasil4==""){
	  	document.getElementById('no4').value = "";
		document.getElementById('ok4').value = "";
	  }
 
 
 	var min5 = document.getElementById('min5').value;
      var max5 = document.getElementById('max5').value;
	  var hasil5 = document.getElementById('hasil5').value;
      var ok5 = document.getElementById('ok5').value;
	  var no5 = document.getElementById('no5').value;
    
      if (hasil5 >= min5 && hasil5 <= max5) {
         document.getElementById('ok5').value = "OK";
		 document.getElementById('no5').value = "";
      }else if ((hasil5 > 0 && hasil5 < min5) || hasil5 > max5){
	  	document.getElementById('no5').value = "NO";
		document.getElementById('ok5').value = "";
	  }else if(hasil5==""){
	  	document.getElementById('no5').value = "";
		document.getElementById('ok5').value = "";
	  }
 
 
 
 	var min6 = document.getElementById('min6').value;
      var max6 = document.getElementById('max6').value;
	  var hasil6 = document.getElementById('hasil6').value;
      var ok6 = document.getElementById('ok6').value;
	  var no6 = document.getElementById('no6').value;
    
      if (hasil6 >= min6 && hasil6 <= max6) {
         document.getElementById('ok6').value = "OK";
		 document.getElementById('no6').value = "";
      }else if ((hasil6 > 0 && hasil6 < min6) || hasil6 > max6){
	  	document.getElementById('no6').value = "NO";
		document.getElementById('ok6').value = "";
	  }else if(hasil6==""){
	  	document.getElementById('no6').value = "";
		document.getElementById('ok6').value = "";
	  }
 
 
 	var min7 = document.getElementById('min7').value;
      var max7 = document.getElementById('max7').value;
	  var hasil7 = document.getElementById('hasil7').value;
      var ok7 = document.getElementById('ok7').value;
	  var no7 = document.getElementById('no7').value;
    
      if (hasil7 >= min7 && hasil7 <= max7) {
         document.getElementById('ok7').value = "OK";
		 document.getElementById('no7').value = "";
      }else if ((hasil7 > 0 && hasil7 < min7) || hasil7 > max7){
	  	document.getElementById('no7').value = "NO";
		document.getElementById('ok7').value = "";
	  }else if(hasil6==""){
	  	document.getElementById('no7').value = "";
		document.getElementById('ok7').value = "";
	  }
 
 	
	  var min8 = document.getElementById('min8').value;
      var max8 = document.getElementById('max8').value;
	  var hasil8 = document.getElementById('hasil8').value;
      var ok8 = document.getElementById('ok8').value;
	  var no8 = document.getElementById('no8').value;
    
      if (hasil8 >0 && hasil8 <= max8) {
         document.getElementById('ok8').value = "OK";
		 document.getElementById('no8').value = "";
      }else if (hasil8 > max8){
	  	document.getElementById('no8').value = "NO";
		document.getElementById('ok8').value = "";
	  }else if(hasil8==""){
	  	document.getElementById('no8').value = "";
		document.getElementById('ok8').value = "";
	  }
 
 	
	
	 var min9 = document.getElementById('min9').value;
      var max9 = document.getElementById('max9').value;
	  var hasil9 = document.getElementById('hasil9').value;
      var ok9 = document.getElementById('ok9').value;
	  var no9 = document.getElementById('no9').value;
    
      if (hasil9 >= min9 && hasil9 <= max9) {
         document.getElementById('ok9').value = "OK";
		 document.getElementById('no9').value = "";
      }else if ((hasil9 > 0 && hasil9 < min9) || hasil9 > max9){
	  	document.getElementById('no9').value = "NO";
		document.getElementById('ok9').value = "";
	  }else if(hasil9==""){
	  	document.getElementById('no9').value = "";
		document.getElementById('ok9').value = "";
	  }
	  
	  
	  
	   var min10 = document.getElementById('min10').value;
      var max10 = document.getElementById('max10').value;
	  var hasil10 = document.getElementById('hasil10').value;
      var ok10 = document.getElementById('ok10').value;
	  var no10 = document.getElementById('no10').value;
    
      if (hasil10 >= min10 && hasil10 <= max10) {
         document.getElementById('ok10').value = "OK";
		 document.getElementById('no10').value = "";
      }else if ((hasil10 > 0 && hasil10 < min10) || hasil10 > max10){
	  	document.getElementById('no10').value = "NO";
		document.getElementById('ok10').value = "";
	  }else if(hasil10==""){
	  	document.getElementById('no10').value = "";
		document.getElementById('ok10').value = "";
	  }
	  
	  
	   var min11 = document.getElementById('min11').value;
      var max11 = document.getElementById('max11').value;
	  var hasil11 = document.getElementById('hasil11').value;
      var ok11 = document.getElementById('ok11').value;
	  var no11 = document.getElementById('no11').value;
    
      if (hasil11 >= min11 && hasil11 <= max11) {
         document.getElementById('ok11').value = "OK";
		 document.getElementById('no11').value = "";
      }else if ((hasil11 > 0 && hasil11 < min11) || hasil11 > max11){
	  	document.getElementById('no11').value = "NO";
		document.getElementById('ok11').value = "";
	  }else if(hasil11==""){
	  	document.getElementById('no11').value = "";
		document.getElementById('ok11').value = "";
	  }
	  
	  var min12 = document.getElementById('min12').value;
      var max12 = document.getElementById('max12').value;
	  var hasil12 = document.getElementById('hasil12').value;
      var ok12 = document.getElementById('ok12').value;
	  var no12 = document.getElementById('no12').value;
    
      if (hasil12 >= min12 && hasil12 <= max12) {
         document.getElementById('ok12').value = "OK";
		 document.getElementById('no12').value = "";
      }else if ((hasil12 > 0 && hasil12 < min12) || hasil12 > max12){
	  	document.getElementById('no12').value = "NO";
		document.getElementById('ok12').value = "";
	  }else if(hasil12==""){
	  	document.getElementById('no12').value = "";
		document.getElementById('ok12').value = "";
	  }
	
	
	 var min13 = document.getElementById('min13').value;
      var max13 = document.getElementById('max13').value;
	  var hasil13 = document.getElementById('hasil13').value;
      var ok13 = document.getElementById('ok13').value;
	  var no13 = document.getElementById('no13').value;
    
      if (hasil13 >= min13 && hasil13 <= max13) {
         document.getElementById('ok13').value = "OK";
		 document.getElementById('no13').value = "";
      }else if ((hasil13 > 0 && hasil13 < min13) || hasil13 > max13){
	  	document.getElementById('no13').value = "NO";
		document.getElementById('ok13').value = "";
	  }else if(hasil13==""){
	  	document.getElementById('no13').value = "";
		document.getElementById('ok13').value = "";
	  }
	  
	   var min14 = document.getElementById('min14').value;
      var max14 = document.getElementById('max14').value;
	  var hasil14 = document.getElementById('hasil14').value;
      var ok14 = document.getElementById('ok14').value;
	  var no14 = document.getElementById('no14').value;
    
      if (hasil14 >= min14 && hasil14 <= max14) {
         document.getElementById('ok14').value = "OK";
		 document.getElementById('no14').value = "";
      }else if ((hasil14 > 0 && hasil14 < min14) || hasil14 > max14){
	  	document.getElementById('no14').value = "NO";
		document.getElementById('ok14').value = "";
	  }else if(hasil14==""){
	  	document.getElementById('no14').value = "";
		document.getElementById('ok14').value = "";
	  }
	  
	   var min15 = document.getElementById('min15').value;
      var max15 = document.getElementById('max15').value;
	  var hasil15 = document.getElementById('hasil15').value;
      var ok15 = document.getElementById('ok15').value;
	  var no15 = document.getElementById('no15').value;
    
      if (hasil15 >0 && hasil15 < max15) {
         document.getElementById('ok15').value = "";
		 document.getElementById('no15').value = "NO";
      }else if (hasil15 >= max15){
	  	document.getElementById('no15').value = "";
		document.getElementById('ok15').value = "OK";
	  }else if(hasil15==""){
	  	document.getElementById('no15').value = "";
		document.getElementById('ok15').value = "";
	  }
	  
	  
	   var min16 = document.getElementById('min16').value;
      var max16 = document.getElementById('max16').value;
	  var hasil16 = document.getElementById('hasil16').value;
      var ok16 = document.getElementById('ok16').value;
	  var no16 = document.getElementById('no16').value;
    
      if (hasil16 >= min16 && hasil16 <= max16) {
         document.getElementById('ok16').value = "OK";
		 document.getElementById('no16').value = "";
      }else if ((hasil16 > 0 && hasil16 < min16) || hasil16 > max16){
	  	document.getElementById('no16').value = "NO";
		document.getElementById('ok16').value = "";
	  }else if(hasil16==""){
	  	document.getElementById('no16').value = "";
		document.getElementById('ok16').value = "";
	  }
	  
	
	
 
 
}

</script>

<title>MKM Inspection</title>
</head>


<body>

<div class="container">


<form action="auto_post.php?pros=tambahsave" method="post" >
<table border="0">
  <tr>
    <td>Form Code&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<input type="text" id="form_code" name="form_code"  autocomplete="off" value = "<?php echo $form_code ?>" readonly/></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Date Time&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<input type="text" id="dt" name="dt"  autocomplete="off" value = "<?php echo $tgl_now ?>" readonly/></td>
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
    <td>Inspection Number&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<input type="text" id="inspection_number" name="inspection_number"  autocomplete="off"  value="<?php echo $inspection_number ?>" readonly/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>No. I/P&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<input type="text" id="noip" name="noip"  autocomplete="off" required/></td>
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
    <td>Engine Number&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<input type="text" id="engine_number" name="engine_number"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Test Branch&nbsp;</td>
    <td>&nbsp;:</td>
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
</select>    </td>
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
    <td>Engine Model&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<input type="text" id="engine_model" name="engine_model"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Faktor Koreksi&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<input type="text" id="koreksi" name="koreksi"  autocomplete="off"  required/></td>
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
    <td>Final Judgement</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<select name="approve_fg">
 <option value="ENGINE OK">ENGINE OK</option>
<option value="REWORK">REWORK</option>
<option value="PENDING">PENDING</option>
 <option value="ENGINE OK">ENGINE NOT OK</option>
</select></td>
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
    <td colspan="10"> <button type="submit" class="btn btn-success">Submit Form</button>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-Danger" href="crul.php">Log Out</a></td>
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

<br />
 
 
         <table border="1">
  <tr>
    <td valign="top">
     <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody><?php
	
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_column = 'Page Left' AND group_tab='Running'");
						$no = $mulai+1;;
						$l1 = "rt";
						$l2 = "pt";
						while($data=mysql_fetch_array($query)){
						
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo "<input type='checkbox' name='chkrunyes[]' value='$data[id]' >";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
            <td><?php echo "<input type='checkbox' name='chkrunno[]' value='$data[id]'>";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table>    </td>
    <td valign="top">
    <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody><?php
	
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_column = 'Page Right' AND group_tab='Running'");
						$no = $mulai+1;
						$l1 = "rt";
						$l2 = "pt";
					
						while($data=mysql_fetch_array($query)){
						
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
             <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo "<input type='checkbox' name='chkrunyes[]' value='$data[id]'>";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
            <td><?php echo "<input type='checkbox' name='chkrunno[]' value='$data[id]'>";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table>    </td>
  </tr>
  <tr>
    <td colspan="2" align="left">
    <textarea id="desc_running" name="desc_running" rows="4" cols="65">
    
    </textarea>
    
    
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

    </br>
        
        <table border="0">
  <tr>
    <td valign="top">
    
     <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#990000">
             <th valign="top"><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Description</font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">RPM</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Spec Min</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Spec Max</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Hasil</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">O</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">X</div></font></a></th>
            </tr>
    </thead><tbody> 
		<tr>
			<td align="center">1</td>
            <td>LOW TORQUE(Kgf.m)<input type="hidden" id="ket1" name='ket1' size="5" value="LOW TORQUE(Kgf.m)" readonly /></td>
            <td>1200</td>
          <td><input type="text" id="min1" name="min1" value="56.0" size="5" readonly /></td>
            <td><input type="text" id="max1" name="max1" value="60.5" size='5' readonly /></td>
            <td><input type="text" id="hasil1" name="hasil1" size="5" autocomplete="off" onkeyup="getItems();" required/></td>
            <td><input type="text" id="ok1" name="ok1" size="2" autocomplete="off"  /></td>
            <td><input type="text" id="no1" name="no1" size="2" autocomplete="off"  /></td>
        </tr> 
    	<tr>
			<td align="center"	>2</td>
            <td>TORQUE (Kfg.m)<input type="hidden" id="ket2" name="ket2" size="5" value="TORQUE (Kfg.m)" readonly /></td>
            <td>1400</td>
          <td><input type="text" id="min2" name="min2" value="60.5" size="5" readonly /></td>
            <td><input type="text" id="max2"  name="max2" value="63.5" size="5" readonly /></td>
            <td><input type="text" id="hasil2" name="hasil2" size="5" autocomplete="off" onkeyup="getItems();" required/></td>
            <td><input type="text" id="ok2" name="ok2" size="2" autocomplete="off"  /></td>
            <td><input type="text" id="no2" name="no2" size="2" autocomplete="off"  /></td>
        </tr> 
    	<tr>
			<td align="center"	>3</td>
            <td>TORQUE (Kfg.m)<input type="hidden" id="ket3" name="ket3" size="5" value="TORQUE (Kfg. m)" readonly /></td>
            <td>2800</td>
          <td><input type="text" id="min3" name="min3" value="52.2" size="5" readonly /></td>
            <td><input type="text" id="max3"  name="max3" value="55.3" size="5" readonly /></td>
            <td><input type="text" id="hasil3" name="hasil3" size="5" autocomplete="off" onkeyup="getItems();" required/></td>
            <td><input type="text" id="ok3" name="ok3" size="2" autocomplete="off"  /></td>
            <td><input type="text" id='no3' name="no3" size="2" autocomplete="off"  /></td>
        </tr> 
    	<tr>
			<td align="center"	>4</td>
            <td>MAX POWER (Ps)<input type='hidden' id='ket4' name='ket4' size='5' value='MAX POWER (Ps)' readonly /></td>
            <td>2800</td>
          <td><input type='text' id='min4' name='min4' value='204' size='5' readonly /></td>
            <td><input type='text' id='max4' name='max4' value='216' size='5' readonly /></td>
            <td><input type='text' id='hasil4' name='hasil4' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text' id='ok4' name='ok4' size='2' autocomplete='off'  /></td>
            <td><input type='text' id='no4' name='no4' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center"	>5</td>
            <td>MAX SPEED<input type='hidden' id='ket5' name='ket5' size='5' value='MAX SPEED' readonly /></td>
            <td></td>
          <td><input type='text' id='min5' name='min5' value='3180' size='5' readonly /></td>
            <td><input type='text' id='max5' name='max5' value='3220' size='5' readonly /></td>
            <td><input type='text' id='hasil5' name='hasil5' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text' id='ok5' name='ok5' size='2' autocomplete='off'  /></td>
            <td><input type='text' id='no5' name='no5' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center"	>6</td>
            <td>LOW SPEED<input type='hidden' id='ket6' name='ket6' size='5' value='LOW SPEED' readonly /></td>
            <td></td>
          <td><input type='text' id='min6' name='min6' value='550' size='5' readonly /></td>
            <td><input type='text' id='max6' name='max6' value='600' size='5' readonly /></td>
            <td><input type='text' id='hasil6' name='hasil6' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text' id='ok6' name='ok6' size='2' autocomplete='off'  /></td>
            <td><input type='text' id='no6' name='no6' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center"	>7</td>
            <td>EXHAUSE BRAKE<input type='hidden' id='ket7' name='ket7' size='5' value='EXHAUSE BRAKE' readonly /></td>
            <td></td>
          <td><input type='text' id='min7' name='min7' value='750' size='5' readonly /></td>
            <td><input type='text' id='max7' name='max7' value='800' size='5' readonly /></td>
            <td><input type='text' id='hasil7' name='hasil7' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text' id='ok7' name='ok7' size='2' autocomplete='off'  /></td>
            <td><input type='text' id='no7' name='no7' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center"	>8</td>
            <td>CHECK SMOKE<input type='hidden' id='ket8' name='ket8' size='5' value='CHECK SMOKE' readonly /></td>
            <td>800</td>
          <td><input type='text' id='min8' name='min8' value='&le;' size='5' readonly /></td>
            <td><input type='text' id='max8'  name='max8' value='45' size='5' readonly /></td>
            <td><input type='text' id='hasil8' name='hasil8' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text' id='ok8' name='ok8' size='2' autocomplete='off'  /></td>
            <td><input type='text' id='no8' name='no8' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center"	>9</td>
            <td>TEMP. INTER COOLER<input type='hidden' id='ket9' name='ket9' size='5' value='TEMP. INTER COOLER' readonly /></td>
            <td>1400</td>
          <td><input type='text' id='min9' name='min9' value='32' size='6' readonly /></td>
            <td><input type='text' id='max9' name='max9' value='38' size='6' readonly /></td>
            <td><input type='text' id='hasil9' name='hasil9' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text' id='ok9' name='ok9' size='2' autocomplete='off'  /></td>
            <td><input type='text' id='no9' name='no9' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center"	>10</td>
            <td>TEMP. INTER COOLER<input type='hidden' id='ket10' name='ket10' size='5' value='TEMP. INTER COOLER RPM 2800' readonly /></td>
            <td>2800</td>
          <td><input type='text' id='min10'  name='min10' value='47' size='5' readonly /></td>
            <td><input type='text' id='max10' name='max10' value='53' size='5' readonly /></td>
            <td><input type='text' id='hasil10' name='hasil10' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text' id='ok10' name='ok10' size='2' autocomplete='off'  /></td>
            <td><input type='text' id='no10' name='no10' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center"	>11</td>
            <td>TIME SEC (SECOND) FUEL CONSUPTION 100 CC<input type='hidden' id='ket11' name='ket11' size='5' value='TIME SEC (SECOND) FUEL CONSUPTION 100 CC ' readonly /> </td>
            <td>1400</td>
          <td><input type='text' id='min11' name='min11' value='16.0' size='5' readonly /></td>
            <td><input type='text' id='max11' name='max11' value='16.4' size='5' readonly /></td>
            <td><input type='text' id='hasil11' name='hasil11' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text' id='ok11' name='ok11' size='2' autocomplete='off'  /></td>
            <td><input type='text' id='no11' name='no11' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center"	>12</td>
            <td>WATER TEMP  &deg;C MAX SPEED 3180 - 3220<input type='hidden' id='ket12' name='ket12' size='5' value='WATER TEMP  &deg;C MAX SPEED 3180 - 3220' readonly /></td>
            <td></td>
          <td><input type='text' id='min12' name='min12' value='70' size='5' readonly /></td>
            <td><input type='text' id='max12' name='max12' value='90' size='5' readonly /></td>
            <td><input type='text' id='hasil12' name='hasil12' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text' id='ok12' name='ok12' size='2' autocomplete='off'  /></td>
            <td><input type='text' id='no12' name='no12' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center"	>13</td>
            <td>WATER TEMP &deg;C LOW SPEED 550 - 600<input type='hidden' id='ket13' name='ket13' size='5' value='WATER TEMP &deg;C LOW SPEED 550 - 600' readonly /></td>
            <td></td>
          <td><input type='text' id='min13' name='min13' value='70' size='5' readonly /></td>
            <td><input type='text' id='max13' name='max13' value='90' size='5' readonly /></td>
            <td><input type='text' id='hasil13' name='hasil13' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text' id='ok13' name='ok13' size='2' autocomplete='off'  /></td>
            <td><input type='text' id='no13' name='no13' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center"	>14</td>
            <td>OIL PRESS Kg/cm&sup2;  MAX SPEED 3180-3220<input type='hidden' id='ket14' name='ket14' size='5' value='OIL PRESS Kg/cm&sup2;  MAX SPEED 3180-3220' readonly /></td>
            <td></td>
          <td><input type='text'  id='min14' name='min14' value='3.0' size='5' readonly /></td>
            <td><input type='text'  id='max14' name='max14' value='5.0' size='5' readonly /></td>
            <td><input type='text'  id='hasil14' name='hasil14' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text'  id='ok14' name='ok14' size='2' autocomplete='off'  /></td>
            <td><input type='text'  id='no14' name='no14' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center">15</td>
            <td>OIL PRESS Kg/cm&sup2;  LOW SPEED 550-600<input type='hidden' id='ket15' name='ket15' size='5' value='OIL PRESS Kg/cm&sup2;  LOW SPEED 550-600' readonly /></td>
            <td></td>
          <td><input type='text'  id='min15' name='min15' value='&ge;' size='5' readonly /></td>
            <td><input type='text'  id='max15' name='max15' value='1.5' size='5' readonly /></td>
            <td><input type='text'  id='hasil15' name='hasil15' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text'  id='ok15' name='ok15' size='2' autocomplete='off'  /></td>
            <td><input type='text'  id='no15' name='no15' size='2' autocomplete='off'  /></td>
        </tr> 
    	<tr>
			<td align="center">16</td>
            <td>WATER INLET PRESSURE<input type='hidden' id='ket16' name='ket16' size='5' value='WATER INLET PRESSURE ' readonly /></td>
            <td></td>
          <td><input type="text"  id='min16'  name='min16' value="0.5" size="5" readonly /></td>
            <td><input type='text'  id='max16' name='max16' value='1.0' size='5' readonly /></td>
            <td><input type='text'  id='hasil16' name='hasil16' size='5' autocomplete='off' onkeyup='getItems();' required/></td>
            <td><input type='text'  id='ok16' name='ok16' size='2' autocomplete='off'  /></td>
            <td><input type='text'  id='no16' name='no16' size='2' autocomplete='off'  /></td>
        </tr> 
</tbody> 
</table>
    
    
    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

     		


    

         <table border="0">
  <tr>
    <td valign="top">
    
    	 <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Inspection Right Side</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody><?php
	
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Right'");
						$no = $mulai+1;;
						$l1 = "rt";
						$l2 = "pt";
						while($data=mysql_fetch_array($query)){
						
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo "<input type='checkbox' name='chkrunyes[]' value='$data[id]' >";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
            <td><?php echo "<input type='checkbox' name='chkrunno[]' value='$data[id]'>";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table> 
    
    </td>
    <td valign="top">
     <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Inspection Left Side</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody><?php
	
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Left'");
						$no = $mulai+1;;
						$l1 = "rt";
						$l2 = "pt";
						while($data=mysql_fetch_array($query)){
						
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo "<input type='checkbox' name='chkrunyes[]' value='$data[id]' >";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
            <td><?php echo "<input type='checkbox' name='chkrunno[]' value='$data[id]'>";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table> 
    
    
    
    </td>
  </tr>
  <tr>
    <td valign="top">
    
    <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Inspection Front</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody><?php
	
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Front'");
						$no = $mulai+1;;
						$l1 = "rt";
						$l2 = "pt";
						while($data=mysql_fetch_array($query)){
						
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo "<input type='checkbox' name='chkrunyes[]' value='$data[id]' >";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
            <td><?php echo "<input type='checkbox' name='chkrunno[]' value='$data[id]'>";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table> 
    
    
    
    </td>
    <td valign="top">
        <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Inspection Back</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody><?php
	
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Back'");
						$no = $mulai+1;;
						$l1 = "rt";
						$l2 = "pt";
						while($data=mysql_fetch_array($query)){
						
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo "<input type='checkbox' name='chkrunyes[]' value='$data[id]' >";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
            <td><?php echo "<input type='checkbox' name='chkrunno[]' value='$data[id]'>";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table> 

    
    
    
    
    </td>
  </tr>
  <tr>
    <td valign="top">
     <table class="table table-bordered table-striped table-hover">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Item Inspection Top</font></a></th>
             <th><a href="#"><font color="#FFFFFF">OK</font></a></th>
             <th><a href="#"><font color="#FFFFFF">NO</font></a></th>
       	</tr>
    </thead><tbody><?php
	
						$query=mysql_query("SELECT * FROM proses_inspection_detail where inspection_number='$inspection_number ' AND group_tab='Top'");
						$no = $mulai+1;;
						$l1 = "rt";
						$l2 = "pt";
						while($data=mysql_fetch_array($query)){
						
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data['description'];?></td>
            <td><?php echo "<input type='checkbox' name='chkrunyes[]' value='$data[id]' >";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
            <td><?php echo "<input type='checkbox' name='chkrunno[]' value='$data[id]'>";?><?php echo "<input type='hidden' name='idx[]' value='$data[id]'>";?></td>
        </tr>  
<?php
	$no++; } //tutup while
?>
</tbody> 
</table> 
    
    
    </td>
    <td valign="top">&nbsp;</td>
  </tr>
</table>

       
     </form>  
      
      </div>
    
   




</body>
</html>
