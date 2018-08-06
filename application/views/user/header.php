<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <div class="page-wrapper">
        
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="<?php echo base_url()?>assets/logo-white.png">
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="<?php echo base_url()?>user/home">
                                    <i class="fas fa-home"></i>Home
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>user/course">
                                    <i class="fas fa-book"></i>
                                    <span class="bot-line"></span>Courses
                                </a>
                            </li>
                        </ul>
                    </div>
                    <?php foreach($user as $u){ ?>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="<?php echo base_url()?>images/user-profile/<?php echo $u->picture ?>">
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?php echo $u->nama_panggilan ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="<?php echo base_url()?>images/user-profile/<?php echo $u->picture ?>">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a><?php echo $u->nama_lengkap ?></a>
                                            </h5>
                                            <span class="email"><?php echo $u->unit ?></span>
                                            <span class="email"><?php echo $u->nopeg ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="<?php echo base_url()."user/home/personalize/".$u->nopeg; ?>">
                                                <i class="zmdi zmdi-account"></i>Personalize</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="<?php echo base_url()?>login/logout">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

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
