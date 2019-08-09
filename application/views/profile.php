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
						<p>Email: <?php echo $email; ?></p>
						<p>Password: <?php echo $password; ?></p>
						<a href="logout" class="btn btn-danger">Logout</a> <!-- redirects to logout method -->
					</div>
				</div>
			</div>
		</div>
	</div>
