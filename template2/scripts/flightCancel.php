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
		<link rel="stylesheet" href="../assets/css/book.css">
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
  </script>
  <script>
$(function() {
    $( "#Source" ).autocomplete({
        source: 'SearchBusStation.php'
    });
});
</script>
 <script>
$(function() {
    $( "#Destination" ).autocomplete({
        source: 'SearchBusDestination.php'
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
					<li><a href="../homepageuser.php">Home</a></li>
					<li><a href="../about.php">about</a></li>
					<li><a href="../services.php">services</a></li>
					<li><a href="../contact.php">contact</a></li>
				    <li class="active"><a href="transactions.php">Transactions</a></li>
	     			<li><a href="logout.php">logout</a></li>

				</ul> <!-- /.nav -->
		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container -->
	</nav>
    <?php
		//connecting to train database
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'flights';
    
    //connect with the database
    $db1 = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	if (!$db1) 
{
    die("Connection failed: " . mysqli_connect_error());
}                     

       $username=$_SESSION['username'];
	   if(isset($_GET['id'])){
		$tsid=$_GET['id'];
		//echo $tsid;
	$updatequery="update Transactions set status='cancelled' where TsID='$tsid'";
	$result1=mysqli_query($db1,$updatequery);
	$sql1="SELECT * From Transactions";
	$result=mysqli_query($db1,$sql1);
	while($row=mysqli_fetch_assoc($result))
	{
		if($tsid==$row['TsID'])
		{
			$ffid=$row['Flight'];
			$nos=$row['NumberOfSeats'];
			$fare=$row['Charge'];
		}
	
	$sql2="SELECT * from Flight_Schedule";
	$result2=mysqli_query($db1,$sql2);
	while($row=mysqli_fetch_assoc($result2)){
		if($ffid==$row['FFID']){
			$acid=$row['AirCraft'];
		}
	}
		//echo $acid;
	$sql3="SELECT * from AirCrafts";
	$result3=mysqli_query($db1,$sql3);
	while($row=mysqli_fetch_assoc($result3)){
		if($acid==$row['AcID']){
			$availability=$row['availability'];
}					
	}}
	   }
	$availability=$availability+$nos;
	$sql4="update AirCrafts set availability='$availability' where AcID='$acid'";
	$result4=mysqli_query($db1,$sql4);?><center>									<div class="inform" style="margin-top:80px">
	                               <p style="color:black;"><?php
	$total=$fare-$fare*(1/10);
                    echo "refunded money Rs ".$total."";  
	
	   
	?>
	</center>