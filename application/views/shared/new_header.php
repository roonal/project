<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en"> 

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href='http://localhost/ciproject/assets/css/header.css'></link>

	<head>
		<meta charset="utf-8">
		<title>Buy Sell</title>
	</head>
	<header>
		<nav class="navbar navbar-expand-md navbar-new-top fixed-top">
			<div class="container-fluid">
				<a href="<?php echo site_url('home/index') ?>" class="navbar-brand"><img src="http://localhost/ciproject/assets/images/dslr.jpg" alt=""/>Buy Sell Nepal</a>
				<form class="navbar-form navbar-right" action="#" >
					<div class="search input-group">
						<input type="text" class="form-control" placeholder="Search"/>
						<div class="input-group-btn">
							<button class="search_button btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</div>
				</form>
				<a href="<?php echo site_url('home/buy_page') ?>" class="btn btn-danger navbar-btn" >Buy Products</a>
				<a class="btn btn-danger navbar-btn" href="<?php echo site_url('home/sell_page') ?>">Sell Products</a>
			<ul class="nav navbar-nav mr-auto"></ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<button type="button"   class=" btn btn-primary navbar-btn">Register</button>
				</li>
				<li class="nav-itme">
					<button type="button"  class="glyphicon glyphicon-user btn btn-primary navbar-btn">Login</button>
				</li>
				
			</ul>
		</div>
		</nav>
		
	
		
			
		<nav class="navbar  navbar-expand-md navbar-new-bottom " data-toggle="sticky-onscroll">
			<div class="container-fluid">
			<div class="navbar-collapse sticky-top" id="navbar2">
				<ul class="navbar-nav w-100 justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('home/index') ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('home/about_us_page') ?>">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('home/help_page') ?>">Help</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('home/contact_us_page') ?>">Contact Us</a>
					</li>
					<li class="nav-item heart">
						<a href="<?php echo site_url('home/whishlist_page') ?>"><span class="glyphicon glyphicon-heart"></span></a>
					</li>
					<li class="nav-item heart">
						<a href="<?php echo site_url('home/cart_page') ?>"><span class="glyphicon glyphicon-shopping-cart"></span></a>
					</li>
				</ul>
			</div>
			</div>
		</nav>
	


	
	</div>
</header>

<style>
	/*.sticky.is-sticky {
    position: fixed;
    left: 0;
    right: 0;
    top: -40px;
    z-index: 1000;
    width: 100%;
}*/

nav{
	position: sticky;
	top: -40px;
}

</style>

<script type="text/javascript">
	

// Sticky navbar
// =========================
            // $(document).ready(function () {
            //     // Custom function which toggles between sticky class (is-sticky)
            //     var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
            //         var stickyHeight = sticky.outerHeight();
            //         var stickyTop = stickyWrapper.offset().top;
            //         if (scrollElement.scrollTop() >= stickyTop) {
            //             stickyWrapper.height(stickyHeight);
            //             sticky.addClass("is-sticky");
            //         }
            //         else {
            //             sticky.removeClass("is-sticky");
            //             stickyWrapper.height('auto');
            //         }
            //     };

            //     // Find all data-toggle="sticky-onscroll" elements
            //     $('[data-toggle="sticky-onscroll"]').each(function () {
            //         var sticky = $(this);
            //         var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
            //         sticky.before(stickyWrapper);
            //         sticky.addClass('sticky');

            //         // Scroll & resize events
            //         $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
            //             stickyToggle(sticky, stickyWrapper, $(this));
            //         });

            //         // On page load
            //         stickyToggle(sticky, stickyWrapper, $(window));
            //     });
            // });
</script>
