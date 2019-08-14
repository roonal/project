<!DOCTYPE html>
<html lang="en">	
<head>
		<title>Sell form</title>
		
	</head>
	<body>

		<div class="container abc d-flex justify-content-center">

			
			
			<?php echo form_open('sell/form_validation');?>
			<form enctype="multipart/form-data" method="post" action="<?php echo base_url();?>/index.php/feedback_model/index">

				<?php 
				if($this->session->flashdata('success')){
					echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
				}
			?>

				<h2 style="color: white;"><b>Please Fill All The Fields</b> </h2>
				<div class="form-group">
					<label style="color: black" > <div class="b">Ad Name </div></label>
					<input type="text" name="product_name" value= "<?php echo set_value("product_name")?>" placeholder="Enter AD name" class="form-control" />
					<span class="text-danger"><?php echo form_error("product_name"); ?>
						
					</span>
				</div>
				<div class="form-group">
					<label style="color:black;"><div class="b">Description</div></label>
					<textarea name="product_desc"placeholder="Enter Description" value= "<?php echo set_value("product_desc")?>" rows="4" cols="55" class="form-control" /></textarea>
					<span class="text-danger"><?php echo form_error("product_desc"); ?>
						
					</span>
				</div>


				<div class="form-group">
					
					<label style="color:black;"><div class="b">Condition</div></label><br>
					
					<input type="radio" name="product_condition"  value="BrandNew" /><span1>BrandNew </span1>
					
					
					
					
					<input type="radio" name="product_condition" value="Used" /><span1>Used </span1>
					<input type="radio" name="product_condition" value="UnUsed" /><span1>UnUsed</span1> 
					
					
					<span class="text-danger"><?php echo form_error("product_condition"); ?>
						
					</span>
				</div>


				<div class="form-group">
					
					<label style="color:black;"><div class="b">Price</div></label><br>
					
					<input type="radio" name="product_negotiable" value="Negotiable" style="color:pink;" ><span>Negotiable</span>
					
					
					
					
					<input type="radio" name="product_negotiable" value="Non-Negotiable" style="color:pink;"><span>Non-Negotiable</span>
					
					
					<span class="text-danger"><?php echo form_error("product_negotiable"); ?>
						
					</span>
				</div>


				<div class="form-group">
					<label style="color:black;"><div class="b">Price</div></label>
					<input type="number" name="product_price" value= "<?php echo set_value("product_price")?>"  placeholder="Price" class="form-control" />
					<span class="text-danger"><?php echo form_error("product_price"); ?>
						
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
			<!-- <div class="form-group">
				<label style="color:black;"><div class="b">Delivery Charge</div></label>
				<input type="text" name="product_delivery_charge" value= "<?php echo set_value("product_delivery_charge")?>" placeholder="DeliveryCharge" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_delivery_charge"); ?>
					
				</span>
			</div> -->



			<div class="form-group">
					
					<label style="color:black;"><div class="b">Delivery</div></label><br>
					
					<input type="radio" name="product_delivery" value="Yes" /><span>Yes</span>
					
					
					
					
					<input type="radio" name="product_delivery" value="No" /><span>No</span>
					
					
					<span class="text-danger" style="color:pink;"><?php echo form_error("product_delivery"); ?>
						
					</span>
				</div>
			
			
			<h3 style="color: black;"> <div class="a"><u>Seller Details</u> </div></h3>
			<div class="form-group">
				<label style="color:black;"><div class="c"> Name</div></label>
				<input type="text" name="product_seller_name" value= "<?php echo set_value("product_seller_name")?>" placeholder="name" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_seller_name"); ?>
					
				</span>
			</div>
			
			
			<div class="form-group">
				<label style="color:black;"><div class="c">Email</div></label>
				<input type="text" name="product_seller_email" value= "<?php echo set_value("product_seller_email")?>"  placeholder="Email Address" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_seller_email"); ?>
					
				</span>
			</div>
			<div class="form-group">
				<label style="color:black;"><div class="c">Telephone</div></label>
				<input type="number" name="product_seller_contact" value= "<?php echo set_value("product_seller_contact")?>" placeholder="phone" class="form-control" />
				<span class="text-danger"><?php echo form_error("product_seller_contact"); ?>
					
				</span>
			</div>
			<div class="form-group">
				<form method="post" action="<?php echo site_url('main/form_validation')?>" enctype="multipart/form-data">
					<!-- <label>Select a file</label>
					<input type="file" name="file_upload"/> -->
					
					
					<label style="color:black;"><div class="c">Image</div></label>
					<input type="file" name="product_image" style="color:black;" />
					<span class="text-danger"><?php echo form_error("product_image"); ?>
						
					</span>
				</div>
				
				<div class="button">
					<input type="submit" class="btn btn-primary submit_button" name="sell" value="submit">
					<!-- <a name="selclass="btn btn-primary"l" value="submit" >Submit</a> -->
				</div>
			</form>
			
		</div>
	</body>
</html>




<style>
	.abc{
		background-image: url("http://localhost/ciproject/assets/images/p.png");
		width: 55%;
		min-height: 250px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		margin-top: -25px;
		margin-bottom: 8px;
		margin-left: 200px;
		margin-bottom: 50px;
	}



body{
	background-image: url("http://localhost/ciproject/assets/images/bhagwanyes.png");
	width: 100%;
	min-height: 400px;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;


}

/*input {
  width: 8%;
}
*/

.form-control{
	width: 86%;

	 
	
}
.container{
	float: center;

}


.form-group form-control{
	text-align: right;

}


.button .submit_button {
  
  font-size: 20px;
  margin-top: 20px;
  height: 43px;
  width: 410px;
  border-radius: 7px;
   text-transform: uppercase;


}


/*.form-group input{
	color: yellow;

}*/

.form-group span{
 	color: black;
  }

  .form-group span1{
 	color: #160202;
 	

  }
  .b {
  border: 0.1px transparent;
  background-color: transparent;
  padding: 0.1px;
  width: 100%;
}
.a {
  border: 0.1px transparent;
  background-color: transparent;
  padding: 0.1px;
  width: 47%;
}

.c {
  border: 0.1px transparent;
  background-color: transparent;
  padding: 0.1px;
  width: 100%;
}


</style>