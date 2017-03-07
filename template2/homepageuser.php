<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if($_SESSION['username']==null){
			
		   header("location:index.php");
		  }
		  ?>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<html class="noIE" lang="en-US">-->
<!--<![endif]-->
	<head>
	<meta charset="utf-8">
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>Tours & Travels</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
	    <![endif]-->
		
 <!-- date picker -->
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <style>
 .img-responsive1{
 display:block;
 max-width:100%;
 height:400px;
 }
  </style>
</head>


<body>


	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> Tours <span>& Travels</span></a>
			</div> <!-- /.navbar-header -->

	    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="homepageuser.php">Home</a></li>
					<li><a href="about.php">about</a></li>
					<li><a href="services.php">services</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a href="scripts/transactions.php">transactions</a></li>
					<li><a href="scripts/logout.php">Log out</a></li>

				</ul> <!-- /.nav -->
		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container -->
	</nav>
<!-- Home -->
		<div id="header">
		    <div class="flexslider">
		        <ul class="slides">
		            <li class="slider-item" style="background-image: url('assets/images/bus1.jpg')">
		                <div class="intro container">
		                    <div class="inner-intro">
		                        <h1 class="header-title">
		                            <span>traveling</span> always "good idea"
		                        </h1>
		                        <p class="header-sub-title">
		                            it leaves you speecless, then turns your into a storyteller.
		                        </p>
		                        <button class="btn custom-btn" onclick="location.href='scripts/homepage.php'">
		                            book now
		                        </button>
		                    </div>
		                </div>
		            </li> <!-- /.slider-item -->
		            <li class="slider-item" style="background-image: url('assets/images/item-2.jpg')">
		                <div class="intro">
		                    <div class="inner-intro">
		                        <h1 class="header-title">
		                            to <span>travel</span> is to <span>live</span>
		                        </h1>
		                        <p class="header-sub-title">
		                            it leaves you speecless, then turns your into a storyteller.
		                        </p>
		                        <button class="btn custom-btn" onclick="location.href='scripts/homepage.php'">
		                            book now
		                        </button>
		                    </div>
		                </div>
		            </li> <!-- /.slider-item -->
					<li class="slider-item" style="background-image: url('assets/images/train.jpg')">
		                <div class="intro">
		                    <div class="inner-intro">
		                        <h1 class="header-title">
		                            to <span>travel</span> is to <span>live</span>
		                        </h1>
		                        <p class="header-sub-title">
		                            it leaves you speecless, then turns your into a storyteller.
		                        </p>
		                        <button class="btn custom-btn" onclick="location.href='scripts/homepage.php'">
		                            book now
		                        </button>
		                    </div>
		                </div>
		            </li> <!-- /.slider-item -->
					<li class="slider-item" style="background-image: url('assets/images/hotel2.jpg')">
		                <div class="intro">
		                    <div class="inner-intro">
		                        <h1 class="header-title">
		                            to <span>travel</span> is to <span>live</span>
		                        </h1>
		                        <p class="header-sub-title">
		                            it leaves you speecless, then turns your into a storyteller.
		                        </p>
		                        <button class="btn custom-btn" onclick="location.href='scripts/homepage.php'">
		                            book now
		                        </button>
		                    </div>
		                </div>
		            </li> <!-- /.slider-item -->
		        </ul> <!-- /.slides -->
		    </div> <!-- /.flexslider -->
		</div> <!-- /#header -->
		
<!-- Find a Tour 
	<section class="tour section-wrapper container">
	<nav class="navbar navbar-default">
	<div class="container-fluid">
	       <ul class="nav navbar-nav">
		         <li class="active" ><a href="index.html"><i class="ion-android-plane"></i>FLIGHTS</a></li>
				 <li><a href="index.html"><i class="ion-ios-home"></i>HOTEL</a></li>
				 <li><a href="index.html"><i class="ion-android-bus"></i>BUS</a></li>
				 <li><a href="index.html"><i class="ion-android-train"></i>TRAIN</a></li>
			</ul>
    </div>
    </nav>	
		<!-- <h2 class="section-title">
			Find a Tour
		</h2>
		<p class="section-subtitle">
			Where would you like to go?
		</p> 
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<form role="form" class="form-dropdown">
					<div class="form-group">
					    
		                <h4 class="section-title">From</h4>
						<label for="sel1">Select list (select one):</label>
						<select class="form-control border-radius" id="sel1">
							<option>America</option>
							<option>Bangladesh</option>
							<option>Canada</option>
							<option>India</option>
						</select>
					</div>
				</form>
			</div>
			
			<div class="col-md-3 col-sm-6">
				<form role="form" class="form-dropdown">
					<div class="form-group">
					
					     <h4 class="section-title">To</h4>
						<label for="sel1">Select list (select one):</label>
						<select class="form-control border-radius" id="sel1">
							<option>America</option>
							<option>Bangladesh</option>
							<option>Canada</option>
							<option>India</option>
						</select>
					</div>
				</form>
			</div>
           </div>
		   
		   <div class="row">
		   
			<div class="col-md-3 col-sm-6">
				<div class="input-group" id="datetimepicker1">
				<input type="text"  class="form-control border-radius border-right" placeholder="Arrival"/>
					<span class="input-group-addon border-radius custom-addon">
						<i class="ion-ios-calendar"></i>
								  

					</span>
					
					
				</div>
			</div>
			
			
			<div class="col-md-3 col-sm-6">
				<div class="input-group">
					<input type="text" class="form-control border-radius border-right" placeholder="Departure"/>
					<span class="input-group-addon border-radius custom-addon">
						<i class="ion-ios-calendar"></i>
					</span>
				</div>
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="btn btn-default border-radius custom-button">
					Search
				</div>
			</div>
		</div>
		<p>Date: <input type="text" id="datepicker"></p>
	</section> <!-- /.tour -->


<!-- Our Blazzing offers -->
	<section class="offer section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Our Blazzing offers
			</h2>
			<p class="section-subtitle">
				
			</p>
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-social-euro"></i>
						</div>
						<h3>
							Affordable Pricing
						</h3>
						<p>
							The adjective affordable can either mean"cheap," or it can imply that even if it's expensive, you have enough money to easily buy it. 
						</p>
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-ios-home"></i>
						</div>
						<h3>
							High class Hotels
						</h3>
						<p>
						Something that is an indulgence rather than a necessity,sumptuous,abundance and comfort - these are all definitions of luxury.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-android-bus"></i>
						</div>
						<h3>
							Luxury Transport
						</h3>
						<p>
							Extremely comfortable or elegant, especially when involving great expense or giving self-indulgent or sensual pleasure.


						</p>
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-ios-locked"></i>
						</div>
						<h3>
							Highest Security
						</h3>
						<p>
							Supermax (short for: super-maximum security) is the name used to describe "control-unit" prisons, or units within prison.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.offer -->


<!-- Top place to visit -->
	<section class="visit section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Top place to visit
			</h2>
			<p class="section-subtitle">
				
			</p>

			<div class="owl-carousel visit-carousel" id="">
				<div class="item">
					<img src="assets/images/city1.jpg" alt="visit-image" class="img-responsive1 visit-item">
				</div>
				<div class="item">
					<img src="assets/images/city2.jpg" alt="visit-image" class="img-responsive1 visit-item">
				</div>
				<div class="item">
					<img src="assets/images/city3.jpg" alt="visit-image" class="img-responsive1 visit-item">
				</div>
				<div class="item">
					<img src="assets/images/city4.jpg" alt="visit-image" class="img-responsive1 visit-item">
				</div>
				<div class="item">
					<img src="assets/images/city5.jpg" alt="visit-image" class="img-responsive1 visit-item">
				</div>
				<div class="item">
					<img src="assets/images/visit-3.png" alt="visit-image" class="img-responsive1 visit-item">
				</div>
			</div>
		</div> <!-- /.container -->
	</section> <!-- /.visit -->

<div class="offer-cta">
	<div class="container">
		<div class="offering">
			<div class="percent">
				<span>15%</span> off
			</div>
			<div class="FTour">
				for <strong>Family Tour</strong>
			</div>
			<a class="btn btn-default price-btn" href="#">
				see our price
			</a>
		</div> <!-- /.offering -->
	</div> <!-- /.container -->
</div> <!-- /.offer-cta -->

	<section class="additional-services section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Additional services
			</h2>
			<p class="section-subtitle">
				
			</p>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="assets/images/add-srvc-1.png" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Photography
							</h4>
							<p class="add-srvc">
								the art or practice of taking and processing photographs.
							</p>
						</div> <!-- /.add-srvc-detail -->
					</div> <!-- /.custom-table -->
				</div> <!-- /.col-md-4 col-sm-6 -->

				<div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="assets/images/add-srvc-2.png" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Cycling
							</h4>
							<p class="add-srvc">
								the sport or activity of riding a bicycle. Cycle racing has three main.
							</p>
						</div> <!-- /.add-srvc-detail -->
					</div> <!-- /.custom-table -->
				</div> <!-- /.col-md-4 col-sm-6 -->
				
				<div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="assets/images/add-srvc-3.png" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Walking
							</h4>
							<p class="add-srvc">
								Move at a regular pace by lifting and setting down each foot in turn, never having both feet off the ground at once.
							</p>
						</div> <!-- /.add-srvc-detail -->
					</div> <!-- /.custom-table -->
				</div> <!-- /.col-md-4 col-sm-6 -->

				<div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="assets/images/add-srvc-4.png" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Skiing
							</h4>
							<p class="add-srvc">
								the action of travelling over snow on skis, especially as a sport or recreation.
							</p>
						</div> <!-- /.add-srvc-detail -->
					</div> <!-- /.custom-table -->
				</div> <!-- /.col-md-4 col-sm-6 -->

				<div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="assets/images/add-srvc-5.png" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Sea beach
							</h4>
							<p class="add-srvc">
								A beach is a landform along a body of water. It usually consists of loose particles, which are often composed of rock, such as sand, gravel, shingle, pebbles, or cobblestones.
							</p>
						</div> <!-- /.add-srvc-detail -->
					</div> <!-- /.custom-table -->
				</div> <!-- /.col-md-4 col-sm-6 -->

				<div class="col-md-4 col-sm-6">
					<div class="custom-table">
						<img src="assets/images/add-srvc-6.png" alt="" class="add-srvc-img">
						<div class="add-srvc-detail">
							<h4 class="add-srvc-heading">
								Hill tracking
							</h4>
							<p class="add-srvc">
								Tracking is a means of learning about, and connecting to, the environment. Through tracking, we learn about animals.
							</p>
						</div> <!-- /.add-srvc-detail -->
					</div> <!-- /.custom-table -->
				</div> <!-- /.col-md-4 col-sm-6 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.Additional-services -->


	<div class="section-wrapper sponsor">
		<div class="container">
			<div class="owl-carousel sponsor-carousel">
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
				<div class="item">
					<a href="#">
						<img src="assets/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
					</a>
				</div>
			</div> <!-- /.owl-carousel -->
		</div> <!-- /.container -->
	</div> <!-- /.sponsor -->

	<div class="subscribe section-wrapper">
		<a class="brand-logo" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> Tours <span>& Travels</span></a>
		
		</div>
					
	
	
		

		
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="text-left">
						&copy; Copyright Tours & Travels
					</div>
				</div>
				
				<div class="col-xs-4">
					<div class="top">
						<a href="#header">
							<i class="ion-arrow-up-b"></i>
						</a>
					</div>
				</div>
			</div>
		</div>		
	</footer>


	<script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
	<script src="assets/js/script.js"></script>






</body>
</html>