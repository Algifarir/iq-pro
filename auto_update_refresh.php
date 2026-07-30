<?php
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 30; URL=");
include "config/koneksi.php";
$tgl = date_default_timezone_set('Asia/Jakarta');
$date = new DateTime();
$Tgl_now = date_format($date,'Y-m-d h:i:s');
$Tgl_now2 = date_format($date,'Y-m-d');
$txt = "Last Update";

$qubah=mysql_query("update proses_inspection_header set inspection_status='PENDING', final_judgement='PENDING' where final_judgement='OPEN' AND DATE(inspection_date) < CURDATE()");
												
					if($qubah)	{
										//header("location:../index.php?pilih=2.7");
										echo $txt." ".$Tgl_now;
					}else{
										echo "Update Status Failded";
								}


?>
