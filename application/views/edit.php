<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <!-- MAIN CONTENT-->
            <div class="main-content ">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Edit Data Pegawai</div>
                                    <div class="card-body card-block">                                        
                                        <form action="<?php echo base_url(). 'admin/update'; ?>" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Nomer Pegawai</div>
                                                    <input readonly type="text" id="nopeg" name="nopeg" value="<?php echo $nopeg ?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Nama</div>
                                                    <input type="text" id="nama" name="nama" value="<?php echo $nama ?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Unit</div>
                                                    <input type="text" id="unit" name="unit" value="<?php echo $unit ?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">Password</div>
                                                    <input type="password" id="password" name="password" value="<?php echo $password ?>" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
