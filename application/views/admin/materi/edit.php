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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type='text/javascript'>
    $(window).load(function(){
    $("#tipe").change(function() {
                console.log($("#tipe option:selected").val());
                if ($("#tipe option:selected").val() == '0') {
                    $('#pdf').prop('hidden', true);
                    $('#link').prop('hidden', true);
                } else if ($("#tipe option:selected").val() == 'application/pdf'){
                    $('#pdf').prop('hidden', false);
                    $('#link').prop('hidden', true);
                } else {
                    $('#pdf').prop('hidden', true);
                    $('#link').prop('hidden', false);
                }
            });
    });
    </script>

</head>
       
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">                       
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Edit Materi</h3>
                                <div class="card">
                                    <form action="<?php echo base_url().'admin/materi/update'?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="id" class=" form-control-label">ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input readonly type="text" name="id" value="<?php echo $id ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="judul" class=" form-control-label">Judul Materi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="judul" value="<?php echo $judul ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="judul" class=" form-control-label">Jumlah Soal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="jmlSoal" value="<?php echo $jmlSoal ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Tipe Materi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="tipe" id="tipe" class="form-control" required>
                                                        <option value="0">Please select</option>
                                                        <option value="video/mp4">Video</option>
                                                        <option value="application/pdf">PDF</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group" id="link" hidden>
                                                <div class="col col-md-3">
                                                    <label for="link_video" class=" form-control-label">File Video Baru</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" name="video" value="<?php echo $link_video ?>" class="form-control">
                                                    <span style="font-size: 12px">*Kosongkan jika tidak ada perubahan</span>
                                                </div>                                            
                                                <div class="col col-md-3">
                                                    <label for="link_video" class=" form-control-label">File Video Lama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p><?php if ($link_video == NULL) {
                                                        echo "Tidak ada file Video di Database";
                                                    } else {
                                                        echo $link_video;
                                                    } ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row form-group" id="pdf" hidden>
                                                <div class="col col-md-3">
                                                    <label for="link_video" class=" form-control-label">File PDF Baru</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" name="pdf" value="<?php echo $pdf ?>" class="form-control">
                                                    <span style="font-size: 12px">*Kosongkan jika tidak ada perubahan</span>
                                                </div>

                                                <div class="col col-md-3">
                                                    <label for="link_video" class=" form-control-label">File PDF Lama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p><?php if ($pdf == NULL) {
                                                        echo "Tidak ada file PDF di Database";
                                                    } else {
                                                        echo $pdf;
                                                    } ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="link_video" class=" form-control-label">Foto Latar Baru</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" name="gambar" value="<?php echo $gambar ?>" class="form-control">
                                                    <span style="font-size: 12px">*Kosongkan jika tidak ada perubahan</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="link_video" class=" form-control-label">Foto Latar Lama</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <img src="<?php echo base_url()?>images/materi/<?php echo $gambar ?> ">
                                                </div>
                                            </div>
                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="link_video" class=" form-control-label">Gambar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="gambar" name="gambar" class="form-control">
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="card-footer" align="right">
                                            <button type="submit" class="btn btn-primary btn-md">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

    <script>
        function myFunction() {
            alert("Deleted!");
        }
    </script>
    

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
