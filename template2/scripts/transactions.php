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
    $dbName = 'trains';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	if (!$db) 
{
    die("Connection failed: " . mysqli_connect_error());
}                     

       $username=$_SESSION['username'];
	   $t="SELECT * FROM Reservation WHERE EmailID='$username'";
	   $cl=mysqli_query($db,$t);
	  while($cla=mysqli_fetch_assoc($cl)){
		  $pnr=$cla['PNR'];
		  $doj=$cla['AvailableDate'];
		  $dob=$cla['ReservationDate'];
		  $status=$cla['ReservationStatus'];
		      $tr="SELECT * FROM Passenger_ticket WHERE PNR='$pnr'";
			   $tra=mysqli_query($db,$tr);
	          $tran=mysqli_fetch_assoc($tra);
			  
			  $price=$tran['price'];
			  $class=$tran['Class_type'];
			  
			  $peo="SELECT * FROM Passenger WHERE PNR='$pnr'";
			  $peop=mysqli_query($db,$peo);
			  $cnt=0;
	          while($peopl=mysqli_fetch_assoc($peop))
			  {
				  $cnt++;
			  }
			  $sid=$tran['SourceID'];
			  $did=$tran['DestinationID'];
			  $so="SELECT StationName FROM Station WHERE StationID='$sid'";
			  $sou=mysqli_query($db,$so);
	          $sour=mysqli_fetch_assoc($sou);
			  $sourc=$sour['StationName'];
			  
			  $de="SELECT StationName FROM Station WHERE StationID='$did'";
			  $des=mysqli_query($db,$de);
	          $dest=mysqli_fetch_assoc($des);
			  $desti=$dest['StationName'];
			  
			  $tid=$tran['TrainID'];
			  $na="SELECT TrainName FROM Train WHERE TrainID='$tid'";
			  $nam=mysqli_query($db,$na);
	          $name=mysqli_fetch_assoc($nam);
			  $tname=$name['TrainName'];
			  
		?>	  
			  <center>	<br><br>
                        <br><br>						
						<table style="width:80%">
						<tr>
						      <th>Train ID</th><th>Train Name</th><th>Source</th><th>Destination</th>
							  <th>Date of Journey</th><th>Booked date</th><th>Class</th><th>Number of Tickets</th><th>Status</th><th>Amount</th>
						</tr>
						<tr>
						       <td><?php echo $tid;?></td><td><?php echo $tname;?></td><td><?php echo $sourc;?></td>
							   <td><?php echo $desti;?></td><td><?php echo $doj; ?></td><td><?php echo $dob; ?></td><td><?php echo $class; ?></td><td><?php echo $cnt; ?></td>
							   <td><?php echo $status;?></td><td><?php echo " Rs ".$price.""; ?></td>
							   <?php 
							   $pd=date("Y-m-d");
							   if($status!='cancel' && strtotime($pd)< strtotime($doj)){ ?>
								   <td> <?php echo "<form action='train-cancel.php?id=".$pnr."' method='post' enctype='multipart/form-data'>
							                                                                           <input type='hidden' name='count' value='$cnt'>
																									   <input type='hidden' name='class' value='$class'>
																									   <input type='hidden' name='status' value='$status'>
																									   <input type='hidden' name='tid' value='$tid'>
																									   <input type='hidden' name='date' value='$doj'>
																									   <input type='hidden' name='price' value='$price'>
							   <button class='btn btn-default border-radius custom-button' >Cancel</button></form>"; } ?></td>
						</tr>
                         </table>	
                          						 
                          </center>      
<?php						  
	  }
?>         
	
	<?php
    //connecting to bus database
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bus';
    
    //connect with the database
    $db1 =new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	if (!$db1) 
{
    die("Connection failed: " . mysqli_connect_error());
}                     

       $username=$_SESSION["username"];
	   $sql="SELECT * FROM Transactions where emailid='$username'";
	   $result=mysqli_query($db1,$sql);
	  while($row=mysqli_fetch_assoc($result)){
		  if($username==$row['emailid']){
			  $tsid=$row['TsID'];
			$bookingdate=$row['BookingDate'];
			$departuredate=$row['DepartureDate'];
			$bsid=$row['Bus'];
			$nos=$row['NumberOfSeats'];
			$status1=$row['status'];
			$fare=$row['Charge'];
			echo $bsid;
		  
		  $sq3="SELECT * FROM Bus_Schedule";
		  $res3=mysqli_query($db1,$sq3);
		  while($row=mysqli_fetch_assoc($res3)){
			  if($bsid==$row['BSID']){
				  $busid=$row['Bus'];
				  echo $busid;
			  
		  
		  $sql1="SELECT * FROM Route";
		  $result1=mysqli_query($db1,$sql1);
		  while($row=mysqli_fetch_assoc($result1)){
			  if($busid==$row['RtID']){
				  $source1=$row['BusStation'];
				  $destination1=$row['Destination'];
			  
		  
		  $sql2="SELECT * FROM Buses";
		  $result2=mysqli_query($db1,$sql2);
		  while($row=mysqli_fetch_assoc($result2)){
			  if($busid==$row['BusID']){
				  $company=$row['Company'];
				  $typeofbus=$row['TypeOfBus'];
			  
		  
		  
		    
		?>	  
			  <center>	
                        <br><br>						
						<table style="width:80%;margin-top:50px" >
						<tr>
						      <th>Bus name</th><th>Type Of Bus</th><th>Source</th><th>Destination</th>
							  <th>Date of Journey</th><th>Booked date</th><th>Number of Tickets</th><th>Status</th><th>Amount</th>
						</tr>
						<tr>
						       <td><?php echo $company;?></td><td><?php echo $typeofbus;?></td><td><?php echo $source1;?></td>
							   <td><?php echo $destination1;?></td><td><?php echo $departuredate; ?></td><td><?php echo $bookingdate; ?></td><td><?php echo $nos; ?>
							   <td><?php echo $status1;?></td><td><?php echo $fare; ?></td>
							   <?php if($status1!="cancelled"){?><td> <?php echo "<form action='busCancel.php?id=".$tsid."' method='post' enctype='multipart/form-data'>
							                                             <button class='btn btn-default border-radius custom-button' onClick=\"javascript: return confirm('Please confirm deletion');\">Cancel</button></form>"; ?></td>
							   <?php } ?></tr>
                         </table>	
                          						 
                          </center>      
<?php	
			  }
		  }
			  }
	
		  }
		  }
		  }		  
	  }
	  }
?>         
<?php
    //connecting to flights database
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'flights';
    
    //connect with the database
    $db2 = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	if (!$db2) 
{
    die("Connection failed: " . mysqli_connect_error());
}                     

       $username=$_SESSION['username'];
	   $sql3="SELECT * FROM Transactions WHERE emailID='$username'";
	   $result3=mysqli_query($db2,$sql3);
	  while($row=mysqli_fetch_assoc($result3)){
		  if($username==$row['emailID']){
			  $tsid1=$row['TsID'];
			$bookingdate1=$row['BookingDate'];
			$departuredate1=$row['DepartureDate'];
			$ffid=$row['Flight'];
			$nos1=$row['NumberOfSeats'];
			$status2=$row['status'];
			$fare2=$row['Charge'];
			
		   $sq2="SELECT * FROM Flight_Schedule";
		  $res2=mysqli_query($db2,$sq2);
		  while($row=mysqli_fetch_assoc($res2)){
			  if($ffid==$row['FFID']){
				  $acid=$row['AirCraft'];
		
		  $sql4="SELECT * FROM Route";
		  $result4=mysqli_query($db2,$sql4);
		  while($row=mysqli_fetch_assoc($result4)){
			  if($acid==$row['RtID']){
				  $source2=$row['Airport'];
				  $destination2=$row['Destination'];
				  
		  $sql5="SELECT * FROM AirCrafts";
		  $result5=mysqli_query($db2,$sql5);
		  while($row=mysqli_fetch_assoc($result5)){
			  if($acid==$row['AcID']){
				  $company1=$row['Company'];
			  
		  
			  
		?>	  
			  <center>	
                        <br><br>						
						<table style="width:80%">
						<tr>
						      <th>Flight name</th><th>Source</th><th>Destination</th>
							  <th>Date of Journey</th><th>Booked date</th><th>Number of Tickets</th><th>Status</th><th>Amount</th>
						</tr>
						<tr>
						       <td><?php echo $company1;?></td><td><?php echo $source2;?></td>
							   <td><?php echo $destination2;?></td><td><?php echo $departuredate1; ?></td><td><?php echo $bookingdate1; ?></td><td><?php echo $nos1; ?>
							   <td><?php echo $status2;?></td><td><?php echo $fare2; ?></td>
							   <?php if($status2!="cancelled"){?><td> <?php echo "<form action='flightCancel.php?id=".$tsid1."' method='post' enctype='multipart/form-data'>
							                                             <button class='btn btn-default border-radius custom-button' onClick=\"javascript: return confirm('Please confirm deletion');\">Cancel</button></form>"; ?></td>
						<?php } ?></tr>
                         </table>	
                          						 
                          </center>      
<?php		
			  }
		  }
			  }
		  }
			  }
		  }				  
	  }
	  }
?>         
	</body>
	</html>