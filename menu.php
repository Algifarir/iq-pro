<?php
include "config/koneksi.php";
include "fungsi_menu.php";
//$kpn = $_SESSION["kopname"];
$sql=mysql_query("select * from master_menu_user");
 
 
 while($row=mysql_fetch_array($sql)){
 
 //$data[$row->parent_id][] = $row;
 $title = $row['title'];
 $url = $row['url'];
 
  
 echo  "<ul class='sidebar-menu' id='nav-accordion'>
                  <p class='centered'><a href='#'><img src='logo_kop2.gif' class='img-circle' width='60'></a></p>
                  <h5 class='centered'>$kpn</h5>
                    
                  <li class='sub-menu'>
                      <a href=$url>
                          <i class='glyphicon glyphicon-home'></i>
                          <span style='font-size:120%; color:#fff;'>$title</span>
                      </a>
                  </li>
		</ul>";
 }
 //$menu = get_menu($data);
 
 //echo "$menu";
 ?>
 