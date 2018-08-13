<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bgf7">

<!-- COURSES MENU-->
            <div class="main-content">                
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <section class="statistic-chart">
                        <div class="container">
                            <div class="row">
                                <?php foreach ($materi as $m){ ?>
                                <div class="col-md-6 col-lg-6">
                            <!-- Innovation Award-->
                            <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-20"><?php echo $m->judul; ?></h3>
                                <div class="chart-wrap">
                                    <img width="600" height="400" src="<?php echo base_url()?>images/materi/<?php echo $m->gambar; ?>">
                                </div>
                            <!--<div class="statistic-chart-1-note">
                                    <span class="big">10,368</span>
                                    <span>/ 16220 items sold</span>
                                </div> -->
                                <div align="right">
                                <button type="button" class="btn btn-outline-primary m-t-20" onclick="window.location='<?php echo base_url().'admin/home/addquiz/'.$m->id ?>'">
                                    <i class="fa fa-play"></i>&nbsp; Show Quiz
                                </button>
                            </div>
                            </div>
                            <!-- END Innovation Award-->
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </section>
            <!-- END COURSES MENU-->

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
</div>
</div>
</body>