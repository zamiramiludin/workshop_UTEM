<?php
//session_start();
 //if($_SESSION['status']!='logged')
	// header("Location:error.php");
?>
<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Maklumat Laporan</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- ICON -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <!-- END LAYOUT FIRST STYLES -->
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
        <link href="../metronic_v4.7.1/theme/assets/layouts/layout6/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../metronic_v4.7.1/theme/assets/layouts/layout6/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="">
        <!-- BEGIN HEADER -->
        <header class="page-header">
            <nav class="navbar" role="navigation">
                <div class="container-fluid">
                    <div class="havbar-header">
                        <!-- BEGIN LOGO -->
                        <a id="index" class="navbar-brand" href="../index.php">
                            <img src="../images/websitelogo.png" width="120" height="50" alt="Logo"> </a>
                        <!-- END LOGO -->
                        <!-- BEGIN TOPBAR ACTIONS -->
                        <div class="topbar-actions">
                            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                            <form class="search-form" action="extra_search.html" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search here" name="query">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn md-skip submit">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END HEADER SEARCH BOX -->

                            <!-- BEGIN USER PROFILE -->
                            <div class="btn-group-img btn-group">
                                <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img src="../metronic_v4.7.1/theme/assets/layouts/layout5/img/avatar1.jpg" alt=""> </button>
                                <ul class="dropdown-menu-v2" role="menu">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile
                                            <span class="badge badge-danger">1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>

                                    <li class="divider"> </li>

                                    <li>
                                        <a href="../logout.php">
                                            <i class="icon-key"></i> Log Keluar </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END USER PROFILE -->
                        </div>
                        <!-- END TOPBAR ACTIONS -->
                    </div>
                </div>
                <!--/container-->
            </nav>
        </header>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="container-fluid">
            <div class="page-content page-content-popup">
                <div class="page-content-fixed-header">
                    <!-- BEGIN BREADCRUMBS -->
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="reportList.php">Laporan</a>
                        </li>
                        <li>
                            <span>Maklumat Laporan</span>
                        </li>
                    </ul>
                    <!-- END BREADCRUMBS -->
                </div>

                <div class="page-fixed-main-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                  
                  <div class="portlet light bg-inverse">
                    <div class="card-view">
                    <table border=0>
                        <tr>
                            <td>Jenis Kes</td>
                            <td>Mastura saiod</td>
                        </tr>
                        <tr>
                            <td>Nama Penuh</td>
                            <td>Mastura saiod</td>
                        </tr>                        <tr>
                            <td>Umur</td>
                            <td>6 TAHUN</td>
                        </tr>                        <tr>
                            <td>Jantina</td>
                            <td>Perempuan</td>
                        </tr>                        <tr>
                            <td>Lokasi Terakhir</td>
                            <td>Belakang Rumah</td>
                        </tr>                        <tr>
                            <td>Bandar/Daerah</td>
                            <td>Kuale</td>
                        </tr>                        <tr>
                            <td>Negeri</td>
                            <td>Perak</td>
                        </tr>                        <tr>
                            <td>Tarikh Hilang</td>
                            <td>12/12/2017</td>
                        </tr>                        <tr>
                            <td>Nama Penuh</td>
                            <td>Mastura saiod</td>
                        </tr>                        <tr>
                            <td>Nama Penuh</td>
                            <td>Mastura saiod</td>
                        </tr>




                    </table>
                      
                    






                    <!-- END PAGE BASE CONTENT -->
                </div>

            </div>
        </div>
        <!-- END CONTAINER -->

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
        <script src="../metronic_v4.7.1/theme/assets/layouts/layout6/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="../metronic_v4.7.1/theme/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>