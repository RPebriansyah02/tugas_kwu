<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="gentelella/production/images/favicon.ico" type="image/ico" />

    <title>Identitas-KU | Sistem administrasi data siswa</title>

    <!-- Bootstrap -->
    <link href="gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="gentelella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/home" class="site_title"><i class="fa fa-info-circle"></i> <span>Identitas KU</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-server"></i> Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Data Siswa</a></li>
                      <li><a href="#">Data Kelas</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Facebook">
                <span class="fa fa-facebook" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="E-Mail">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Twitter">
                <span class="fa fa-twitter" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="keluar" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i>Keluar</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i><a href="/profile"> Jumlah Siswa</a></span>
              <div class="count">2500</div>
              <span class="count_bottom" align="right"> Siswa</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-bank"></i> Jumlah Kelas</span>
              <div class="count">10</div>
              <span class="count_bottom">kelas</span>
            </div>
          </div>
          <!-- /top tiles -->
          <div class="row">            
            @yield('content')
          </div>
          
              
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="gentelella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="gentelella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="gentelella/vendors/Flot/jquery.flot.js"></script>
    <script src="gentelella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="gentelella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="gentelella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="gentelella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="gentelella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="gentelella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="gentelella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="gentelella/vendors/moment/min/moment.min.js"></script>
    <script src="gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="gentelella/build/js/custom.min.js"></script>
	
  </body>
</html>
