<style type="text/css">
.clock {width:800px; margin:0 auto; padding:30px; border:1px solid #333; color:#fff; }

#Date { font-size:12px; text-align:center;color:white; }

ul .date{  margin:0 auto; padding:0px; list-style:none;color:white;list-style-type: none; font-size:16px;}
ul li .date1{ display:inline; font-size:16px;color:white;display: inline; margin: auto}

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left:10px; padding-right:10px; }

@-webkit-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }  
}


@-moz-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }  
}

</style>
<script type="text/javascript">
$(document).ready(function() {
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]


var newDate = new Date();
newDate.setDate(newDate.getDate());
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
setInterval( function() {
  var seconds = new Date().getSeconds();
  $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
  },1000);
  
setInterval( function() {
  var minutes = new Date().getMinutes();
  $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
  
setInterval( function() {
  var hours = new Date().getHours();
  $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
  
}); 
</script>
      <header class="main-header">
        <!-- Logo -->
        <a href="home.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SIF</b>ITS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SI</b> Fasor ITS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../assets/AdminLTE/dist/img/user.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../assets/AdminLTE/dist/img/user.png" class="img-circle" alt="User Image">
                    <p>
                     	Admin
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="login.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">
                <div id="Date"></div>
            <ul class="date" style="text-align:center">
                <li id="hours" class="date1" style="display:inline;"> </li>
                <li id="point" class="date1" style="display:inline">:</li>
                <li id="min" class="date1" style="display:inline"> </li>
                <li id="point"class="date1" style="display:inline">:</li>
                <li id="sec"class="date1" style="display:inline"> </li>
            </ul>
            </li>
            <li class="treeview">
              <a href="home.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

             <li class="treeview">
              <a href="pilih_tanggal_penyewaan.php">
                <i class="fa fa-book"></i> <span>Detail Penyewaan</span>
              </a>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-soccer-ball-o"></i> <span>Kelola Lapangan dan Alat</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="kelola_lapangan.php"><i class="fa fa-circle-o"></i> Kelola Lapangan</a></li>
                <li><a href="kelola_alat.php"><i class="fa fa-circle-o"></i> Kelola Alat</a></li>
                <li><a href="laporan_alat_rusak.php"><i class="fa fa-circle-o"></i> Detail Alat Rusak</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="pilih_tanggal_keuangan.php">
                <i class="fa fa-money"></i> <span>Detail Keuangan</span>
              </a>
            </li>

            <li class="treeview">
              <a href="kelola_penyewa.php">
                <i class="fa fa-user"></i> <span>Kelola Penyewa</span>
              </a>
            </li>

            

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
