
<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "hilang");
if (!$conn)
  {
  die("Connection error: " . mysqli_connect_error());
  }
$sql = "SELECT * FROM report WHERE approval != '1' OR rejected != '1'";
$result = mysqli_query($conn, $sql);
if (!$result)
{
    echo("Error description: " . mysqli_error($result));
}
?>

<!DOCTYPE html>

<html lang="en">
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Laporan</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../metronic_v4.7.1/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../metronic_v4.7.1/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../metronic_v4.7.1/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../metronic_v4.7.1/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../metronic_v4.7.1/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../metronic_v4.7.1/theme/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../metronic_v4.7.1/theme/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../metronic_v4.7.1/theme/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../metronic_v4.7.1/theme/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../metronic_v4.7.1/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../metronic_v4.7.1/theme/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../metronic_v4.7.1/theme/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../metronic_v4.7.1/theme/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                        <a href="index.html">
                            <img src="../images/websitelogo.png"  width="120" height="50" alt="logo" class="logo-default" /> 
                        </a>
                    <!-- END LOGO -->

                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">

                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="../assets/layouts/layout/img/avatar3_small.jpg" />
                                    <span class="username username-hide-on-mobile"> Admin </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="fa fa-cogs"></i> Tetapan Profil </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> Peti Mesej
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../logout.php">
                                            <i class="icon-key"></i> Log Keluar </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->

                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->

                            <li class="nav-item">
                                <a href="admin.php" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Utama</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item active open">
                                <a href="reportList.php" class="nav-link nav-toggle">
                                    <i class="icon-briefcase"></i>
                                    <span class="title">Laporan</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="admin.php">Utama</a>
                                    <i class="fa fa-circle"></i>
                                </li>                                       
                                <li>
                                    <span>Laporan</span>
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div  class=" btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                                    <i class="icon-calendar"></i>&nbsp;
                                    <?php echo(date("d-m-Y")); ?> &nbsp;
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Laporan
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-layers font-blue"></i>
                                            <span class="caption-subject font-blue sbold uppercase">Laporan Baru</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                            <thead>
                                                <tr>
                                                    <th> No. Laporan </th>
                                                    <th> Tarikh </th>
                                                    <th> Jenis Kes </th>
                                                    <th> Nama Penuh </th>
                                                    <th> Umur </th>
                                                    <th> Jantina </th>
                                                    <th> Negeri </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php 
    $myrow = mysqli_fetch_row($result);
    do{
        echo"
            <tr>
                <td>$myrow[0]</td>
                <td>$myrow[17]</td>
                <td>$myrow[1]</td>
                <td>$myrow[2]</td>
                <td>$myrow[3]</td>
                <td>$myrow[4]</td>
                <td>$myrow[7]</td>
                <td>
                <form name='form1' method='POST' action='reportDetails.php'>		
                    <input name='View' type='hidden' id='View' value='$myrow[0]'>
                    <input type='submit' class='btn green-meadow' name='submit' value='Lihat'>
                </form>
                </td>
            </tr>";
        }
        while($myrow = mysqli_fetch_row($result) ); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-layers font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase">Lulus</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">

                                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                            <thead>
                                                <tr>
                                                    <th> No. Laporan </th>
                                                    <th> Tarikh </th>
                                                    <th> Jenis Kes </th>
                                                    <th> Nama Penuh </th>
                                                    <th> Umur </th>
                                                    <th> Jantina </th>
                                                    <th> Negeri </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php 
    $sql2 = "SELECT * FROM report WHERE approval == '1'";
    $result2 = mysqli_query($conn, $sql2);
    if (!$result2)
    {
        echo("Error description: " . mysqli_error($result2));
    }
    
    $myrow2 = mysqli_fetch_row($result2);
    do{
        echo"
            <tr>
                <td>$myrow[0]</td>
                <td>$myrow[17]</td>
                <td>$myrow[1]</td>
                <td>$myrow[2]</td>
                <td>$myrow[3]</td>
                <td>$myrow[4]</td>
                <td>$myrow[7]</td>
                <td>
                <form name='form1' method='post' action='#'>		
                    <input name='View' type='hidden' id='View' value='$myrow[0]'>
                    <input type='submit' class='btn green-meadow'  name='submit' value='Lihat'>
                </form>
                </td>
            </tr>";
        }
        while($myrow = mysqli_fetch_row($result) );  ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>                        
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>

        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../metronic_v4.7.1/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../metronic_v4.7.1/theme/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../metronic_v4.7.1/theme/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>