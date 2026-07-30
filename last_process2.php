 <style>
        html, body {
  			 margin: 0;
   			padding: 0;
					}
	  .box {
   			min-height: 150px;
   			width: 100%;
			}
	@media screen and (min-width: 800px) {
   .container {
       width: 800px;
       margin-left: auto;
       margin-right: auto;
   }
   .centered {
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}
	</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Tell the browser to be responsive to screen width -->
 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.min.js"></script>
<?php


	include "config/koneksi.php";
	$level=$_SESSION['level'];
	
	$kopname = $_REQUEST['kopname'];
	$inspection_number = $_REQUEST['inspection_number'];

		$sql_pro=mysql_query("select * from proses_inspection_header where inspection_number='".$inspection_number."'");
		while ($res=mysql_fetch_array($sql_pro))
													
			{
				 
				$supply_num = $res['faktor_koreksi'];
				$ip_number = $res['ip_number'];
				$desc_running = $res['desc_running'];
				$final_judgement = $res['final_judgement'];
				$en = $res['inspection_engine_number'];
				$em = $res['inspection_engine_model'];
				$dt = $res['inspection_date'];
				$area = $res['inspection_area'];
				$form_code = $res['form_code'];
				
				
			}
	
?>

<div class="container">     

<p class="login-box-msg"><strong>Tahap Terakhir Pengisian Formulir</strong></p>
<hr size="10px" style="background-color:#990000">
  <form action="update_vernumber2.php" method="post" >
<table border="0" align="center">
 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Inspection Number</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<?php echo $inspection_number;?><input type="hidden" name="inspection_number" value = "<?php echo $inspection_number;?>"/><input type="hidden" name="kopname" value = "<?php echo $kopname;?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;<input type="hidden" name="dt" value = "<?php echo $dt;?>"</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Catatan</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<textarea id="desc_running" name="desc_running" rows="10" cols="55">
    <?php echo $desc_running;?>
    </textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <tr>
    <td><strong>Final Judgement</strong></td>
    <td>&nbsp;<strong>:</strong></td>
    <td>&nbsp;<input type="radio" name="final_judgement" value="ENGINE OK"/>&nbsp;ENGINE OK&nbsp;&nbsp;&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;<input type="radio" name="final_judgement" value="PENDING"/>&nbsp;PENDING&nbsp;&nbsp;&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;<input type="radio" name="final_judgement" value="REWORK"/>&nbsp;REWORK&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;<input type="radio" name="final_judgement" value="SDI"/>&nbsp;SDI&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a class="btn btn-warning" href="input_sdi2.php?form_code=<?php echo $form_code;?>&inspection_number=<?php echo $inspection_number;?>&aksi=<?php echo "insert"; ?>&en=<?php echo $en;?>&em=<?php echo $em;?>&dt=<?php echo $dt;?>&area=<?php echo $area;?>&kopname=<?php echo $kopname;?>&ip=<?php echo $ip_number;?>&supply_num=<?php echo $supply_num;?>">Back to Form Input</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  <button class="btn btn-success">Approve Form</button>  &nbsp;&nbsp; </td>
  </tr>
  
 
</table>
</form>
</div>