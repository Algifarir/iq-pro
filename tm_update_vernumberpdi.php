<?php
	include "config/koneksi.php";

	$desc_running = isset($_POST['desc_running']) ? $_POST['desc_running'] : '';
	$inspection_number = isset($_POST['inspection_number']) ? $_POST['inspection_number'] : '';
	$form_code = isset($_POST['form_code']) ? $_POST['form_code'] : '';
	$kopname = isset($_POST['kopname']) ? $_POST['kopname'] : '';
	$final_judgement = isset($_POST['final_judgement']) ? $_POST['final_judgement'] : '';
	$dt = isset($_POST['dt']) ? $_POST['dt'] : '';
	$berat = isset($_POST['berat']) ? $_POST['berat'] : '';

	if(empty($final_judgement)){
		header("location:dashboard_tm_pdi2.php?aksi=last&inspection_number=$inspection_number&kopname=$kopname");
		exit;
	}

	$upload_dir = "upload/";
	if (!is_dir($upload_dir)) {
		mkdir($upload_dir, 0777, true);
	}

	$filename = '';
	$path = '';

	if (!empty($_POST['camera_image'])) {
		$image = $_POST['camera_image'];
		if (preg_match('/^data:image\/(png|jpeg|jpg);base64,/', $image)) {
			$image = preg_replace('/^data:image\/(png|jpeg|jpg);base64,/', '', $image);
			$image = str_replace(' ', '+', $image);
			$filename = preg_replace('/[^A-Za-z0-9_.-]/', '_', $inspection_number) . '_' . date('YmdHis') . '.jpg';
			$path = $upload_dir . $filename;
			file_put_contents($path, base64_decode($image));
		}
	}

	if ($filename == '' && !empty($_FILES['uploaded_file']['name'])) {
		$filename = $_FILES['uploaded_file']['name'];
		$path = $upload_dir . basename($filename);
		if (!move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
			echo "There was an error uploading the file, please try again!";
			exit;
		}
	}

	if ($filename == '') {
		echo "Foto belum dipilih. Ambil foto atau pilih file terlebih dahulu.";
		exit;
	}

	if(isset($_POST['chf'])){
		mysql_query("UPDATE transmisi_upload SET nama_file='$filename', url='$path' WHERE inspection_number='$inspection_number'");
	}else{
		mysql_query("INSERT INTO transmisi_upload(form_code,inspection_number,nama_file,url) values ('$form_code','$inspection_number','$filename','$path')");
	}

	mysql_query("UPDATE transmisi_proses_inspection_header SET desc_running='$desc_running', ip_number='$berat', final_judgement ='$final_judgement', inspection_status ='$final_judgement', operator_name = '$kopname',user_input='$kopname', inspection_date='$dt' WHERE inspection_number='$inspection_number'");
	mysql_query("UPDATE transmisi_proses_inspection_detail SET inspection_status='$final_judgement' WHERE inspection_number='$inspection_number'");
	mysql_query("insert into transmisi_proses_inspection_header_log select * from transmisi_proses_inspection_header WHERE inspection_number='".$inspection_number."'");
	mysql_query("insert into transmisi_proses_inspection_detail_log select * from transmisi_proses_inspection_detail WHERE inspection_number='".$inspection_number."'");
	mysql_query("delete from transmisi_proses_inspection_header WHERE inspection_number='".$inspection_number."' AND final_judgement='TM TEST OK'");
	mysql_query("delete from transmisi_proses_inspection_detail WHERE inspection_number='".$inspection_number."' AND inspection_status='TM TEST OK'");

	header("location:dashboard_tm_pdi2.php");
	exit;
?>
