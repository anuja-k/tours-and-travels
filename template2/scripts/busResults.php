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
	if(isset($_POST['SUBMIT']))
{  
    $Station=$_POST["BusStation"];
	$Destination=$_POST["BusDestination"];
	$dat=$_POST["dat"];
	$quantity1=$_POST["quantity1"];
	$quantity2=$_POST["quantity2"];
	$_SESSION["quantity1"]=$quantity1;
	$_SESSION["quantity2"]=$quantity2;
?>
<div class="a">
		
		<form name="ftrain" method="post" action="busResults.php" enctype="multipart/form-data">
		
		 <label for="Source">From</label>
		                 <input class="ui-widget" value="<?php echo $Station ?>" id="Source" name="BusStation">
							
							
		&nbsp &nbsp<label for="Destination">To</label>
		                 <input class="ui-widget" value="<?php echo $Destination ?>" id="Destination" name="BusDestination">
						
		  &nbsp &nbsp <label for="datepicker">Departure</label>
		                 	 <input value="<?php echo $dat ?>" type="text" name="dat" id="datepicker">
				<label for="adult">Adult</label>
		&nbsp &nbsp<input type="number" name="quantity1" value="<?php echo $quantity1?>" id="adult" min="1" max="6">
		<label for="child">Child</label>
		&nbsp &nbsp<input type="number" name="quantity2" value="<?php echo $quantity2?>" id="child" min="0" max="4">
       
		 &nbsp &nbsp<input class="new" type="submit" value="SEARCH BUSES" name="SUBMIT"></input>
								</form>
<?php
$sql1 = "SELECT * FROM route";
$result =mysqli_query($db,$sql1);

if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
while($row =mysqli_fetch_assoc($result))
{
	if($row['BusStation']==$Station && $row['Destination']==$Destination)
	{
	  $rtid=$row['RtID'];
	  //echo $rtid;
	  $sql2="SELECT * from Bus_Schedule";
	  $result1=mysqli_query($db,$sql2);
	  $sql3="SELECT * from Buses";
	  $result2=mysqli_query($db,$sql3);
	  while($row=mysqli_fetch_assoc($result1))
	  {
		  $date = date_create($row['TripDate']);
		  //echo date_format($date,'m/d/Y');
	  if($dat==date_format($date,'m/d/Y')&&$row['Bus']==$rtid)
	  { 
          //echo "hi";
		  $departure= $row['Departure'];
		  $arrival=$row['Arrival'];
		  $busid=$row['Bus'];
		  $bsid=$row['BSID'];
		  $fare=$row['NetFare'];
		  // echo $busid;
	  while($row=mysqli_fetch_assoc($result2)){
		  if($busid==$row['BusID']){?>
			  <center>	
                        <br>						
						<table style="width:80%">
						<tr>
						      <th>Bus Name </th><th>Type Of Bus</th><th>Source</th><th>Destination</th>
							  <th>Departure</th><th>Arraival</th><th>Availability</th><th>Price</th>
						</tr>
						<tr>
						       <td><?php echo $row['Company'];?></td><td><?php echo $row['TypeOfBus'];?></td><td><?php echo $Station;?></td>
							   <td><?php echo $Destination;?></td><td><?php echo $departure;?></td><td><?php echo $arrival;?></td>
							   <td><?php echo $row['Availability'];?></td><td><?php echo $fare;?></td><td><?php echo "<a href='busBook.php?id=".$bsid."'>book&nbsp &nbsp &nbsp";?></td>
						</tr>
                         </table>	
                          						 
                          </center>                 <?php
		  }
	  }
	  }
	  }
	}
}
}
?>