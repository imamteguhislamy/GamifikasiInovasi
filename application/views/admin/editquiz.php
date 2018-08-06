<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

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

<body class="animsition">
    <div class="page-wrapper">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">                              
                            <div class="col-lg-12">                                
                                <div class="row">                              
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Edit</strong> Quiz
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="<?php echo base_url().'admin/home/updQ'?>" method="post" enctype="multipart/form-data" class="form-horizontal"> 
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label class=" form-control-label">Materi</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input readonly type="text" id="text-input" name="id_materi" class="form-control" value="<?php echo $id_materi ?>" required>
                                                    </div>
                                                </div>                                                   
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Id Quiz</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input readonly type="text" id="text-input" name="id_quiz" placeholder="Enter Id" class="form-control" value="<?php echo $id_quiz ?>" required>
                                                        </div>
                                                    </div>                                            
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="textarea-input" class=" form-control-label">Soal</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="soal" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required><?php echo $soal ?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Jawaban</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="jwba" placeholder="A" class="form-control" value="<?php echo $jwba ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label"></label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="jwbb" value="<?php echo $jwbb ?>" placeholder="B" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label"></label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="jwbc" value="<?php echo $jwbc ?>" placeholder="C" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label"></label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <input type="text" id="text-input" name="jwbd" value="<?php echo $jwbd ?>" placeholder="D" class="form-control" required>
                                                        </div>
                                                    </div> 
                                                    <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </div>    
                                                </form>
                                            </div>
                                                                                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Corporate Cultural Management, PT.Garuda Indonesia Persero (Tbk).</p>
                                </div>
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
