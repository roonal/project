<!DOCTYPE html>
<html>
	<head>
		<title>Inserted Data using Ci</title>
		
	</head>
	<body>
		<div class="container">
			<br /><br /><br />
			<h3 align="center">Insert Data using Ci</h3><br />

			<?php 
				if($this->session->flashdata('success')){
					echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
				}
			?>
			<?php echo form_open('sell/form_validation');?>
			<form enctype="multipart/form-data" method="post" action="<?php echo base_url();?>/index.php/feedback_model/index">
				<div class="form-group">
					<label>Ad Name</label>
					<input type="text" name="product_name" placeholder="Enter AD name" class="form-control" />
					<span class="text-danger"><?php echo form_error("product_name"); ?>
						
					</span>
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea name="product_desc"placeholder="Enter Description" rows="4" cols="55" class="form-control" /></textarea>
					<span class="text-danger"><?php echo form_error("product_desc"); ?>
						
					</span>
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" name="product_price" placeholder="Price" class="form-control" />
					<span class="text-danger"><?php echo form_error("product_price"); ?>
						
					</span>
				</div>
				<div class="form-group">
					
					<label>Price</label><br>
					
					<input type="radio" name="product_negotiable" value="Negotiable" />Negotiable </label>
					
					
					
					
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
				
				<!--
							<div class="form-group">
									<label>Delivery</label>
									<input type="radio"  name="Delivery" style="margin-bottom:15px"> Yes
								<input type="radio"  name="Delivery" style="margin-bottom:15px"> No
										
								</span>
						</div>
			-->
			<div class="form-group">
				<label>Delivery Charge</label>
				<input type="text" name="product_delivery_charge" placeholder="DeliveryCharge" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_delivery_charge"); ?>
					
				</span>
			</div>
			<!-- <div class="form-group">
					<label>Condition</label>
					<input type="radio" name="condition" value="New"  />BrandNew
					<input type="radio" name="condition"  />Used
					<input type="radio" name="condition"  />Unused
				<span class="text-danger"><?php //echo form_error("condition"); ?>
					
				</span>
			</div>
			-->
			<br>
			<h3> <u>Seller Details</u> </h3>
			<div class="form-group">
				<label> Name</label>
				<input type="text" name="product_seller_name" placeholder="name" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_seller_name"); ?>
					
				</span>
			</div>
			
			
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="product_seller_email" placeholder="Email Address" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_seller_email"); ?>
					
				</span>
			</div>
			<div class="form-group">
				<label>Phone NUmber</label>
				<input type="text" name="product_seller_contact" placeholder="phone" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_seller_contact"); ?>
					
				</span>
			</div>
			<div class="form-group">
				<form method="post" action="<?php echo site_url('main/form_validation')?>" enctype="multipart/form-data">
					<!-- <label>Select a file</label>
					<input type="file" name="file_upload"/> -->
					
					
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