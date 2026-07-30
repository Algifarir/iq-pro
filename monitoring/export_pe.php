<?php

	$area = "Performance Test";;
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



	
	
	
?>


<h3>Data Detail&nbsp;<?php echo $area;?> &nbsp;&nbsp;&nbsp;<?php echo $tgl_1;?> &nbsp;to&nbsp;<?php echo $tgl_2;?></h3>


<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>No. Inspection</th>
    <th>Engine Number/th>
    <th>Description</th>
    <th>RPM</th>
	<th>Spec Min</th>
	<th>Spec Max</th>
	<th>Result</th>
	<th>Nilai Q</th>
    <th>Test Bench/th>
    
  </tr>
  <?php
  // Load file koneksi.php

  
  // Buat query untuk menampilkan semua data siswa

 // Eksekusi querynya

  $sql = $pdo->prepare("SELECT * FROM proses_inspection_detail where date(dt_proses) between '$tgl_1' AND '$tgl_2' and group_tab='Performance'");
	
	

  $sql->execute(); // Eksekusi querynya
  
  $no = 1; // Untuk penomoran tabel, di awal set dengan 1
  while($data = $sql->fetch()){ 
				
   // Untuk penomoran tabel, di awal set dengan 1
// Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$data['inspection_number']."</td>";
    echo "<td>".$data['inspection_engine_number']."</td>";
    echo "<td>".$data['description']."</td>";
    echo "<td>".$data['rpm']."</td>";
    echo "<td>".$data['spec_start']."</td>";
	echo "<td>".$data['spec_finish']."</td>";
	echo "<td>".$data['hasil_performa_test']."</td>";
	echo "<td>".$data['hasil_q']."</td>";
	echo "<td>".$data['inspection_area']."</td>";
    echo "</tr>";
    
    $no++; // Tambah 1 setiap kali looping
  }
  ?>
</table>