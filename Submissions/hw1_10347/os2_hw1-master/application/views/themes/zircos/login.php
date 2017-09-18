<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="icon" type="image/png" href="<?php echo IMG_ASSET; ?>icon_logo.png" />        <!-- App title -->
        <title>CRUD Web App</title>
        
        <!-- App css -->
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo MAINTHEME_ASSET; ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert -->
        <link href="<?php echo MAINTHEME_ASSET; ?>plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
        
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/modernizr.min.js"></script>

        <link rel="stylesheet" href="<?php echo WEB_URL; ?>assets/css/app_main.css?rev=<?php echo date('md'); ?>" />
        <link rel="stylesheet" href="<?php echo WEB_URL; ?>assets/css/pages/login.css?rev=<?php echo date('md'); ?>" />
        <script>var APP_PATH = '<?php echo BASEURL; ?>';</script>
        
    </head>


    <body>
        
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

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.php" class="text-success">
                                            <span><img src="<?php echo MAINTHEME_ASSET; ?>assets/images/logo.png" alt="" style="width:auto; height:36px;"></span>
                                        </a>
                                    </h2>
									<p class="text-muted m-b-0 font-16">Version 0.1alpha</p>
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="#">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input id="acc_user" class="form-control" type="text" required="" placeholder="Username" autofocus>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input id="acc_pass" class="form-control" type="password" required="" placeholder="Password">
                                            </div>
                                        </div>

                                        
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <a id="submit" class="btn w-md btn-bordered btn-success waves-effect waves-light" >Sign In</a>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->

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

        <!-- Sweet-Alert  -->
        <script src="<?php echo MAINTHEME_ASSET; ?>plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/pages/jquery.sweet-alert.init.js"></script>
        
        <!-- App js -->
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo MAINTHEME_ASSET; ?>assets/js/jquery.app.js"></script>

        <!-- Program js-->
        <script src="<?php echo WEB_URL; ?>assets/js/app_main.js?rev=<?php echo date('md'); ?>"></script>
        <script src="<?php echo WEB_URL; ?>assets/js/pages/login.js?rev=<?php echo date('md'); ?>"></script>
    </body>
</html>