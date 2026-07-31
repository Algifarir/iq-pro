<?php
include "config/koneksi.php";

$search = isset($_GET['q']) ? mysql_real_escape_string($_GET['q']) : '';
$data = array();

if(strlen($search) >= 3) {
    $query = mysql_query("SELECT engine_number FROM transmisi_master_transmisi WHERE engine_status='Aktif' AND engine_number LIKE '%$search%' ORDER BY id ASC LIMIT 30");
    while($row = mysql_fetch_array($query)) {
        $data[] = array(
            "id" => $row['engine_number'], 
            "text" => $row['engine_number']
        );
    }
}

echo json_encode($data);
?>
