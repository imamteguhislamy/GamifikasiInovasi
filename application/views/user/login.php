<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>GIA Sincerity | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>login-bootstrap/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>login-bootstrap/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>login-bootstrap/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>login-bootstrap/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>login-bootstrap/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>login-bootstrap/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>login-bootstrap/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>login-bootstrap/css/main.css">
</head>
<body>
	<div class="limiter" align="center">
		<div class="container-login100" style="background-image: url('<?php echo base_url()?>assets/bg2.jpg');">
			<div class="wrap-login100 p-t-150 p-b-30">
				<form class="login100-form validate-form" method="post" action="<?php echo base_url().'login/login_user'?>">
					<div>
						<img src="<?php echo base_url()?>assets/logo.png" alt="AVATAR" height="234px" widht="395px">
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Nomor Pegawai is required">
						<input class="input100" type="text" name="nopeg" placeholder="Nomor Pegawai">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center w-full p-t-10 p-b-100">
						<a style="color: white" class="txt1">
							<?php echo $err_message;?>
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="<?php echo base_url().'login/new_user'?>">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div> 
				</form>
			</div>
		</div>
	</div>
</body>
<script src="<?php echo base_url()?>login-bootstrap/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>login-bootstrap/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url()?>login-bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>login-bootstrap/vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url()?>login-bootstrap/js/main.js"></script>
</html>