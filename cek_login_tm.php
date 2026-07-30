

<?php
session_start();
$android = strpos ($_SERVER ['HTTP_USER_AGENT'], "Android"); 
$bberry = strpos ($_SERVER ['HTTP_USER_AGENT'], "BlackBerry"); 
$iphone = strpos ($_SERVER ['HTTP_USER_AGENT'], "iPhone"); 
$ipod = strpos ($_SERVER ['HTTP_USER_AGENT'], "iPod"); 
$webos = strpos ($_SERVER ['HTTP_USER_AGENT'], "webOS"); 

include "config/koneksi.php";

// Dikirim dari form
$username=$_POST['username'];
$password=$_POST['password'];
$p		= md5($password);
$query_ptx=mysql_query("UPDATE master_user set log_status= 'out' where username='$username'");
$query=mysql_query("SELECT * FROM master_user WHERE username='$username' AND password='$p' AND log_status ='out'");
$jumlah=mysql_num_rows($query);
$a=mysql_fetch_array($query);

if($jumlah > 0){
	if($a['level']=='Admin')
	{
	$query_ptx=mysql_query("UPDATE master_user set log_status= 'in' where username='$username'");
	$_SESSION['level']=$a['level'];
	$_SESSION['kopid']=$a['id'];
	$_SESSION['kopname']=$a['full_name'];
	$_SESSION['koplog']==$a['username'];
	$_SESSION['pax']=$a['password'];
	//if ($android || $bberry || $iphone || $ipod || $webos == true)  
	//	{
			header("location:dashboard_tm.php");
	
	//	}



	}elseif($a['level']=='PDI TM Assy'){
	
	$query_ptx=mysql_query("UPDATE master_user set log_status= 'in' where username='$username'");
	$_SESSION['level']=$a['level'];
	$_SESSION['kopid']=$a['id'];
	$_SESSION['kopname']=$a['full_name'];
	$_SESSION['koplog']==$a['username'];
	$_SESSION['pax']=$a['password'];
	//if ($android || $bberry || $iphone || $ipod || $webos == true)  
	//	{
	header("location:dashboard_tm_pdi2.php");
	
	
	}else{
	$query_ptx=mysql_query("UPDATE master_user set log_status= 'in' where username='$username'");
	$_SESSION['level']=$a['level'];
	$_SESSION['kopid']=$a['id'];
	$_SESSION['kopname']=$a['full_name'];
	$_SESSION['koplog']==$a['username'];
	$_SESSION['pax']=$a['password'];
	//if ($android || $bberry || $iphone || $ipod || $webos == true)  
	//	{
			header("location:dashboard_tm.php");
	
	//	}
	}
	
}else{
?>
	<script>
		alert("Username Atau Password Salah / Login Sedang Dipakai");
		window.location="tm_login.php";
	</script>
<?php
}
?>

