<?php
	include "config/koneksi.php";
	$query_del=mysql_query("delete from report_inspection");
	$area = "Detail Inspection";;
	$tgl_1 = $_REQUEST['tgl_1'];
	$tgl_2 = $_REQUEST['tgl_2'];
	$nm_file = $area.$tgl_1.$tgl_2;
	$ts = date('d F Y, h:i:s A');;

$query_pt=mysql_query("insert into report_inspection select inspection_engine_number, inspection_engine_model, date(dt_proses) as tgl,inspection_area,
max(CASE WHEN description ='PERIKSA OIL LEVEL' THEN hasil_running_ok END) as R1,
max(CASE WHEN description ='KONDISI STARTING' THEN hasil_running_ok END) as R2,
max(CASE WHEN description ='PELUMASAN PADA ROCKER SHAFT' THEN hasil_running_ok END) as R3,
max(CASE WHEN description ='KEBOCORAN AIR,OLI,FUEL DAN GAS' THEN hasil_running_ok END) as R4,
max(CASE WHEN description ='BEKERJANYA SUPPLY PUMP' THEN hasil_running_ok END) as R5,
max(CASE WHEN description ='KEBOCORAN DARI HOLDER COMMON RAIL' THEN hasil_running_ok END) as R6,
max(CASE WHEN description ='KEBOCORAN DARI EYE BOLT' THEN hasil_running_ok END) as R7,
max(CASE WHEN description ='KEBOCORAN DARI PIPE SUPPLY PUMP' THEN hasil_running_ok END) as R8,
max(CASE WHEN description ='KEBOCORAN DARI HOSE FUEL RETURN' THEN hasil_running_ok END) as R9,
max(CASE WHEN description like '%TIMING GEAR CASE%' THEN hasil_running_ok END) as R10,
max(CASE WHEN description like '%SUPPLY PUMP BODY%' THEN hasil_running_ok END) as R11,
max(case WHEN description ='KEBOCORAN DARI PLUG' THEN hasil_running_ok END) as R12,
max(case WHEN description ='KEBOCORAN DARI EGR COOLING' THEN hasil_running_ok END) as R13,
max(case WHEN description ='TIME SEC.FUEL CONSUMP.100 CC' THEN hasil_performa_test END) as P1,
max(case WHEN description ='TIME SEC.FUEL CONSUMP. 100 CC' AND rpm='1500' THEN hasil_performa_test END) as P2,
max(case WHEN description ='TIME SEC.FUEL CONSUMP. 100 CC' AND rpm='2500' THEN hasil_performa_test END) as P3,
max(case WHEN description ='FUEL PRESSURE KPA' THEN hasil_performa_test END) as P4,
max(case WHEN description ='VACUUM PRESSURE' THEN hasil_performa_test END) as P5,
max(case WHEN description ='TORQUE (Kgm)' AND rpm='1000' THEN hasil_performa_test END) as P6,
max(case WHEN description =' MAX  TORQUE (Kgm)' THEN hasil_performa_test END) as P7,
max(case WHEN description ='TORQUE (Kgm)' AND rpm='2500' THEN hasil_performa_test END) as P8,
max(case WHEN description ='MAX POWER (PS)' AND rpm='2500' THEN hasil_performa_test END) as P9,
max(case WHEN description ='HIGH IDLE' THEN hasil_performa_test END) as P10,
max(case WHEN description ='LOW IDLE'  THEN hasil_performa_test END) as P11,
max(case WHEN description ='DIESEL SMOKE' THEN hasil_performa_test END) as P12,
max(case WHEN description ='TEMP INTERCOOLER RPM 1500' THEN hasil_performa_test END) as P13,
max(case WHEN description ='TEMP INTERCOOLER RPM 2500' THEN hasil_performa_test END) as P14,
max(case WHEN description ='OIL PRESS   Kg/cm&sup2; MAX POWER 2500' THEN hasil_performa_test END) as P15,
max(case WHEN description ='WATER TEMP  &deg;C LOW IDLE 625 - 675' THEN hasil_performa_test END) as P16,
max(case WHEN description ='OIL PRESS   Kg/cm&sup2; LOW IDLE 625-675' THEN hasil_performa_test END) as P17,
max(case WHEN description ='WATER TEMP &deg;C HIGH IDLE 3050 - 3150' THEN hasil_performa_test END) as P18,
inspection_status
 from proses_inspection_detail_log where inspection_status ='ENGINE OK' AND date(dt_proses) between '$tgl_1' AND '$tgl_2'
GROUP BY inspection_engine_number");

$query_pt2=mysql_query("insert into report_inspection select inspection_engine_number, inspection_engine_model, date(dt_proses) as tgl,inspection_area,
max(CASE WHEN description ='PERIKSA OIL LEVEL' THEN hasil_running_ok END) as R1,
max(CASE WHEN description ='KONDISI STARTING' THEN hasil_running_ok END) as R2,
max(CASE WHEN description ='PELUMASAN PADA ROCKER SHAFT' THEN hasil_running_ok END) as R3,
max(CASE WHEN description ='KEBOCORAN AIR,OLI,FUEL DAN GAS' THEN hasil_running_ok END) as R4,
max(CASE WHEN description ='BEKERJANYA SUPPLY PUMP' THEN hasil_running_ok END) as R5,
max(CASE WHEN description ='KEBOCORAN DARI HOLDER COMMON RAIL' THEN hasil_running_ok END) as R6,
max(CASE WHEN description ='KEBOCORAN DARI EYE BOLT' THEN hasil_running_ok END) as R7,
max(CASE WHEN description ='KEBOCORAN DARI PIPE SUPPLY PUMP' THEN hasil_running_ok END) as R8,
max(CASE WHEN description ='KEBOCORAN DARI HOSE FUEL RETURN' THEN hasil_running_ok END) as R9,
max(CASE WHEN description like '%TIMING GEAR CASE%' THEN hasil_running_ok END) as R10,
max(CASE WHEN description like '%SUPPLY PUMP BODY%' THEN hasil_running_ok END) as R11,
max(case WHEN description ='KEBOCORAN DARI PLUG' THEN hasil_running_ok END) as R12,
max(case WHEN description ='KEBOCORAN DARI EGR COOLING' THEN hasil_running_ok END) as R13,
max(case WHEN description ='TIME SEC.FUEL CONSUMP.100 CC' THEN hasil_performa_test END) as P1,
max(case WHEN description ='TIME SEC.FUEL CONSUMP. 100 CC' AND rpm='1500' THEN hasil_performa_test END) as P2,
max(case WHEN description ='TIME SEC.FUEL CONSUMP. 100 CC' AND rpm='2500' THEN hasil_performa_test END) as P3,
max(case WHEN description ='FUEL PRESSURE KPA' THEN hasil_performa_test END) as P4,
max(case WHEN description ='VACUUM PRESSURE' THEN hasil_performa_test END) as P5,
max(case WHEN description ='TORQUE (Kgm)' AND rpm='1000' THEN hasil_performa_test END) as P6,
max(case WHEN description =' MAX  TORQUE (Kgm)' THEN hasil_performa_test END) as P7,
max(case WHEN description ='TORQUE (Kgm)' AND rpm='2500' THEN hasil_performa_test END) as P8,
max(case WHEN description ='MAX POWER (PS)' AND rpm='2500' THEN hasil_performa_test END) as P9,
max(case WHEN description ='HIGH IDLE' THEN hasil_performa_test END) as P10,
max(case WHEN description ='LOW IDLE'  THEN hasil_performa_test END) as P11,
max(case WHEN description ='DIESEL SMOKE' THEN hasil_performa_test END) as P12,
max(case WHEN description ='TEMP INTERCOOLER RPM 1500' THEN hasil_performa_test END) as P13,
max(case WHEN description ='TEMP INTERCOOLER RPM 2500' THEN hasil_performa_test END) as P14,
max(case WHEN description ='OIL PRESS   Kg/cm&sup2; MAX POWER 2500' THEN hasil_performa_test END) as P15,
max(case WHEN description ='WATER TEMP  &deg;C LOW IDLE 625 - 675' THEN hasil_performa_test END) as P16,
max(case WHEN description ='OIL PRESS   Kg/cm&sup2; LOW IDLE 625-675' THEN hasil_performa_test END) as P17,
max(case WHEN description ='WATER TEMP &deg;C HIGH IDLE 3050 - 3150' THEN hasil_performa_test END) as P18,
inspection_status
 from proses_inspection_detail where inspection_status in ('PENDING','REWORK','SDI') AND date(dt_proses) between '$tgl_1' AND '$tgl_2'
GROUP BY inspection_engine_number");


$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'mkm'; 


$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);



header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$nm_file.xls");



	
	
	
?>


<h3>Data Detail&nbsp;<?php echo $area;?> &nbsp;&nbsp;&nbsp;<?php echo $tgl_1;?> &nbsp;to&nbsp;<?php echo $tgl_2;?></h3>
<p>
Print : <?php echo $ts;?>

<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>ENGINE NUMBER</th>
	<th>ENGINE MODEL</th>
	<th>DATE</th>
	<th>TEST BENCH</th>
    <th>PERIKSA OIL LEVEL</th>
    <th>KONDISI STARTING</th>
    <th>PELUMASAN PADA ROCKER SHAFT</th>
	<th>KEBOCORAN AIR,OLI,FUEL DAN GAS</th>
	<th>BEKERJANYA SUPPLY PUMP</th>
	<th>KEBOCORAN DARI HOLDER COMMON RAIL</th>
	<th>KEBOCORAN DARI EYE BOLT</th>
    <th>KEBOCORAN DARI PIPE SUPPLY PUMP</th>
	
	<th>KEBOCORAN DARI HOSE FUEL RETURN</th>
    <th>KEBOCORAN TIMING GEAR CASE</th>
	<th>KEBOCORAN SUPPLY PUMP BODY</th>
    <th>KEBOCORAN DARI PLUG</th>
	<th>KEBOCORAN DARI EGR COOLING</th>
	<th>TIME SEC.FUEL CONSUMP.100 CC(Rpm 1000)</th>
	<th>TIME SEC.FUEL CONSUMP. 100 CC(Rpm 1500)</th>
	<th>TIME SEC.FUEL CONSUMP. 100 CC(Rpm 2500)</th>
    <th>FUEL PRESSURE KPA</th>
	
	<th>VACUUM PRESSURE</th>
    <th>TORQUE (Kgm) Rpm 1000</th>
	<th>MAX  TORQUE (Kgm) Rpm 1500</th>
    <th>TORQUE (Kgm) Rpm 2500</th>
	<th>MAX POWER (PS) Rpm 2500</th>
	<th>HIGH IDLE</th>
	<th>LOW IDLE</th>
	<th>DIESEL SMOKE Rpm 1305</th>
	<th>TEMP INTERCOOLER RPM 1500</th>
    <th>TEMP INTERCOOLER RPM 2500</th>
	
	<th>OIL PRESS   Kg/cm&sup2; MAX POWER 2500</th>
	<th>WATER TEMP  &deg;C LOW IDLE 625 - 675</th>
	<th>OIL PRESS   Kg/cm&sup2; LOW IDLE 625-675</th>
    <th>WATER TEMP &deg;C HIGH IDLE 3050 - 3150</th>
	<th>STATUS</th>
	
    
  </tr>
  <?php
  // Load file koneksi.php

  
  // Buat query untuk menampilkan semua data siswa

 // Eksekusi querynya

  $sql = $pdo->prepare("select * from report_inspection");
	
	

  $sql->execute(); // Eksekusi querynya
  
  $no = 1; // Untuk penomoran tabel, di awal set dengan 1
  while($data = $sql->fetch()){ 
				
   // Untuk penomoran tabel, di awal set dengan 1
// Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$data['inspection_engine_number']."</td>";
	 echo "<td>".$data['inspection_engine_model']."</td>";
	echo "<td>".$data['tgl']."</td>";
	echo "<td>".$data['inspection_area']."</td>";
    echo "<td>".$data['R1']."</td>";
    echo "<td>".$data['R2']."</td>";
    echo "<td>".$data['R3']."</td>";
	echo "<td>".$data['R4']."</td>";
	echo "<td>".$data['R5']."</td>";
	echo "<td>".$data['R6']."</td>";
	echo "<td>".$data['R7']."</td>";
	echo "<td>".$data['R8']."</td>";
    echo "<td>".$data['R9']."</td>";
    echo "<td>".$data['R10']."</td>";
	echo "<td>".$data['R11']."</td>";
	echo "<td>".$data['R12']."</td>";
	echo "<td>".$data['R13']."</td>";
	echo "<td>".$data['P1']."</td>";
	echo "<td>".$data['P2']."</td>";
	echo "<td>".$data['P3']."</td>";
	echo "<td>".$data['P4']."</td>";
	echo "<td>".$data['P5']."</td>";
	echo "<td>".$data['P6']."</td>";
	echo "<td>".$data['P7']."</td>";
	echo "<td>".$data['P8']."</td>";
	echo "<td>".$data['P9']."</td>";
	echo "<td>".$data['P10']."</td>";
	echo "<td>".$data['P11']."</td>";
	echo "<td>".$data['P12']."</td>";
	echo "<td>".$data['P13']."</td>";
	echo "<td>".$data['P14']."</td>";
	echo "<td>".$data['P15']."</td>";
	echo "<td>".$data['P16']."</td>";
	echo "<td>".$data['P17']."</td>";
	echo "<td>".$data['P18']."</td>";
	echo "<td>".$data['inspection_status']."</td>";
    echo "</tr>";
    
    $no++; // Tambah 1 setiap kali looping
  }
  ?>
</table>