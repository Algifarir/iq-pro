<style type="text/css">
            .containers {
                width: 75%;
			
                margin: 15px auto;
            }
        </style>
         <script src="Chart.bundle.js"></script>
<?php
include "config/koneksi.php";

$filter_year = isset($_GET['f_year']) ? $_GET['f_year'] : '2026';
$filter_month = isset($_GET['f_month']) ? $_GET['f_month'] : 'ALL';

$where_header = "1=1";
$where_detail = "1=1";

if ($filter_year != 'ALL') {
    if ($filter_month != 'ALL') {
        $month_padded = str_pad($filter_month, 2, '0', STR_PAD_LEFT);
        $prefix = $filter_year . '-' . $month_padded;
        $where_header .= " AND inspection_date LIKE '$prefix%'";
        $where_detail .= " AND dt_proses LIKE '$prefix%'";
    } else {
        $where_header .= " AND inspection_date LIKE '$filter_year-%'";
        $where_detail .= " AND dt_proses LIKE '$filter_year-%'";
    }
}

// Default values
$tot_all_eng_open = 0;
$tot_all_eng_rework = 0;
$tot_all_eng_pending = 0;

// OPTIMASI: Ganti 4 query COUNT terpisah menjadi 1 query GROUP BY
$q_status = mysql_query("SELECT inspection_status, count(inspection_number) as total FROM proses_inspection_header WHERE inspection_status IN ('REWORK','PENDING','OPEN') AND $where_header GROUP BY inspection_status");
while($row = mysql_fetch_array($q_status)) {
    if($row['inspection_status'] == 'OPEN') $tot_all_eng_open = $row['total'];
    if($row['inspection_status'] == 'REWORK') $tot_all_eng_rework = $row['total'];
    if($row['inspection_status'] == 'PENDING') $tot_all_eng_pending = $row['total'];
}
$tot_all_eng1 = $tot_all_eng_open + $tot_all_eng_rework + $tot_all_eng_pending;

// Query terpisah karena beda tabel (proses_inspection_header_log)
$tot_eng2=mysql_query("SELECT count(inspection_number) as total_engine_ok from proses_inspection_header_log where inspection_status ='ENGINE OK' AND $where_header");
$jml_eng2=mysql_fetch_array($tot_eng2);
$tot_all_eng_ok=$jml_eng2['total_engine_ok'];
$tot_all_eng2=$tot_all_eng_ok; // Nilai ini sama

$tot_all = $tot_all_eng1 + $tot_all_eng2;

?>

<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<?php 
?>

        <table border="0">
  <tr>
    <td colspan="4">
        <!-- Form Filter -->
        <form method="get" action="index.php" style="margin-bottom: 20px;">
            <input type="hidden" name="pilih" value="home">
            <select name="f_year" class="form-control" style="display:inline-block; width:auto; padding:5px;">
                <option value="ALL" <?= $filter_year=='ALL'?'selected':'' ?>>ALL YEAR</option>
                <?php for($y=2020; $y<=2030; $y++) { ?>
                    <option value="<?= $y ?>" <?= $filter_year==$y?'selected':'' ?>><?= $y ?></option>
                <?php } ?>
            </select>
            <select name="f_month" class="form-control" style="display:inline-block; width:auto; padding:5px; margin-left:10px;">
                <option value="ALL" <?= $filter_month=='ALL'?'selected':'' ?>>ALL MONTH</option>
                <?php for($m=1; $m<=12; $m++) { ?>
                    <option value="<?= $m ?>" <?= $filter_month==$m?'selected':'' ?>><?= date("F", mktime(0,0,0,$m,1)) ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Filter" class="btn btn-primary btn-sm" style="margin-left:10px; margin-bottom: 3px;">
        </form>
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
    $q_chart1 = mysql_query("SELECT inspection_engine_number, hasil_performa_test from proses_inspection_detail where operator_math='Hasil PS 100' order by id DESC limit 10");
    $labels1 = ''; $data1 = '';
    while($row = mysql_fetch_array($q_chart1)) {
        $labels1 .= '"' . $row['inspection_engine_number'] . '",';
        $data1 .= '"' . $row['hasil_performa_test'] . '",';
    }
    ?>
    
    
    <div class="containers">
            <canvas id="myChart" width="90" height="50"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php echo $labels1; ?>],
                    datasets: [{
                            label: 'MAX Power(ps)',
                            data: [<?php echo $data1; ?>],
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
    $q_chart2 = mysql_query("SELECT inspection_engine_number, hasil_performa_test from proses_inspection_detail_log where operator_math='Rumus PS' and inspection_status = 'ENGINE OK' order by id DESC limit 10");
    $labels2 = ''; $data2 = '';
    while($row = mysql_fetch_array($q_chart2)) {
        $labels2 .= '"' . $row['inspection_engine_number'] . '",';
        $data2 .= '"' . $row['hasil_performa_test'] . '",';
    }
    ?>
    
    
    <div class="containers">
            <canvas id="myCharts" width="90" height="50"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myCharts");
            var myCharts = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php echo $labels2; ?>],
                    datasets: [{
                            label: 'Maximum Torque(Kgfm)',
                            data: [<?php echo $data2; ?>],
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
    $q_chart3 = mysql_query("SELECT inspection_engine_number, hasil_performa_test from proses_inspection_detail_log where operator_math='Rumus Low' and inspection_status = 'ENGINE OK' order by id DESC limit 10");
    $labels3 = ''; $data3 = '';
    while($row = mysql_fetch_array($q_chart3)) {
        $labels3 .= '"' . $row['inspection_engine_number'] . '",';
        $data3 .= '"' . $row['hasil_performa_test'] . '",';
    }
    ?>
    
    
    <div class="containers">
            <canvas id="myChartsi" width="90" height="50"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChartsi");
            var myChartsi = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php echo $labels3; ?>],
                    datasets: [{
                            label: 'Low speed side Torque Kgfm)',
                            data: [<?php echo $data3; ?>],
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
    $q_chart4 = mysql_query("SELECT inspection_engine_number, hasil_q from proses_inspection_detail_log where operator_math='Rumus TS 100' and inspection_status = 'ENGINE OK' order by id DESC limit 10");
    $labels4 = ''; $data4 = '';
    while($row = mysql_fetch_array($q_chart4)) {
        $labels4 .= '"' . $row['inspection_engine_number'] . '",';
        $data4 .= '"' . $row['hasil_q'] . '",';
    }
    ?>
    
    
    <div class="containers">
            <canvas id="myChartso" width="90" height="50"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChartso");
            var myChartso = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php echo $labels4; ?>],
                    datasets: [{
                            label: 'Fuel injection amoun',
                            data: [<?php echo $data4; ?>],
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