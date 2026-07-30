<?php

	

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'mkm'; 


$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);



header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=duplicate.xls");


	
	

	
	
	
?>
<h3>Data Duplicate Engine Number</h3>
    
<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>Engine Number</th>
    <th>Engine Name</th>
    
    
  </tr>
  <?php
  // Load file koneksi.php

  
  // Buat query untuk menampilkan semua data siswa

 // Eksekusi querynya

    $sql = $pdo->prepare("SELECT engine_number, engine_name FROM master_engine_temp1");
  $sql->execute(); // Eksekusi querynya
  
  $no = 1; // Untuk penomoran tabel, di awal set dengan 1
  while($data = $sql->fetch()){ 
				
   // Untuk penomoran tabel, di awal set dengan 1
// Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$data['engine_number']."</td>";
    echo "<td>".$data['engine_name']."</td>";
    echo "</tr>";
    
    $no++; // Tambah 1 setiap kali looping
  }
  ?>
</table>