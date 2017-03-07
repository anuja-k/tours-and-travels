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
					<li><a href="transactions.php">transactions</a></li>
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
		</center>
		<?php
    //database configuration
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
                              $username=$_SESSION['username'];
                             //echo $username;
                               $dep=$_SESSION['date'];
							   $sr=$_SESSION['source'];
							   $dst=$_SESSION['destination'];
							   $class=$_SESSION['class'];
							   $price=$_SESSION['price'];
	                            $status=$_SESSION['status'];
								$did=$_SESSION['did'];
							   $sid=$_SESSION['sid'];
	
     
    $tid=$_SESSION['tname'];
	    // taking persons details
		$i=0;
		$person[$i]=$_POST['person1'];
		$i++;
		$person[$i]=$_POST['person2'];
		$i++;
		$person[$i]=$_POST['person3'];
		$i++;
		$person[$i]=$_POST['person4'];
		$i++;
		$person[$i]=$_POST['person5'];
		$i++;
		$person[$i]=$_POST['person6'];
		$i++;
		
		$j=0;
		$age[$j]=$_POST['age1'];
		$j++;
		$age[$j]=$_POST['age2'];
		$j++;
		$age[$j]=$_POST['age3'];
		$j++;
		$age[$j]=$_POST['age4'];
		$j++;
		$age[$j]=$_POST['age5'];
		$j++;
		$age[$j]=$_POST['age6'];
		$j++;
		
		$k=0;
		$gender[$k]=$_POST['gender1'];
		$k++;
		$gender[$k]=$_POST['gender2'];
		$k++;
		$gender[$k]=$_POST['gender3'];
		$k++;
		$gender[$k]=$_POST['gender4'];
		$k++;
		$gender[$k]=$_POST['gender5'];
		$k++;
		$gender[$k]=$_POST['gender6'];
		$k++;
		$count=0;
		for($i=0;$i<6;$i++){
			if($person[$i]!=null)
			{
				$count++;
			}
		}
		
		//checking for status
		if(strpos($status,"waiting")==false){
			  if(strpos($status,"not Available")!=false)
			  {
				  $message= "selected class is not available, cannot be booked";
						echo"<script type='text/javascript'>alert('$message');</script>";
						echo "<script>setTimeout(\"location.href = 'train-process.php';\",100);</script>";
				  return;
			  }
			  else{
				  $li=$status-$count;
				  $che=0;
				  $temp=0;
				  if($li<0)
				  {
					  $che=0-$li;
					  $temp=$che;
					  $status="waiting".$che."";
					   $li=0;
				  $bore="waiting";
				  }
				  $bo=$count-$che;
				  $bore="booked";
				  
			  }
		}
		else{
			  $temp=substr($status,7);
			  $temp=$temp+$count;
			  $status="waiting".$temp."";
			  $bore="waiting";
		}
		
		//UPDATING values into database
		                            if($class=="First AC")
									 {       
								             $ret="SELECT FareClass1 From Train_Class WHERE TrainID='$tid'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $m=$cla['FareClass1'];
											  $bs=$m-$li;
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
										 $ret="SELECT SeatClass1 From Train_Class WHERE TrainID='$tid'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $m=$cla['SeatClass1'];
											  $bs=$m-$li;
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
										 $ret="SELECT FareClass2 From Train_Class WHERE TrainID='$tid'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $m=$cla['FareClass2'];
											  $bs=$m-$li;
                                         	$up="UPDATE Train_Status SET BookedSeats3='$bs', WaitingSeats3='$temp', AvailableSeats3='$li' 
											    WHERE TrainID='$tid' AND AvailableDate='$dep'"	;
                                               if($db->query($up)==TRUE)
											 {
												// echo "sucsses";
											 }
											 else{
												 //echo "fail";
											 }
									 }
									 else if($class=="General")
									 {
										 $ret="SELECT SeatClass2 From Train_Class WHERE TrainID='$tid'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $m=$cla['SeatClass2'];
											  $bs=$m-$li;
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
										 $ret="SELECT FareClass3 From Train_Class WHERE TrainID='$tid'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $m=$cla['FareClass3'];
											  $bs=$m-$li;
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
										 $ret="SELECT SeatClass3 From Train_Class WHERE TrainID='$tid'";
											 $cl=mysqli_query($db,$ret);
											$cla=mysqli_fetch_assoc($cl);
											  $m=$cla['SeatClass3'];
											  $bs=$m-$li;
                                         	$up="UPDATE Train_Status SET BookedSeats6='$bs', WaitingSeats6='$temp', AvailableSeats6='$li' 
											    WHERE TrainID='$tid' AND AvailableDate='$dep'"	;
                                               if($db->query($up)==TRUE)
											 {
												 //echo "sucsses";
											 }
											 else{
												 //echo "fail";
											 }
									 }
									 // inserting values into Passenger_ticket table
	 /* echo $sid;
	  echo $did;
	  echo $class;
	  echo $bore;
	  echo $tid; */
	  $total=$price*$count;
	 $pt="INSERT INTO Passenger_ticket VALUES ('','$sid','$did','$class','$bore','$tid','$username','$total')";
	                                   if($db->query($pt)==TRUE)
											 {
												 //echo "sucsses";
											 }
											 else{
												 //echo "fail";
											 }
    $pnr="SELECT PNR FROM Passenger_ticket ";
	$p=mysqli_query($db,$pnr);
   while($row=mysqli_fetch_assoc($p))
   {
	   $pnrid=$row['PNR'];
	   //echo $pnrid;
   }											 
	$cd=date("y-m-d");
	//$conv=strtotime($dat);
	//$dep=date("y-m-d",$conv);
        	
	$sql="INSERT INTO Reservation (TrainID ,AvailableDate, EmailID ,PNR,ReservationDate,ReservationStatus) VALUES ('$tid','$dep','$username','$pnrid','$cd','$bore')";
	
	                                      if($db->query($sql)==TRUE)
											 {
												 //echo "sucsses R";
											 }
											 else{
												 //echo "fail R";
											 }
	
      
								
	  // inserting values into Passenger table
      for($i=0;$i<6;$i++)
	  {  
           if($person[$i]!=null){
	  $pass="INSERT INTO Passenger VALUES ('$pnrid','','$person[$i]','$age[$i]','$gender[$i]','$tid')";
	                                   if($db->query($pass)==TRUE)
											 {
												// echo "sucsses";
											 }
											 else{
												 //echo "fail";
											 }
		                         }
	  }
	  
	  
	  ?>
	   <center>
	  <div class="inform">
	  <p style="color:black;">
	  <?php
	  echo "".$count." tickets are booked , total amount is Rs ".$total."";
      ?>
	  </center>
	  </p>
	  </div>
</body>
</html>