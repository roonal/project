<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CodeIgniter Login</title>
	</head>
	<body>
		<?php
		if($this->session->flashdata('success'))
		{
			echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
		}
		?>
		<div class="container">
			<h1 class="page-header text-center">Welcome to your page</h1>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<?php
						$user = $this->session->userdata('user');
						extract($user);
					?>
					<!-- <h2>Welcome to Homepage </h2> -->
					<h4>User Info:</h4>
					<p>Email: <?php echo $email; ?></p>
					<p>Password: <?php echo $password; ?></p>
					<a href="logout" class="btn btn-danger">Logout</a> <!-- redirects to logout method -->
				</div>
			</div>
		</div>
	</body>