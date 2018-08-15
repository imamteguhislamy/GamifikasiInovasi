<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url()?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
        
<body>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Dashboard</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="default-tab">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                                    <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#jktdc" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">JKTDC</a>

                                                     <a class="nav-item nav-link" id="jktdf-tab" data-toggle="tab" href="#jktde" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">JKTDE</a>

                                                     <a class="nav-item nav-link" id="jktdf-tab" data-toggle="tab" href="#jktdf" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">JKTDF</a>

                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#jktdg" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">JKTDG</a>                                                    

                                                    <a class="nav-item nav-link" id="jktdi-tab" data-toggle="tab" href="#jktdi" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">JKTDI</a> 

                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#jktdn" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">JKTDN</a>

                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#jktdo" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">JKTDO</a>                                                

                                                     <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#jktdq" role="tab" aria-controls="nav-contact"
                                                     aria-selected="false">JKTDQ</a>

                                                    <a class="nav-item nav-link" id="jktdz-tab" data-toggle="tab" href="#jktdz" role="tab" aria-controls="nav-contact"
                                                     aria-selected="true">JKTDZ</a>

                                                </div>
                                            </nav>
                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                <div class="tab-pane fade" id="jktdz" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <!-- JKTDZ -->
                                                    <div class="row">                                                        
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTDH</h3>
                                                                <div class="table-responsive">
                                                                    
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTDH as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                    
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                    
                                                    <!-- END JKTDZ -->
                                                    <!-- JKTDV -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTDV</h3>
                                                                <div class="table-responsive">   
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTDV as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>  
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTDV -->
                                                        <!-- JKTDA -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTDA</h3>
                                                                <div class="table-responsive">   
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTDA as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>  
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTDA -->
                                                        <!-- JKTDK -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTDK</h3>
                                                                <div class="table-responsive">   
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTDK as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>  
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTDK -->
                                                        <!-- JKTDS -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTDS</h3>
                                                                <div class="table-responsive">   
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTDS as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>  
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTDS -->
                                                        </div>
                                                </div>
                                                <div class="tab-pane fade" id="jktdi" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <!-- JKTDI -->
                                                    <div class="row">
                                                        <!-- JKTID -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTID</h3>
                                                                <div class="table-responsive">   
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTID as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>  
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTID -->

                                                        <!-- JKTIB -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTIB</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTIB as $IB) { ?>
                                                                            <tr>
                                                                                <td><?php echo $IB->nama_lengkap; ?> (<?php echo $IB->nopeg; ?>)</td>
                                                                                <td><?php echo $IB->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table> 
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTIB -->

                                                        <!-- JKTVZ -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTVZ</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTVZ as $VZ) { ?>
                                                                            <tr>
                                                                                <td><?php echo $VZ->nama_lengkap; ?> (<?php echo $VZ->nopeg; ?>)</td>
                                                                                <td><?php echo $VZ->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTVZ -->

                                                        <!-- JKTIG -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTIG</h3>
                                                                <div class="table-responsive">    
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTIG as $IG) { ?>
                                                                            <tr>
                                                                                <td><?php echo $IG->nama_lengkap; ?> (<?php echo $IG->nopeg; ?>)</td>
                                                                                <td><?php echo $IG->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTIG -->                                                                            
                                                    </div>
                                                    <!-- END JKTDI -->
                                                </div>
                                                <div class="tab-pane fade" id="jktdf" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <!-- JKTDF -->
                                                    <div class="row">
                                                        <!-- JKTWL -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTWL</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTWL as $WL) { ?>
                                                                            <tr>
                                                                                <td><?php echo $WL->nama_lengkap; ?> (<?php echo $WL->nopeg; ?>)</td>
                                                                                <td><?php echo $WL->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTWL -->

                                                        <!-- JKTWF -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTWF</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTWF as $WF) { ?>
                                                                            <tr>
                                                                                <td><?php echo $WF->nama_lengkap; ?> (<?php echo $WF->nopeg; ?>)</td>
                                                                                <td><?php echo $WF->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTWF -->

                                                        <!-- JKTWA -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTWA</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTWA as $WA) { ?>
                                                                            <tr>
                                                                                <td><?php echo $WA->nama_lengkap; ?> (<?php echo $WA->nopeg; ?>)</td>
                                                                                <td><?php echo $WA->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTWA -->

                                                        <!-- JKTWR -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTWR</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTWR as $WR) { ?>
                                                                            <tr>
                                                                                <td><?php echo $WR->nama_lengkap; ?> (<?php echo $WR->nopeg; ?>)</td>
                                                                                <td><?php echo $WR->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTWR -->                   
                                                    </div>
                                                    <!-- END JKTDF -->
                                                </div>
                                                <div class="tab-pane fade" id="jktde" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <!-- JKTDE -->
                                                    <div class="row">
                                                        <!-- JKTML -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTML</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTML as $ML) { ?>
                                                                            <tr>
                                                                                <td><?php echo $ML->nama_lengkap; ?> (<?php echo $ML->nopeg; ?>)</td>
                                                                                <td><?php echo $ML->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTML -->

                                                        <!-- JKTMQ -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTMQ</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTMQ as $OS) { ?>
                                                                            <tr>
                                                                                <td><?php echo $OS->nama_lengkap; ?> (<?php echo $OS->nopeg; ?>)</td>
                                                                                <td><?php echo $OS->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTMQ -->                  
                                                    </div>
                                                    <!-- END JKTDE -->
                                                </div>
                                                <div class="tab-pane fade" id="jktdo" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <!-- JKTDO -->
                                                    <div class="row">
                                                        <!-- JKTOF -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTOF</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTOF as $OF) { ?>
                                                                            <tr>
                                                                                <td><?php echo $OF->nama_lengkap; ?> (<?php echo $OF->nopeg; ?>)</td>
                                                                                <td><?php echo $OF->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTOF -->

                                                        <!-- JKTOS -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTOS</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTOS as $OS) { ?>
                                                                            <tr>
                                                                                <td><?php echo $OS->nama_lengkap; ?> (<?php echo $OS->nopeg; ?>)</td>
                                                                                <td><?php echo $OS->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTOS -->
                                                        
                                                        <!-- JKTOG -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTOG</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTOG as $PN) { ?>
                                                                            <tr>
                                                                                <td><?php echo $PN->nama_lengkap; ?> (<?php echo $PN->nopeg; ?>)</td>
                                                                                <td><?php echo $PN->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTOG -->                                                        
                                                    </div>
                                                    <!-- END JKTDO -->
                                                </div>
                                                <div class="tab-pane fade show active" id="jktdc" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <!-- JKTDC -->
                                                    <div class="row">
                                                        <!-- JKTCG -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTCG</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTCG as $CG) { ?>
                                                                            <tr>
                                                                                <td><?php echo $CG->nama_lengkap; ?> (<?php echo $CG->nopeg; ?>)</td>
                                                                                <td><?php echo $CG->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTCG -->

                                                        <!-- JKTCI -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTCI</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTCI as $CI) { ?>
                                                                            <tr>
                                                                                <td><?php echo $CI->nama_lengkap; ?> (<?php echo $CI->nopeg; ?>)</td>
                                                                                <td><?php echo $CI->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTCI -->
                                                        
                                                        <!-- JKTCC -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTCC</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTCC as $CC) { ?>
                                                                            <tr>
                                                                                <td><?php echo $CC->nama_lengkap; ?> (<?php echo $CC->nopeg; ?>)</td>
                                                                                <td><?php echo $CC->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTCC -->                                                        
                                                    </div>
                                                    <!-- END JKTDC -->
                                                </div>
                                                <div class="tab-pane fade" id="jktdg" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <!-- JKTDG -->
                                                    <div class="row">
                                                        <!-- JKTGC -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTGC</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTGC as $GC) { ?>
                                                                            <tr>
                                                                                <td><?php echo $GC->nama_lengkap; ?> (<?php echo $GC->nopeg; ?>)</td>
                                                                                <td><?php echo $GC->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTGC -->

                                                        <!-- JKTGO -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTGO</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTGO as $GO) { ?>
                                                                            <tr>
                                                                                <td><?php echo $GO->nama_lengkap; ?> (<?php echo $GO->nopeg; ?>)</td>
                                                                                <td><?php echo $GO->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTGO -->
                                                        
                                                        <!-- JKTGI -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTGI</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTGI as $GI) { ?>
                                                                            <tr>
                                                                                <td><?php echo $GI->nama_lengkap; ?> (<?php echo $GI->nopeg; ?>)</td>
                                                                                <td><?php echo $GI->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTGI -->

                                                        <!-- LONDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">LONDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($LONDM as $LON) { ?>
                                                                            <tr>
                                                                                <td><?php echo $LON->nama_lengkap; ?> (<?php echo $LON->nopeg; ?>)</td>
                                                                                <td><?php echo $LON->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END LONDM -->

                                                        <!-- JEDDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JEDDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JEDDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JEDDM -->

                                                        <!-- AMSDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">AMSDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($AMSDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END AMSDM -->

                                                        <!-- SINDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SINDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SINDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SINDM -->

                                                        <!-- KULDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">KULDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($KULDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END KULDM -->

                                                        <!-- BKKDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BKKDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BKKDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BKKDM -->                           
                                                    
                                                        <!-- TYODM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">TYODM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($TYODM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END TYODM -->

                                                        <!-- OSADM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">OSADM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($OSADM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END OSADM -->

                                                        <!-- NGODM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">NGODM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($NGODM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END NGODM -->

                                                        <!-- SELDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SELDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SELDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SELDM -->

                                                        <!-- SHADM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SHADM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SHADM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SHADM -->

                                                        <!-- HKGDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">HKGDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($HKGDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END HKGDM -->

                                                        <!-- BJSDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BJSDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BJSDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BJSDM -->

                                                        <!-- CANDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">CANDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($CANDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END CANDM -->

                                                        <!-- SYDDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SYDDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SYDDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SYDDM -->

                                                        <!-- MELDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">MELDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($MELDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END MELDM -->

                                                        <!-- PERDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">PERDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($PERDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END PERDM -->
                                                    </div>
                                                    <!-- END JKTDG -->
                                                </div>
                                                <div class="tab-pane fade" id="jktdq" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <!-- JKTDQ -->
                                                    <div class="row">
                                                        <!-- JKTRN -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTRN</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTRN as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTRN -->

                                                        <!-- JKTDB -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTDB</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTDB as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTDB -->
                                                        <!-- JKTMX -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTMX</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTMX as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTDB -->                                                                                   
                                                    </div>
                                                    <!-- END JKTDR -->
                                                </div>
                                                <div class="tab-pane fade" id="jktdn" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <!-- JKTDN -->
                                                    <div class="row">
                                                        <!-- JKTCM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTCM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTCM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                                 
                                                        </div>
                                                        <!-- END JKTCM -->

                                                        <!-- JKTRZ -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTRZ</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTRZ as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTRZ -->

                                                        <!-- JKTEC -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTEC</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTEC as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTEC -->

                                                        <!-- JKTDU -->
                                                        <!-- <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTDU</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTDU as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div> -->
                                                        <!-- END JKTDU -->

                                                        <!-- JKTNL -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTNL</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTNL as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTNL -->                                          
                                                        <!-- JKTNH -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTNH</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTNH as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTNH -->

                                                        <!-- JKTCD -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTCD</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTCD as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTCD -->

                                                        <!-- MESDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">MESDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($MESDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END MESDM -->

                                                        <!-- BTJDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BTJDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BTJDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BTJDM -->

                                                        <!-- PDGDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">PDGDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($PDGDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END PDGDM -->

                                                        <!-- BTHDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BTHDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BTHDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BTHDM -->

                                                        <!-- PKUDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">PKUDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($PKUDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END PKUDM -->

                                                        <!-- PLMDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">PLMDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($PLMDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END PLMDM -->

                                                        <!-- TKGDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">TKGDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($TKGDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END TKGDM -->

                                                        <!-- DJBDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">DJBDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($DJBDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END DJBDM -->

                                                        <!-- PGKDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">PGKDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($PGKDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END PGKDM -->

                                                        <!-- TNJDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">TNJDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($TNJDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END TNJDM -->

                                                        <!-- TJQDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">TJQDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($TJQDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END TJQDM -->

                                                        <!-- BKSDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BKSDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BKSDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BKSDM -->

                                                        <!-- FLZDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">FLZDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($FLZDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END FLZDM -->

                                                        <!-- GNSDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">GNSDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($GNSDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END GNSDM -->

                                                        <!-- LSWDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">LSWDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($LSWDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END LSWDM -->

                                                        <!-- SBGDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SBGDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SBGDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SBGDM -->

                                                        <!-- DTBDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">DTBDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($DTBDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END DTBDM -->

                                                        <!-- JKTDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JKTDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JKTDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JKTDM -->

                                                        <!-- BDODM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BDODM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BDODM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BDODM -->

                                                        <!-- SUBDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SUBDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SUBDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SUBDM -->

                                                        <!-- DPSDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">DPSDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($DPSDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END DPSDM -->

                                                        <!-- LOPDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">LOPDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($LOPDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END LOPDM -->

                                                        <!-- YOGDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">YOGDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($YOGDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END YOGDM -->

                                                        <!-- SOCDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SOCDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SOCDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SOCDM -->

                                                        <!-- SRGDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SRGDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SRGDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SRGDM -->

                                                        <!-- MLGDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">MLGDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($MLGDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END MLGDM -->

                                                        <!-- KOEDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">KOEDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($KOEDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END KOEDM -->

                                                        <!-- LBJDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">LBJDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($LBJDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END LBJDM -->

                                                        <!-- TMCDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">TMCDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($TMCDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END TMCDM -->

                                                        <!-- ENEDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">ENEDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($ENEDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END ENEDM -->

                                                        <!-- BMUDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BMUDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BMUDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BMUDM -->

                                                        <!-- JBBDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">JBBDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($JBBDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END JBBDM -->

                                                        <!-- BWXDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BWXDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BWXDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BWXDM -->

                                                        <!-- SWQDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SWQDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SWQDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SWQDM -->

                                                        <!-- MOFDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">MOFDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($MOFDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END MOFDM -->

                                                        <!-- UPGDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">UPGDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($UPGDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END UPGDM -->

                                                        <!-- BDJDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BDJDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BDJDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BDJDM -->

                                                        <!-- MDCDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">MDCDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($MDCDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END MDCDM -->

                                                        <!-- BPNDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BPNDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BPNDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BPNDM -->

                                                        <!-- BIKDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BIKDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BIKDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BIKDM -->

                                                        <!-- PNKDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">PNKDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($PNKDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END PNKDM -->

                                                        <!-- PKYDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">PKYDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($PKYDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END PKYDM -->

                                                        <!-- DJJDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">DJJDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($DJJDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END DJJDM -->

                                                        <!-- TIMDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">TIMDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($TIMDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END TIMDM -->

                                                        <!-- TTEDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">TTEDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($TTEDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END TTEDM -->

                                                        <!-- PLWDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">PLWDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($PLWDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END PLWDM -->

                                                        <!-- KDIDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">KDIDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($KDIDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END KDIDM -->

                                                        <!-- GTODM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">GTODM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($GTODM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END GTODM -->

                                                        <!-- AMQDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">AMQDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($AMQDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END AMQDM -->

                                                        <!-- MJUDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">MJUDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($MJUDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END MJUDM -->

                                                        <!-- TRKDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">TRKDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($TRKDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END TRKDM -->

                                                        <!-- BEJDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BEJDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BEJDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BEJDM -->

                                                        <!-- SOQDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SOQDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SOQDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SOQDM -->

                                                        <!-- MKWDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">MKWDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($MKWDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END MKWDM -->

                                                        <!-- MKQDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">MKQDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($MKQDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END MKQDM -->

                                                        <!-- LUWDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">LUWDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($LUWDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END LUWDM -->

                                                        <!-- BUWDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">BUWDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($BUWDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END BUWDM -->

                                                        <!-- LUVDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">LUVDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($LUVDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END LUVDM -->

                                                        <!-- SXKDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">SXKDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($SXKDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END SXKDM -->

                                                        <!-- PSUDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">PSUDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($PSUDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END PSUDM -->

                                                        <!-- KTGDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">KTGDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($KTGDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END KTGDM -->

                                                        <!-- PKNDM -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="statistic-chart-1">
                                                                <h3 class="title-3 m-b-20">PKNDM</h3>
                                                                <div class="table-responsive">
                                                                    <table class="table table-top-campaign">
                                                                        <tbody>
                                                                            <?php foreach ($PKNDM as $a) { ?>
                                                                            <tr>
                                                                                <td><?php echo $a->nama_lengkap; ?> (<?php echo $a->nopeg; ?>)</td>
                                                                                <td><?php echo $a->skor; ?></td>
                                                                            </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>                            
                                                        </div>
                                                        <!-- END PKNDM -->

                                                    </div>
                                                    <!-- END JKTDN -->
                                                </div>
                                                <!-- ================================================== -->
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
