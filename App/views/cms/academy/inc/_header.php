<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php echo $TITLE;?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo $TEMPLATE_DIR;?>/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo $TEMPLATE_DIR;?>/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="<?php echo base_url();?>"><img src="<?php echo $TEMPLATE_DIR;?>/img/core-img/logo.png" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a href="#">Register / Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Article</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo site_url('articles/news');?>">News</a></li>
                                            <li><a href="<?php echo site_url('articles/jurnal');?>">Jurnal</a></li>
                                            <li><a href="<?php echo site_url('articles/loker');?>">Loker</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo site_url('page/about');?>">About</a></li>
                                    <li><a href="<?php echo site_url('alumni');?>">Alumni</a></li>
                                    <li><a href="<?php echo site_url('page/contact');?>">Contact</a></li>
                                    <li><a href="http://siakad.sttiss.ac.id">SIAKAD</a></li>
                                    <li><a href="http://pmb.sttiss.ac.id">Pendaftaran</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+(0267)8454772"><i class="icon-telephone-2"></i> <span>( 0267 ) 8454772</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->