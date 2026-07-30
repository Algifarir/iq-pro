<?php
	include "config/koneksi.php";
	$query_del=mysql_query("delete from tm_report_inspection");
	$area = "Detail Inspection";;
	$tgl_1 = $_REQUEST['tgl_1'];
	$tgl_2 = $_REQUEST['tgl_2'];
	$nm_file = $area.$tgl_1.$tgl_2;
	$ts = date('d F Y, h:i:s A');;

$query_pt=mysql_query("insert into tm_report_inspection select inspection_engine_number, inspection_engine_model, date(dt_proses) as tgl,inspection_area,
max(CASE WHEN verifikasi ='Kebocoran U/Gear Shift' THEN hasil_running_ok END) as R1,
max(CASE WHEN verifikasi ='Kebocoran Plate Poppet' THEN hasil_running_ok END) as R2,
max(CASE WHEN verifikasi ='Kebocoran Front Retainer' THEN hasil_running_ok END) as R3,
max(CASE WHEN verifikasi ='Kebocoran Rear Cover' THEN hasil_running_ok END) as R4,
max(CASE WHEN verifikasi ='Pastikan M035 = 3.5 L & M025 = 3.7 L' THEN hasil_running_ok END) as R5,
max(CASE WHEN verifikasi ='Ada Marking White Paintel' THEN hasil_running_ok END) as R6,
max(CASE WHEN verifikasi ='Pastikan Oli Transmisi Terisi(Standard)' THEN hasil_running_ok END) as R7,
max(CASE WHEN verifikasi ='Pastikan Drain Plug Di Torsi' THEN hasil_running_ok END) as R8,
max(CASE WHEN verifikasi ='Posisi Netral Berfungsi(Lamp ON)' THEN hasil_running_ok END) as R9,
max(CASE WHEN verifikasi like '%ALL Over Shift Berfungsi Normal%' THEN hasil_running_ok END) as R10,
max(CASE WHEN verifikasi like '%Tidak Ada Noise Abnormal%' THEN hasil_running_ok END) as R11,
max(case WHEN verifikasi ='Tidak Ada Vibrasi Abnormal' THEN hasil_running_ok END) as R12,
max(case WHEN verifikasi ='Back Lamp Switch Berfungsi(Lamp ON)' THEN hasil_running_ok END) as R13,
max(case WHEN verifikasi ='Interlock Berfungsi Normal(Feeling)' THEN hasil_running_ok END) as P1,
max(case WHEN verifikasi ='Ratio Gear Berfungsi Sesuai Table Gear' THEN hasil_running_ok END) as P2,
inspection_status
 from transmisi_proses_inspection_detail_log where inspection_status ='TM TEST OK' AND date(dt_proses) between '$tgl_1' AND '$tgl_2'
GROUP BY inspection_engine_number");




$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'mkm'; 


$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);



header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$nm_file.xls");



	
	
	
?>


<h3>Data &nbsp;<?php echo $area;?> &nbsp;&nbsp;&nbsp;<?php echo $tgl_1;?> &nbsp;to&nbsp;<?php echo $tgl_2;?></h3>
<p>
Print : <?php echo $ts;?>

<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>TM Number</th>
	<th>Variant</th>
	<th>DATE</th>
	<th>SHOP</th>
    <th>Kebocoran U/Gear Shift</th>
    <th>Kebocoran Plate Poppet</th>
    <th>Kebocoran Front Retainer</th>
	<th>Kebocoran Rear Cover</th>
	<th>Ada Marking White Paintel</th>
	<th>Pastikan Oli Transmisi Terisi(Standard)</th>
	<th>Pastikan Drain Plug Di Torsi</th>
    <th>Posisi Netral Berfungsi(Lamp ON)</th>
	
	<th>ALL Over Shift Berfungsi Normal</th>
    <th>Tidak Ada Noise Abnormal</th>
	<th>Tidak Ada Vibrasi Abnormal</th>
    <th>Back Lamp Switch Berfungsi(Lamp ON)</th>
	<th>SpeedoMeter Berfungsi(STD RPM)</th>
	<th>Interlock Berfungsi Normal(Feeling)</th>
	<th>Ratio Gear Berfungsi Sesuai Table Gear</th>
	
	<th>STATUS</th>
	
    
  </tr>
  <?php
  // Load file koneksi.php

  
  // Buat query untuk menampilkan semua data siswa

 // Eksekusi querynya

  $sql = $pdo->prepare("select * from tm_report_inspection");
	
	

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
	echo "<td>".$data['inspection_status']."</td>";
    echo "</tr>";
    
    $no++; // Tambah 1 setiap kali looping
  }
  ?>
</table>