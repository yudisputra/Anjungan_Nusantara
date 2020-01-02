<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pendaftaran</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="<?php echo base_url('assets/register_new/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')?>">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/register_new/css/style.css')?>">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
		<script src="<?php echo base_url()?>assets/cleave/cleave.min.js"></script>
    	<script src="<?php echo base_url()?>assets/cleave/cleave.js"></script>

	</head>

	<body>

		<div class="wrapper" style="background-image: url('<?php echo base_url('assets/register_new/images/kabuabu (1).jpg');?>');">
			
			<div class="inner">
				<div class="image-holder">
					<img src="<?php echo base_url('assets/register_new/images/login-ui-ux-design-concept-illustration_78200-431_(2).jpg')?>" alt="">
				</div> 
					<?php echo form_open_multipart('Register/new_profile_and_login'); ?>
					<h3>Pendaftaran</h3>
					<div class="form-wrapper">
						<label style="color: red"><?php echo form_error('name') ?></label>
						<input type="text" placeholder="Nama" class="form-control" name="name">
					</div>

					<!-- <div class="form-group">
					<div class="form-wrapper">
						<label style="color: red"><?php echo form_error('alamat') ?></label>
					</div>
					<textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat"></textarea>
					</div> -->


					<!-- <div class="form-wrapper">
						<label style="color: red"><?php echo form_error('jenis_kelamin') ?></label>
						<select name="jenis_kelamin" class="form-control">
							<option value="" disabled selected>Jenis Kelamin</option>
							<option value="Laki-laki">Laki - laki</option>
							<option value="Perempuan">Perempuan</option>
							
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div> -->
						
					<div class="form-wrapper">
						<label style="color: red"><?php echo form_error('no_telp') ?></label>
						<input type="number" name="no_telp" placeholder="No Handphone" class="form-control">
					</div>	

					<div class="form-wrapper">
						<label style="color: red" id="status"><?php echo form_error('email') ?></label>
						<input type="text" placeholder="Alamat Email" class="form-control" name="email" id="email">
						<i class="zmdi zmdi-email"></i>
					</div>					

					<div class="form-wrapper"> 
					<!-- <label style="color: red"><?php echo $error?></label>
					<div class="form-group">
					<label>Foto Profil</label><br>
					<input type="file" class="form-control" name="user_file">
					<br> -->
					<!-- <button class="btn btn-warning" type="submit">Upload</button> -->
				<!-- </div> -->

				<div class="form-wrapper">
						<label style="color: red"><?php echo form_error('level') ?></label>
						<select name="level" class="form-control">
							<option value="" disabled selected>Anda adalah..</option>
							<option value="Pembeli">Pembeli</option>
							<option value="Penjual">Penjual</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
							
			
					</div>
					<!-- <div class="form-wrapper">
						<label style="color: red" id="status"><?php echo form_error('username') ?></label>
						<input type="text" placeholder="Nama Pengguna" class="form-control" name="username" id="username">
						<i class="zmdi zmdi-account"></i>
					</div> -->
					<div class="form-wrapper">
						<label style="color: red"><?php echo form_error('password') ?></label>
						<input type="password" placeholder="Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<label style="color: red"><?php echo form_error('confirm_password') ?></label>
						<input type="password" placeholder="Confirm Password" class="form-control" name="confirm_password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button id="btnSubmit">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<?php echo form_close();?>
			</div>
		</div>
	<script type="text/javascript">
	 $(document).ready(function(){

	   $('#email').change(function() { 
      
          var x= $('#email').val();
          var status = document.querySelector("#status");

          	 $.ajax({
               url : "<?php echo base_url();?>Register/checkemail",
               method : "POST",
               data : { email: x},
               async : false,
               dataType : 'json',
               success: function(data){
               	// console.log(data);
               if(data == "E-mail sudah dipakai."){
      		   	  $("#status").html(data);
      		   	  $("#btnSubmit").attr("disabled", true);
               }
               else{
               	  $("#status").html("");
               	  $("#btnSubmit").attr("disabled", false);
               }
           }});
        });
	 // document.getElementById("status").innerHTML = "You wrote: " + x;
	});
	</script>
	<!--  <script>
           var cleave = new Cleave('.cleave-number', {
                 phone: true,
                 phoneRegionCode: 'ID'
                 // numeralThousandsGroupStyle: 'none',
                 // prefix: '08',
                 // signBeforePrefix: true
      });
    </script> -->
	<script src="<?php echo base_url()?>assets/js/vendor.js"></script>
    <script src="<?php echo base_url()?>assets/js/app.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>