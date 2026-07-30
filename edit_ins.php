  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!-- Load file JS untuk JQuery dan Selec2.js melalui CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $(".select2").select2({
            });
        });
    </script>
    <script>
	function changeValue(id){
    var jur1 = id;
	
				$.ajax({
				url: 'test1.php',	
				method: 'post',	
				data: {jur1:jur1},
				success:function(data){	
				 $("#engine_number").html(data);
				}
			});
		
	}

</script>
<script>
	function changeValue2(id){
    var jur2 = id;

				$.ajax({
				url: 'test3.php',	
				method: 'post',	
				data: {jur2:jur2},
				success:function(data){	
				 $("#em").html(data);
				}
			});
	}

</script>
   <script>
            $(function() {
			
				
				
                $("#engine_number").autocomplete({
                    source: 'auto_engine.php'
                });
            });
        </script>
 <?php
 
 	include "config/koneksi.php";
	include "fungsi/fungsi.php";
	$kopname = $_REQUEST['kopname'];
	$level = $_SESSION['level'];
	$date = new DateTime();
	$tgl_m = date_format($date,'m');
	$tgl_y = date_format($date,'Y');;
	$Tgl_now = date_format($date,'Y-m-d h:i:s');
 	$form_code = $_REQUEST['form_code'];
	$inspection_number = $_REQUEST['inspection_number'];
	$en = $_REQUEST['en'];
	$em = $_REQUEST['em'];
	$area = $_REQUEST['area'];
	$dt = $_REQUEST['dt'];	
	$desc = $_REQUEST['desc'];
	$sts = $_REQUEST['sts'];
	$ip = $_REQUEST['ecu'];
	$src = $_REQUEST['src'];
	$hal = $_REQUEST['hal'];
	$tgl_1 = $_REQUEST['dt1'];
	$tgl_2 = $_REQUEST['dt2'];
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit</title>
</head>

<body>
<p class="login-box-msg"><strong>Edit Form </strong></p>
<hr size="10px" style="background-color:#990000">
  <form action="generate_edit3.php" method="post" >
 
<table border="0" align="center">
  <tr>
    <td colspan="3"><strong>Data Lama</strong></td>
    <td>&nbsp;<input  type="hidden" name="aksix" value = "<?php echo $src;?>"/></td>
    <td>&nbsp;<input  type="hidden" name="halx" value = "<?php echo $hal;?>"/></td>
    <td>&nbsp;<input  type="hidden" name="tgl_1x" value = "<?php echo $tgl_1;?>"/></td>
    <td>&nbsp;<input type="hidden" name="tgl_2x" value = "<?php echo $tgl_2;?>"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><strong>Data Baru</strong></td>
    </tr>
  <tr>
    <td colspan="3">&nbsp;<input type="checkbox" id="chfs" name="chfs">&nbsp;<label for="chfs"><strong><font color="#FF0000">Checkit Jika ingin Ganti Nomer Engine <?php echo $en;?> dengan yang baru</font></strong></label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Type Form</td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp; <?php echo $form_code;?><input type="hidden" name="form_code" value = "<?php echo $form_code;?>"/><input type="hidden" name="kopname" value = "<?php echo $kopname;?>"/>       </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Inspection Number</td>
    <td>:</td>
    <td>&nbsp;<?php echo $inspection_number;?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Inspection Number<strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<?php echo $inspection_number;?><input type="hidden" name="inspection_number" value = "<?php echo $inspection_number;?>"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Type Form</td>
    <td>:</td>
    <td>&nbsp;<select class="form-control select2"  name="pilihanmenu" id="pilihanmenu" onchange='changeValue(this.value)' required>
		<option value="<?php echo $form_code;?>"><?php echo $form_code;?></option>

            <?php
          
             $hasil=mysql_query("select * from master_type_form order by id ASC");
			 $no=0;
			 while ($dtcombo=mysql_fetch_array($hasil)) {
             $no++;

            ?>
            <option  value="<?php echo $dtcombo['form_code'];?>"><?php echo $dtcombo['form_code'];?></option>
            <?php
	}
  ?>
        </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td><strong>Engine Number<strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<?php echo $en;?><input type="hidden" name="enx" id="enx" value = "<?php echo $en;?>"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Engine Number</td>
    <td>:</td>
    <td>&nbsp;<select class="form-control select2"  name="engine_number" id="engine_number" onchange='changeValue2(this.value)' required>
			
		<option value="<?php echo $en;?>"><?php echo $en;?></option>

        </select></td>
   </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td><strong>Engine Model<strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<?php echo $em;?><input type="hidden" name="dt" value = "<?php echo $Tgl_now;?>"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Engine Model</td>
    <td>:</td>
    <td>&nbsp;<select class="form-control select2"  name="em" id="em" onchange='changeValue2(this.value)' required>
			
		<option value="<?php echo $em;?>"><?php echo $em;?></option>

        </select></td>
   </tr>
      <div id="tampil">
    </div>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>No. ECU<strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<?php echo $ip;?><input type="hidden" name="ip" value = "<?php echo $ip;?>"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>No. ECU</td>
    <td>:</td>
    <td><input type="text" name="ip" value = "<?php echo $ip;?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
     <tr>
    <td><strong>Test Bench<strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<?php echo $area;?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Test Bench</td>
    <td>:</td>
    <td>&nbsp;<select name="area">
     <option value="<?php echo $area;?>"><?php echo $area;?></option>
  <?php
   //Membuat koneksi ke database akademik
   
	
   //Perintah sql untuk menampilkan semua data pada tabel jurusan
   $hasil=mysql_query("select * from master_area order by id ASC");
    $no=0;
	
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
    <option value="<?php echo $dtcombo['area_name'];?>"><?php echo $dtcombo['area_name'];?></option>
  <?php 
	}
  ?>
</select></td>
     </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Description</td>
    <td>:</td>
    <td><textarea id="desc_running" name="desc_running" rows="5" cols="55">
    <?php echo $desc;?>
    </textarea></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Status</td>
    <td>:</td>
    <td><select name="sts" required>
     <option value="<?php echo $sts;?>"><?php echo $sts;?></option>
 	<option value="PENDING">PENDING</option>
    <option value="REWORK">REWORK</option>
    <option value="SDI">SDI</option>
    <option value="ENGINE OK">ENGINE OK</option>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="14" align="Right"><a class="btn btn-warning" href="index.php?pilih=3.5&aksi=<?php echo $src ?>&halaman=<?php echo $hal ?>&dt1=<?php echo $tgl_1 ?>&dt2=<?php echo $tgl_2?>">Back Front</a>&nbsp;
      <button class="btn btn-success">Update Data</button>&nbsp;</td>
    </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
</table>

</form>
</body>
</html>
