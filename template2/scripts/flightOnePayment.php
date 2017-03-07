<?php
session_start();
if($_SESSION['username']==null){
			
		   header("location:../index.php");
		  }
		  ?>
<?php
$emailid=$_SESSION["username"];
//$emailid="anuja";
$i=$_SESSION["i"];
//database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'flights';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	if (!$db) 
{
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['SUBMIT']))
{
    
	$person=$_POST["person"];
	$age=$_POST["age"];
	$gender=$_POST["gender"];
	$nationality=$_POST["nationality"];
	$j=0;
	foreach( $person as $v ) {
    $person[$j]=$v;
    $j++;
}
$j=0;
	foreach( $age as $v ) {
    $age[$j]=$v;
    $j++;
}
$j=0;
	foreach( $person as $v ) {
    $gender[$j]=$v;
    $j++;
}
$j=0;
	foreach( $person as $v ) {
    $nationality[$j]=$v;
	$k=$j;
    $j++;
}
//if(isset($_GET['id'])){
$ffid=$_SESSION['ffid'];
	$sql1="SELECT * From Flight_Schedule";
	$result=mysqli_query($db,$sql1);
	while($row=mysqli_fetch_assoc($result))
	{
		if($ffid==$row['FFID'])
		{
			$acid=$row['AirCraft'];
			$date=$row['FlightDate'];
			$departure=$row['Departure'];
			$arrival=$row['Arrival'];
			$fare=$row['NetFare'];
		}
	}
	$charge=$fare*$i;
	$booking_date=date('Y-m-d');
	//echo $date;
	//echo $booking_date;
	$updatequery="insert into Transactions values('','$booking_date','$date','$ffid','$charge','$i','$emailid','booked')";
	$result1=mysqli_query($db,$updatequery);
    $sql2="SELECT * From Transactions";
    $result2=mysqli_query($db,$sql2);
    while($row=mysqli_fetch_assoc($result2)){
		$psid=$row["TsID"];
	}	
	for($j=0;$j<=$k;$j++){
		$updatequery1="insert into Passengers values('$psid','$person[$j]','$gender[$j]','$age[$j]','$nationality[$j]')";
		$result2=mysqli_query($db,$updatequery1);
	}
	$sql3="SELECT * from AirCrafts";
	$result3=mysqli_query($db,$sql3);
	while($row=mysqli_fetch_assoc($result3)){
		if($acid==$row['AcID']){
			$availability=$row['availability'];
		}
	}
	$availability=$availability-$i;
	$sql4="update AirCrafts set availability='$availability' where AcID='$acid'";
	$result4=mysqli_query($db,$sql4);
	?>
	<!doctype html>
<html lang="en">
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

	    <<!-- Collect the nav links, forms, and other content for toggling -->
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
    <div class="special">
     <center>
    <div class="travel">
	  <nav class="navbar navbar-default">
	   <div class="container-fluid">
	       <ul class="nav navbar-nav">
		         <li class="active" ><a href="homepage.php"><i class="ion-android-plane"></i> FLIGHTS</a></li>
				 <li ><a href="bus.php"><i class="ion-android-bus"></i> BUS</a></li>
				 <li><a href="train.php"><i class="ion-android-train"></i> TRAIN</a></li>
			</ul>
        </div>
        </nav>	 
		</center><center>
		<div class="inform">
		<p style="color:black">Thank you for booking Tickets.Your tickets have been booked.<br> 
		Total amount=<?php echo $charge?></center>
	<?php
//}
}
?>