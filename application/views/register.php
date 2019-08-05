<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<<<<<<< HEAD
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link rel="stylesheet" href="assets/css/login.css"> -->
	<!-- <head>
=======
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> -->
	<link rel="stylesheet" href="assets/css/reglogin.css">
	<head>
		<meta charset="utf-8">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
		<title>Register Now</title>
	</head> -->
	<body>
		<div class="container d-flex justify-content-center">
			<div class="col-lg-4 m-auto">
				<h2 class="text-center mb-3">Register Here</h2>
				<?php    
				if($this->session->flashdata('error')){
					// echo '<div class="alert alert-danger"> you provided th wrong login details.' . $this->session->flashdata('error_login') . '</div>';
					echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
				}
				?>
				<?php echo form_open('Auth/registration',array("method"=>"post")); ?>
				<div class="form-group">
					<label for="exampleInputUser">User Name</label>
					<input type=" text" class="form-control" name="user_name" autocomplete="off" value="<?php echo set_value('user_name')?>">
					<span class="text-danger"><?php echo form_error('user_name');?>
					</span>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo set_value('user_email')?>"
					name="user_email"autocomplete="off">
					<span class="text-danger"><?php echo form_error('user_email');?>
					</span>
				</div>
				<div class="form-group ">
					<label for="exampleInputPassword">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword"name="user_password"autocomplete="off" >
					<span class="text-danger"><?php echo form_error('user_password');?>
					</span>
				</div>
				<div class="form-group ">
					<label for="exampleInputPassword1">confirm password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  name="confirm_password"autocomplete="off">
					<span class="text-danger"><?php echo form_error('confirm_password');?>
					</span>
				</div>
				<div>
					<button type="submit" class="btn btn-primary btn-md btn-block font-weight-bold register-button" name="register" value="">Create Account</button>
				</div>
				<p class="text-center">Have an account? <a href="<?= base_url('home/login_page'); ?>">Log In</a>
				<p class="text-center">By creating an account you agree to the <a href="">terms</a>&<a href="">conditions</a>
				<?php echo form_close(); ?>
			</div>
		</div>
		<!-- JavaScript links -->
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	</body>
</html>