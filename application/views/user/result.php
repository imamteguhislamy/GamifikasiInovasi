<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GIA Sincerity | Home</title>
    
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
    <?php foreach($user as $u){ ?> 
    <div class="page-wrapper">
        <div class="page-content--bgf7">

            <!-- HEADER MOBILE-->
            <header class="header-mobile header-mobile-2 d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">                            
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            <a class="logo" href="index.html">
                                <img src="<?php echo base_url()?>assets/logo-white.png">
                            </a>
                            <div class="header__tool">
                                <div class="account-wrap">
                                    <div class="account-item account-item--style2 clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url()?>images/user-profile/<?php echo $u->picture ?>">
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a>
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
                                                <a href="<?php echo base_url()?>user/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li class="has-sub">
                                <a class="js-arrow" href="<?php echo base_url()?>user/home">
                                    <i class="fas fa-home"></i>Home
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>user/course">
                                    <i class="fas fa-book"></i>Courses
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->
            

            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        <!-- PROFILE -->
                        <div class="col-md-6 offset-md-3">
                            <div class="card">
                                <div class="card-header" align="center">
                                    <strong class="card-title pl-2">Result</strong>
                                </div>
                                <div class="card-body">
                                    <div class="mx-auto d-block">
                                        <?php foreach ($materi as $m) {?>
                                        <?php
                                        if($u->skorawal <= 0 ) {
                                        ?>
                                        <!-- <img src="<?php echo base_url()?>assets/bintang1.png" alt="Card image cap" size="85%"> -->
                                        <h2 class="location text-sm-center mt-2 mb-1" style="font-size: 32px">Score</h2>
                                        <h1 class="location text-sm-center" style="font-size: 72px"><?php echo $u->skorawal ?>/<?php echo $m->jmlSoal ?></h1>
                                        </div>
                                    <hr>
                                    <div class="card-text text-sm-center">
                                        <p>Keep Learning</p>
                                    </div>
                                        <?php
                                        } else if(($u->skorawal/$m->jmlSoal)*100 <= 50 ) {
                                        ?>
                                        <img src="<?php echo base_url()?>assets/bintang1.png" alt="Card image cap" size="85%">
                                        <h2 class="location text-sm-center mt-2 mb-1" style="font-size: 32px">Score</h2>
                                        <h1 class="location text-sm-center" style="font-size: 72px"><?php echo $u->skorawal ?>/<?php echo $m->jmlSoal ?></h1>
                                        </div>
                                    <hr>
                                    <div class="card-text text-sm-center">
                                        <p>Keep Spirit !!!</p>
                                    </div>
                                        <?php
                                        } else if(($u->skorawal/$m->jmlSoal)*100 == 100) {
                                        ?>
                                        <img src="<?php echo base_url()?>assets/bintang3.png" alt="Card image cap" size="85%">
                                        <h2 class="location text-sm-center mt-2 mb-1" style="font-size: 32px">Score</h2>
                                        <h1 class="location text-sm-center" style="font-size: 72px"><?php echo $u->skorawal ?>/<?php echo $m->jmlSoal ?></h1>
                                        </div>
                                    <hr>
                                    <div class="card-text text-sm-center">
                                        <p>Well Done !!!</p>
                                    </div>   
                                        <?php    
                                        } else {
                                        ?>
                                        <img src="<?php echo base_url()?>assets/bintang2.png" alt="Card image cap" size="85%">
                                        <h2 class="location text-sm-center mt-2 mb-1" style="font-size: 32px">Score</h2>
                                        <h1 class="location text-sm-center" style="font-size: 72px"><?php echo $u->skorawal ?>/<?php echo $m->jmlSoal ?></h1>
                                        </div>
                                    <hr>
                                    <div class="card-text text-sm-center">
                                        <p>Amazing !!!</p>
                                    </div><?php
                                            } ?>
                                        <?php
                                        }
                                        ?>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <button type="button" class="btn btn-outline-success btn-lg btn-block" onclick="window.location='<?php echo base_url()?>user/course'">Back to Course</button>
                            <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick="window.location='<?php echo base_url()?>user/home'">Back to Home</button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Corporate Cultural Management, PT.Garuda Indonesia Persero (Tbk).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>
    </div>
    <?php } ?>
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
