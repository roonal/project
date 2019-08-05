<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> -->

	<link rel="stylesheet" href="assets/css/reglogin.css">
	<head>
		<meta charset="utf-8">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
		<title>Login</title>
	</head>
	<body>
		<div class="container  d-flex justify-content-center">
			<div class="col-lg-4 m-auto">
				<h2 class="text-center mb-3">Please Login</h2>
				<?php    
				if($this->session->flashdata('error')){
					echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
				}
				if($this->session->flashdata('success')){
					echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
				}
			?> 
				<?php echo form_open('Login_auth/loginDo',array("method"=>"post")); ?>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="enter registered email" aria-describedby="emailHelp" value="<?php echo set_value('user_email')?>"
					name="user_email">
					<span class="text-danger"><?php echo form_error('user_email');?>
					</span>
				</div>
				<div class="form-group ">
					<label for="exampleInputPassword">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="user_password" >
					<span class="text-danger"><?php echo form_error('user_password');?>
					</span>
				</div>
				<div class="pt-3">
					<button type="submit" class="btn btn-primary btn-md btn-block font-weight-bold register-button" name="login" value="Create Account">Login</button>
				</div>
				<?php echo form_close(); ?>
				<p class="text-center"><a href="<?= base_url('Auth/resetPsw'); ?>">Forgot password</a></p>
				<p class="text-center">Do not have an account? <a href="<?= base_url('home/register_page'); ?>">Register</a></p>	
			</div>
		</div>
		<!-- JavaScript links -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>