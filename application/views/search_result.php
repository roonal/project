<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en"> 
<link rel="stylesheet" type="text/css" href='http://localhost/ciproject/assets/css/home.css'></link>


<body>

	<div class="container">	

		<div class="row">
				<div class="col-md-12 branch_heading">
					<h2>Searched <b>Results</b></h2>
				</div>
			</div>

		<div class="row">
				<div class="item">

			<?php if(count($data)): ?>

				<?php foreach($data as $post){?>
					<?php $p_id=$post->product_id; ?> <!-- // .$p_id is for getting the product id of clicked images -->

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
					<?php } ?>

			

				<?php else: ?>

					<?php 
						$this->session->set_flashdata('error','<p class="alert alert-success">No Search result found</p>'); ?>

					<?php redirect('home/index'); ?>
					

				<?php endif?>

				</div>	
			</div>
		</div>
</body>

<style>
			.thumb-wrapper{
				margin-top: 20px;
				margin-bottom: 10px;
			}
		</style>