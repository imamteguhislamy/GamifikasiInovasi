<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GIA Sincerity | Materi</title>
    
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
<style>
#div1 {width:350px;height:70px;padding:10px;border:1px solid #aaaaaa;}
</style>
</head>
<body class="animsition">
    <?php foreach ($user as $u){ ?>
    <div class="page-wrapper">
        
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

        <div class="page-content--bgf7">
            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 m-t-20">
                            <h1 class="title-4"><i class="fas fa-book"></i>
                                &nbsp;QUIZ
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->           
            <!-- COURSE-->
            <section class="statistic-chart">
                <div class="container">
                    <div id='timer'></div>
                    <!-- Innovation Award-->
                    <div class="row">   

                        <?php foreach ($quiz as $q){ ?>
                        <div class="col-md-6 col-lg-6">                            
                            <div class="statistic-chart-1">
                                <h4><?php echo $q['id_quiz'].". "; ?><?php echo $q['soal']; ?></h4>
                                <br>
                                <div class="container">   
                                    <div class="row form-group">
                                        <div class="form-check">
                                            <form action="<?php echo base_url()?>user/course/quizz/<?php echo $q['judul']; ?>/<?php echo $q['id_quiz']; ?>" method="post" id="myForm">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label ">
                                                    <input type="radio" id="radio1" name="radios" value="<?php echo $q['jwba']; ?>" class="form-check-input"><?php echo $q['jwba']; ?>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                                                    <input type="radio" id="radio2" name="radios" value="<?php echo $q['jwbb']; ?>" class="form-check-input"><?php echo $q['jwbb']; ?>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio3" class="form-check-label ">
                                                    <input type="radio" id="radio3" name="radios" value="<?php echo $q['jwbc']; ?>" class="form-check-input"><?php echo $q['jwbc']; ?>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio4" class="form-check-label ">
                                                    <input type="radio" id="radio4" name="radios" value="<?php echo $q['jwbd']; ?>" class="form-check-input"><?php echo $q['jwbd']; ?>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="text" id="jwbBenar" name="jwbBenar" hidden value="<?php echo $q['jwbBenar']; ?>">
                                            </div>
                                            <div class="radio" hidden>
                                                <label for="radio3" class="form-check-label ">
                                                    <input type="radio" id="radios" name="radios" value="salah" class="form-check-input">salah
                                                </label>
                                            </div>
                                            <div>
                                                <input type="text" id="skor" name="skor" hidden value="
                                                <?php foreach ($user as $u){ ?>
                                                    <?php echo $u->skor; } ?>" >
                                            </div>
                                            <input type="submit" name="enter" value="Enter">  
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <!-- END Innovation Award-->
                </div>
            </section>
            <!-- END COURSE-->

            <section>
               
            </section>

<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
 
  <!-- Script Timer -->
     <script type="text/javascript">
        $(document).ready(function() {
              /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik = 0,
                * var menit = 1,
                * var jam = 1
              */
              var detik = 10;
              var menit = 0;
              var jam   = 0;
              
             /**
               * Membuat function hitung() sebagai Penghitungan Waktu
             */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                    * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
               /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
               if(detik < 6 && detik != 0){
                     var peringatan = 'style="color:red"';
               } else if (detik == 0) {
                radioBtn = document.getElementById("radios");
                radioBtn.checked = true;
                document.getElementById("myForm").submit();
                // $(location).attr('href', '<?php echo base_url()?>user/course/quizz/<?php echo $q['judul']; ?>./.<?php echo $q['id_quiz']; ?>')
                
               }
 
               /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
               $('#timer').html(
                      '<h1 align="center"'+peringatan+'>Sisa waktu anda <br />' + detik + ' detik</h1><hr>'
                );
  
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
 
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik == 0) {
                   
 
                    /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                        menit = 59;
                        jam --;
 
                        /** Jika var jam < 0
                            * clearInterval() Memberhentikan Interval dan submit secara otomatis
                        */
                        if(jam < 0) {                                                                 
                            clearInterval();  
                        } 
                    } 
                } 
            }           
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
      }); 
      // ]]>
    </script>
            

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