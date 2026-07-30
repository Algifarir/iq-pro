<?php


	include "config/koneksi.php";
	$level=$_SESSION['level'];
	
	$kopname = $_SESSION['kopname'];
	$form_code = $_REQUEST['form_code'];
	$inspection_number = $_REQUEST['inspection_number'];
	$aksi = $_REQUEST['aksi'];
	$en = $_REQUEST['en'];
	$em = $_REQUEST['em'];
	$area = $_REQUEST['area'];
	$dt = $_REQUEST['dt'];	
	$desc = $_REQUEST['desc'];
	$sts = $_REQUEST['sts'];
		$ecu = $_REQUEST['ecu'];
	$sp = $_REQUEST['sp'];
	
	if($sts=="SDI")
	{
		
		$stsx="QFL2";
	}else{
		
		$stsx = $sts;
	}
	
	$sql_pro=mysql_query("select * from proses_inspection_header_log where inspection_number='".$inspection_number."'and inspection_status='".$sts ."'");
		while ($res=mysql_fetch_array($sql_pro))
													
			{
				$operator_name = $res['operator_name'];
				$desc_running = $res['desc_running'];
				
				
			}
	
	
	?>
    
    <style>
	

	</style>

   

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MKM INspection</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
        
     

 
<title>MKM Inspection</title>
</head>


<body onLoad="window.print()">
<div class="container">

<p>

<table border="0">
  <tr>
    <td>Form Code&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $form_code ?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Date Time&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $dt ?></td>
  </tr>
  <tr>
    <td>Inspection Number&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $inspection_number ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Test Bench&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $area ?></td>
  </tr>
  <tr>
    <td>Engine Number&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $en ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Engine Model&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $em ?></td>
  </tr>
 <tr>
    <td>Operator&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $operator_name;?></td>
	 <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>No. ECU&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $ecu ?></td>
    </tr>
	<tr>
    <td>Status&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $stsx;?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Supply Pump&nbsp;</td>
    <td>&nbsp;:</td>
    <td>&nbsp;<?php echo $sp; ?></td>
  </tr>
   <tr>
    <td>Description&nbsp;</td>
    <td>&nbsp;:</td>
    <td colspan="10">&nbsp;<?php echo $desc_running;?></td>
    </tr>
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
 

 <table>
  <tr>
    <td valign="top">
    <table border=1"">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Running Item Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_column = 'Page Left' AND group_tab='Running' AND inspection_status ='$sts'");
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
            </td>
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

</table>
      </td>
    <td valign="top">
    <table border="1">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Running Item Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number' AND group_column = 'Page Right' AND group_tab='Running' AND inspection_status ='$sts'");
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
            </td>
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
</table>
  </td>
  </tr>
</table>

<p>
    
    <table class="table table-bordered">
    <thead>
		<tr bgcolor="#990000">
             <th valign="top"><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Performance Test</font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">RPM</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Spec</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">Hasil</div></font></a></th>
             <th><a href="#"><font color="#FFFFFF"><div align="center">O/X</div></font></a></th>
            </tr>
    </thead><tbody id="tampil"><?php
	$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number' AND group_tab='Performance' AND inspection_status ='$sts' AND description <> '' order by hasil_running_no ASC");
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
            <td><?php echo $data2['rpm'];?></td>
          <td><?php echo $data2['spec_start'];?>&nbsp;-&nbsp;<?php echo $data2['spec_finish'];?></td>
          
            <td><?php echo $data2['hasil_performa_test'];?><?php echo "<input type='hidden' id='hasil$data2[id]' name='hasil$data2[id]' size='5' autocomplete='off' value='$data2[hasil_performa_test]'/>";?><?php echo "<input type='hidden' id='inspec$data2[inspection_number]' name='inspec$data2[inspection_number]'' size='5' autocomplete='off' value='$data2[inspection_number]'/>";?></td>
           
            <td><?php echo $data2['hasil_pt_ok'];?></td>
            

            
   </tr> 
   
 <?php
		}elseif($cek_udt_sts2==2){
?>

<tr bgcolor="#66CCFF">
     
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data2['description'];?></td>
            <td><?php echo $data2['rpm'];?></td>
           <td><?php echo $data2['spec_start'];?>&nbsp;-&nbsp;<?php echo $data2['spec_finish'];?></td>
           
            <td><?php echo $data2['hasil_performa_test'];?><?php echo "<input type='hidden' id='hasil$data2[id]' name='hasil$data2[id]' size='5' autocomplete='off' value='$data2[hasil_performa_test]'/>";?><?php echo "<input type='hidden' id='inspec$data2[inspection_number]' name='inspec$data2[inspection_number]'' size='5' autocomplete='off' value='$data2[inspection_number]'/>";?></td>
           
            <td><strong><font color="#009900" size="+2"><?php echo $data2['hasil_pt_ok'];?></font></strong></td>
            
   </tr> 
   
   <?php
		}elseif($cek_udt_sts2==3){
?>

<tr bgcolor="#FFFF99">
     
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $lagi=$data2['description'];?></td>
            <td><?php echo $data2['rpm'];?></td>
          <td><?php echo $data2['spec_start'];?>&nbsp;-&nbsp;<?php echo $data2['spec_finish'];?></td>
           
            <td><?php echo $data2['hasil_performa_test'];?><?php echo "<input type='hidden' id='hasil$data2[id]' name='hasil$data2[id]' size='5' autocomplete='off' value='$data2[hasil_performa_test]'/>";?><?php echo "<input type='hidden' id='inspec$data2[inspection_number]' name='inspec$data2[inspection_number]'' size='5' autocomplete='off' value='$data2[inspection_number]'/>";?></td>
           
            <td><strong><font color="#FF0000" size="+2"><?php echo $data2['hasil_pt_ok'];?></font></strong></td>
            
   </tr> 
   


<?php
		}
?>


<?php
	$no++; } //tutup while
?>
</tbody> 
</table>
    
   

</br>

<table border="0">
  <tr>
    <td valign="top">
    
     <table border="1" width="480">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Right Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>

       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Right' AND inspection_status ='$sts'");
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
            </td>
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
           <td align="center"><strong><font color="#FF0000" size="+2"><?php echo $data['hasil_running_ok'];?></font></strong></strong></t        
        ></tr> 

<?php
		}
?>

<?php
	$no++; } //tutup while
?>
</tbody>

</table>
</p>
 <table border="1" width="480">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Front Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Front' AND inspection_status ='$sts'");
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
            </td>
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
</table>    

</p>

<table border="1" width="480">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Back Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Back' AND inspection_status ='$sts'");
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
            </td>
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

   
</table>        
    
    </td>
    <td valign="top">
    
    <table border="1" width="480">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Left Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Left' AND inspection_status ='$sts'");
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
            </td>
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
</table>    

</p>
  <table border="1" width="480">
    <thead>
		<tr bgcolor="#990000">
             <th><a href="#"><font color="#FFFFFF">No</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Top Side Inspection</font></a></th>
             <th><a href="#"><font color="#FFFFFF">Hasil</font></a></th>
       	</tr>
    </thead><tbody id="tampil"><?php
	
						
						$query=mysql_query("SELECT * FROM proses_inspection_detail_log where inspection_number='$inspection_number ' AND group_tab='Top' AND inspection_status ='$sts'");
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
            </td>
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

</table>      
    </td>
  </tr>
</table>


       
</div>


</body>
</html>
