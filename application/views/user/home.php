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

            <!-- TITLE-->
            <section class="welcome">
                <div class="container">
                    <div class="row">                      
                        <div class="col-md-12 m-t-30">
                            <h1 class="title-4">Welcome back <span><?php echo $u->nama_panggilan ?>!</span></h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- TITLE-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <!-- PROFILE -->
                        <div class="col-md-12 col-lg-8">
                            <!-- CHART-->
                            <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-30">Profile</h3>
                                <div class="chart-wrap">
                                    <!-- PANEL -->
                                    <div class="row">

                                        <!-- SKOR -->
                                        <div class="col-md-6 col-lg-6">
                                            <div class="statistic__item statistic__item--blue">
                                                <h2 class="number" style="color: white"><?php echo $u->skor ?></h2>
                                                <span class="desc" style="color: white">Skor</span>
                                                <div class="icon">
                                                    <i class="zmdi zmdi-calendar-note"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END SKOR -->

                                        <!-- RANK -->
                                        <div class="col-md-6 col-lg-6">
                                            <div class="statistic__item statistic__item--red">
                                                <button style="float:right;" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#smallmodal"> <i class="fa fa-exclamation-circle"></i>
                                                </button>
                                                <h2 class="number" style="color: white">
                                                    <?php 
                                                        if($u->skor < 150){
                                                            echo "Rookie";
                                                        } else if($u->skor < 300){
                                                            echo "Intermediate";
                                                        } else if($u->skor > 300){
                                                            echo "Master";
                                                        }
                                                    ?>         
                                                </h2>
                                                <span class="desc" style="color: white">Rank</span>
                                                <span> </span>
                                                
                                                <div class="icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END RANK -->
                                    </div>
                                    <!-- END PANEL -->
                                </div>
                                
                                <!-- DATA PEGAWAI -->                                
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="image">
                                            <img width="1024" height="1024" src="<?php echo base_url()?>images/user-profile/<?php echo $u->picture ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="statistic-chart-1-note">
                                            <p class="big">Nama Lengkap</p>
                                            <p><?php echo $u->nama_lengkap ?></p>
                                        </div>
                                        <div class="statistic-chart-1-note">
                                            <p class="big">Nama Panggilan</p>
                                            <p><?php echo $u->nama_panggilan ?></p>
                                        </div>
                                        <div class="statistic-chart-1-note">
                                            <p class="big">Nomor Pegawai</p>
                                            <p><?php echo $u->nopeg ?></p>
                                        </div>                                
                                        <div class="statistic-chart-1-note">
                                            <p class="big">Unit Kerja</p>
                                            <p><?php echo $u->unit ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <!-- END DATA PEGAWAI -->                              
                            
                            </div>
                            <!-- END CHART-->
                        </div>
                        <!-- END PROFILE -->

                        <!-- LEADERBOARD -->
                        <div class="col-md-12 col-lg-4">
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">Leaderboard</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                            <?php foreach($leaderboard as $l){ ?>
                                            <tr>
                                                <td><?php echo $l->nama_lengkap ?> (<?php echo $l->unit ?>)</td>
                                                <td><?php echo $l->skor ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END LEADERBOARD -->
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
    <!-- modal small -->
            <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="smallmodalLabel">RANKING SYSTEM</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Rookie: 0-150</br>
                                Intermediate: 151-300</br>
                                Master: >301
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal small -->
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
