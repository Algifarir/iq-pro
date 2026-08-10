<?php 
	include "config/koneksi.php";
	include "fungsi/fungsi.php";
	$kopname = $_SESSION['kopname'];
	$level = $_SESSION['level'];
	$aksi=$_GET['aksi'];
	$hal =$_REQUEST['halaman'];
	if($_SESSION['level']=='admin')
              {
	
				  
				  
			  }else{
		$queryrol=mysql_query("select * from master_menu_user where assigned_menu ='".$kopname."'");
		while($datrol=mysql_fetch_array($queryrol)){
			
			$rol_add = $data2['rol_add'];
			$rol_edit = $data2['rol_edit'];
			$rol_delete = $data2['rol_delete'];
			$rol_view = $data2['rol_view'];
		}
	}
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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>List Inspection</strong></font><span style="float:right;"></span></h4></td>
    
   
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
    <td><form method="post" action="index.php?pilih=4.3&aksi=search" >
								<input type="text" name="src" />&nbsp;<input type="submit" value="Search" />
</form></td>
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
             <th><a href="#">No. Inspection</a></th>
              <th><a href="#">Date</a></th>
			  <th><a href="#">Time</a></th>
               <th><a href="#">No. Engine</a></th>
                <th><a href="#">Engine Model</a></th>
                <th><a href="#">Tes Bench</a></th>
              <th><a href="#">Description</a></th>
                 <th><a href="#">Operator</a></th>
                <th><a href="#">Status</a></th>
             <th colspan="3">Action</th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 100;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT count(*) as total FROM proses_inspection_header_log ");
						$__tot_row = mysql_fetch_array($result);
						$total = $__tot_row['total'];
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM proses_inspection_header_log ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							
							$tgl_mon1 = strtotime($data['inspection_date']);
							$wkt_mon1 = strtotime($data['inspection_date']);
							
							$tgl_mon2 = date('Y-m-d',$tgl_mon1); 
							$wkt_mon2 = date('h:i:s',$wkt_mon1);
							
							$fn = $data['inspection_status'];
							if($fn=="SDI"){
								
									$sid="QFL2";
							}else{
								
									$sid = $fn;
							}
							
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
            <td><?php echo $data['inspection_number'];?></td>
            <td><?php echo $tgl_mon2;?></td>
			<td><?php echo $wkt_mon2;?></td>
            <td><?php echo $data['inspection_engine_number'];?></td>
            <td><?php echo $data['inspection_engine_model'];?></td>
             <td><?php echo $data['inspection_area'];?></td>
              <td><?php echo $data['desc_running'];?></td>
              <td><?php echo $data['operator_name'];?></td>
             <td><?php echo $sid;?></td>
             <td align="center">
        
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=4.4&form_code=<?php echo $data['form_code'];?>&inspection_number=<?php echo $data['inspection_number'];?>&aksi=<?php echo "insert"; ?>&en=<?php echo $data['inspection_engine_number'];?>&em=<?php echo $data['inspection_engine_model'];?>&dt=<?php echo $data['inspection_date'];?>&area=<?php echo $data['inspection_area'];?>&desc=<?php echo $data['desc_running'];?>&sts=<?php echo $data['inspection_status'];?>&ecu=<?php echo $data['ip_number'];?>&sp=<?php echo $data['faktor_koreksi'];?>&hal=<?php echo $hal ?>&src=<?php echo $src ?>"><i class="glyphicon glyphicon-edit"></i> View</a>
			
      
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
		<a href="index.php?pilih=4.3&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
						<?php
							}
						?>
	  </div>

</div>
</div></div>

<?php
	}elseif($aksi=='tambah'){
	
?>




<?php
	}elseif($aksi=='search'){
						$src= $_REQUEST['src'];
					
	
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel">
  
  <table border="0">
  <tr>
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>List Inspection</strong></font><span style="float:right;"></span></h4></td>
    
   
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
    <td><form method="post" action="index.php?pilih=4.3&aksi=search" >
								<input type="text" name="src" />&nbsp;<input type="submit" value="Search" />
</form>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
  </tr>
  
</table>
<table border="0">
  <tr>
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
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
  </tr>

  

<form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
          <th><a href="#">No</a></th>
             <th><a href="#">No. Inspection</a></th>
              <th><a href="#">Date</a></th>
			  <th><a href="#">Time</a></th>
               <th><a href="#">No. Engine</a></th>
                <th><a href="#">Engine Model</a></th>
                <th><a href="#">Tes Bench</a></th>
          <th><a href="#">Description</a></th>
                 <th><a href="#">Operator</a></th>
                <th><a href="#">Status</a></th>
             <th colspan="3">Action</th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 100;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT count(*) as total FROM proses_inspection_header_log where inspection_engine_number like '%$src%' or inspection_number like '%$src%' or operator_name like '%$src%' or inspection_date like '%$src%' or final_judgement like '%$src%' or inspection_engine_model like '%$src%' or inspection_area like '%$src%' ");
						$__tot_row = mysql_fetch_array($result);
						$total = $__tot_row['total'];
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM proses_inspection_header_log where inspection_engine_number like '%$src%' or inspection_number like '%$src%' or operator_name like '%$src%' or inspection_date like '%$src%' or final_judgement like '%$src%' or inspection_engine_model like '%$src%' or inspection_area like '%$src%' ORDER BY id DESC  Limit $mulai, $halaman");
						$no = $mulai+1;;
						while($data=mysql_fetch_array($query)){
							
							$tgl_mon1 = strtotime($data['inspection_date']);
							$wkt_mon1 = strtotime($data['inspection_date']);
							
							$tgl_mon2 = date('Y-m-d',$tgl_mon1); 
							$wkt_mon2 = date('h:i:s',$wkt_mon1);
							
							$fn = $data['inspection_status'];
							if($fn=="SDI"){
								
									$sid="QFL2";
							}else{
								
									$sid = $fn;
							}
?>
    	<tr>
			<td align="center"	><?php echo $no;?></td>
             <td><?php echo $data['inspection_number'];?></td>
           <td><?php echo $tgl_mon2;?></td>
			<td><?php echo $wkt_mon2;?></td>
            <td><?php echo $data['inspection_engine_number'];?></td>
          <td><?php echo $data['inspection_engine_model'];?></td>
             <td><?php echo $data['inspection_area'];?></td>
              <td><?php echo $data['desc_running'];?></td>
              <td><?php echo $data['operator_name'];?></td>
             <td><?php echo $sid;?></td>
             <td align="center">
          
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=4.4&form_code=<?php echo $data['form_code'];?>&inspection_number=<?php echo $data['inspection_number'];?>&aksi=<?php echo "insert"; ?>&en=<?php echo $data['inspection_engine_number'];?>&em=<?php echo $data['inspection_engine_model'];?>&dt=<?php echo $data['inspection_date'];?>&area=<?php echo $data['inspection_area'];?>&sts=<?php echo $data['inspection_status'];?>&ecu=<?php echo $data['ip_number'];?>&sp=<?php echo $data['faktor_koreksi'];?>&hal=<?php echo $hal ?>&src=<?php echo $src ?>"><i class="glyphicon glyphicon-edit"></i> View</a>
			
      
      		
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
  <a href="index.php?pilih=4.3&aksi=search&src=<?php echo $src; ?>&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
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

<?php
	}
?>

