<!DOCTYPE html>
<html lang="en">

<head>
	<title>Product Description</title>
</head>

<link rel="stylesheet" type="text/css" href='http://localhost/ciproject/assets/css/home.css'></link>
<style>
	.img-box img{
		width: 70%;
		height: 80%;
		margin-left: 15%;
	}
	.thumb-content{
		font-size: 16px;
		
	}
	.thumb-wrapper{
		height: 450px;
		margin-bottom: 100px;
		border: 2px solid black; /**#7ac400; */
		box-shadow: 10px 10px 10px rgba(0,0,0,0.2);
	}
	.container{
		margin-top: -70px;
	}

</style>

<body>
	

	<div class="container">

		<div class="row">
				<div class="col-md-12 branch_heading">
					<h2>Detailed <b>Specification</b></h2>
				</div>
			</div>

		<div class="row">
			<div class="col-md-6">
				<div class="thumb-wrapper">
							<div class="img-box">
								<img src="http://localhost/ciproject/assets/images/dslr.jpg" class="img-responsive img-fluid" alt="dslr_image">
							</div>
							<br/><br/>
							<a href="#" class="btn btn-primary">Buy Now</a>
							
						</div>
				
			</div>

			<div class="col-md-6">
				<?php foreach($data as $post){?>

				
				<div class="thumb-wrapper">
					<div class="content">
						<p><h2><?php echo $post->product_name;?></h2> </p>
						<ol>
							<li>
								<h4> Description:<?php echo $post->product_desc;?></h4>
							</li>

							<li>
								<p><h4>Price:Rs. <?php echo $post->product_price;?>,<?php echo $post->product_negotiable;?></h4><p>							</li>
							<li>
								<h4>Product Delivery:<?php echo $post->product_delivery;?></h4>
							</li>
							<li>
								 <h4>Product Condition:<?php echo $post->product_condition;?></h4>
							</li>
								<h3>----------------------------------------------------</h3>
							<li>
								 <h4>Seller Name:<?php echo $post->product_seller_name;?></h4>
							</li>
							<li>
								<h4> Seller Contact:<?php echo $post->product_seller_contact;?></h4>
							</li>
							<li>
								 <h4>Seller email:<?php echo $post->product_seller_email;?></h4>
							</li>
						</ol>
					</div>
				</div>
				
				<?php }?>
				
			</div>
		</div>
	</div>

</body>

