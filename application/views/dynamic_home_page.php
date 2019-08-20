<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

	<script src="https://use.fontawesome.com/c0d357e72a.js"></script>

	<link rel="stylesheet" type="text/css" href='http://localhost/ciproject/assets/css/home.css'></link>
	<body>
		<div class="container">
			<?php 
				if($this->session->flashdata('error')){
					echo '<div class="alert alert-error">' . $this->session->flashdata('error') . '</div>';
				}
			?>

			<div class="row">
				<div class="col-md-12 branch_heading">
					<h2>Latest <b>Products</b></h2>
				</div>
			</div>
			<div class="row">
				<div class="item">
					
					<?php foreach($data as $post){?>
					<?php $p_id=$post->product_id; ?> <!-- // .$p_id is for getting the product id of clicked images -->

					<?php $total_rows =$this->pagination_model->record_count(); ?>

					<?php if($p_id ==$total_rows || $p_id ==$total_rows-1 || $p_id ==$total_rows-2 || $p_id ==$total_rows-3){ ?>
						<div class="col-md-3">
							<div class="thumb-wrapper">
									<div class="img-box">
									<a href="<?php echo site_url('buy/product/'.$p_id) ?>"><img src="http://localhost/ciproject/assets/images/dslr.jpg" class="img-responsive img-fluid"  alt="dslr_image"></a>

									</div>
									<div class="thumb-content">
										<h4><?php echo $post->product_name;?></h4>
										<p class="item-price"><b>Rs. <?php echo $post->product_price;?></b></p>
										<a href="#" class="btn btn-primary">Buy</a>
									</div>
									 
								</div>
						</div>
						<?php }?>
					<?php }?>
					
				</div>
			</div>


			<div class="row">
				<div class="col-md-12 branch_heading">
					<h2>Initial <b>Products</b></h2>
				</div>
			</div>
			<div class="row">
				<div class="item">
					
					<?php foreach($data as $post){?>
					<?php $p_id=$post->product_id; ?> <!-- // .$p_id is for getting the product id of clicked images -->

					<?php if($p_id ==1 || $p_id ==2 || $p_id ==3 || $p_id ==4){ ?>
						<div class="col-md-3">
							<div class="thumb-wrapper">
									<div class="img-box">
									<a href="<?php echo site_url('buy/product/'.$p_id) ?>"><img src="http://localhost/ciproject/assets/images/dslr.jpg" class="img-responsive img-fluid"  alt="dslr_image"></a>

									</div>
									<div class="thumb-content">
										<h4><?php echo $post->product_name;?></h4>
										<p class="item-price"><b>Rs. <?php echo $post->product_price;?></b></p>
										<a href="#" class="btn btn-primary">Buy</a>
									</div>
									 
								</div>
						</div>
						<?php }?>
					<?php }?>
					
				</div>
			</div>
		</div>

		<div class="home_image">

			
			<h1>Join 12,000+ Buyers and Sellers</h1>
			<h2>To see your personal recommendations, it takes one minute to register</h2>
			<a href="<?php echo site_url('auth/index') ?>" class="btn btn-primary">Register Here</a>
			
		</div>

		<div class="about_company">
			<h1>What is Buy Sell Nepal ?</h1>
			<a href="<?php echo site_url('home/about_us_page') ?>"><p>Read more about our story</p></a>

			<div class="container">

				<div class="row about_details">
					<div class="col-md-4 column_view">
						<div class="content">
						<h2>A one-of-a-kind community</h2>
						<h4>Buy Sell Nepal is a global online marketplace, where people come together to make, sell, buy, and collect unique items.</h4>
					</div>
					</div>


					<div class="col-md-4  column_view">
						<div class="content">
						<h2>Support independent creators</h2>
						<h4>There’s no Etsy warehouse – just millions of people selling the things they love. We make the whole process easy, helping you connect directly with makers to find extraordinary.</h4>
					</div>
					</div>


					<div class="col-md-4  column_view">
						<div class="content">
						<h2>Peace of mind</h2>
						<h4>Your privacy is the highest priority of our dedicated team. And if you ever need assistance, we are always ready to step in for support.</h4>
					</div>
					</div>
				</div>
			</div>
		</div>

		<style>
		 	.home_image{

				background-image: url("http://localhost/ciproject/assets/images/191327.jpg");

				background-attachment: fixed;
				background-repeat: no-repeat;
				min-height: 300px;
				width: 96%;
				background-position: center;
				background-size: cover;
				margin-top: 50px;
				margin-left: 30px;
				margin-right: 30px;
				
				}
				
			.home_image h1{
				text-align: center;
				font-weight: bold;
				margin-top: 10px;
				color: white;
				
			}
			.home_image h2{
				font-weight: bold;
				color:white;


			}
			
			.home_image a{
				width:200px;
				height:50px;
				border-radius: 20px;
				margin-left: 600px;
				font-size: 20px;
			}
			.branch_heading{
				margin-top: -40px;
				margin-bottom: -40px;
			}
			.about_company{

				/*background-image: url("http://localhost/ciproject/assets/images/plain.jpg");

				background-repeat: no-repeat;*/
				min-height: 450px;
				width: 100%;
				margin-top: 50px;
				/*background-position: center;
				background-size: cover;*/
			}
			.about_company h1, .about_company p{
				text-align: center;
				font-weight: bold;
				margin-top: 10px;	
			}

			.about_details{
				text-align: center;
			}
			.content{
				
				border-color: black;
				border-width: 2px;
				background: #fff;
				border-radius: 10px;
				text-align: center;
				position: relative;
				box-shadow: 0 2px 3px rgba(0,0,0,0.2);
				margin: 0px;
				width: 350px;
				height: 280px;
			}



			

		</style>
	
	</body>