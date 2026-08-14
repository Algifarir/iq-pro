<?php
session_start();

if (empty($_SESSION['kopname']) || empty($_SESSION['level'])) {
    header('HTTP/1.1 401 Unauthorized');
    exit('Session habis. Silakan login ulang.');
}

session_write_close();
include "mst_isi.php";
?>
