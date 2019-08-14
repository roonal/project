<!DOCTYPE html>
<html>
	<head>
		<title>Inserted Data using Ci</title>
		
	</head>
	<body>
		<div class="container">
			<br /><br /><br />
			<h1 align="center" >Please Fill up the form with required details</h1><br />

			<?php 
				if($this->session->flashdata('success')){
					echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
				}
			?>
			<?php echo form_open('sell/form_validation');?>
			<form enctype="multipart/form-data" method="post">
				<div class="form-group">
					<label>Ad Name</label>
					<input type="name" name="product_name" value="<?php echo set_value('product_name')?>" placeholder="Enter AD name" class="form-control" />
					<span class="text-danger"><?php echo form_error("product_name"); ?>
						
					</span>
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea name="product_desc" value="<?php echo set_value('product_desc')?>" placeholder="Enter Description" rows="4" cols="55" class="form-control" /></textarea>
					<span class="text-danger"><?php echo form_error("product_desc"); ?>
						
					</span>
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="number" name="product_price" value="<?php echo set_value('product_price')?>" placeholder="Price" class="form-control" />
					<span class="text-danger"><?php echo form_error("product_price"); ?>
						
					</span>
				</div>
				<div class="form-group">
					
					<label>Price</label><br>
					
					<input type="radio" name="product_negotiable"  value="Negotiable" />Negotiable </label>
					
					
					
					
					<input type="radio" name="product_negotiable" value="Non-Negotiable" />Non-Negotiable </label>
					
					
					<span class="text-danger"><?php echo form_error("product_negotiable"); ?>
						
					</span>
				</div>
				<div class="form-group">
					
					<label>Delivery</label><br>
					
					<input type="radio" name="product_delivery" value="Yes" />Yes </label>
					
					
					
					
					<input type="radio" name="product_delivery" value="No" />No </label>
					
					
					<span class="text-danger"><?php echo form_error("product_delivery"); ?>
						
					</span>
				</div>
				<div class="form-group">
					
					<label>Condition</label><br>
					
					<input type="radio" name="product_condition" value="BrandNew" />BrandNew </label>
					
					
					
					
					<input type="radio" name="product_condition" value="Used" />Used </label>
					<input type="radio" name="product_condition" value="UnUsed" />UnUsed </label>
					
					
					<span class="text-danger"><?php echo form_error("product_condition"); ?>
						
					</span>
				</div>
				
				
			<div class="form-group">
				<label>Delivery Charge</label>
				<input type="number" name="product_delivery_charge" value="<?php echo set_value('product_delivery_charge')?>" placeholder="DeliveryCharge" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_delivery_charge"); ?>
					
				</span>
			</div>
			
			<br>
			<h3> <u>Seller Details</u> </h3>
			<div class="form-group">
				<label> Name</label>
				<input type="name" name="product_seller_name" value="<?php echo set_value('product_seller_name')?>" placeholder="name" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_seller_name"); ?>
					
				</span>
			</div>
			
			
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="product_seller_email" value="<?php echo set_value('product_seller_email')?>" placeholder="Email Address" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_seller_email"); ?>
					
				</span>
			</div>
			<div class="form-group">
				<label>Phone NUmber</label>
				<input type="number" name="product_seller_contact" value="<?php echo set_value('product_seller_contact')?>" placeholder="phone" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_seller_contact"); ?>
					
				</span>
			</div>
			<div class="form-group">
				<form method="post" action="<?php echo site_url('main/form_validation')?>" enctype="multipart/form-data">
					
					
					<label>Image</label>
					<input type="file" name="product_image" />
					<span class="text-danger"><?php echo form_error("product_image"); ?>
						
					</span>
				</div>
				<br><br>
				<div class="form-group">
					<input type="submit" name="sell" value="submit">
				</div>
			</form>
			
		</div>
	</body>
</html>

