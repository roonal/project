<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href='http://localhost/ciproject/assets/css/footer.css'></link>

<script src="https://use.fontawesome.com/c0d357e72a.js"></script>

<!DOCTYPE html>
<html lang="en">

<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h4 class="text-uppercase font-weight-bold">Buy Sell Nepal</h4>
		        <p>A buy and sell agreement is a legally binding contract that stipulates how a partner's share of a business may be reassigned if that partner dies or otherwise leaves the business.</p>
			</div>

			<div class="col-md-3">
				<h4 class="text-uppercase font-weight-bold">Related</h4>
				<p><a href="<?php echo site_url('buy_pagination/index') ?>">Want to Buy Product</a></p>
				<p><a href="<?php echo site_url('sell/sell_page') ?>">Want to sell product</a></p>
				<p><a href="<?php echo site_url('buy_pagination/index') ?>">Best products</a></p>
				<p><a href="<?php echo site_url('home/index') ?>">New products</a></p>
			</div>

			<div class="col-md-3">
				<h4 class="text-uppercase font-weight-bold">Useful links</h4>
				<p><a href="<?php echo site_url('home/index') ?>">Home</a></p>
				<p><a href="<?php echo site_url('home/contact_us_page') ?>">Contact Us</a></p>
				<p><a href="<?php echo site_url('home/about_us_page') ?>">About Us</a></p>
				<p><a href="<?php echo site_url('home/login_page') ?>">Sign Up</a></p>
			</div>

			<div class="col-md-3">
				<h4 class="text-uppercase font-weight-bold">Contact</h4>
				<p><span class="glyphicon glyphicon-home"></span> Bakhundole,Lalitpur</p>
				<p><span class="glyphicon glyphicon-envelope"></span> tenorbits@gmail.com</p>
				<p><span class="glyphicon glyphicon-earphone"></span> + 01 234 567 88</p>
				<p><span class="glyphicon glyphicon-print"></span> + 01 234 567 89</p>

			</div>
		</div>

		<div class="row">
			<div class="copyright">
				<p class="text-center">© 2018 Copyright:
          		<a href="<?php echo site_url('home/index') ?>">
            	<strong>BuysellNepal.com</strong>
          		</a></p>
          	</div>
          		<div class="icons">
					<li class="list-inline-item">
		              <a class="btn btn-outline-primary">
		                <i class="fa fa-facebook-f"></i>
		              </a>
		            </li>

		            <li class="list-inline-item">
		              <a class="btn btn-outline-primary">
		                <i class="fa fa-twitter"></i>
		              </a>
		            </li>

		            <li class="list-inline-item">
		              <a class="btn btn-outline-primary">
		               <i class="fa fa-instagram"></i>
		              </a>
		            </li>

		            <li class="list-inline-item">
		              <a class="btn btn-outline-primary">
		                <i class="fa fa-linkedin"></i>
		              </a>
		            </li>
		</div>

		</div>

		

    </div>
</footer>

<style>
	.icons li{
	margin-right: 50px;
	margin-left: 0px;
	font-size: 15px;
}


.icons{
	margin-left: 500px;
}
.icons i{
	margin-left: 15px;
	color: #fff;
    text-shadow: 1px 1px 1px #ccc;
    font-size: 2em;

}
.copyright{
	margin-left: 100px;
}
</style>
