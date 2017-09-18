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
        <title>CRUD - Read + Update + Delete</title>

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

        <!-- Sweet Alert -->
        <link href="<?php echo MAINTHEME_ASSET; ?>plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

        <script>var APP_PATH = '<?php echo BASEURL; ?>';</script>

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

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Read + Update + Delete</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="active">
                                            Read + Update + Delete
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                
                                <div class="card-box table-responsive">

                                    <h4 class="m-t-0 header-title"><b>All Products</b></h4>
                                    <p class="text-muted font-13 m-b-30">
                                        All products in database.
                                    </p>

                                    <table id="datatable-responsive"
                                    class="table table-striped table-colored table-info dt-responsive nowrap"
                                    cellspacing="0"
                                    width="100%">
                                        <thead>
                                        </thead>

                                        <tbody>
                                        </tbody>
                                    </table>

                                    <div class="">
                                        <button id="btn_refresh" type="button" class="btn btn-success waves-effect w-md waves-light m-b-5">Refresh</button>
                                    </div>
                                </div>
                                
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="m-t-0 m-b-30 header-title"><b>Update Product</b></h4>
                                <div class="row">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Product id</label>
                                            <div class="col-md-10">
                                                <input id="update_prod_id" type="text" class="form-control" value="" placeholder="Product name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Name</label>
                                            <div class="col-md-10">
                                                <input id="update_prod_name" type="text" class="form-control" value="" placeholder="Product name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Detail</label>
                                            <div class="col-md-10">
                                                <input id="update_prod_detail" type="text" class="form-control" value="" placeholder="Product detail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Picture</label>
                                            <div class="col-md-10">
                                                <input id="update_prod_picture" type="text" class="form-control" value="" placeholder="Product picture">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Price</label>
                                            <div class="col-md-10">
                                                <input id="update_prod_price" type="text" class="form-control" value="" placeholder="Product price">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Piece</label>
                                            <div class="col-md-10">
                                                <input id="update_prod_piece" type="text" class="form-control" value="" placeholder="Product piece">
                                            </div>
                                        </div>
                                        <div class="col-md-offset-2">
                                            <button id="btn_update" type="button" class="btn btn-success waves-effect w-md waves-light m-b-5">Update Product</button>
                                            <button id="btn_cancel" type="button" class="btn btn-danger waves-effect w-md waves-light m-b-5">Restore Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-box">
                                <h4 class="m-t-0 m-b-30 header-title"><b>Delete Product</b></h4>
                                <div class="row">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Product id</label>
                                            <div class="col-md-10">
                                                <input id="del_prod_id" type="text" class="form-control" value="" placeholder="Product id">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="col-md-2 control-label"> Product id</label>
                                            <div class="col-md-10">
                                                <input id="prod_name" type="text" class="form-control" value="" placeholder="Product name">
                                            </div>
                                        </div> -->
                                        <div class="col-md-offset-2">
                                            <button id="btn_delete" type="button" class="btn btn-danger waves-effect w-md waves-light m-b-5">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

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

        <!-- Sweet-Alert  -->
        <script src="<?php echo MAINTHEME_ASSET; ?>plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/pages/jquery.sweet-alert.init.js"></script>

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
        
        <script src="<?php echo JS_ASSET; ?>pages/read.js"></script>
    </body>
</html>