<!DOCTYPE html>
<?php
require "DBConnection/db.php";
session_start();
$username = $_SESSION['username'];

?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMK YPBI MARTAPURA</title>

    <!-- Bootstrap -->
    <link href="http://localhost/TA/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost/TA/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost/TA/assets/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://localhost/TA/assets/build/css/custom.min.css" rel="stylesheet">

    <link href="slider/responsiveslides.css" rel="stylesheet">
  
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <!-- <a href="dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a> -->
            </div>

       <!--<div class="clearfix"></div>-->

            <!-- menu profile quick info -->
           <!--  <div class="profile clearfix">
              <div class="profile_pic">
                <img src="http://localhost/TA/assets/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              <div class="clearfix"></div>
            </div> -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Main Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li><a href="buku/daftarbuku.php"><i class="fa fa-book"></i> Daftar Buku </a>
                  <li><a href="anggota/daftaranggota.php"><i class="fa fa-user"></i> Daftar Anggota </a>
                   
                  </li>
                  <li><a href="transaksi/transaksi.php"><i class="fa fa-shopping-cart"></i> Transaksi</a> 
                </ul>
              </div>
              <div class="menu_section">
                
                  
                      
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           <!--  <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
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
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php
                      $sql = "SELECT * FROM petugas WHERE petugas.username='$username'";
                      $result = mysqli_query($db,$sql);

                      while($row = mysqli_fetch_array($result)){

                        $nama_petugas = $row['nama_petugas'];
                    ?>
                   Selamat Datang Petugas <?php echo $nama_petugas;?> 
                   <?php }?>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile/profile.php"> Profile</a></li>
                   <!--  <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li> -->
                
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
<!-- 
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="http://localhost/TA/assets/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="http://localhost/TA/assets/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="http://localhost/TA/assets/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="http://localhost/TA/assets/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul> -->
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_center">

                <h2 align="center">SISTEM PERPUSTAKAAN</h2>
                <h2 align="center">SMK YPBI MARTAPURA</h2>
                <h2 align="center">OKU TIMUR</h2>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <ul class="rslides">
                        <li><img src="img/WhatsApp Image 2017-05-09 at 09.34.03.JPEG" alt="" width="50px" height="50px"></li>
                        <li><img src="img/WhatsApp Image 2017-05-10 at 22.14.33.JPEG" alt=""  width="50px" height="100px"></li>
                        <!-- <li><img src="img/WhatsApp Image 2017-05-10 at 22.23.28.JPEG" alt="" width="50px" height="100px"></li> -->
                      </ul>
                  </div>
                </div>
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
     <!-- HighCharts Library -->
    <script src="http://code.highcharts.com/highcharts.js"></script>

    <!-- jQuery -->
    <script src="http://localhost/TA/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="http://localhost/TA/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://localhost/TA/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="http://localhost/TA/assets/vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="http://localhost/TA/assets/build/js/custom.min.js"></script>

    <!-- Slider Library -->
    <script src="slider/responsiveslides.min.js"></script>
    <script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>

   
   <script>
/* var chart;

 chart = new Highcharts.Chart({
    chart: {
            renderTo: 'container',
            defaultSeriesType: 'column',
            events: {
                load: requestData
            }},
    xAxis: {
         type: 'gdas'
      },
      yAxis: {
         title: {
            text: 'Value'
         },
         plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
         }]
      },

    series: [{
         name: 'Random data',
         data: []
        }]
});



function requestData() {
    $.ajax({
        url: 'grafik.php',
        datatype: "json",
        success: function(data) {

            console.log(data);

            chart.series[0].setData(data);

        },
        cache: false
    });
}*/

/*$(document).ready(function() {
    var options = {
        chart: {
            renderTo: 'container',
            type: 'spline'
        },
        series: [{}]
    };
    
    var url =  "http://localhost/TA/a.php?callback=?";
    $.getJSON(url,  function(data) {
        options.series[0].data = data;
        var chart = new Highcharts.Chart(options);
        console.log(data);
    });
});*/
</script>
  </body>
</html>
