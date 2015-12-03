<DOCTYPE html>
<html lang="en">
<?php 
include "../../master/header.php";
?>
<body style="background-color:#CCFFCC;" class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper" style="background-color:#CCFFCC; height:100%;">
  <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html">Sistem Informasi <b>Fasilitas Olahraga ITS</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action"home.php" method="post">
            <div class="form-group has-feedback">
              <input type="text" name="username" class="form-control input-sm" placeholder="Nomor Registrasi Pokok">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row ">
              <div class="col-xs-4 pull-right">
                  <a type="submit" class="btn btn-primary btn-block btn-flat " href="home.php">Sign In</a>
              </div><!-- /.col -->
            </div>
        </form>
        <div class="pull-left">
          <p>by : Kelompok E03 APSI E | 2015</p>
        </div>
        <br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
</div>
</body>

</html>
