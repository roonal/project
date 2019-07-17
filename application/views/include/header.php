<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
 <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>  -->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<head>
	<meta charset="utf-8">
	<title>Welcome to login page</title>
</head>

<body>
	<!-- navigation bar section -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#">Buy Sell</a>
    		</div>
    		<ul class="nav navbar-nav">
      			<li ><a href="#">Home</a></li>
      			<li><a href="#">About Us</a></li>
      			<li class="dropdown">
        			<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Why BuySell
        			<span class="caret"></span></a>
        			<ul class="dropdown-menu">
          				<li><a href="#">Establishment</a></li>
          				<li><a href="#">Till Now</a></li>
          				<li><a href="#">In Future</a></li>
        			</ul>
      			</li>
      			<li class="active"><a href="#">Contact Us</a></li>
    		</ul>
    		<ul class="nav navbar-nav navbar-right">
      			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    		</ul>
  		</div>
	</nav>

<style>
	.container-fluid{
		font-family: sans-serif;
		font-weight: bold;
		font-size: 20px;
	}
	.navbar-brand{
		font-size:30px;
	}
	.dropdown-menu{
		font-size: 20px;
		font-weight:bold;
	}
	
</style>

	