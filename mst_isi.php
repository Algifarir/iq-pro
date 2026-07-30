<style type="text/css">
            .containers {
                width: 75%;
			
                margin: 15px auto;
            }
        </style>
         <script src="Chart.bundle.js"></script>
<?php
include "config/koneksi.php";

$tot_eng1=mysql_query("SELECT count(inspection_number) as total_engine from proses_inspection_header where inspection_status in ('REWORK','PENDING','OPEN')");
$jml_eng1=mysql_fetch_array($tot_eng1);
$tot_all_eng1=$jml_eng1['total_engine'];

$tot_eng2=mysql_query("SELECT count(inspection_number) as total_engine from proses_inspection_header_log where inspection_status in ('ENGINE OK')");
$jml_eng2=mysql_fetch_array($tot_eng2);
$tot_all_eng2=$jml_eng2['total_engine'];

$tot_all = $tot_all_eng1 + $tot_all_eng2;


$tot_eng_ok=mysql_query("SELECT count(inspection_engine_number) as total_engine_ok from proses_inspection_header_log where inspection_status ='ENGINE OK'");
$jml_eng_ok=mysql_fetch_array($tot_eng_ok);
$tot_all_eng_ok=$jml_eng_ok['total_engine_ok'];

$tot_eng_rework=mysql_query("SELECT count(inspection_engine_number) as total_engine_rework from proses_inspection_header where inspection_status ='REWORK'");
$jml_eng_rework=mysql_fetch_array($tot_eng_rework);
$tot_all_eng_rework=$jml_eng_rework['total_engine_rework'];

$tot_eng_pending=mysql_query("SELECT count(inspection_engine_number) as total_engine_pending from proses_inspection_header where inspection_status ='PENDING'");
$jml_eng_pending=mysql_fetch_array($tot_eng_pending);
$tot_all_eng_pending=$jml_eng_pending['total_engine_pending'];

$tot_eng_open=mysql_query("SELECT count(inspection_number) as total_engine_open from proses_inspection_header where inspection_status ='OPEN'");
$jml_eng_open=mysql_fetch_array($tot_eng_open);
$tot_all_eng_open=$jml_eng_open['total_engine_open'];



?>

<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<?php 
?>

        <table border="0">
  <tr>
    <td colspan="4">
    <div>
          <!--  -->
          	<div class="panel-group">
    		<div class="panel panel-primary">
      			<div class="panel-heading"><a href="index.php?pilih=3.5" style="text-decoration:none"><font color="#FFFFFF">TOTAL UNIT ENGINE PRODUCED</font></a></div>
      				<div class="panel-body" align="center"><span style="font-size:18px;"><?php echo $tot_all; ?></span></div>
    			</div>
          	</div>
        </div>
    </td>
     <td colspan="4">&nbsp;</td>
     <td colspan="4">&nbsp;</td>
      <td colspan="4">&nbsp;</td>
       <td colspan="4">&nbsp;</td>
    <td colspan="4">
			 
          
 		
    </td>
    </tr>
</table>
<p>

<div class="row">


   <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!--  -->
          	<div class="panel-group">
    		<div class="panel panel-info">
      			<div class="panel-heading"><a href="index.php?pilih=3.7" style="text-decoration:none"><font color="#000000">OPEN</font></a></div>
      				<div class="panel-body" align="center"><span style="font-size:18px;"><?php echo $tot_all_eng_open; ?></span></div>
   			  </div>
          	</div>
        </div>
          
        <!-- ./col -->
        <!-- ./col -->
         <div class="col-lg-3 col-xs-6">
          <!--  -->
          	<div class="panel-group">
    		<div class="panel panel-success">
      			<div class="panel-heading"><a href="index.php?pilih=3.8" style="text-decoration:none"><font color="#000000">ENGINE OK</font></a></div>
      				<div class="panel-body" align="center"><span style="font-size:18px;"><?php echo $tot_all_eng_ok; ?></span></div>
   			  </div>
          	</div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="panel-group">
    		<div class="panel panel-warning">
      			<div class="panel-heading"><a href="index.php?pilih=4.0" style="text-decoration:none"><font color="#000000">REWORK</font></a></div>
      				<div class="panel-body" align="center"><span style="font-size:18px;"><?php echo $tot_all_eng_rework; ?></span></div>
   			</div>
       	  </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
         	<div class="panel-group">
    		<div class="panel panel-danger">
      			<div class="panel-heading"><a href="index.php?pilih=4.1" style="text-decoration:none"><font color="#000000">PENDING</font></a></div>
      				<div class="panel-body" align="center"><span style="font-size:18px;"><?php echo $tot_all_eng_pending; ?></span></div>
   			  </div>
          	</div>
      </div>
 
     
        
<p>

<table border="0">
  <tr>
    <td width="600" valign="top">&nbsp;
     <?php
    
$bulan  = mysql_query("SELECT inspection_engine_number, form_code from proses_inspection_detail where operator_math='Hasil PS 100' order by id DESC limit 10");
$penghasilan = mysql_query("SELECT hasil_performa_test from proses_inspection_detail where operator_math='Hasil PS 100' order by id DESC limit 10");


    ?>
    
    
    <div class="containers">
            <canvas id="myChart" width="90" height="50"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php while ($b = mysql_fetch_array($bulan)) { echo '"' . $b['inspection_engine_number'] . '",';}?>],
                    datasets: [{
                            label: 'MAX Power(ps)',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan)) { echo '"' . $p['hasil_performa_test'] . '",';}?>],
                            backgroundColor: ['rgba(0,0,0,0)'],
                            borderColor: ['blue'],
                            borderWidth: 1
							
                        },]
                },
                options: {
                    scales: {
						 yAxes: [{
							ticks: {
								min: 60,
								max: 150,
								stepSize: 15
							}
						}]
                    }
                }
            });
        </script>
    
    
    </td>
    <td  width="600" valign="top">&nbsp;
    
    <?php
    
    $bulan  = mysql_query("SELECT inspection_engine_number from proses_inspection_detail_log where operator_math='Rumus PS' and inspection_status = 'ENGINE OK' order by id DESC limit 10");
$penghasilan = mysql_query("SELECT hasil_performa_test from proses_inspection_detail_log where operator_math='Rumus PS' and inspection_status = 'ENGINE OK' order by id DESC limit 10");
    ?>
    
    
    <div class="containers">
            <canvas id="myCharts" width="90" height="50"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myCharts");
            var myCharts = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php while ($b = mysql_fetch_array($bulan)) { echo '"' . $b['inspection_engine_number'] . '",';}?>],
                    datasets: [{
                            label: 'Maximum Torque(Kgfm)',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan)) { echo '"' . $p['hasil_performa_test'] . '",';}?>],
                            backgroundColor: [
								'rgba(153, 102, 255, 0.2)',
								'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    
    </td>
    
  </tr>
</table>
<p>
<table border="0">
  <tr>
    <td  width="600" valign="top">&nbsp;
    
    <?php
    
    $bulan  = mysql_query("SELECT inspection_engine_number from proses_inspection_detail_log where operator_math='Rumus Low' and inspection_status = 'ENGINE OK' order by id DESC limit 10");
$penghasilan = mysql_query("SELECT hasil_performa_test from proses_inspection_detail_log where operator_math='Rumus Low' and inspection_status = 'ENGINE OK' order by id DESC limit 10");
    ?>
    
    
    <div class="containers">
            <canvas id="myChartsi" width="90" height="50"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChartsi");
            var myChartsi = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php while ($b = mysql_fetch_array($bulan)) { echo '"' . $b['inspection_engine_number'] . '",';}?>],
                    datasets: [{
                            label: 'Low speed side Torque Kgfm)',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan)) { echo '"' . $p['hasil_performa_test'] . '",';}?>],
                            backgroundColor: [
								'rgba(255, 159, 64, 0.2)',
								'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    
    </td>
    <td  width="600" valign="top">&nbsp;
    
    <?php
    
    $buln  = mysql_query("SELECT inspection_engine_number from proses_inspection_detail_log where operator_math='Rumus TS 100' and inspection_status = 'ENGINE OK'order by id DESC limit 10");
$penghasilan = mysql_query("SELECT hasil_q from proses_inspection_detail_log where operator_math='Rumus TS 100' and inspection_status = 'ENGINE OK'order by id DESC limit 10");
    ?>
    
    
    <div class="containers">
            <canvas id="myChartso" width="90" height="50"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChartso");
            var myChartso = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php while ($b = mysql_fetch_array($buln)) { echo '"' . $b['inspection_engine_number'] . '",';}?>],
                    datasets: [{
                            label: 'Fuel injection amoun',
                            data: [<?php while ($p = mysql_fetch_array($penghasilan)) { echo '"' . $p['hasil_q'] . '",';}?>],
                            backgroundColor: [
								'rgba(75, 192, 192, 0.2)',
								'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
    
    </td>
    
  </tr>
</table>
   



</div></div></div></div>