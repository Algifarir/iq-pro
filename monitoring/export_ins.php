<?php

	
	$tgl_1 = $_REQUEST['tgl_1'];
	$tgl_2 = $_REQUEST['tgl_2'];
	$area ="Inspection";
	$nm_file = $area.$tgl_1.$tgl_2;

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'mkm'; 


$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);



header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$nm_file.xls");


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
	

	
	
	
?>
<h3>Data Inspection&nbsp;&nbsp;From&nbsp;&nbsp;<?php echo $tgl_1;?> &nbsp;to&nbsp;<?php echo $tgl_2;?></h3>
   
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
</p>
<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>OPERATOR</th>
    <th>OPEN</th>
    <th>QFL2</th>
    <th>ENGINE OK</th>
    <th>REWORK</th>
    <th>PENDING</th>
    
  </tr>
  <?php
  // Load file koneksi.php

  
  // Buat query untuk menampilkan semua data siswa

 // Eksekusi querynya

    $sqlx = $pdo->prepare("select created_fname,
  count(case when inspection_status = 'OPEN' THEN 1 END) sts_open,
  count(case when inspection_status = 'SDI' THEN 1 END) sts_sdi,
  count(case when inspection_status = 'ENGINE OK' THEN 1 END) sts_ok,
  count(case when inspection_status = 'REWORK' THEN 1 END) sts_rework,
  count(case when inspection_status = 'PENDING' THEN 1 END) sts_pending FROM proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' group by created_fname");
  $sqlx->execute(); // Eksekusi querynya
  
  $no = 1; // Untuk penomoran tabel, di awal set dengan 1
  while($datas = $sqlx->fetch()){ 
				
   // Untuk penomoran tabel, di awal set dengan 1
// Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$datas['created_fname']."</td>";
    echo "<td>".$datas['sts_open']."</td>";
    echo "<td>".$datas['sts_sdi']."</td>";
    echo "<td>".$datas['sts_ok']."</td>";
    echo "<td>".$datas['sts_rework']."</td>";
	echo "<td>".$datas['sts_pending']."</td>";
    echo "</tr>";
    
    $no++; // Tambah 1 setiap kali looping
  }
  ?>
</table>
</p>
<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>No. Inspection</th>
    <th>Date</th>
	<th>Time</th>
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

    $sql = $pdo->prepare("SELECT * FROM proses_inspection_header_log where date(inspection_date) between '$tgl_1' AND '$tgl_2' order by id DESC");
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