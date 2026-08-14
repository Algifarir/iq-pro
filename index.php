<?php

	session_start();

	$level=$_SESSION['level'];
	
	
	if(empty($_SESSION['kopname'])||empty($_SESSION['level'])){	?>
		<script>
     
    window.location="login/login.php"; 
    </script>
    <?php
	}else
    {
    $pilih=$_GET['pilih'];
      switch($pilih){
        default   : $tampil = "dashboard_engine_loader.php"; break;
        case "home"  : $tampil = "dashboard_engine_loader.php"; break;
        case "1.1"  : $tampil = "masteruser/mst_user.php"; break; 
        case "1.2"  : $tampil = "masteruser/mst_assigned.php"; break;
        case "2.1"  : $tampil = "masterarea/mst_area.php"; break; 
		case "2.2"  : $tampil = "masterengine/mst_engine.php"; break; 
		case "2.3"  : $tampil = "masterinspection/mst_type_form.php"; break;
		case "2.4"  : $tampil = "masterinspection/mst_item_inspection.php"; break;
		case "2.5"  : $tampil = "masterinspection/mst_item_performance_test.php"; break;
		case "2.6"  : $tampil = "masterinspection/mst_inspection_front_engine.php"; break;
		case "2.7"  : $tampil = "masterinspection/mst_item_inspection_back.php"; break;
		case "2.8"  : $tampil = "masterinspection/mst_item_inspection_right.php"; break;
		case "2.9"  : $tampil = "masterinspection/mst_item_inspection_left.php"; break;
		case "3.0"  : $tampil = "masterinspection/mst_item_inspection_top.php"; break;
		case "3.1"  : $tampil = "monitoring/mon_tesbench.php"; break;
		case "3.2"  : $tampil = "monitoring/view_tes.php"; break;
		case "3.3"  : $tampil = "monitoring_chart.php"; break;
		case "3.4"  : $tampil = "monitoring/export_excel.php"; break;
		case "3.5"  : $tampil = "monitoring/mon_inspection.php"; break;
		case "3.6"  : $tampil = "monitoring/view_ins.php"; break;
		case "3.7"  : $tampil = "monitoring/mon_all.php"; break;
		case "3.8"  : $tampil = "monitoring/mon_ok.php"; break;
		case "3.9"  : $tampil = "monitoring/view_ok.php"; break;
		case "4.0"  : $tampil = "monitoring/mon_rework.php"; break;
		case "4.1"  : $tampil = "monitoring/mon_pending.php"; break;
		case "4.2"  : $tampil = "masterengine/export_duplicate.php"; break;
		case "4.3"  : $tampil = "monitoring/mon_search.php"; break;
		case "4.4"  : $tampil = "monitoring/view_src.php"; break;
		case "4.5"  : $tampil = "edit_ins.php"; break;
		case "4.6"  : $tampil = "monitoring/view_rework.php"; break;
		case "4.7"  : $tampil = "monitoring/view_pending.php"; break;
		case "4.8"  : $tampil = "masterimage/mst_image_form.php"; break;
		case "4.9"  : $tampil = "dashboard_transmisi_loader.php"; break;
		case "5.0"  : $tampil = "motoringarea/mst_area_motoring.php"; break;
		case "5.1"  : $tampil = "motoringtransmisi/mst_transmisi.php"; break;
		case "5.2"  : $tampil = "motoringform/mst_type_form_tm.php"; break;
		case "5.3"  : $tampil = "motoringimage/mst_image_form_tm.php"; break;
		case "5.4"  : $tampil = "motoringleak/mst_item_inspection_tm.php"; break;
		case "5.5"  : $tampil = "motoringinspection/mst_ins_mi.php"; break;
		case "5.6"  : $tampil = "motoringfront/mst_front.php"; break;
		case "5.7"  : $tampil = "motoringback/mst_back.php"; break;
		case "5.8"  : $tampil = "motoringright/mst_right.php"; break;
		case "5.9"  : $tampil = "motoringleft/mst_left.php"; break;
		case "6.0"  : $tampil = "motoringtop/mst_top.php"; break;
		case "6.1"  : $tampil = "transmisi/transmisi_mon_all.php"; break;
		case "6.2"  : $tampil = "transmisi/transmisi_mon_ok.php"; break;
		case "6.3"  : $tampil = "transmisi/transmisi_mon_rework.php"; break;
		case "6.4"  : $tampil = "transmisi/transmisi_mon_pending.php"; break;
		case "6.5"  : $tampil = "transmisi/transmisi_mon_inspection.php"; break;
		case "6.6"  : $tampil = "motoringsearch/tm_search.php"; break;
		case "6.7"  : $tampil = "motoringsearch/tm_search_view.php"; break;
        
      } //tutup switch
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>MKM</title>
  <link rel="shortcut icon" href="logo_kop2.gif" />
    <link href="Theme/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="Theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="Theme/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="Theme/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="Theme/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="Theme/assets/css/style.css" rel="stylesheet">
    <link href="Theme/assets/css/style-responsive.css" rel="stylesheet">

    <script src="Theme/assets/js/chart-master/Chart.js"></script>
	
	<script type="text/javascript" src="jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="jquery.treeview.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.treeview.css" />
<script type="text/javascript">
 $(document).ready(function() {
 $("#menu-tree").treeview();
 });
</script>

  </head>
</head>

<body>
<section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <?php 
        echo '<header class="header" style="background-image:url(back.png);">';
      ?>
      
              <div class="sidebar-toggle-box" style="color:black;">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="#" class="logo"><font color="black">Dashboard <?php echo $_SESSION['level'];?></font></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul style="float:right; margin-top:12px;">
                    <li>
                  <a class="logout" href="login/proses_logout.php">
                <?php 
                        echo '<button class="btn btn-wayservice" style="border:3px solid #fff;"><span class="glyphicon glyphicon-off"></span> Logout</button>';
                 ?>
                  </a></li>
              </ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
			  <?php
			     if($_SESSION['level']=='Admin')
              {
				  
				?> 
				  
				  <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="#"><img src="logo_kop2.gif" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION['kopname'];?></h5>
                    
                  <li class="sub-menu">
                      <a href="index.php?pilih=home">
                          <i class="glyphicon glyphicon-home"></i>
                          <span style="font-size:120%; color:#fff;">Home Test Engine</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-tasks"></i>
                          <span style="font-size:120%; color:#fff;">Account Setting</span>
                      </a>
                      <ul class="sub">
              <li><a href="index.php?pilih=1.1"><i class="fa fa-user"></i>Master User</a></li>
              <li><a href="index.php?pilih=1.2"><i class="fa fa-star"></i>Assign User Role</a></li>
              
            
                      </ul>
                  </li>
                    <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-tasks"></i>
                          <span style="font-size:120%; color:#fff;">Master Engine</span>
                      </a>
                      <ul class="sub">
              <li><a href="index.php?pilih=2.1"><i class="fa fa-institution"></i>Master Area</a></li>
              <li><a href="index.php?pilih=2.2"><i class="fa fa-car"></i>Master Engine</a></li>
               <li><a href="index.php?pilih=2.3"><i class="glyphicon glyphicon-list-alt"></i>Master Type Form</a></li>
			   <li><a href="index.php?pilih=4.8"><i class="glyphicon glyphicon-list-alt"></i>Master Image</a></li>
               <li><a href="index.php?pilih=2.4"><i class="glyphicon glyphicon-list-alt"></i>Master Item Inspection</a></li>
               <li><a href="index.php?pilih=2.5"><i class="glyphicon glyphicon-list-alt"></i>Item Performance Test</a></li>
                <li><a href="index.php?pilih=2.6"><i class="glyphicon glyphicon-list-alt"></i>Item Inspection Front</a></li>
                <li><a href="index.php?pilih=2.7"><i class="glyphicon glyphicon-list-alt"></i>Item Inspection Back</a></li>
            	<li><a href="index.php?pilih=2.8"><i class="glyphicon glyphicon-list-alt"></i>Item Inspection Right</a></li>
                 <li><a href="index.php?pilih=2.9"><i class="glyphicon glyphicon-list-alt"></i>Item Inspection Left</a></li>
                  <li><a href="index.php?pilih=3.0"><i class="glyphicon glyphicon-list-alt"></i>Item Inspection Top</a></li>
                  </ul>
                  </li>
                  
                    <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-tasks"></i>
                          <span style="font-size:120%; color:#fff;">Monitoring Engine</span>
                      </a>
                      <ul class="sub">
              <li><a href="index.php?pilih=3.1"><i class="fa fa-user"></i>Monitoring Test Bench</a></li>
               <li><a href="index.php?pilih=3.3"><i class="fa fa-user"></i>Monitoring By Chart</a></li>
                <li><a href="index.php?pilih=3.5"><i class="fa fa-user"></i>Monitoring Inspection</a></li>
           <li><a href="index.php?pilih=4.3"><i class="fa fa-user"></i>Monitoring By Search</a></li>
              
            
                      </ul>
                  </li>
				  
					<hr>
				   <li class="sub-menu">
                      <a href="index.php?pilih=4.9">
                          <i class="glyphicon glyphicon-home"></i>
                          <span style="font-size:120%; color:#fff;">Home Transmisi</span>
                      </a>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-tasks"></i>
                          <span style="font-size:120%; color:#fff;">Master Transmisi</span>
                      </a>
                      <ul class="sub">
              <li><a href="index.php?pilih=5.0"><i class="fa fa-institution"></i>Checking Area</a></li>
              <li><a href="index.php?pilih=5.1"><i class="fa fa-car"></i>Master Transmisi</a></li>
               <li><a href="index.php?pilih=5.2"><i class="glyphicon glyphicon-list-alt"></i>Master TM Form</a></li>
			   <li><a href="index.php?pilih=5.3"><i class="glyphicon glyphicon-list-alt"></i>Master TM Image</a></li>
               <li><a href="index.php?pilih=5.4"><i class="glyphicon glyphicon-list-alt"></i>Item Leak Test</a></li>
               <li><a href="index.php?pilih=5.5"><i class="glyphicon glyphicon-list-alt"></i>Item Motoring Test</a></li>
                <li><a href="index.php?pilih=5.6"><i class="glyphicon glyphicon-list-alt"></i>Item Inspection Front</a></li>
                <li><a href="index.php?pilih=5.7"><i class="glyphicon glyphicon-list-alt"></i>Item Inspection Back</a></li>
            	<li><a href="index.php?pilih=5.8"><i class="glyphicon glyphicon-list-alt"></i>Item Inspection Right</a></li>
                 <li><a href="index.php?pilih=5.9"><i class="glyphicon glyphicon-list-alt"></i>Item Inspection Left</a></li>
                  <li><a href="index.php?pilih=6.0"><i class="glyphicon glyphicon-list-alt"></i>Item Inspection Top</a></li>
                  </ul>
                  </li>
				  
                  
				   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-tasks"></i>
                          <span style="font-size:120%; color:#fff;">Monitoring Transmisi</span>
						  
                      </a>
                      <ul class="sub">
            
                <li><a href="index.php?pilih=6.5"><i class="fa fa-user"></i>Monitoring Inspection</a></li>
				 <li><a href="index.php?pilih=6.6"><i class="fa fa-user"></i>Monitoring Search</a></li>
              
            
                      </ul>
                  </li>
				  
				  
				</ul>
				  
				  
				  
				   
				  
				  <?php
			  }else{
				  ?>
			   <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="#"><img src="logo_kop2.gif" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION['kopname'];?></h5>
                    
                  <li class="sub-menu">
                      <a href="index.php?pilih=home">
                          <i class="glyphicon glyphicon-home"></i>
                          <span style="font-size:120%; color:#fff;">Home Test Engine</span>
                      </a>
                  </li>
			  
			<?php
					include "config/koneksi.php";
					$mst_menu=mysql_query("select * from master_menu_user where assigned_menu ='".$_SESSION['kopname']."' order by menu_order ASC");
 
					while ($row = mysql_fetch_array($mst_menu)) {
					$title = $row['name_menu'];
					$url = $row['url'];
					$idm = $row['id_menu'];
 
								
										
					echo  "<li class='sub menu'>
							<a href='$url'><i class='fa fa-external-link'></i><span style='font-size:120%; color:#fff;'>$title</span></a>
									</li>
									";
								
							
				}
				  
			?>
			</ul>
			<?php
			  }
			  ?>
              <hr>
              <center>Made by <a href="#" target="_blank" rel="noopener noreferrer">INTEGRA</a>
              </center>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          <?php

           include("$tampil");?>
          </section>
      </section>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="Theme/assets/js/jquery.js"></script>
    <script src="Theme/assets/js/jquery-1.8.3.min.js"></script>
    <script src="Theme/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="Theme/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="Theme/assets/js/jquery.scrollTo.min.js"></script>
    <script src="Theme/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="Theme/assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="Theme/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="Theme/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="Theme/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="Theme/assets/js/sparkline-chart.js"></script>    
  <script src="Theme/assets/js/zabuto_calendar.js"></script>  
  
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  <?php

   } ?>
