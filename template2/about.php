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
    <link rel="stylesheet" href="assets/css/about.css">
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
						<li class="active"><a href="about.php">about</a></li>
						<li><a href="services.php">services</a></li>
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
				our story
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">&nbsp;about</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->
	<!-- Who we are -->
	<section class="wwa section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Who we are?
			</h2>
			<p class="section-subtitle">
			</p>
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="who">
						<img src="assets/images/ab-1.png" alt="" class="img-responsive who-img">
						<h3>
							We Advance
						</h3>
						<p class="who-detail">
							From c.1300 as "to promote;" intransitive sense is mid-14c., "move forward.
						</p>
					</div>
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="who">
						<img src="assets/images/ab-2.png" alt="" class="img-responsive who-img">
						<h3>
							Helpful Guide
						</h3>
						<p class="who-detail">
							Definition of guide word: One or more words printed on the top of the page of a reference .
						</p>
					</div>
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="who">
						<img src="assets/images/ab-3.png" alt="" class="img-responsive who-img">
						<h3>
							Travel anywhere
						</h3>
						<p class="who-detail">
							Anywhere Travel consultants create superior luxury, leisure, academic and corporate travel.
						</p>
					</div>
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="who">
						<img src="assets/images/ab-4.png" alt="" class="img-responsive who-img">
						<h3>
							our best transport
						</h3>
						<p class="who-detail">
						Welcome to the NEW BEST Transportation website! We hope you enjoy our new site.
						</p>
					</div>
				</div> <!-- /.col-sm-3 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.wwa -->

<!-- Story and Client -->
	<section class="story-and-client section-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="story">
						<h2 class="section-title">
							Our Story
						</h2>
						<img src="assets/images/client.png" alt="story" class="story-img">
						<p class="story-detail">
							OurStory goes beyond blogging to permanently capture life's stories in words and photos. Publish or share the stories privately with family and friends.
						</p>
						<p class="story-detail">
							OurStory goes beyond blogging to permanently capture life's stories in words and photos. Publish or share the stories privately with family and friends.
						</p>
					</div> <!-- /.story -->
				</div> <!-- /.col-sm-6 -->

				<div class="col-sm-6">
					<div class="story">
						<h2 class="section-title">
							Client feedback
						</h2>
						<table class="table _table-bordered">
							<tbody>
								<tr>
									<td>
										5 Stars
									</td>
									<td>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70"
											aria-valuemin="0" aria-valuemax="100" style="width:50%">
												<span class="sr-only">70% Complete</span>
											</div> <!-- /.progress-bar -->
										</div> <!-- /.progress -->
									</td>
									<td>
										50%
									</td>
								</tr>

								<tr>
									<td>
										4 Stars
									</td>
									<td>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70"
											aria-valuemin="0" aria-valuemax="100" style="width:90%">
												<span class="sr-only">90% Complete</span>
											</div> <!-- /.progress-bar -->
										</div> <!-- /.progress -->
									</td>
									<td>
										90%
									</td>
								</tr>

								<tr>
									<td>
										3 Stars
									</td>
									<td>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70"
											aria-valuemin="0" aria-valuemax="100" style="width:75%">
												<span class="sr-only">75% Complete</span>
											</div> <!-- /.progress-bar -->
										</div> <!-- /.progress -->
									</td>
									<td>
										75%
									</td>
								</tr>

								<tr>
									<td>
										2 Stars
									</td>
									<td>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70"
											aria-valuemin="0" aria-valuemax="100" style="width:33%">
												<span class="sr-only">33% Complete</span>
											</div> <!-- /.progress-bar -->
										</div> <!-- /.progress -->
									</td>
									<td>
										33%
									</td>
								</tr>

								<tr>
									<td>
										1 Stars
									</td>
									<td>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70"
											aria-valuemin="0" aria-valuemax="100" style="width:82%">
												<span class="sr-only">82% Complete</span>
											</div> <!-- /.progress-bar -->
										</div> <!-- /.progress -->
									</td>
									<td>
										82%
									</td>
								</tr>
								
							</tbody>
						</table> <!-- /.table -->
					</div> <!-- /.story -->
				</div> <!-- /.col-sm-6 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.story-and-client -->

	
<div class="container">	
	<div class="embed-responsive embed-responsive-16by9">
	    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/qUHLCobRgaE" frameborder="0" allowfullscreen>
	    </iframe>
	</div>
</div> <!-- /.container -->


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
		
					</div><!-- /input-group -->
				
	
	


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

