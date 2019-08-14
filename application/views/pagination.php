<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

	<script src="https://use.fontawesome.com/c0d357e72a.js"></script>

	<link rel="stylesheet" type="text/css" href='http://localhost/ciproject/assets/css/home.css'></link>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-12 branch_heading">
					<h2>New <b>Products</b></h2>
				</div>
			</div>

		
		
			<div class="row">
				<div class="item">	
				<?php foreach ($authors as $author): ?>
					<?php $p_id=$author->product_id; ?> <!-- // .$p_id is for getting the product id of clicked images -->

					<div class="col-md-3">
						<div class="thumb-wrapper">
								<div class="img-box">
								<a href="<?php echo site_url('buy/product/'.$p_id) ?>"><img src="http://localhost/ciproject/assets/images/dslr.jpg" class="img-responsive img-fluid"  alt="dslr_image"></a>

								</div>
								<div class="thumb-content">
									<h4><?php echo $author->product_name;?></h4>
									<p class="item-price"><b>Rs. <?php echo$author->product_price;?></b></p>
									<a href="#" class="btn btn-primary">Buy</a>
								</div>
								 
							</div>
					</div>
					<?php endforeach; ?>
				</div>	
			</div>

			<p><?php echo $links; ?></p>
				
			
		</div>

		<style>
			.thumb-wrapper{
				margin-top: 20px;
				margin-bottom: 10px;
			}
		</style>