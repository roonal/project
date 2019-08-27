<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
	<head>
		<meta charset="utf-8">
		<title>Profile</title>
	</head>
	<div class="bg">
		<div class="login100-form">
			<div class="col-lg-3 ">
				<div class="card text-black d-block bg-light mb-5 mt-5" style="width:80rem; margin-left: 25rem;">
					<div class="card-body m-lg-auto">
						<?php
							$user = $this->session->userdata('user');
							extract($user);
							
						?>
						<span class="login100-form-title pb-4 text-capitalize">
							WELCOME <?php echo $username; ?>
						</span>
						<?php
						if($this->session->flashdata('success'))
						{
						echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
						}
						?>
						<h4>User Info:</h4>
						<div class="form-group">
							<label for="firstname" class="col-sm-2 control-label">User Email</label>
							<div class="col-sm-9">
								<input type="text" name="firstname" value="<?php echo $username?>" class="" id="firstname" placeholder="">
							</div>
						</div><br></br>
						<p>Email: <?php echo $email; ?></p>
						<p>Password: <?php echo $password; ?></p>
						<div class="font-weight-bold h3">
							<label class="text-lg-center pt-3 " for="ckb1">
								<a href="<?= base_url('Auth/update_Info'); ?>"><u>Update Information</u></a>
							</label>
						</div>
						<a href="logout" class="btn btn-danger">Logout</a> <!-- redirects to logout method -->
					</div>
				</div>
			</div>
		</div>
	</div>