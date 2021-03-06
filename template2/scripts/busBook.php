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
		         <li  ><a href="homepage.php"><i class="ion-android-plane"></i> FLIGHTS</a></li>
				 <li class="active"><a href="bus.php"><i class="ion-android-bus"></i> BUS</a></li>
				 <li><a href="train.php"><i class="ion-android-train"></i> TRAIN</a></li>
			</ul>
        </div>
        </nav>	 
		</center>
		<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bus';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	if (!$db) 
{
    die("Connection failed: " . mysqli_connect_error());
}
 $quantity1=$_SESSION["quantity1"];
	$quantity2=$_SESSION["quantity2"];
	if(isset($_GET['id']))
{  
    $bsid=$_GET['id'];
	$sql1="SELECT * From Bus_Schedule";
	$result=mysqli_query($db,$sql1);
	while($row=mysqli_fetch_assoc($result))
	{
		if($bsid==$row['BSID'])
		{
			$busid=$row['Bus'];
			$date=$row['TripDate'];
			$departure=$row['Departure'];
			$arrival=$row['Arrival'];
			$fare=$row['NetFare'];
		}
	}
	$sql2="SELECT * FROM route";
	$result1=mysqli_query($db,$sql2);
	while($row=mysqli_fetch_assoc($result1))
	{
		if($busid==$row['RtID'])
		{
			$station=$row['BusStation'];
			$destination=$row['Destination'];
		}
	}
	$sql3="SELECT * From Buses";
	$result2=mysqli_query($db,$sql3);
	while($row=mysqli_fetch_assoc($result2))
	{
		if($busid==$row['BusID'])
		{
			$company=$row['Company'];
			$availability=$row['Availability'];
			$typeofbus=$row['TypeOfBus'];
		}
	}
?>
<div class="a">
<center>	
                        <br>						
						<table style="width:80%">
						<tr>
						      <th>Bus Name </th><th>Type Of Bus</th><th>Source</th><th>Destination</th>
							  <th>Departure</th><th>Arraival</th><th>Availability</th><th>price</th>
						</tr>
						<tr>
						       <td><?php echo $company;?></td><td><?php echo $typeofbus;?></td><td><?php echo $station;?></td>
							   <td><?php echo $destination;?></td><td><?php echo $departure;?></td><td><?php echo $arrival;?></td>
							   <td><?php echo $availability;?></td><td><?php echo $fare ?></td>
						</tr>
                         </table>	
                          						 
                          </center>  
</div>						  
<div class="a">
		
		<form name="ftrain" method="post" action="buspayment.php" enctype="multipart/form-data">
		
<?php
 $i=0;
 while($quantity1>0)
 {  $i++;?>
    <center>
	 <div class="inform" >
	 <form method="POST" action='busPayment.php' enctype="multipart/form-data">
	<label for="adult"><?php echo "adult".$i;?></label>
		                 <input class="ui-widget"  id="adult" name="person[]"style="width:250px;" required>
     &nbsp&nbsp&nbsp&nbsp<label for="age">Age</label>
	         <input class="ui-widget" id="age" name="age[]" style="width:50px;" required><br>
	  &nbsp&nbsp&nbsp&nbsp<label for="gender">Gender</label>
		                 <select id="gender" name="gender[]"style="width:100px;" required>
							<option>Male</option>
							<option>Female</option></select>
	 &nbsp&nbsp&nbsp&nbsp&nbsp<label for="nationality">Nationality</label>
	                 <input id="nationality" name="nationality[]"style="width:150px;"  required></div></center>
						
		<?php
      
      $quantity1--;	  	 
 }
 while($quantity2>0)
 { $i++;
	 ?><center>
	 <div class="inform" >
	<label for="child"><?php echo "child".$i;?></label>
		                 <input class="ui-widget"  id="child" name="person[]"style="width:250px;" required>
     &nbsp&nbsp&nbsp&nbsp<label for="age">Age</label>
	         <input class="ui-widget" id="age" name="age[]" style="width:50px;" required><br>
	  &nbsp&nbsp&nbsp&nbsp<label for="gender">Gender</label>
		                 <select id="gender" name="gender[]"style="width:100px;" required>
							<option>Male</option>
							<option>Female</option></select>
	 &nbsp&nbsp&nbsp&nbsp&nbsp<label for="nationality">Nationality</label>
	                 <input id="nationality" name="nationality[]"style="width:150px;" required></div></center>
		<?php
      
      $quantity2--;	  
 }
 $_SESSION["i"]=$i;
 $_SESSION["bsid"]=$bsid;
}
?>
<center><input class="new" type="submit" value="CONTINUE PAYMENT" name="SUBMIT" style="background-color:white;margin-top:30px;margin-bottom:50px;"></input></center>
</form>