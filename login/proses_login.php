<?php
session_start();

include "../config/koneksi.php";

// Dikirim dari form
$username=$_POST['username'];
$password=$_POST['password'];

$p		= md5($password);
$query=mysql_query("SELECT * FROM master_user WHERE username='$username' AND password='$p' AND log_status ='out'");
$jumlah=mysql_num_rows($query);
$a=mysql_fetch_array($query);

if($jumlah > 0){
	if($a['level']=='Admin')
	{
	//$query_ptx=mysql_query("UPDATE master_user set log_status= 'in' where username='$username'");
	$_SESSION['level']=$a['level'];
	$_SESSION['kopid']=$a['id'];
	$_SESSION['kopname']=$a['full_name'];
	$_SESSION['koplog']==$a['username'];
	$_SESSION['pax']=$a['password'];	
	header("location:../index.php?pilih=home");
	}
	else 
	{
	$query_ptx=mysql_query("UPDATE master_user set log_status= 'in' where username='$username'");
	$_SESSION['level']=$a['level'];
	$_SESSION['kopid']=$a['id'];
	$_SESSION['kopname']=$a['full_name'];
	$_SESSION['koplog']==$a['username'];
	$_SESSION['pax']=$a['password'];
	header("location:../index.php?pilih=home");;
	}
	
}else{
?>
	<script>
		alert("Username Atau Password Salah / Login Sedang DiPakai");
		window.location="login.php";
	</script>
<?php
}
?>

