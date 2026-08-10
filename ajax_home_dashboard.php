<?php
date_default_timezone_set('Asia/Jakarta');
session_start();

$level = isset($_SESSION['level']) ? $_SESSION['level'] : '';
$kopname = isset($_SESSION['kopname']) ? $_SESSION['kopname'] : '';

if (empty($kopname) || empty($level)) {
    http_response_code(401);
    exit('Session habis. Silakan login ulang.');
}

session_write_close();

include "mst_isi.php";
?>
