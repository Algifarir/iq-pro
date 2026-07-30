<?php
include "../config/koneksi.php";
$id= $_REQUEST['id'];
		
		$queryarea=mysql_query("select * from master_engine where id ='".$id."'");
		while($data2=mysql_fetch_array($queryarea)){
			
		
	
	$engine_number	= $data2['engine_number'];
	$engine_name	= $data2['engine_name'];
	$engine_model	= $data2['engine_model'];
	$engine_brand	= $data2['engine_brand'];
	$car_name	= $data2['car_name'];
	$engine_suplier	= $data2['engine_suplier'];
	$engine_area_name	= $data2['engine_area_name'];
	$engine_status	= $data2['engine_status'];
	$nama_file	= $data2['nama_file'];
		}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <link href="Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="Theme/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="Theme/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="Theme/assets/lineicons/style.css">    
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Picture Engine</title>
</head>

<body>
					
<p />
			
			
                	<div class="row mt">
                     <div class="col-lg-12">
                      <div class="form-panel" style="width:80%;">
                    	 <table  border="0">
                                          <tr>
                                            <td>Engine Number</td>
                                            <td>:</td>
                                            <td>&nbsp;<?php echo $engine_number;?></td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>Engine Model</td>
                                            <td>:</td>
                                            <td>&nbsp;<?php echo $engine_model;?></td>
                                          </tr>
                                          <tr>
                                            <td>Engine Name</td>
                                            <td>:</td>
                                            <td>&nbsp;<?php echo $engine_name;?></td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>Type Car</td>
                                            <td>:</td>
                                            <td>&nbsp;<?php echo $car_name;?></td>
                                          </tr>
                                          <tr>
                                            <td colspan="9" align="center">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td colspan="9" align="center">&nbsp;<img src="../upload/<?php echo $nama_file;?>" width="380" height="300"></td>
                                          </tr>
                                        </table>
					
					   </div></div></div>

</html>
