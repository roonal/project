<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href='http://localhost/ciproject/assets/css/contact_us.css'>

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	
	<title>Contact US</title>
</head>
<body>
	
	<?php 
				if($this->session->flashdata('success')){
					echo '<div class="alert alert-success flash">' . $this->session->flashdata('success') . '</div>';
				}
			?>
		
	<div class="main">
		<div class="left">
			<div class="title"><h1>Contact US</h1>
			<!-- <p>Feel free to contact us for any queries, we will get back to you within 48 business hrs</p> -->
			</div>

			<?php echo form_open('contact_us/form_validation');?>
			<form enctype="multipart/form-data" method="post">

				
			
				<input type="text" placeholder="Name" name="name" value= "<?php echo set_value("name")?>">
				<span class="text-danger"><?php echo form_error("name"); ?></span>

				<input type="number" placeholder="Phone Number" name="number" value= "<?php echo set_value("number")?>">
				

				<input type="email" placeholder="Email" name="email" value= "<?php echo set_value("email")?>">
				<span class="text-danger"><?php echo form_error("email"); ?></span>

				<textarea type="text" placeholder="Message" name="message" value= "<?php echo set_value("message")?>"></textarea>
				

				<input type="submit" value="send">
			</form>
		</div>
		<div class="right">
			<div class="content">
				<p><i class="fa fa-map-marker"></i> Ten Orbits Pvt Ltd, Bakhundole</p>
				<p><i class="fa fa-envelope-o"></i>www.10orbits.com</p>
				<p><i class="fa fa-volume-control-phone"></i>+977-1-5012170</p>

		</div>
	</div>
</div>

</body>



</html>