<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>GIA Sincerity | Edit Profil</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url()?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url()?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url()?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>css/theme.css" rel="stylesheet" media="all">

</head>
<?php foreach ($user as $u){ ?>
<body class="animsition">
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
                                            <img src="<?php echo base_url()?>images/<?php echo $u->picture ?>">
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a>
                                                        <img src="<?php echo base_url()?>images/<?php echo $u->picture ?>">
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
                                                    <a href="<?php echo base_url()."home/personalize/".$u->nopeg; ?>">
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
                                <a href="<?php echo base_url()?>course/index">
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
                            <h1 class="title-4">Personalize</h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- TITLE-->

            <!-- EDIT PROFILE -->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <!-- FORM-->
                            <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-30">Edit Profile</h3>
                                <form action="<?php echo base_url().'user/update_profile'?>" method="post" class="form-horizontal"  enctype="multipart/form-data">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Nomor Pegawai</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input readonly type="text" id="hf-email" name="nopeg" placeholder="NOPEG" class="form-control" value="<?php echo $u->nopeg ?>">
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Nama Lengkap</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="hf-email" name="nama_lengkap" placeholder="Full Name..." class="form-control" value="<?php echo $u->nama_lengkap ?>">                                                    
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Nama Panggilan</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="hf-email" name="nama_panggilan" placeholder="Nick Name" class="form-control" value="<?php echo $u->nama_panggilan ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Unit</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="hf-email" name="unit" placeholder="Unit" class="form-control" value="<?php echo $u->unit ?>">                                                    
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Foto Profil</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="hf-email" name="foto" placeholder="Foto Profil" class="form-control" value="<?php echo $u->picture ?>">
                                            <span>*Nama File Tanpa Spasi</span>                                                    
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-password" class=" form-control-label">Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="hf-password" name="password" placeholder="Change Password" class="form-control" value="<?php echo $u->password ?>">                                                
                                        </div>
                                    </div>
                                    <?php }?>
                                    <div class="m-t-25" align="right">
                                        <button type="submit" class="btn btn-primary btn-sm m-r-5">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END EDIT PROFILE -->
                                
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

    <!-- Jquery JS-->
    <script src="<?php echo base_url()?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url()?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url()?>vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url()?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url()?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url()?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url()?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url()?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url()?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url()?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url()?>js/main.js"></script>

</body>

</html>
<!-- end document-->
