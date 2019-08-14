<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> -->
	<link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
	<head>
		<meta charset="utf-8">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
		<title>Register Now</title>
	</head>
	<body>
		<div class="bg">
			<div class="login100-form">
				<div class="col-lg-3 m-lg-auto">
					<div class="card text-black bg-light mb-5 mt-5" style="width:40rem;">
						<div class="card-body">
							<span class="login100-form-title pb-4">
								Reset New Password
							</span>
							<?php echo form_open('home',array("method"=>"post")); ?>
							<div class="form-group ">
								<label for="exampleInputPassword">Password</label>
								<input type="password" placeholder="Password" class="form-control" id="exampleInputPassword"name="user_password"autocomplete="off" >
								<span class="text-danger"><?php echo form_error('user_password');?>
								</span>
							</div>
							<div class="form-group ">
								<label for="exampleInputPassword1">confirm password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="re enter Password"  name="confirm_password"autocomplete="off">
								<span class="text-danger"><?php echo form_error('confirm_password');?>
								</span>
							</div>
							<div class="pt-3 pb-1">
								<button type="submit" class="btn btn-primary btn-md btn-block register-button text-uppercase" name="change" value="change password">Change</button>
							</div>
							
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
