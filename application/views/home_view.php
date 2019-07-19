<style>
	div.error{
		color:black;
	}
</style>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script> -->


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<head>
		<meta charset="utf-8">
		<title>Welcome to CodeIgniter</title>
	</head>

	<?php 
	if($this->session->flashdata("success")){ ?>

		
			<?php echo $this->session->flashdata("successfully submited your form"); 
			echo "</br>";
			 
			?>

		<?php
	}
	?>

	<body >
		<div class="container">
			<div class="row">
				<hr>
				<h2 class="intro-text text-center">Contact
				<strong>Form</strong>
				</h2>
				<hr>
				<?php echo form_open('home/form_submission',array("method"=>"post")); ?>

					<div class="col-md-6">
						<div class="input-group input-group-lg">
							<span class="input-group-addon" id="sizing-addon1"><i class="fas fa-user"></i></span>
							<input type="text" class="form-control" value="<?php echo set_value('txt_name')?>" name="txt_name" placeholder="Full Name"   >

							<?php echo form_error("txt_name","<div class='error'>","</div>"); echo "</br>" ?>

						</div>
						<div class="input-group input-group-lg">
							<span class="input-group-addon" id="sizing-addon1"><i class="fas fa-envelope"></i></span>
							<input type="email" class="form-control" value="<?php echo set_value('txt_email')?>" name="txt_email" placeholder="Email"   >

							<?php echo form_error("txt_email","<div class='error'>","</div>"); echo "</br>" ?>

						</div>
						<div class="input-group input-group-lg">
							<span class="input-group-addon" id="sizing-addon1"><i class="fas fa-phone"></i></span>
							<input type="number" class="form-control" value="<?php echo set_value('txt_phone')?>" name="txt_phone" placeholder="Phone Number"  >

							<?php echo form_error("txt_phone","<div class='error'>","</div>"); echo "</br>"?>

						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group">
							<textarea name="txt_message" cols="80" rows="6" class="form-control" value="<?php echo set_value('txt_message')?>" placeholder="Your Message" ></textarea>
						</div>
						<button class="btn btn-lg">Submit Your Message</button>
					</div>
				<?php echo form_close(); ?> 
			</div>
		</div>
	</body>
</html>
<style>
	.intro-text {
		margin-top:100px;
	}
	body{
		background-image: url('http://localhost/ciproject/assets/images/pic2.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
	}
	.row .input-group{
		margin-bottom: 25px;
		
	}
	.row .btn{
		width: 100%;
		font-size: 15px;
		background-color:red;
		color:#fff;
	}
	.row .btn:hover{
		background-color: #a85959;
	}
	
</style>