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
                $('#pdf').prop('required', true);
                $('#link').prop('hidden', true);
            } else {
                $('#pdf').prop('hidden', true);
                $('#link').prop('required', true);
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
                                <h3 class="title-5 m-b-35">Tambah Materi</h3>
                                <div class="card">
                                    <form action="<?php echo base_url().'admin/materi/tambah'?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="judul" class=" form-control-label">Judul Materi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="judul" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="judul" class=" form-control-label">Jumlah Soal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="jmlSoal" class="form-control" required>
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
                                                    <label for="link_video" class=" form-control-label">File Video</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="video" name="video" placeholder="Masukkan file video materi disini" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group" id="pdf" hidden>
                                                <div class="col col-md-3">
                                                    <label for="link_video" class=" form-control-label">File PDF</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="File" id="pdf" name="pdf" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="link_video" class=" form-control-label">File Foto Latar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="File" id="gambar" name="gambar" class="form-control">
                                                    <span><i>*File upload tanpa spasi</i></span>
                                                </div>
                                            </div>
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
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <h3 class="title-5 m-b-35">Daftar Materi</h3>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Judul Materi</th>
                                                <th>Jumlah Soal</th>
                                                <th>File Video</th>
                                                <th>File PDF</th>
                                                <th>Foto Latar</th>
                                                <th>Edit/Delete</th>
                                                <!-- <th class="text-right">Delete</th> -->
                                            </tr>
                                        </thead>
                                        <?php foreach ($materi as $m){ ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $m->judul; ?></td>
                                                <td><?php echo $m->jmlSoal; ?></td>
                                                <td><a href="<?php echo $m->link_video; ?>" target="_blank"><?php echo $m->link_video; ?></a></td>
                                                <td><a href="<?php echo base_url()."images/materi/pdf/".$m->pdf; ?>" target="_blank"><?php echo $m->pdf; ?></td>
                                                <td><a href="<?php echo base_url()."images/materi/".$m->gambar; ?>" target="_blank"><?php echo $m->gambar; ?></a></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="<?php echo base_url()."admin/materi/edit/".$m->id; ?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                        </a>
                                                    &nbsp;
                                                        <a href="<?php echo base_url()."admin/materi/hapus/".$m->id; ?>">
                                                            <button onclick="myFunction()" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
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
