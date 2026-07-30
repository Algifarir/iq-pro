<?php 
	include "config/koneksi.php";
	include "fungsi/fungsi.php";
	$kopname = $_SESSION['kopname'];
	$level = $_SESSION['level'];
	$aksi=$_GET['aksi'];
	
	if($_SESSION['level']=='admin')
              {
	
				  
				  
			  }else{
		$queryrol=mysql_query("select * from master_menu_user where assigned_menu ='".$kopname."'");
		while($datrol=mysql_fetch_array($queryrol)){
			
			$rol_add = $data2['rol_add'];
			$rol_edit = $data2['rol_edit'];
			$rol_delete = $data2['rol_delete'];
			$rol_view = $data2['rol_view'];
		}
	}
?>
<script src="Chart.bundle.js"></script>
<style type="text/css">
            .containers {
                width: 75%;
				height:auto;
			
                margin: 15px auto;
            }
        </style>
</head>

<?php
	if(empty($aksi)){
?>
<body>  
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel">
  
   <form action="index.php?pilih=3.3&aksi=search" method="post" >
     <table width="800">
       <tr>
         <td><font color="#000000">Type Form</font></td>
         <td>:</td>
         <td>&nbsp;
           <select name="pilihanmenu">

    <option value="4V21-T1">4V21-T1</option>
	<option value="4V21-T2">4V21-T2</option>
	<option value="4V21-T4">4V21-T4</option>

</select>   </td>
         </tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         </tr>
        <tr>
         <td><font color="#000000">Tes Bench</font></td>
         <td>:</td>
         <td>&nbsp;
             <select name="area">
			 <option value="ALL">-ALL-</option>
  <?php

   $hasil=mysql_query("select * from master_area order by id ASC");
    $no=0;
    while ($dtcombo=mysql_fetch_array($hasil)) {
    $no++;
   ?>
    <option value="<?php echo $dtcombo['area_name'];?>"><?php echo $dtcombo['area_code'];?>&nbsp;<?php echo $dtcombo['area_name'];?></option>
  <?php 
	}
  ?>
</select></td>
         </tr>
       <tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         </tr>
       <tr>
         <td><font color="#000000">From Date</font></td>
         <td>:</td>
         <td>&nbsp;
             <input input type="date" name="dt1" required/></td>
         </tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         </tr>
       <tr>
         <td><font color="#000000">To Date</font></td>
         <td>:</td>
         <td>&nbsp;
             <input type="date"  name="dt2" required/></td>
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
         <td></td>
         <td></td>
         <td><button class="btn btn-success">Process</button>
         </td>
         </tr>
     </table>
   </form>
  </div></div></div>

<?php
	}elseif($aksi=='tambah'){
	
?>

<div class="row mt">
 <div class="col-lg-14">
  <div class="form-panel" style="width:80%;">
   
</div></div></div>


<?php
	}elseif($aksi=='search'){
						$pilihanmenu= $_REQUEST['pilihanmenu'];
						$area= $_REQUEST['area'];
						$al= strtotime($_REQUEST['dt1']);
						$al2= strtotime($_REQUEST['dt2']);
						$tgl_1 = date('Y-m-d',$al);
						$tgl_2 = date('Y-m-d',$al2);
						
						
		if($pilihanmenu=="4V21-T1"){
		
			$min_mp="204";
			$max_mp="216";
			$min_mtmax="52.2";
			$max_mtmin="55.3";
			
			$min_mtlow="56.0";
			$max_mtlow="60.5";
			
			$min_ts="16.0";
			$max_ts="16.4";
		
		}elseif($pilihanmenu=="4V21-T2"){
		
			$min_mp="100";
			$max_mp="106.0";
			$min_mtmax="24.7";
			$max_mtmin="26.2";
			
			$min_mtlow="22.5";
			$max_mtlow="25.5";
			
			$min_ts="15.1";
			$max_ts="15.6";
		
		}elseif($pilihanmenu=="4V21-T4"){
		
		
			$min_mp="125";
			$max_mp="141.0";
			$min_mtmax="30.9";
			$max_mtmin="33.9";
			
			$min_mtlow="23.5";
			$max_mtlow="25.5";
			
			$min_ts="11.3";
			$max_ts="11.6";
		
		
		}
		
?>
<div class="row mt">
 <div class="col-lg-12">
  <div class="form-panel">
   <?php
  
  if($area=="ALL"){
  ?>
  
  <?php
  

    
$bulan  = mysql_query("SELECT inspection_engine_number, form_code from proses_inspection_detail_log where operator_math='Hasil PS 100' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");
$penghasilan = mysql_query("SELECT hasil_performa_test, form_code from proses_inspection_detail_log where operator_math='Hasil PS 100' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");
 $penghasilan2 = mysql_query("select spec_start, form_code from proses_inspection_detail_log where operator_math='Hasil PS 100' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");   
$penghasilan3 = mysql_query("select spec_finish, form_code from proses_inspection_detail_log where operator_math='Hasil PS 100' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");   
	


	?>
	
	 <table border="0">
  <tr>
    <td>Type Form&nbsp;</td>
    <td>:&nbsp;</td>
    <td>&nbsp;<?php echo $pilihanmenu;?></td>
    <td>&nbsp;<?php echo $area;?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>From Date&nbsp;</td>
    <td>:&nbsp;</td>
    <td>&nbsp;<?php echo $tgl_1;?></td>
    <td>&nbsp;</td>
    <td>To Date&nbsp;</td>
    <td>:&nbsp;</td>
    <td>&nbsp;<?php echo $tgl_2;?></td>
    <td>&nbsp;</td>
  </tr>
</table>

    

    <div class="containers">
            <canvas id="myChart" width="100" height="50"></canvas>
        </div>
         <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
					
                    labels: [<?php while ($b = mysql_fetch_array($bulan)) { echo '"' . $b['inspection_engine_number'] . '",';}?>],
                    datasets: [
					
					{
                           
                            label: 'Maximum Ps',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan3)) { echo '"' . $p['spec_finish'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['red'],
                            borderWidth: 1
							
                      },
					{
                            label: 'MAX Power(ps)',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan)) { echo '"' . $p['hasil_performa_test'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['blue'],
                            borderWidth: 1
							
                        },
						
						{
                            label: 'Minimum Ps',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan2)) { echo '"' . $p['spec_start'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['green'],
                            borderWidth: 1
							
                        },
						
					
						
						]
                },
                options: {
                    scales: {
						 yAxes: [{
							ticks: {
								min: 125,
								max: 150,
								stepSize: 5
							}
						}]
                    }
                }
            });
        </script>
       <br>
	   <?php
	   $bulanx  = mysql_query("SELECT inspection_engine_number, form_code from proses_inspection_detail_log where description like '%MAX  TORQUE (Kgm)%' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");
$penghasilanx = mysql_query("SELECT hasil_performa_test, form_code from proses_inspection_detail_log where description like '%MAX  TORQUE (Kgm)%' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");
 $penghasilan2x = mysql_query("select spec_start, form_code from proses_inspection_detail_log where description like '%MAX  TORQUE (Kgm)%' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");   
$penghasilan3x = mysql_query("select spec_finish, form_code from proses_inspection_detail_log where description like '%MAX  TORQUE (Kgm)%' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");  
?>
	   <canvas id="myCharta" width="90" height="50"></canvas>
        </div>
         <script>
            var ctx= document.getElementById("myCharta");
            var myCharta = new Chart(ctx, {
                type: 'line',
                data: {
					
                    labels: [<?php while ($b = mysql_fetch_array($bulanx)) { echo '"' . $b['inspection_engine_number'] . '",';}?>],
                    datasets: [
					
					{
                           
                            label: 'Maximum',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan3x)) { echo '"' . $p['spec_finish'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['red'],
                            borderWidth: 1
							
                      },
					{
                            label: 'MAX Torque',
                            data: [<?php while ($p = mysql_fetch_array($penghasilanx)) { echo '"' . $p['hasil_performa_test'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['blue'],
                            borderWidth: 1
							
                        },
						
						{
                            label: 'Minimum',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan2x)) { echo '"' . $p['spec_start'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['green'],
                            borderWidth: 1
							
                        },
						
						
						]
                },
                options: {
                    scales: {
						 yAxes: [{
							ticks: {
								min: 35,
								max: 45,
								stepSize: 5
							}
						}]
                    }
                }
            });
        </script>
 
   <br>
	   <?php
	   $bulanxx  = mysql_query("SELECT inspection_engine_number, form_code from proses_inspection_detail_log where operator_math='Rumus Low' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");
$penghasilanxx = mysql_query("SELECT hasil_performa_test, form_code from proses_inspection_detail_log where operator_math='Rumus Low' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");
 $penghasilan2xx = mysql_query("select spec_start, form_code from proses_inspection_detail_log where operator_math='Rumus Low' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");   
$penghasilan3xx = mysql_query("select spec_finish, form_code from proses_inspection_detail_log where operator_math='Rumus Low' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' limit 25");  
?>
	   <canvas id="myChartas" width="90" height="50"></canvas>
        </div>
         <script>
            var ctx= document.getElementById("myChartas");
            var myChartas = new Chart(ctx, {
                type: 'line',
                data: {
					
                    labels: [<?php while ($b = mysql_fetch_array($bulanxx)) { echo '"' . $b['inspection_engine_number'] . '",';}?>],
                    datasets: [
					
					{
                           
                            label: 'Maximum',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan3xx)) { echo '"' . $p['spec_finish'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['red'],
                            borderWidth: 1
							
                      },
					{
                            label: 'Low Torque',
                            data: [<?php while ($p = mysql_fetch_array($penghasilanxx)) { echo '"' . $p['hasil_performa_test'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['blue'],
                            borderWidth: 1
							
                        },
						
						{
                            label: 'Minimum',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan2xx)) { echo '"' . $p['spec_start'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['green'],
                            borderWidth: 1
							
                        },
						
						
						]
                },
                options: {
                    scales: {
						 yAxes: [{
							ticks: {
								min: 35,
								max: 40,
								stepSize: 5
							}
						}]
                    }
                }
            });
        </script>
		
</div></div></div>
 <?php
  }else{
  ?>
  
  <?php
  

    
$bulan  = mysql_query("SELECT inspection_engine_number, form_code from proses_inspection_detail_log where operator_math='Hasil PS 100' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area' limit 25");
$penghasilan = mysql_query("SELECT hasil_performa_test, form_code from proses_inspection_detail_log where operator_math='Hasil PS 100' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area'limit 25");
 $penghasilan2 = mysql_query("select spec_start, form_code from proses_inspection_detail_log where operator_math='Hasil PS 100' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area'limit 25");   
$penghasilan3 = mysql_query("select spec_finish, form_code from proses_inspection_detail_log where operator_math='Hasil PS 100' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area' limit 25");   
	


	?>
	
	 <table border="0">
  <tr>
    <td>Type Form&nbsp;</td>
    <td>:&nbsp;</td>
    <td>&nbsp;<?php echo $pilihanmenu;?></td>
    <td>&nbsp;<?php echo $area;?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>From Date&nbsp;</td>
    <td>:&nbsp;</td>
    <td>&nbsp;<?php echo $tgl_1;?></td>
    <td>&nbsp;</td>
    <td>To Date&nbsp;</td>
    <td>:&nbsp;</td>
    <td>&nbsp;<?php echo $tgl_2;?></td>
    <td>&nbsp;</td>
  </tr>
</table>

    

    <div class="containers">
            <canvas id="myChart" width="100" height="50"></canvas>
        </div>
         <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
					
                    labels: [<?php while ($b = mysql_fetch_array($bulan)) { echo '"' . $b['inspection_engine_number'] . '",';}?>],
                    datasets: [
					
					{
                           
                            label: 'Maximum Ps',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan3)) { echo '"' . $p['spec_finish'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['red'],
                            borderWidth: 1
							
                      },
					{
                            label: 'MAX Power(ps)',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan)) { echo '"' . $p['hasil_performa_test'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['blue'],
                            borderWidth: 1
							
                        },
						
						{
                            label: 'Minimum Ps',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan2)) { echo '"' . $p['spec_start'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['green'],
                            borderWidth: 1
							
                        },
						
					
						
						]
                },
                options: {
                    scales: {
						 yAxes: [{
							ticks: {
								min: 125,
								max: 150,
								stepSize: 5
							}
						}]
                    }
                }
            });
        </script>
       <br>
	   <?php
	   $bulanx  = mysql_query("SELECT inspection_engine_number, form_code from proses_inspection_detail_log where description like '%MAX  TORQUE (Kgm)%' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area' limit 25");
$penghasilanx = mysql_query("SELECT hasil_performa_test, form_code from proses_inspection_detail_log where description like '%MAX  TORQUE (Kgm)%' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area' limit 25");
 $penghasilan2x = mysql_query("select spec_start, form_code from proses_inspection_detail_log where description like '%MAX  TORQUE (Kgm)%' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area' limit 25");   
$penghasilan3x = mysql_query("select spec_finish, form_code from proses_inspection_detail_log where description like '%MAX  TORQUE (Kgm)%' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area' limit 25");  
?>
	   <canvas id="myCharta" width="90" height="50"></canvas>
        </div>
         <script>
            var ctx= document.getElementById("myCharta");
            var myCharta = new Chart(ctx, {
                type: 'line',
                data: {
					
                    labels: [<?php while ($b = mysql_fetch_array($bulanx)) { echo '"' . $b['inspection_engine_number'] . '",';}?>],
                    datasets: [
					
					{
                           
                            label: 'Maximum',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan3x)) { echo '"' . $p['spec_finish'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['red'],
                            borderWidth: 1
							
                      },
					{
                            label: 'MAX Torque',
                            data: [<?php while ($p = mysql_fetch_array($penghasilanx)) { echo '"' . $p['hasil_performa_test'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['blue'],
                            borderWidth: 1
							
                        },
						
						{
                            label: 'Minimum',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan2x)) { echo '"' . $p['spec_start'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['green'],
                            borderWidth: 1
							
                        },
						
						
						]
                },
                options: {
                    scales: {
						 yAxes: [{
							ticks: {
								min: 35,
								max: 45,
								stepSize: 5
							}
						}]
                    }
                }
            });
        </script>
 
   <br>
	   <?php
	   $bulanxx  = mysql_query("SELECT inspection_engine_number, form_code from proses_inspection_detail_log where operator_math='Rumus Low' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area' limit 25");
$penghasilanxx = mysql_query("SELECT hasil_performa_test, form_code from proses_inspection_detail_log where operator_math='Rumus Low' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area' limit 25");
 $penghasilan2xx = mysql_query("select spec_start, form_code from proses_inspection_detail_log where operator_math='Rumus Low' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area' limit 25");   
$penghasilan3xx = mysql_query("select spec_finish, form_code from proses_inspection_detail_log where operator_math='Rumus Low' AND date(dt_proses) between '$tgl_1' AND '$tgl_2' AND inspection_status='ENGINE OK' AND form_code='$pilihanmenu' AND inspection_area='$area' limit 25");  
?>
	   <canvas id="myChartas" width="90" height="50"></canvas>
        </div>
         <script>
            var ctx= document.getElementById("myChartas");
            var myChartas = new Chart(ctx, {
                type: 'line',
                data: {
					
                    labels: [<?php while ($b = mysql_fetch_array($bulanxx)) { echo '"' . $b['inspection_engine_number'] . '",';}?>],
                    datasets: [
					
					{
                           
                            label: 'Maximum',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan3xx)) { echo '"' . $p['spec_finish'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['red'],
                            borderWidth: 1
							
                      },
					{
                            label: 'Low Torque',
                            data: [<?php while ($p = mysql_fetch_array($penghasilanxx)) { echo '"' . $p['hasil_performa_test'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['blue'],
                            borderWidth: 1
							
                        },
						
						{
                            label: 'Minimum',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan2xx)) { echo '"' . $p['spec_start'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['green'],
                            borderWidth: 1
							
                        },
						
						
						]
                },
                options: {
                    scales: {
						 yAxes: [{
							ticks: {
								min: 35,
								max: 40,
								stepSize: 5
							}
						}]
                    }
                }
            });
        </script>
		
</div></div></div>
  
<?php
		}
?>
<?php
	}
?>

