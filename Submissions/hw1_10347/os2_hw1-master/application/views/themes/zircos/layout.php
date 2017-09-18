<?php $profile = $this->session->userdata(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo MAINTHEME_ASSET; ?>assets/images/favicon.ico">
        <!-- App title -->
        <title>CRUD Web App</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo MAINTHEME_ASSET; ?>plugins/morris/morris.css">

        <!-- App css -->
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo MAINTHEME_ASSET; ?>plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="#" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-cube"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="<?php echo MAINTHEME_ASSET; ?>assets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="<?php echo MAINTHEME_ASSET; ?>assets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="<?php echo MAINTHEME_ASSET; ?>assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5><?php echo $this->session->userdata('username'); ?></h5>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="<?php echo BASEURL;?>logout""><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <div class="user-details">
                            <div class="overlay"></div>
                            <div class="text-center">
                                <img src="<?php echo MAINTHEME_ASSET; ?>assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                            </div>
                            <div class="user-info">
                                <div>
                                    <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <?php echo $this->session->userdata('username'); ?> <span class="mdi mdi-menu-down"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown" id="setting-dropdown">
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="mdi mdi-face-profile m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="mdi mdi-account-settings-variant m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="mdi mdi-lock m-r-5"></i> Lock screen</a></li>
                                <li><a href="<?php echo BASEURL;?>logout"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                            </ul>
                        </div>

                        <ul>
                            <li class="menu-title">Navigation</li>
                            <?php $this->load->view('themes/' . MAINTHEME . '/role_sidemenu.php') ?>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <?php $this->load->view('welcome_message.php');?>

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Zircos.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/detect.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/fastclick.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/waves.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="<?php echo MAINTHEME_ASSET; ?>plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
        <script src="<?php echo MAINTHEME_ASSET; ?>plugins/morris/morris.min.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/jquery.app.js"></script>

    </body>
</html>