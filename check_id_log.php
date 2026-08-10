<?php
include "config/koneksi.php";

echo "Mengecek duplikat ID di tabel log...\n";

$tables = ['proses_inspection_header_log', 'proses_inspection_detail_log'];

foreach($tables as $tbl) {
    $q = mysql_query("SELECT id, COUNT(*) as cnt FROM $tbl GROUP BY id HAVING cnt > 1 LIMIT 1");
    if(mysql_num_rows($q) > 0) {
        $r = mysql_fetch_assoc($q);
        echo "BAHAYA: Tabel $tbl memiliki duplikat ID (contoh ID " . $r['id'] . " muncul " . $r['cnt'] . " kali).\n";
    } else {
        echo "AMAN: Tabel $tbl TIDAK memiliki duplikat ID.\n";
    }
}
?>
