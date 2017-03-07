<!doctype html>
<html lang="en">
<?php
session_start();
if($_SESSION['username']==null){
			
		   header("location:../index.php");
		  }
		  ?>
<head>
  <meta charset="utf-8">
  
  <!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>Tours & Travel</title>

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/ionicons.min.css">
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<link rel="stylesheet" href="../assets/css/owl.theme.css">
	<link rel="stylesheet" href="../assets/css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/main.css">
	    <link rel="stylesheet" href="../assets/css/home.css">
			<!--auto complete -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
	    <![endif]-->
		
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>
  <script>
$(function() {
    $( "#BusDestination" ).autocomplete({
        source: 'searchBusDestination.php'
    });
});
</script>
<script>
$(function() {
    $( "#BusStation" ).autocomplete({
        source: 'searchbusStation.php'
    });
});
</script>
  <style>
  
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
				<a class="navbar-brand" href="../homepageuser.php" title="HOME"><i class="ion-paper-airplane"></i> Tours <span>& Travels</span></a>
			</div> <!-- /.navbar-header -->

	    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="../homepageuser.php">Home</a></li>
					<li><a href="../about.php">about</a></li>
					<li><a href="../services.php">services</a></li>
					<li><a href="../contact.php">contact</a></li>
					<li><a href="transactions.php">Transactions</a></li>
					<li><a href="logout.php">logout</a></li>

				</ul> <!-- /.nav -->
		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container -->
	</nav>
 <div class="special" >
     <center>
    <div class="travel">
	  <nav class="navbar navbar-default">
	   <div class="container-fluid">
	       <ul class="nav navbar-nav">
		         <li  ><a href="homepage.php"><i class="ion-android-plane"></i> FLIGHTS</a></li>
				 <li class="active"><a href="bus.php"><i class="ion-android-bus"></i> BUS</a></li>
				 <li><a href="train.php"><i class="ion-android-train"></i> TRAIN</a></li>
			</ul>
        </div>
        </nav>	 
		<div class="book">
		<h2 class="he"> Book Online Bus Tickets </h2>
		<br>
		<br>
		<form action="busResults.php"  method="POST" enctype="multipart/form-data">
		<div class="a">
		
		<ul>
		<li class="sell ui-widget"> <label for="BusStation">From</label>
		                 <input id="BusStation" name="BusStation" required>
							<!--<option>America</option>
							<option>Bangladesh</option>
							<option>Canada</option>
							<option>India</option>-->
						</select></li>
		<li class="sell ui-widget"> <label for="BusDestination">To</label>
		                 <input id="BusDestination" name="BusDestination"required>
							<!--<option>America</option>
							<option>Bangladesh</option>
							<option>Canada</option>
							<option>India</option>-->
						</select></li>
		</ul>
		<ul>
		<li class="seld">    <label for="datepicker">Departure</label>
		                 	 <input placeholder="Departure" type="text" id="datepicker" name="dat">
                            </li>
		<!--<li class="seld">    <label for="datepicker1">Arraival</label>
                 			<input type="text" placeholder="Arraival" id="datepicker1">

		                  </li>-->
		
		
		
		<li class="seld">
		<label for="adult">Number of Persons</label>
		<input type="number" name="quantity1" value="1" id="adult" min="1" max="6"></li>
        <li class="seld">
		<label for="child">Child</label>
		<input type="number" name="quantity2" id="child" min="0" max="4">
        </ul>		
		
		<!--<ul>
		<li class="seld">
		  <label for="company">Select Priority</label>
		                 <select id="company">
							<option>Air India</option>
							</li>
							</ul>
						</select>-->
		
		</div>
		<br>
		 <input class="btn custom-btn" type="submit" value="SEARCH BUSES" name="SUBMIT"></input>
		                            
		                        
								
								
	</form>
	</div>
	</div>
	</center>
 </div>
 

 
     
 
</body>
</html>