<!DOCTYPE html>
<html>
<head>
	<title>Inserted Data using Ci</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<br /><br /><br />
		<h3 align="center">Insert Data using Ci</h3><br />
		<?php echo form_open('main/form_validation');?>

			<div class="form-group">
				<label>Ad Name</label>
				<input type="text" name="ad_name" placeholder="Enter AD name" class="form-control" />
				<span class="text-danger"><?php echo form_error("ad_name"); ?>
					
				</span>
			</div>	


			<div class="form-group">
				<label>Description</label>
				<input type="text" name="description" placeholder="Enter Description" rows="4" cols="55" class="form-control" />
				<span class="text-danger"><?php echo form_error("description"); ?>
					
				</span>
			</div> 











			<div class="form-group">
				<label>Price</label>
				<input type="text" name="price" placeholder="Price" class="form-control" />
				<span class="text-danger"><?php echo form_error("price"); ?>
					
				</span>
			</div> 











			<div class="form-group">
				<label>Negotiability</label>
				<input type="radio" name="negotiability" /> Negotiable
				<input type="radio" name="negotiability" /> Non-Negotiable
				<span class="text-danger"><?php echo form_error("last_name"); ?>
					
				</span>
			</div> 






			<div class="form-group">
				<label>Delivery</label>
				<input type="radio"  name="Neogitable" style="margin-bottom:15px"> Yes
       			 <input type="radio"  name="Neogitable" style="margin-bottom:15px"> No
					
				</span>
			</div> 








			<div class="form-group">
				<label>Enter Last Name</label>
				<input type="text" name="last_name" placeholder="LastName" class="form-control" />
				<span class="text-danger"><?php echo form_error("last_name"); ?>
					
				</span>
			</div> 






			<div class="form-group">
				<label>Enter Last Name</label>
				<input type="text" name="last_name" placeholder="LastName" class="form-control" />
				<span class="text-danger"><?php echo form_error("last_name"); ?>
					
				</span>
			</div> 





			<div class="form-group">
				<label>Enter Last Name</label>
				<input type="text" name="last_name" placeholder="LastName" class="form-control" />
				<span class="text-danger"><?php echo form_error("last_name"); ?>
					
				</span>
			</div> 




			<div class="form-group">
				<label>Enter Last Name</label>
				<input type="text" name="last_name" placeholder="LastName" class="form-control" />
				<span class="text-danger"><?php echo form_error("last_name"); ?>
					
				</span>
			</div> 

















			<div class="form-group">
				<button type="submit"> test</button>
			</div>







		<?php echo form_close(); ?>

	
</div>
</body>
</html>