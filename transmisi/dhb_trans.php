<style type="text/css">
            .containers {
                width: 75%;
			
                margin: 15px auto;
            }
        </style>
         <script src="Chart.bundle.js"></script>
<?php
include "config/koneksi.php";

$tot_eng1=mysql_query("SELECT count(inspection_number) as total_engine from transmisi_proses_inspection_header where inspection_status in ('REWORK','PENDING','OPEN')");
$jml_eng1=mysql_fetch_array($tot_eng1);
$tot_all_eng1=$jml_eng1['total_engine'];

//$tot_eng2=mysql_query("SELECT count(inspection_number) as total_engine from proses_inspection_header_log where inspection_status in ('ENGINE OK')");
//$jml_eng2=mysql_fetch_array($tot_eng2);
//$tot_all_eng2=$jml_eng2['total_engine'];

//$tot_all = $tot_all_eng1 + $tot_all_eng2;


$tot_eng_ok=mysql_query("SELECT count(inspection_engine_number) as total_engine_ok from transmisi_proses_inspection_header_log where inspection_status ='TM TEST OK'");
$jml_eng_ok=mysql_fetch_array($tot_eng_ok);
$tot_all_eng_ok=$jml_eng_ok['total_engine_ok'];

$tot_eng_rework=mysql_query("SELECT count(inspection_engine_number) as total_engine_rework from transmisi_proses_inspection_header where inspection_status ='REWORK'");
$jml_eng_rework=mysql_fetch_array($tot_eng_rework);
$tot_all_eng_rework=$jml_eng_rework['total_engine_rework'];

$tot_eng_pending=mysql_query("SELECT count(inspection_engine_number) as total_engine_pending from transmisi_proses_inspection_header where inspection_status ='PENDING'");
$jml_eng_pending=mysql_fetch_array($tot_eng_pending);
$tot_all_eng_pending=$jml_eng_pending['total_engine_pending'];

$tot_eng_open=mysql_query("SELECT count(inspection_number) as total_engine_open from transmisi_proses_inspection_header where inspection_status ='OPEN'");
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
      			<div class="panel-heading"><a href="#" style="text-decoration:none"><font color="#FFFFFF">TOTAL PROSES PENGECHECKAN Berjalan</font></a></div>
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
      			<div class="panel-heading"><a href="index.php?pilih=6.1" style="text-decoration:none"><font color="#000000">OPEN</font></a></div>
      				<div class="panel-body" align="center"><span style="font-size:18px;"><?php echo "$tot_all_eng_open"; ?></span></div>
   			  </div>
          	</div>
        </div>
          
        <!-- ./col -->
        <!-- ./col -->
         <div class="col-lg-3 col-xs-6">
          <!--  -->
          	<div class="panel-group">
    		<div class="panel panel-success">
      			<div class="panel-heading"><a href="index.php?pilih=6.2" style="text-decoration:none"><font color="#000000">CHECK OK</font></a></div>
      				<div class="panel-body" align="center"><span style="font-size:18px;"><?php echo "$tot_all_eng_ok"; ?></span></div>
   			  </div>
          	</div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="panel-group">
    		<div class="panel panel-warning">
      			<div class="panel-heading"><a href="index.php?pilih=6.3" style="text-decoration:none"><font color="#000000">REWORK</font></a></div>
      				<div class="panel-body" align="center"><span style="font-size:18px;"><?php echo "$tot_all_eng_rework"; ?></span></div>
   			</div>
       	  </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
         	<div class="panel-group">
    		<div class="panel panel-danger">
      			<div class="panel-heading"><a href="index.php?pilih=6.4" style="text-decoration:none"><font color="#000000">PENDING CHECK</font></a></div>
      				<div class="panel-body" align="center"><span style="font-size:18px;"><?php echo "$tot_all_eng_pending"; ?></span></div>
   			  </div>
          	</div>
      </div>
 
     
        
<p>

<table border="0">
  <tr>
    <td width="600" valign="top">&nbsp;
    <?php
    
$bulan  = mysql_query("SELECT verifikasi as tot from transmisi_proses_inspection_detail_log where inspection_status ='TM TEST OK' and group_tab='Leak' and description='Spec Lower : -30 Kgf/cm2'");
$penghasilan = mysql_query("SELECT count(hasil_running_ok) as toti from transmisi_proses_inspection_detail_log where inspection_status ='TM TEST OK' and group_tab='Leak' and description='Spec Lower : -30 Kgf/cm2' group by hasil_running_ok");


    ?>
    
    
    <div class="containers">
            <canvas id="myChart" width="90" height="50"></canvas>
        </div>
     <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php while ($b = mysql_fetch_array($bulan)) { echo '"' . $b['tot'] . '",';}?>],
                    datasets: [{
                            label: 'Spec Lower : -30 Kgf/cm2(Leak)',
                            data:  [<?php while ($p = mysql_fetch_array($penghasilan)) { echo '"' . $p['toti'] . '",';}?>],
                            backgroundColor: [
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
                                'rgba(255, 159, 64, 1)'
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
    
$bulan  = mysql_query("SELECT verifikasi as tot from transmisi_proses_inspection_detail_log where inspection_status ='TM TEST OK' and group_tab='Leak' and description='Spec Upper : + 30 Kgf/cm2' group by hasil_running_ok");
$penghasilan = mysql_query("SELECT count(hasil_running_ok) as toti from transmisi_proses_inspection_detail_log where inspection_status ='TM TEST OK' and group_tab='Leak' and description='Spec Upper : + 30 Kgf/cm2' group by hasil_running_ok");


    ?>
    
    
    <div class="containers">
            <canvas id="myCharti" width="90" height="50"></canvas>
        </div>
     <script>
            var ctx = document.getElementById("myCharti");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php while ($b = mysql_fetch_array($bulan)) { echo '"' . $b['tot'] . '",';}?>],
                    datasets: [{
                            label: 'Spec Upper : + 30 Kgf/cm2(Leak)',
                            data:  [<?php while ($p = mysql_fetch_array($penghasilan)) { echo '"' . $p['toti'] . '",';}?>],
                            backgroundColor: [
                                'rgba(255, 159, 64, 0.2)',
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
                                'rgba(255, 159, 64, 1)'
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
    
$bulan  = mysql_query("SELECT verifikasi as tot from transmisi_proses_inspection_detail_log where inspection_status ='TM TEST OK' and group_tab='Leak' and description='Leak Test TM ASSY' group by hasil_running_ok");

$penghasilan = mysql_query("SELECT count(hasil_running_ok) as toti from transmisi_proses_inspection_detail_log where inspection_status ='TM TEST OK' and group_tab='Leak' and description='Leak Test TM ASSY' group by hasil_running_ok");


    ?>
    
    
    <div class="containers">
            <canvas id="myCharsi" width="90" height="50"></canvas>
        </div>
     <script>
            var ctx = document.getElementById("myCharsi");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php while ($b = mysql_fetch_array($bulan)) { echo '"' . $b['tot'] . '",';}?>],
                    datasets: [{
                            label: 'Leak Test TM Assy',
                            data:  [<?php while ($p = mysql_fetch_array($penghasilan)) { echo '"' . $p['toti'] . '",';}?>],
                            backgroundColor: [
                                'rgba(75, 192, 192, 0.2)',
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
                                'rgba(255, 159, 64, 1)'
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
    
$bulan  = mysql_query("SELECT verifikasi as tot from transmisi_proses_inspection_detail_log where inspection_status ='TM TEST OK' and group_tab='Motoring' and description='Noise / Suara Abnormal' group by hasil_running_ok");

$penghasilan = mysql_query("SELECT count(hasil_running_ok) as toti from transmisi_proses_inspection_detail_log where inspection_status ='TM TEST OK' and group_tab='Motoring' and description='Noise / Suara Abnormal' group by hasil_running_ok");


    ?>
    
    
    <div class="containers">
            <canvas id="myCharto" width="90" height="50"></canvas>
        </div>
     <script>
            var ctx = document.getElementById("myCharto");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php while ($b = mysql_fetch_array($bulan)) { echo '"' . $b['tot'] . '",';}?>],
                    datasets: [{
                            label: 'Noise / Suara Abnormal(Motoring)',
                            data:  [<?php while ($p = mysql_fetch_array($penghasilan)) { echo '"' . $p['toti'] . '",';}?>],
                            backgroundColor: [
                                'rgba(75, 192, 192, 0.2)',
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
                                'rgba(255, 159, 64, 1)'
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