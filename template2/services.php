<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<?php
session_start();
if($_SESSION['username']==null){
			
		   header("location:index.php");
		  }
		  ?>

<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>Tours & Travels</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/section.css">
    <link rel="stylesheet" href="assets/css/services.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
</head>
<body>

<!-- Home -->
	<section class="header">
		
		<nav class="navbar navbar-default">
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
						<li><a href="homepageuser.php">Home</a></li>
						<li><a href="about.php">about</a></li>
						<li class="active"><a href="services.php">services</a></li>
						<li><a href="contact.php">contact</a></li>
						<li><a href="scripts/transactions.php">transactions</a></li>
						<li><a href="scripts/logout.php">logout</a></li>

					</ul> <!-- /.nav -->
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container -->
		</nav>
	</section> <!-- /#header -->

<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<h2 class="page-header">
				our service
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">&nbsp;services</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->
	

	<section class="features section-wrapper">
	<div class="container">
			<h2 class="section-title">
				Features
			</h2>
			<p class="section-subtitle">
				In this article, we look at the five general components involved in making a website successful. Key Elements of an Effective Website. 
			</p>
			<div class="row custom-table">
				<div class="grid-50 table-cell">
					<p class="features-details">
						
					</p>
					<ul class="features-list">
						<li>Good Travelling experience.</li>
						<li>Awesome Facilities.</li>
						<li>Best tours for every one.</li>
										</ul>
					<a href="#" class="btn btn-default custom-button border-radius">
						PURCHASE
					</a>
				</div>

				<div class="grid-50 table-cell">
					<img src="assets/images/features-bg.png" alt="" class="features-img img-responsive _pos-abs">
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.features -->

	

	<section class="additional-services section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Additional services
			</h2>
			<p class="section-subtitle">
				We have lot to provide many services
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


	<section class="section-wrapper services-owl">
		<div class="container">
			<div class="owl-carousel services-owl-carousel row">
				<div class="item col-sm-8 col-sm-offset-2">
					<div class="item-name">
						David Martin
					</div>
					<p class="item-detail">
						
					</p>
				</div> <!-- /.item -->

				<div class="item col-sm-8 col-sm-offset-2">
					<div class="item-name">
						David Martin
					</div>
					<p class="item-detail">
						
					</p>
				</div> <!-- /.item -->

				<div class="item col-sm-8 col-sm-offset-2">
					<div class="item-name">
						David Martin
					</div>
					<p class="item-detail">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos omnis, architecto ipsam laudantium corporis eveniet blanditiis eaque ab ex eum, provident culpa tenetur adipisci libero aliquid quia dolores deleniti illo.
					</p>
				</div> <!-- /.item -->
			</div> <!-- /.services-owl-carousel -->
		</div> <!-- /.container -->
	</section> <!-- /.services-owl -->


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
					<!-- <div class="top">
						<a href="#header">
							<i class="ion-arrow-up-b"></i>
						</a>
					</div> -->
				</div>
			</div>
		</div>		
	</footer>


	<script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact.js"></script>
	<script src="assets/js/script.js"></script>






</body>
</html>
		