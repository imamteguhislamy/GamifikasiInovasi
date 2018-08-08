<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>GIA Sincerity | Admin Panel</title>
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url()?>main-bootstrap/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main-bootstrap/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main-bootstrap/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main-bootstrap/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url()?>main-bootstrap/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url()?>main-bootstrap/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main-bootstrap/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main-bootstrap/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main-bootstrap/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main-bootstrap/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main-bootstrap/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>main-bootstrap/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>main-bootstrap/css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div>
                                    <i></i>
                                </div>
                                <div>
                                    <i></i>
                                    <div>
                                        <div>
                                        </div>                                           
                                    </div>
                                </div>
                                <div>
                                    <i></i>
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="<?php echo base_url()?>assets/gi.ico">
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#"><?php echo $this->session->userdata('nama'); ?></a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo base_url()?>assets/gi.ico" width=65 length=65>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#"><?php echo $this->session->userdata('nama'); ?></a>
                                                </h5>
                                                <span class="email">GIA Admin</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="<?php echo base_url()?>admin/home/logout">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        
    <!-- Jquery JS-->
    <script src="<?php echo base_url()?>main-bootstrap/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url()?>main-bootstrap/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url()?>main-bootstrap/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url()?>main-bootstrap/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url()?>main-bootstrap/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url()?>main-bootstrap/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url()?>main-bootstrap/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url()?>main-bootstrap/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>main-bootstrap/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url()?>main-bootstrap/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url()?>main-bootstrap/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url()?>main-bootstrap/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url()?>main-bootstrap/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url()?>main-bootstrap/js/main.js"></script>
</body>
