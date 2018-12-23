<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $TITLE;?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo $TEMPLATE_URL?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $TEMPLATE_URL?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TEMPLATE_URL?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo $TEMPLATE_URL?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo $TEMPLATE_URL?>dist/css/skins/_all-skins.min.css">
    <?php echo $APP_CSS;?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="<?php echo base_url();?>" class="logo">
                <span class="logo-mini">
                    <?php echo $this->config->item('app_logo_mini');?>
                </span>
                <span class="logo-lg">
                    <?php echo $this->config->item('app_logo_lg');?>
                </span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">0</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 0 notifications</li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url($this->config->item('default_user_img'))?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->userdata('_NAMA');?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?php echo base_url($this->config->item('default_user_img'))?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $this->session->userdata('_NAMA');?> - Member
                                        <small>Member since <?php echo $this->session->userdata('_TGL_DAFTAR');?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" onclick="loadContent(base_url + 'view/_profile'); return false;" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('logout');?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo base_url($this->config->item('default_user_img'))?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $this->session->userdata('_NAMA');?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                
                <?php echo $MENU;?>

            </section>
        </aside>

        <div class="content-wrapper">
            <div id="dinamic-content">
                <?php echo $CONTENT;?>
            </div>
        </div>
    </div>

    <script src="<?php echo $TEMPLATE_URL?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $TEMPLATE_URL?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo $TEMPLATE_URL?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo $TEMPLATE_URL?>bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?php echo $TEMPLATE_URL?>dist/js/adminlte.min.js"></script>
    <script src="<?php echo $TEMPLATE_URL?>dist/js/demo.js"></script>
    <?php echo $APP_JS;?>
    <script>
        $(document).ready(function () {

            <?php echo $JS;?>
        });
    </script>
</body>
</html>
