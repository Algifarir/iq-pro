<?php
session_start();
include "config/koneksi.php";

header("Content-Type: application/json");

if (empty($_SESSION['kopname']) || empty($_SESSION['level'])) {
    echo json_encode(array('ok' => false, 'message' => 'Session habis, login ulang.'));
    exit;
}

$code = isset($_POST['code']) ? trim($_POST['code']) : '';
$page = isset($_POST['page']) ? basename($_POST['page']) : 'dashboard_tm_pdi2.php';

if ($page !== 'dashboard_tm_pdi.php' && $page !== 'dashboard_tm_pdi2.php') {
    $page = 'dashboard_tm_pdi2.php';
}

if ($code === '') {
    echo json_encode(array('ok' => false, 'message' => 'Barcode kosong.'));
    exit;
}

$scan = mysql_real_escape_string($code);
$query = mysql_query("
    SELECT form_code, inspection_number, inspection_engine_number, inspection_engine_model,
           inspection_date, inspection_area, ip_number, faktor_koreksi, inspection_status
    FROM transmisi_proses_inspection_header
    WHERE inspection_status = 'PDI'
      AND inspection_engine_number = '$scan'
    LIMIT 1
");
$data = mysql_fetch_array($query);

if (!$data) {
    echo json_encode(array('ok' => false, 'message' => 'Data PDI tidak ditemukan: ' . $code));
    exit;
}

$params = array(
    'aksi' => 'updatetpsdi',
    'form_code' => $data['form_code'],
    'inspection_number' => $data['inspection_number'],
    'en' => $data['inspection_engine_number'],
    'em' => $data['inspection_engine_model'],
    'dt' => $data['inspection_date'],
    'area' => $data['inspection_area'],
    'kopname' => $_SESSION['kopname'],
    'ip' => $data['ip_number'],
    'supply_num' => $data['faktor_koreksi'],
    'sts' => $data['inspection_status'],
);

echo json_encode(array(
    'ok' => true,
    'url' => $page . '?' . http_build_query($params),
));
