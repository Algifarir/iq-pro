<?php
include "config/koneksi.php";
$term = $_GET['term'];
 
$query = mysql_query("select * from master_engine where engine_number like '%".$term."%' AND engine_status='Aktif' LIMIT 50");
$json = array();
while($produk = mysql_fetch_array($query)){
    $json[] = array(
        'label' => $produk['engine_number'].' - '.$produk['engine_number'], // text sugesti saat user mengetik di input box
        'value' => $produk['engine_number'], // nilai yang akan dimasukkan diinputbox saat user memilih salah satu sugesti
        'engine_model' => $produk['engine_model']
    );
}
header("Content-Type: text/json");
echo json_encode($json);



?>

