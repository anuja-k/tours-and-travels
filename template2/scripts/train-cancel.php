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
				    <li><a href="transactions.php">Transactions</a></li>
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
    $dbName = 'trains';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	if (!$db) 
{
    die("Connection failed: " . mysqli_connect_error());
}                     

   if(isset($_GET['id']))
{  
       $tpnr=$_GET['id'];
	   $cnt=$_POST['count'];
	   $class=$_POST['class'];
	   $status=$_POST['status'];
	   $tid=$_POST['tid'];
	   $dep=$_POST['date'];
	   $price=$_POST['price'];
	   $up="UPDATE Reservation SET ReservationStatus='cancel' WHERE PNR='$tpnr'";
	                                   if($db->query($up)==TRUE)
											 {
												 //echo "sucsses";
											 }
											 else{
												 //echo "fail";
											 }
	  	$upt="UPDATE Passenger_ticket SET ReservationStatus='cancel' WHERE PNR='$tpnr'";
	                                   if($db->query($upt)==TRUE)
											 {
												 //echo "sucsses";
											 }
											 else{
												 //echo "fail";
											 }		
       	// updating availability


              		 if($class=="First AC")
									 {       
								             $ret="SELECT BookedSeats1,WaitingSeats1,AvailableSeats1 From Train_Status WHERE TrainID='$tid'  AND AvailableDate='$dep'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $bs=$cla['BookedSeats1'];
											  $li=$cla['AvailableSeats1'];
											  $temp=$cla['WaitingSeats1'];
											  $bs=$bs-$cnt;
											  
											  if(strpos($status,"waiting")==false){
			                                       $li=$li+$cnt;
		                                           }		
                                              else{
			                                           $temp=$temp-$cnt;
													   if($temp<0)
													   {
														   $k=0-$temp;
														   $temp=0;
														   $li=$li+$k;
														
													   }
		                                              }		
                                         	$up="UPDATE Train_Status SET BookedSeats1='$bs', WaitingSeats1='$temp', AvailableSeats1='$li' 
											    WHERE TrainID='$tid' AND AvailableDate='$dep'"	;
                                               if($db->query($up)==TRUE)
											 {
												 //echo "sucsses";
												 
											 }
											 else{
												 //echo "fail";
											 }
										 
									 }
									 else if($class=="Sleeper class")
									 {
										 $ret="SELECT BookedSeats2,WaitingSeats2,AvailableSeats2 From Train_Status WHERE TrainID='$tid'  AND AvailableDate='$dep'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $bs=$cla['BookedSeats2'];
											  $li=$cla['AvailableSeats2'];
											  $temp=$cla['WaitingSeats2'];
											  $bs=$bs-$cnt;
											  
											  if(strpos($status,"waiting")==false){
			                                       $li=$li+$cnt;
		                                           }		
                                              else{
			                                           $temp=$temp-$cnt;
													   if($temp<0)
													   {
														   $k=0-$temp;
														   $temp=0;
														   $li=$li+$k;
														
													   }
		                                              }		
                                         	$up="UPDATE Train_Status SET BookedSeats2='$bs', WaitingSeats2='$temp', AvailableSeats2='$li' 
											    WHERE TrainID='$tid' AND AvailableDate='$dep'"	;
                                               if($db->query($up)==TRUE)
											 {
												 //echo "sucsses";
												 
											 }
											 else{
												 //echo "fail";
											 }
									 }
									 else if($class=="Second AC")
									 {
										 $ret="SELECT BookedSeats3,WaitingSeats3,AvailableSeats3 From Train_Status WHERE TrainID='$tid'  AND AvailableDate='$dep'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $bs=$cla['BookedSeats3'];
											  $li=$cla['AvailableSeats3'];
											  $temp=$cla['WaitingSeats3'];
											  $bs=$bs-$cnt;
											  
											  if(strpos($status,"waiting")==false){
			                                       $li=$li+$cnt;
		                                           }		
                                              else{
			                                           $temp=$temp-$cnt;
													   if($temp<0)
													   {
														   $k=0-$temp;
														   $temp=0;
														   $li=$li+$k;
														
													   }
		                                              }		
                                         	$up="UPDATE Train_Status SET BookedSeats3='$bs', WaitingSeats3='$temp', AvailableSeats3='$li' 
											    WHERE TrainID='$tid' AND AvailableDate='$dep'"	;
                                               if($db->query($up)==TRUE)
											 {
												// echo "sucsses";
												 
											 }
											 else{
												// echo "fail";
											 }
									 }
									 else if($class=="General")
									 {
										 $ret="SELECT BookedSeats4,WaitingSeats4,AvailableSeats4 From Train_Status WHERE TrainID='$tid'  AND AvailableDate='$dep'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $bs=$cla['BookedSeats4'];
											  $li=$cla['AvailableSeats4'];
											  $temp=$cla['WaitingSeats4'];
											  $bs=$bs-$cnt;
											  
											  if(strpos($status,"waiting")==false){
			                                       $li=$li+$cnt;
		                                           }		
                                              else{
			                                           $temp=$temp-$cnt;
													   if($temp<0)
													   {
														   $k=0-$temp;
														   $temp=0;
														   $li=$li+$k;
														
													   }
		                                              }		
                                         	$up="UPDATE Train_Status SET BookedSeats4='$bs', WaitingSeats4='$temp', AvailableSeats4='$li' 
											    WHERE TrainID='$tid' AND AvailableDate='$dep'"	;
                                               if($db->query($up)==TRUE)
											 {
												 //echo "sucsses";
												 
											 }
											 else{
												 //echo "fail";
											 }
									 }
									 else if($class=="Third AC")
									 {
										 $ret="SELECT BookedSeats5,WaitingSeats5,AvailableSeats5 From Train_Status WHERE TrainID='$tid'  AND AvailableDate='$dep'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $bs=$cla['BookedSeats5'];
											  $li=$cla['AvailableSeats5'];
											  $temp=$cla['WaitingSeats5'];
											  $bs=$bs-$cnt;
											  
											  if(strpos($status,"waiting")==false){
			                                       $li=$li+$cnt;
		                                           }		
                                              else{
			                                           $temp=$temp-$cnt;
													   if($temp<0)
													   {
														   $k=0-$temp;
														   $temp=0;
														   $li=$li+$k;
														
													   }
		                                              }		
                                         	$up="UPDATE Train_Status SET BookedSeats5='$bs', WaitingSeats5='$temp', AvailableSeats5='$li' 
											    WHERE TrainID='$tid' AND AvailableDate='$dep'"	;
                                               if($db->query($up)==TRUE)
											 {
												// echo "sucsses";
												 
											 }
											 else{
												// echo "fail";
											 }
									 }
									 //if($class=="Chair car")
									 else
									 {
										 
									 $ret="SELECT BookedSeats6,WaitingSeats6,AvailableSeats6 From Train_Status WHERE TrainID='$tid'  AND AvailableDate='$dep'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $bs=$cla['BookedSeats6'];
											  $li=$cla['AvailableSeats6'];
											  $temp=$cla['WaitingSeats6'];
											  $bs=$bs-$cnt;
											  
											  if(strpos($status,"waiting")==false){
			                                       $li=$li+$cnt;
		                                           }		
                                              else{
			                                           $temp=$temp-$cnt;
													   if($temp<0)
													   {
														   $k=0-$temp;
														   $temp=0;
														   $li=$li+$k;
														
													   }
		                                              }		
                                         	$up="UPDATE Train_Status SET BookedSeats6='$bs', WaitingSeats6='$temp', AvailableSeats6='$li' 
											    WHERE TrainID='$tid' AND AvailableDate='$dep'"	;
                                               if($db->query($up)==TRUE)
											 {
												// echo "sucsses";
												 
											 }
											 else{
												 //echo "fail";
											 }
									 }
			?>          
                          <br> <br>            <center>
									<div class=special>
									<div class="inform">
	                               <p style="color:black;">
	                               <?php
                     $total=$price-$price*(1/10);
                    echo "refunded money Rs ".$total.""; 
                        ?>
      </p>
	  </div>
	  </div>	
	  </center>
<?php	  
} 
?>