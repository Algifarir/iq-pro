<?php

	$area = $_REQUEST['area'];
	$tgl_1 = $_REQUEST['tgl_1'];
	$tgl_2 = $_REQUEST['tgl_2'];
	$nm_file = $area.$tgl_1.$tgl_2;

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'mkm'; 


$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);



header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$nm_file.xls");


	
if($area=="ALL"){
 
$tot_area=$pdo->query("SELECT count(inspection_number) as total_area from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2'")->fetchColumn();
$tot_all_area= $tot_area;
 
$tot_area1=$pdo->query("SELECT count(inspection_number) as total_area1 from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'")->fetchColumn();
$tot_all_area1= $tot_area1;


$tot_area2x=$pdo->query("SELECT count(inspection_number) as total_area2x from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'")->fetchColumn();
$tot_all_area2x= $tot_area2x;

$tot_area2=$pdo->query("SELECT count(inspection_number) as total_area2 from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'")->fetchColumn();
$tot_all_area2= $tot_area2;

$tot_area3=$pdo->query("SELECT count(inspection_number) as total_area3 from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'")->fetchColumn();
$tot_all_area3= $tot_area3;


$tot_area4=$pdo->query("SELECT count(inspection_number) as total_area4 from proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'")->fetchColumn();
$tot_all_area4= $tot_area4;

//testbecnch1

$tot_1=$pdo->query("SELECT count(inspection_number) as tot_1 from proses_inspection_header_log where inspection_area ='Test Bench 01' AND date(inspection_date) between '$tgl_1' AND '$tgl_2'")->fetchColumn();
$t101= $tot_1;
 
$tot_2=$pdo->query("SELECT count(inspection_number) as tot_2 from proses_inspection_header_log where inspection_area ='Test Bench 01' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'")->fetchColumn();
$t102= $tot_2;


$tot_3=$pdo->query("SELECT count(inspection_number) as tot_3 from proses_inspection_header_log where inspection_area ='Test Bench 01' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'")->fetchColumn();
$t103= $tot_3;

$tot_4=$pdo->query("SELECT count(inspection_number) as tot_4 from proses_inspection_header_log where inspection_area ='Test Bench 01' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'")->fetchColumn();
$t104= $tot_4;

$tot_5=$pdo->query("SELECT count(inspection_number) as tot_5 from proses_inspection_header_log where inspection_area ='Test Bench 01' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'")->fetchColumn();
$t105= $tot_5;


$tot_6=$pdo->query("SELECT count(inspection_number) as tot_6 from proses_inspection_header_log where inspection_area ='Test Bench 01' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'")->fetchColumn();
$t106= $tot_6;

//end testbecn1

//testbecnch2

$tot_7=$pdo->query("SELECT count(inspection_number) as tot_7 from proses_inspection_header_log where inspection_area ='Test Bench 02' AND date(inspection_date) between '$tgl_1' AND '$tgl_2'")->fetchColumn();
$t201= $tot_7;
 
$tot_8=$pdo->query("SELECT count(inspection_number) as tot_8 from proses_inspection_header_log where inspection_area ='Test Bench 02' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'")->fetchColumn();
$t202= $tot_8;


$tot_9=$pdo->query("SELECT count(inspection_number) as tot_9 from proses_inspection_header_log where inspection_area ='Test Bench 02' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'")->fetchColumn();
$t203= $tot_9;

$tot_10=$pdo->query("SELECT count(inspection_number) as tot_10 from proses_inspection_header_log where inspection_area ='Test Bench 02' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'")->fetchColumn();
$t204= $tot_10;

$tot_11=$pdo->query("SELECT count(inspection_number) as tot_11 from proses_inspection_header_log where inspection_area ='Test Bench 02' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'")->fetchColumn();
$t205= $tot_11;


$tot_12=$pdo->query("SELECT count(inspection_number) as tot_12 from proses_inspection_header_log where inspection_area ='Test Bench 02' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'")->fetchColumn();
$t206= $tot_12;

//end testbecn2
	
	
//testbecnch3

$tot_13=$pdo->query("SELECT count(inspection_number) as tot_13 from proses_inspection_header_log where inspection_area ='Test Bench 03' AND date(inspection_date) between '$tgl_1' AND '$tgl_2'")->fetchColumn();
$t301= $tot_13;
 
$tot_14=$pdo->query("SELECT count(inspection_number) as tot_4 from proses_inspection_header_log where inspection_area ='Test Bench 03' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'")->fetchColumn();
$t302= $tot_14;


$tot_15=$pdo->query("SELECT count(inspection_number) as tot_15 from proses_inspection_header_log where inspection_area ='Test Bench 03' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'")->fetchColumn();
$t303= $tot_15;

$tot_16=$pdo->query("SELECT count(inspection_number) as tot_16 from proses_inspection_header_log where inspection_area ='Test Bench 03' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'")->fetchColumn();
$t304= $tot_16;

$tot_17=$pdo->query("SELECT count(inspection_number) as tot_17 from proses_inspection_header_log where inspection_area ='Test Bench 03' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'")->fetchColumn();
$t305= $tot_17;


$tot_18=$pdo->query("SELECT count(inspection_number) as tot_18 from proses_inspection_header_log where inspection_area ='Test Bench 03' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'")->fetchColumn();
$t306= $tot_18;

//end testbecn3
	
//testbecnch4

$tot_19=$pdo->query("SELECT count(inspection_number) as tot_19 from proses_inspection_header_log where inspection_area ='Test Bench 04' AND date(inspection_date) between '$tgl_1' AND '$tgl_2'")->fetchColumn();
$t401= $tot_19;
 
$tot_20=$pdo->query("SELECT count(inspection_number) as tot_20 from proses_inspection_header_log where inspection_area ='Test Bench 04' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'")->fetchColumn();
$t402= $tot_20;


$tot_21=$pdo->query("SELECT count(inspection_number) as tot_21 from proses_inspection_header_log where inspection_area ='Test Bench 04' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'")->fetchColumn();
$t403= $tot_21;

$tot_22=$pdo->query("SELECT count(inspection_number) as tot_22 from proses_inspection_header_log where inspection_area ='Test Bench 04' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'")->fetchColumn();
$t404= $tot_22;

$tot_23=$pdo->query("SELECT count(inspection_number) as tot_23 from proses_inspection_header_log where inspection_area ='Test Bench 04' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'")->fetchColumn();
$t405= $tot_23;


$tot_24=$pdo->query("SELECT count(inspection_number) as tot_24 from proses_inspection_header_log where inspection_area ='Test Bench 04' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'")->fetchColumn();
$t406= $tot_24;

//end testbecn4
	
//testbecnch5

$tot_25=$pdo->query("SELECT count(inspection_number) as tot_25 from proses_inspection_header_log where inspection_area ='Test Bench 05' AND date(inspection_date) between '$tgl_1' AND '$tgl_2'")->fetchColumn();
$t501= $tot_25;
 
$tot_26=$pdo->query("SELECT count(inspection_number) as tot_26 from proses_inspection_header_log where inspection_area ='Test Bench 05' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'")->fetchColumn();
$t502= $tot_26;


$tot_27=$pdo->query("SELECT count(inspection_number) as tot_27 from proses_inspection_header_log where inspection_area ='Test Bench 05' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'")->fetchColumn();
$t503= $tot_27;

$tot_28=$pdo->query("SELECT count(inspection_number) as tot_28 from proses_inspection_header_log where inspection_area ='Test Bench 05' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'")->fetchColumn();
$t504= $tot_28;

$tot_29=$pdo->query("SELECT count(inspection_number) as tot_29 from proses_inspection_header_log where inspection_area ='Test Bench 05' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'")->fetchColumn();
$t505= $tot_29;


$tot_30=$pdo->query("SELECT count(inspection_number) as tot_30 from proses_inspection_header_log where inspection_area ='Test Bench 05' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'")->fetchColumn();
$t506= $tot_30;

//end testbecn5

//testbecnch6

$tot_31=$pdo->query("SELECT count(inspection_number) as tot_31 from proses_inspection_header_log where inspection_area ='Test Bench 06' AND date(inspection_date) between '$tgl_1' AND '$tgl_2'")->fetchColumn();
$t601= $tot_31;
 
$tot_32=$pdo->query("SELECT count(inspection_number) as tot_32 from proses_inspection_header_log where inspection_area ='Test Bench 06' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'")->fetchColumn();
$t602= $tot_32;


$tot_33=$pdo->query("SELECT count(inspection_number) as tot_33 from proses_inspection_header_log where inspection_area ='Test Bench 06' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'")->fetchColumn();
$t603= $tot_33;

$tot_34=$pdo->query("SELECT count(inspection_number) as tot_34 from proses_inspection_header_log where inspection_area ='Test Bench 06' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'")->fetchColumn();
$t604= $tot_34;

$tot_35=$pdo->query("SELECT count(inspection_number) as tot_35 from proses_inspection_header_log where inspection_area ='Test Bench 06' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'")->fetchColumn();
$t605= $tot_35;


$tot_36=$pdo->query("SELECT count(inspection_number) as tot_36 from proses_inspection_header_log where inspection_area ='Test Bench 06' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'")->fetchColumn();
$t606= $tot_36;

//end testbecn6

//testbecnch7

$tot_37=$pdo->query("SELECT count(inspection_number) as tot_37 from proses_inspection_header_log where inspection_area ='Test Bench 07' AND date(inspection_date) between '$tgl_1' AND '$tgl_2'")->fetchColumn();
$t701= $tot_37;
 
$tot_38=$pdo->query("SELECT count(inspection_number) as tot_38 from proses_inspection_header_log where inspection_area ='Test Bench 07' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'")->fetchColumn();
$t702= $tot_38;


$tot_39=$pdo->query("SELECT count(inspection_number) as tot_39 from proses_inspection_header_log where inspection_area ='Test Bench 07' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'")->fetchColumn();
$t703= $tot_39;

$tot_40=$pdo->query("SELECT count(inspection_number) as tot_40 from proses_inspection_header_log where inspection_area ='Test Bench 07' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'")->fetchColumn();
$t704= $tot_40;

$tot_41=$pdo->query("SELECT count(inspection_number) as tot_41 from proses_inspection_header_log where inspection_area ='Test Bench 07' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'")->fetchColumn();
$t705= $tot_41;


$tot_42=$pdo->query("SELECT count(inspection_number) as tot_42 from proses_inspection_header_log where inspection_area ='Test Bench 07' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'")->fetchColumn();
$t706= $tot_42;

//end testbecn7

	
}else{

$tot_area=$pdo->query("SELECT count(inspection_number) as total_area from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2'")->fetchColumn();
$tot_all_area= $tot_area;
 
$tot_area1=$pdo->query("SELECT count(inspection_number) as total_area1 from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='OPEN'")->fetchColumn();
$tot_all_area1= $tot_area1;


$tot_area2x=$pdo->query("SELECT count(inspection_number) as total_area2x from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='SDI'")->fetchColumn();
$tot_all_area2x= $tot_area2x;

$tot_area2=$pdo->query("SELECT count(inspection_number) as total_area2 from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='ENGINE OK'")->fetchColumn();
$tot_all_area2= $tot_area2;

$tot_area3=$pdo->query("SELECT count(inspection_number) as total_area3 from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='REWORK'")->fetchColumn();
$tot_all_area3= $tot_area3;


$tot_area4=$pdo->query("SELECT count(inspection_number) as total_area4 from proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' AND inspection_status ='PENDING'")->fetchColumn();
$tot_all_area4= $tot_area4;

}

	
	
	
?>


<h3>Data Log&nbsp;<?php echo $area;?> &nbsp;&nbsp;&nbsp;<?php echo $tgl_1;?> &nbsp;to&nbsp;<?php echo $tgl_2;?></h3>
  <?php
  
  if($area=="ALL"){
  
  ?>
<table  border="1">
  <tr>
  	<td>&nbsp;</td>
    <td>Total Engine Produced</td>
    <td>Engine Open</td>
	<td>Engine QFL2</td>
    <td>Engine OK</td>
    <td>Engine Rework</td>
    <td>Engine Pending</td>
  </tr>
  <tr>
 	<td>&nbsp;</td>
    <td><?php echo $tot_all_area ?></td>
    <td><?php echo $tot_all_area1 ?></td>
	<td><?php echo $tot_all_area2x ?></td>
    <td><?php echo $tot_all_area2 ?></td>
    <td><?php echo $tot_all_area3 ?></td>
    <td><?php echo $tot_all_area4 ?></td>
	
  </tr>
   <tr>
 	<td>Test Bench1</td>
    <td><?php echo $t101 ?></td>
    <td><?php echo $t102 ?></td>
	<td><?php echo $t103 ?></td>
    <td><?php echo $t104 ?></td>
    <td><?php echo $t105 ?></td>
    <td><?php echo $t106 ?></td>
  </tr>
  <tr>
 	<td>Test Bench2</td>
    <td><?php echo $t201 ?></td>
    <td><?php echo $t202 ?></td>
	<td><?php echo $t203 ?></td>
    <td><?php echo $t204 ?></td>
    <td><?php echo $t205 ?></td>
    <td><?php echo $t206 ?></td>
  </tr>
  <tr>
 	<td>Test Bench3</td>
    <td><?php echo $t301 ?></td>
    <td><?php echo $t302 ?></td>
	<td><?php echo $t303 ?></td>
    <td><?php echo $t304 ?></td>
    <td><?php echo $t305 ?></td>
    <td><?php echo $t306 ?></td>
  </tr>
   <tr>
 	<td>Test Bench4</td>
    <td><?php echo $t401 ?></td>
    <td><?php echo $t402 ?></td>
	<td><?php echo $t403 ?></td>
    <td><?php echo $t404 ?></td>
    <td><?php echo $t405 ?></td>
    <td><?php echo $t406 ?></td>
  </tr>
   <tr>
 	<td>Test Bench5</td>
    <td><?php echo $t501 ?></td>
    <td><?php echo $t502 ?></td>
	<td><?php echo $t503 ?></td>
    <td><?php echo $t504 ?></td>
    <td><?php echo $t505 ?></td>
    <td><?php echo $t506 ?></td>
  </tr>
  <tr>
 	<td>Test Bench6</td>
    <td><?php echo $t601 ?></td>
    <td><?php echo $t602 ?></td>
	<td><?php echo $t603 ?></td>
    <td><?php echo $t604 ?></td>
    <td><?php echo $t605 ?></td>
    <td><?php echo $t606 ?></td>
  </tr>
  <tr>
 	<td>Test Bench7</td>
    <td><?php echo $t701 ?></td>
    <td><?php echo $t702 ?></td>
	<td><?php echo $t703 ?></td>
    <td><?php echo $t704 ?></td>
    <td><?php echo $t705 ?></td>
    <td><?php echo $t706 ?></td>
  </tr>
</table>

<?php
}else{
?>
<table  border="1">
  <tr>
    <td>Total Engine Produced</td>
    <td>Engine Open</td>
	<td>Engine QFL2</td>
    <td>Engine OK</td>
    <td>Engine Rework</td>
    <td>Engine Pending</td>
  </tr>
  <tr>
    <td><?php echo $tot_all_area ?></td>
    <td><?php echo $tot_all_area1 ?></td>
	<td><?php echo $tot_all_area2x ?></td>
    <td><?php echo $tot_all_area2 ?></td>
    <td><?php echo $tot_all_area3 ?></td>
    <td><?php echo $tot_all_area4 ?></td>
  </tr>
</table>
<?php

}
?>
</p>
<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>No. Inspection</th>
    <th>Inspection Date</th>
	<th>Inspection Time</th>
    <th>Test Bench</th>
    <th>No. Engine</th>
    <th>No. Model</th>
    <th>Description</th>
    <th>Operator</th>
    <th>Status</th>
    
  </tr>
  <?php
  // Load file koneksi.php

  
  // Buat query untuk menampilkan semua data siswa

 // Eksekusi querynya
if($area=="ALL"){
    $sql = $pdo->prepare("SELECT * FROM proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' order by id DESC");
	
	
}else{
  $sql = $pdo->prepare("SELECT * FROM proses_inspection_header_log where inspection_area ='$area' AND date(inspection_date) between '$tgl_1' AND '$tgl_2' order by id DESC");

}
  $sql->execute(); // Eksekusi querynya
  
  $no = 1; // Untuk penomoran tabel, di awal set dengan 1
  while($data = $sql->fetch()){ 
				
							$tgl_mon1 = strtotime($data['inspection_date']);
							$wkt_mon1 = strtotime($data['inspection_date']);
							
							$tgl_mon2 = date('Y-m-d',$tgl_mon1); 
							$wkt_mon2 = date('h:i:s',$wkt_mon1);
							
							$fn = $data['final_judgement'];
							if($fn=="SDI"){
								
									$sid="QFL2";
							}else{
								
									$sid = $fn;
							}
							
   // Untuk penomoran tabel, di awal set dengan 1
// Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$data['inspection_number']."</td>";
    echo "<td>".$tgl_mon2."</td>";
	echo "<td>".$wkt_mon2."</td>";
    echo "<td>".$data['inspection_area']."</td>";
    echo "<td>".$data['inspection_engine_number']."</td>";
    echo "<td>".$data['inspection_engine_model']."</td>";
	echo "<td>".$data['desc_running']."</td>";
    echo "<td>".$data['operator_name']."</td>";
	echo "<td>".$sid."</td>";
    echo "</tr>";
    
    $no++; // Tambah 1 setiap kali looping
  }
  ?>
</table>