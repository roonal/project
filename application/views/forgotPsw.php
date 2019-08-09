<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> -->
	<head>
		<meta charset="utf-8">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
		<title>Search password</title>
	</head>
	<body>
		<div class="bg">
			<div class="login100-form">
				<div class="col-lg-3 m-lg-auto">
					<div class="card text-black bg-light mb-5 mt-5" style="width:40rem;">
						<div class="card-body">
							<span class="login100-form-title pb-4 text-capitalize">
								Enter your registered email
							</span>
							<?php
							if($this->session->flashdata('error_email')){
								echo '<div class="alert alert-danger">' . $this->session->flashdata('error_email') . '</div>';
							}
							?>
							<?php echo form_open('Auth/resetPsw',array("method"=>"post")); ?>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="enter registered email" aria-describedby="emailHelp" value="<?php echo set_value('user_email')?>"
								name="user_email">
								<span class="text-danger"><?php echo form_error('user_email');?>
								</span>
							</div>
							<div class="pt-3">
								<button type="submit" href="<?= base_url('Login_auth/index'); ?>" class="btn btn-primary btn-md btn-block register-button text-uppercase" name="search" value="login">Search</button>
							</div>
							<?php echo form_close(); ?>
							<label class="text-lg-center pt-3 ">
								<a href="<?= base_url('Login_auth/index'); ?>"><u>Remember Password?</u></a>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<!-- JavaScript links -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</html>