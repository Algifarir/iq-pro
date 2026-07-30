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
				url: 'test11.php',	
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
				url: 'test12.php',	
				method: 'post',	
				data: {jur2:jur2},
				success:function(data){	
				 $("#em").html(data);
				}
			});
	}

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

 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Data</title>
</head>

<body>
<p>
<p class="login-box-msg"><strong>MANAGE DATABASE TRANSMISI</strong></p>
<hr size="10px" style="background-color:#990000">
<h4 class="mb"><font color="#990000"><strong>Pindahkan Data</strong></font></h4>
  <form action="proses_pindah.php?pros=pindah1" method="post">
<table border="0" align="center">
    	<tr>
        	<td><font color="#000000">Pilih Type Pindah</font></td><td>:</td><td>&nbsp;<select name="engine_status">
<option value="">-Pilih-</option>
<option value="Tidak Aktif">Tidak Aktif</option>
<option value="ALL">ALL</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Pindahkan</button>&nbsp;<a class="btn btn-danger" href="index.php?pilih=5.1">Back Front</a></td>
        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
       
      
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
       	  </tr>
 
   
        <tr>
        	<td></td><td></td><td>&nbsp;&nbsp;
            </td>
        	<td>&nbsp;</td>
       	  </tr>
    </table>


</form>
   
   <hr width="+1">
 
 

  <h4 class="mb"><font color="#990000"><strong>Kembalikan Nomer Transmisi</strong></font></h4>
   <hr width="+1">
   
   <form action="proses_pindah_tm.php?pros=kembalikan" method="post">
<table border="0" align="center">

	<tr>
        	<td><font color="#000000">Type Form</font></td><td>:</td><td>&nbsp;
			<select class="form-control select2"  name="pilihanmenu" id="pilihanmenu" onchange='changeValue(this.value)' required>
		<option value="<?php echo $form_code;?>"><?php echo $form_code;?></option>

            <?php
          
             $hasil=mysql_query("select * from transmisi_master_area order by id ASC");
			 $no=0;
			 while ($dtcombo=mysql_fetch_array($hasil)) {
             $no++;

            ?>
            <option  value="<?php echo $dtcombo['form_code'];?>"><?php echo $dtcombo['form_code'];?></option>
            <?php
	}
  ?>
        </select>
		
			
			</td>
        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
		<tr>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
		<tr>
        	<td>Engine Number</td>
        	<td>&nbsp;:</td>
        	<td>&nbsp;<select class="form-control select2"  name="engine_number" id="engine_number" onchange='changeValue2(this.value)' required>
			
		<option value="<?php echo $en;?>"><?php echo $en;?></option>

        </select></td>
        </tr>
		<tr>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
    	<tr>
        	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">Kembalikan</button>&nbsp;<a class="btn btn-danger" href="index.php?pilih=5.1">Back Front</a></td>
        	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        </tr>
       
      
          <tr>
        	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
        	<td>&nbsp;</td>
       	  </tr>
 
   
        
    </table>


</form>
</body>
</html>
