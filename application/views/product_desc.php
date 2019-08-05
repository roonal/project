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
</style>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="thumb-wrapper">
							<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
							<div class="img-box">
								<img src="http://localhost/ciproject/assets/images/dslr.jpg" class="img-responsive img-fluid" alt="dslr_image">
							</div>
							<br/><br/>
							<a href="#" class="btn btn-primary">Back</a>
							
						</div>
				
			</div>

			<div class="col-md-5">
				<div class="thumb-wrapper">
					<div class="content">
						<div class="thumb-content">
								<h1>DSLR Camera</h1>
								<div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
								<p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
								
							</div>
						
						<h4>Canon EOS 800D / T7i 24.2 MP DSLR Camera with EF-S 18-55mm Lens Starter Bundle with 32GB SD, Memory Card Reader, Gadget Bag, Blower, Microfiber Cloth and Cleaning Kit</h4>
						<ol>
							<li>
								24.2MP APS-C CMOS Sensor, DIGIC 7 Image Processor, 3.0" 1.04m-Dot Vari-Angle Touchscreen
							</li>

							<li>
								Full HD 1080p Video Recording at 60 fps, 45-Point All Cross-Type Phase-Detect AF
							</li>
							<li>
								Dual Pixel CMOS AF, Up to 6 fps Shooting and ISO 51200, Built-In Wi-Fi with NFC, Bluetooth
							</li>
							<li>
								LIMITED 1-YEAR SELLER WARRANTY
							</li>
						</ol>
					</div>
				</div>

				
			</div>

			<div class="col-md-3">
				<div class="thumb-wrapper">
					<div class="content">
						<h3>Few items only left- order soon</h1>
						<li class="new-nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">Quantity : <span id="opt"></span></a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" id="1" href="#">1</a>
				          <a class="dropdown-item" id="2" href="#">2</a>
				          <a class="dropdown-item" id="3" href="#">3</a>
				          <a class="dropdown-item" id="4" href="#">4</a>
				          <a class="dropdown-item" id="5" href="#">5</a>
				        </div>
					</li>
					<br/><br/>

					<input type="label"><br/>Total Amount <br/><br/>

					<a href="#" class="btn btn-primary">Add to cart</a>
					<br/><br/>
					<a href="#" class="btn btn-primary">Buy Now</a>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</body>

<script>

        $(document).ready(function(){
            $(".dropdown-menu a").click(function(){
            $("#opt").text($(this).text());
            });
        });
    </script>

