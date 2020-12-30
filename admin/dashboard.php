<?php session_start();
if(!isset($_SESSION['email'])){
    header('location:index.html');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Admin Portal
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <style>.responsive {
  width: 100%;
  height: auto;
}
</style>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href=# class="simple-text logo-mini">
                    &nbsp;
                </a>
                <a href=# class="simple-text logo-normal">
                    &nbsp;&nbsp;<?php  $name=$_SESSION['name']; echo $name;?>
                </a>

            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="#">
                            <i class="now-ui-icons design_app"></i>
                            <p>All Registrations</p>
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">
                                    <p>Logout</p>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Registration</h5>


                            </div>
                            <div class="card-body">
                                <strong>
                                    <h1><?php
																require_once 'config.php';
																$count= mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `reg`"));
																echo $count[0];
																 ?></h1>
                                </strong>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Registration Year Wise</h5>
                            </div>
                            <div class="card-body">
                                <strong>
                                    <p>1st year students : <?php	require_once 'config.php';
																$count= mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `reg` WHERE `year` = '1'"));
																echo $count[0];
																 ?></p>
                                </strong>





                                <strong>
                                    <p>2nd year students : <?php	require_once 'config.php';
																$count= mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `reg` WHERE `year` = '2'"));
																echo $count[0];
																 ?></p>
                                </strong>




                                <strong>
                                    <p>3rd year students : <?php	require_once 'config.php';
																$count= mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `reg` WHERE `year` = '3'"));
																echo $count[0];
																 ?></p>
                                </strong>

                                <strong>
                                    <p>4th year students : <?php	require_once 'config.php';
																$count= mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `reg` WHERE `year` = '4'"));
																echo $count[0];
																 ?></p>
                                </strong>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Total Amount Collected </h5>


                            </div>
                            <div class="card-body">
                                <strong>
                                    <h1> <?php	require_once 'config.php';
																$count= mysql_fetch_array(mysql_query("SELECT SUM(`member`) FROM `reg` "));
																echo $count[0];
																 ?></h1>
                                </strong>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                                </div>
                            </div>
                        </div>
                    </div>

                </div>





                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Registration</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th style="text-align:center">
                                                <strong>  <small>Date</small></strong>
                                            </th>
                                            <th style="text-align:center">
                                                <strong>  <small> Name</small></strong>
                                            </th>
                                          
                                            <th style="text-align:center">
                                                <strong>   <small>Membership</small></strong>
                                            </th>
                                            <th style="text-align:center">
                                                <strong> <small>Contact</small></strong>
                                            </th>
                                           
                                            <th style="text-align:center">
                                                <strong>  <small>Mode of Payment</small></strong>
                                            </th>
                                            
                                               <th style="text-align:center">
                                                <strong>   <small>SAP</small></strong>
                                            </th>
                                             <th style="text-align:center">
                                                <strong>  <small>Transaction id</small></strong>
                                            </th>
                                          <th style="text-align:center">
                                               &nbsp;
                                            </th> <th style="text-align:center">
                                               &nbsp;
                                            </th> <th style="text-align:center">
                                               &nbsp;
                                            </th> <th style="text-align:center">
                                               &nbsp;
                                            </th> <th style="text-align:center">
                                               &nbsp;
                                            </th><th style="text-align:center">
                                               &nbsp;
                                            </th>  <th style="text-align:center">
                                               &nbsp;
                                            </th> <th style="text-align:center">
                                               &nbsp;
                                            </th> <th style="text-align:center">
                                               &nbsp;
                                            </th> <th style="text-align:center">
                                               &nbsp;
                                            </th> <th style="text-align:center">
                                               &nbsp;
                                            </th><th style="text-align:center">
                                               &nbsp;
                                            </th>
                                            <th style="text-align:center">
                                                <strong>   <small>ScreenShot</small></strong>
                                            </th>
                                        </thead>
                                        <tbody>
                                            <?php require 'config.php'; ?>
                                            <?php $sql = mysql_query("SELECT * FROM `reg` ORDER BY `date` DESC") or die("error"); ?>
                                            <?php
                                while ($ro = mysql_fetch_array($sql)) {
                                    ?>
                                            <tr>
                                                <td style="text-align:center"><?php echo $ro['date']; ?></td>
                                                <td style="text-align:center"><?php echo $ro['name']; ?></td>
                                             
                                                <td style="text-align:center"><?php echo $ro['member'] ; ?></td>
                                                <td style="text-align:center"><?php echo $ro['contact'] ; ?></td>
                                            
                                                <td style="text-align:center"><?php echo $ro['mode'] ; ?></td>
                                                <td style="text-align:center"><?php echo $ro['sap'] ; ?></td>
                                                    <td style="text-align:center"><?php echo $ro['trans'] ; ?></td>
                                                <td style="text-align:center">&nbsp;</td>
                                                <td style="text-align:center">&nbsp;</td>
                                                <td style="text-align:center">&nbsp;</td>
                                                <td style="text-align:center">&nbsp;</td>
                                                <td style="text-align:center">&nbsp;</td>
                                                <td style="text-align:center">&nbsp;</td> <td style="text-align:center">&nbsp;</td>
                                                <td style="text-align:center">&nbsp;</td>
                                                <td style="text-align:center">&nbsp;</td>
                                                <td style="text-align:center">&nbsp;</td>
                                                <td style="text-align:center">&nbsp;</td>
                                                <td style="text-align:center">&nbsp;</td>
                                                
                                                <td style="text-align:center"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($ro['ss']); ?>" class="responsive" width="50" height="50"> </td>
                                            </tr>
                                            <?php
                                } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.upescsi.in" target="_blank">
                                    UPESCSI
                                </a>
                            </li>
                            <!--
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
-->
                        </ul>
                    </nav>
                    <div class="copyright" id="copyright">
                        &copy;
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))

                        </script>, Designed by
                        <a>UPESCSI</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });

    </script>
</body>

</html>
