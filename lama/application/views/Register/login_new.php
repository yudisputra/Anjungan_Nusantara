<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?php echo base_url('assets/register_new/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')?>">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/register_new/css/style.css')?>">

		<script src="<?php echo base_url()?>assets/cleave/cleave.min.js"></script>
    <script src="<?php echo base_url()?>assets/cleave/cleave.js"></script>

	</head>

	<body>

		<div class="wrapper" style="background-image: url('<?php echo base_url('assets/register_new/images/kabuabu (1).jpg');?>');">

			<div class="inner">
				<div class="image-holder">
					<img src="<?php echo base_url('assets/register_new/images/mobile-login-concept-illustration_114360-83.jpg')?>" alt="">
				</div>
				<?php echo form_open('Login/cekLogin'); ?>
					<h3>Masuk</h3>

					<div class="form-wrapper">
						<input type="text" placeholder="E-mail" class="form-control" name="email">
						<i class="zmdi zmdi-account"></i>
					</div>

					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<font color="Red"><?php echo validation_errors()?></font>
					<button> Masuk
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<br>
					<center>Belum punya akun?, silahkan <a href="<?php echo base_url()?>Register">DAFTAR</a></center>
					<?php echo form_close(); ?>

			</div>
		</div>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
