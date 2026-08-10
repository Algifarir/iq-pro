<?php
include "config/koneksi.php";
$q = mysql_query("SHOW FULL PROCESSLIST");
while($r = mysql_fetch_assoc($q)){
    print_r($r);
}
?>
