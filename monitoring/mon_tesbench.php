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
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Monitoring Test Bench</strong></font><span style="float:right;"></span></h4></td>
    
   
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
    <td><form  method="post" action="index.php?pilih=3.1&aksi=search" >
   

    Test Bench&nbsp;
    <select name="area">
	<option value="ALL">-ALL-</option>
  <?php

   $hasil=mysql_query("select * from master_area order by id ASC");
    $no=0;
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
   
    <option value="<?php echo $dtcombo['area_name'];?>"><?php echo $dtcombo['area_name'];?></option>
  <?php 
	}
  ?>
</select>&nbsp;&nbsp; <input type="date" name="dt1"> s/d <input type="date"  name="dt2">&nbsp;&nbsp;&nbsp;<input type="submit" value="Search" />
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
            <th><a href="#">Test Bench</a></th>
             <th><a href="#">No. Inspection</a></th>
              <th><a href="#">Date</a></th>
			
               <th><a href="#">No. Engine</a></th>
                <th><a href="#">Engine Model</a></th>
                <th><a href="#">Status</a></th>
             <th colspan="3">Action</th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 100;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
						$result = mysql_query("SELECT * FROM proses_inspection_header_log order by id DESC");
						$total = mysql_num_rows($result);
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
            <td><?php echo $lagi=$data['inspection_area'];?></td>
            <td><?php echo $data['inspection_number'];?></td>
            <td><?php echo $tgl_mon2;?></td>
            <td><?php echo $data['inspection_engine_number'];?></td>
            <td><?php echo $data['inspection_engine_model'];?></td>
             <td><?php echo $sid;?></td>
             <td align="center">
    
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=3.2&form_code=<?php echo $data['form_code'];?>&inspection_number=<?php echo $data['inspection_number'];?>&aksi=<?php echo $aksi; ?>&en=<?php echo $data['inspection_engine_number'];?>&em=<?php echo $data['inspection_engine_model'];?>&dt=<?php echo $data['inspection_date'];?>&area=<?php echo $data['inspection_area'];?>&desc=<?php echo $data['desc_running'];?>&sts=<?php echo $data['inspection_status'];?>&ecu=<?php echo $data['ip_number'];?>&sp=<?php echo $data['faktor_koreksi'];?>&hal=<?php echo $hal ?>&src=<?php echo $src ?>"><i class="glyphicon glyphicon-edit"></i> View</a>
			
      
      		
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
							<a href="index.php?pilih=3.1&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
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
						$areax= $_REQUEST['area'];
						$al= strtotime($_REQUEST['dt1']);
						$al2= strtotime($_REQUEST['dt2']);
						$tgl_1 = date('Y-m-d',$al);
						$tgl_2 = date('Y-m-d',$al2);
						
						if($areax=="ALL"){
							
								$area="ALL";
						}else{
							
								$area = $areax;
						}
						
						
if($area=="ALL"){

$tot_area1=mysql_query("SELECT count(inspection_number) as total_area1 from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' ");
$jml_area1=mysql_fetch_array($tot_area1);
$tot_all_area1=$jml_area1['total_area1'];


$tot_area2=mysql_query("SELECT count(inspection_number) as total_area2 from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'");
$jml_area2=mysql_fetch_array($tot_area2);
$tot_all_area2=$jml_area2['total_area2'];

$tot_area2x=mysql_query("SELECT count(inspection_number) as total_area2x from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'");
$jml_area2x=mysql_fetch_array($tot_area2x);
$tot_all_area2x=$jml_area2x['total_area2x'];


$tot_area3=mysql_query("SELECT count(inspection_number) as total_area3 from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'");
$jml_area3=mysql_fetch_array($tot_area3);
$tot_all_area3=$jml_area3['total_area3'];

$tot_area4=mysql_query("SELECT count(inspection_number) as total_area4 from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'");
$jml_area4=mysql_fetch_array($tot_area4);
$tot_all_area4=$jml_area4['total_area4'];

$tot_area5=mysql_query("SELECT count(inspection_number) as total_area5 from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'");
$jml_area5=mysql_fetch_array($tot_area5);
$tot_all_area5=$jml_area5['total_area5'];



	
	


}else{
$tot_area1=mysql_query("SELECT count(inspection_number) as total_area1 from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' ");
$jml_area1=mysql_fetch_array($tot_area1);
$tot_all_area1=$jml_area1['total_area1'];


$tot_area2=mysql_query("SELECT count(inspection_number) as total_area2 from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'");
$jml_area2=mysql_fetch_array($tot_area2);
$tot_all_area2=$jml_area2['total_area2'];

$tot_area2x=mysql_query("SELECT count(inspection_number) as total_area2x from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'");
$jml_area2x=mysql_fetch_array($tot_area2x);
$tot_all_area2x=$jml_area2x['total_area2x'];

$tot_area3=mysql_query("SELECT count(inspection_number) as total_area3 from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'");
$jml_area3=mysql_fetch_array($tot_area3);
$tot_all_area3=$jml_area3['total_area3'];

$tot_area4=mysql_query("SELECT count(inspection_number) as total_area4 from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'");
$jml_area4=mysql_fetch_array($tot_area4);
$tot_all_area4=$jml_area4['total_area4'];

$tot_area5=mysql_query("SELECT count(inspection_number) as total_area5 from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'");
$jml_area5=mysql_fetch_array($tot_area5);
$tot_all_area5=$jml_area5['total_area5'];

}

		
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel">
  
  <table border="0">
  <tr>
    <td><h4 class="mb"><font color="#FF9900" style="font-family:Arial, Helvetica, sans-serif"><strong>Monitoring Test Bench</strong></font><span style="float:right;"></span></h4></td>
    
   
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
    <td><form method="post" action="index.php?pilih=3.1&aksi=search">
   

    Test Bench&nbsp;
    <select name="area">
	<option value="ALL">-ALL-</option>
  <?php

   $hasil=mysql_query("select * from master_area order by id ASC");
    $no=0;
	
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
   
    <option value="<?php echo $dtcombo['area_name'];?>"><?php echo $dtcombo['area_name'];?></option>
  <?php 
	}
  ?>
</select>&nbsp;&nbsp; <input type="date" name="dt1"> s/d <input type="date"  name="dt2">&nbsp;&nbsp;&nbsp;<input type="submit" value="Search" />
</form>&nbsp;&nbsp;<a href="monitoring/export_excel.php?area=<?php echo $area; ?>&tgl_1=<?php echo $tgl_1; ?>&tgl_2=<?php echo $tgl_2; ?>">Export ke Excel</a></td>
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
 <table border="0">
  <tr>
    <td>Total&nbsp;<?php echo $area; ?>&nbsp;</td>
    <td>&nbsp;:&nbsp;</td>
    <td>&nbsp;<?php echo $tot_all_area1; ?>&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;Status OPEN&nbsp;</td>
    <td>&nbsp;:&nbsp;</td>
    <td>&nbsp;<?php echo $tot_all_area2; ?>&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;Status ENGINE OK&nbsp;</td>
    <td>&nbsp;:&nbsp;</td>
    <td>&nbsp;<?php echo $tot_all_area3; ?>&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;Status REWORK&nbsp;</td>
    <td>&nbsp;:&nbsp;</td>
    <td>&nbsp;<?php echo $tot_all_area4; ?>&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;Status Pending&nbsp;</td>
    <td>&nbsp;:&nbsp;</td>
    <td>&nbsp;<?php echo $tot_all_area5; ?>&nbsp;</td>
    <td>&nbsp;&nbsp;</td>
    <td>&nbsp;Status QFL2&nbsp;</td>
    <td>&nbsp;:&nbsp;</td>
    <td>&nbsp;<?php echo $tot_all_area2x; ?>&nbsp;</td>
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
  
</table>
  

<form class="form-inline" role="form">
  <table class="table table-bordered table-striped table-condensed">
    <thead>
		<tr class="info">
            <th><a href="#">No</a></th>
            <th><a href="#">Test Bench</a></th>
             <th><a href="#">No. Inspection</a></th>
              <th><a href="#">Date</a></th>
			 
               <th><a href="#">No. Engine</a></th>
                <th><a href="#">Engine Model</a></th>
                <th><a href="#">Status</a></th>
             <th colspan="3">Action</th>
       	</tr>
		
    </thead><tbody><?php
	
						$halaman = 100;
						$page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
						$mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
						
						
			if($area=="ALL"){
			
			
			$result = mysql_query("SELECT * FROM proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' ORDER BY id DESC  Limit $mulai, $halaman");
			
			
			}else{
				
						$result = mysql_query("SELECT * FROM proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' order by id DESC");
						$total = mysql_num_rows($result);
						$pages = ceil($total/$halaman);
	
						$query=mysql_query("SELECT * FROM proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' ORDER BY id DESC  Limit $mulai, $halaman");
						
			}
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
            <td><?php echo $lagi=$data['inspection_area'];?></td>
            <td><?php echo $data['inspection_number'];?></td>
           <td><?php echo $tgl_mon2;?></td>
            <td><?php echo $data['inspection_engine_number'];?></td>
            <td><?php echo $data['inspection_engine_model'];?></td>
             <td><?php echo $sid;?></td>
             <td align="center">
         
            
	<a class="btn btn-success btn-xs" href="index.php?pilih=3.2&form_code=<?php echo $data['form_code'];?>&inspection_number=<?php echo $data['inspection_number'];?>&aksi=<?php echo $aksi; ?>&en=<?php echo $data['inspection_engine_number'];?>&em=<?php echo $data['inspection_engine_model'];?>&dt=<?php echo $data['inspection_date'];?>&area=<?php echo $data['inspection_area'];?>&sts=<?php echo $data['inspection_status'];?>&ecu=<?php echo $data['ip_number'];?>&sp=<?php echo $data['faktor_koreksi'];?>&hal=<?php echo $hal ?>&src=<?php echo $src ?>&dt1=<?php echo $tgl_1 ?>&dt2=<?php echo $tgl_2?>&srrex=<?php echo $area;?>"><i class="glyphicon glyphicon-edit"></i> View</a>
			
      
      		
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
							<a href="index.php?pilih=3.1&aksi=search&area=<?php echo $area; ?>&dt1=<?php echo $tgl_1; ?>&dt2=<?php echo $tgl_2; ?>&halaman=<?php echo $i; ?>" style="text-decoration:none"><u><?php echo $i; ?></u></a>
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

