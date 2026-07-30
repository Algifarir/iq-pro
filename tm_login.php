<?php
error_reporting(0);
session_start();


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>MKM Inspection</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="login-box">
      <div class="login-logo">
     	 </p>
         </p>
      </div>
      <!-- /.login-logo -->

      <div class="login-box-body">
        <p class="login-box-msg"><strong><font color="red">TM</font> <font color="#000000">Inspection Form</font></strong></p>

        <?php
          $salah = $_GET['salah']; 
        if (!empty($salah) and $salah == 1)
        {
          ?>
        <div class='alert alert-warning alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
          <h4><i class='icon glyphicon glyphicon-ok'></i> Silahkan Cek Lagi Username Dan Password Anda !</h4> 
          Username and Password have been sent
           </div>

         <?php } ?>
        <form method="post" action="cek_login_tm.php">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span></div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>          </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-danger btn-block btn-flat pull-right" value="Login" name="login"/>
              </div>
            <!-- /.col -->
          </div>
        </form>    
      </div><!-- /.login-box-body -->
     
         <p id="footer-text" align="center"><strong><font color="black">Copyright &copy;</font><font color="red"> MKM</font><font color="white">2021</font></strong></p>
    </div><!-- /.login-box -->
	
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
  </body>
</html>
