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
  $(function() {
        $( "#datepicker" ).datepicker({
 dateFormat: "dd/mm/y/D",
                changeMonth: true,
                changeYear: true,
 onClose: function(dateText, inst) {
                var validDate = $.datepicker.formatDate( "dd/mm/y/D",                                  $('#datepicker').datepicker('getDate'));
            $('#datepicker').datepicker('setDate', validDate); },
 defaultDate: null,
        });
    });
	
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>
  <script>
$(function() {
    $( "#Source" ).autocomplete({
        source: 'SearchStation.php'
    });
});
</script>
 <script>
$(function() {
    $( "#Destination" ).autocomplete({
        source: 'SearchStation.php'
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
 <div class="special" >
     
	  <nav class="navbar navbar-default">
	   <div class="container-fluid">
	       <ul class="nav navbar-nav">
		         <li class="active" ><a href="homepage.php"><i class="ion-android-plane"></i> FLIGHTS</a></li>
				 <li><a href="bus.php"><i class="ion-android-bus"></i> BUS</a></li>
				 <li><a href="train.php"><i class="ion-android-train"></i> TRAIN</a></li>
			</ul>
        </div>
        </nav>
		<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'trains';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get data
	$sr=$_POST['Source'];
	$dst=$_POST['Destination'];
        // echo $sr;
	$dep=$_POST['datepicker'];
    $class=$_POST['class'];
     // echo $dep;
?>
        <div class="a">
		
		<form name="ftrain" method="post" action="train-process.php" enctype="multipart/form-data">
		
		 <label for="Source">From</label>
		                 <input class="ui-widget" value="<?php echo $sr ?>" id="Source" name="Source" required>
							
							
		&nbsp &nbsp<label for="Destination">To</label>
		                 <input class="ui-widget" value="<?php echo $dst ?>" id="Destination" name="Destination" required>
						
		  &nbsp &nbsp <label for="datepicker">Departure</label>
		                 	 <input value="<?php echo $dep ?>" type="text" name="datepicker" id="datepicker" required>
                            
		 &nbsp &nbsp<label for="class">Class</label>
		                 <select id="class"  name="class">
							<option <?=$class== 'Sleeper class' ? ' selected="selected"' : '';?>>Sleeper class</option>
					        <option <?=$class== 'Third AC' ? ' selected="selected"' : '';?>>Third AC</option>
							<option <?=$class== 'Second AC' ? ' selected="selected"' : '';?>>Second AC</option>
							<option <?=$class== 'First AC' ? ' selected="selected"' : '';?>>First AC</option>
							<option <?=$class== 'Chair car' ? ' selected="selected"' : '';?>>Chair car</option>
							<option <?=$class== 'General' ? ' selected="selected"' : '';?>>General</option>

						</select>
		
		
		 &nbsp &nbsp<button class="new" >
		                            search Trains
		                        </button>
								</form>
				
<?php
    //echo date('l', strtotime($dep));
	//echo  $d;
	$day=substr($dep,9);
	$day=strtoupper($day);
	//echo $day;
    //searching for trains
    $query="SELECT  StationId FROM Station WHERE StationName='$sr'";
		$result= mysqli_query($db,$query);
		if(! $result){
		die("could not get source: ". mysqli_error());
	}
      $row=mysqli_fetch_assoc($result);
	  $sid=$row['StationId'];
	           //echo $sid;
	  		   
   $query1="SELECT  StationId FROM Station WHERE StationName='$dst'";
		$result1= mysqli_query($db,$query1);
		if(! $result1){
		die("could not get destination: ". mysqli_error());
	}
      $row1=mysqli_fetch_assoc($result1);
	  $did=$row1['StationId'];
	          // echo $did;
	
	$sql="SELECT * FROM route WHERE StationID='$sid'";
	   $res=mysqli_query($db,$sql);
	   		if(! $res){
		die("could not get data: ". mysqli_error());
	}
	$sql2="SELECT * FROM route WHERE StationID='$did'";
     	$res2=mysqli_query($db,$sql2);
				if(! $res2){
		die("could not get data: ". mysqli_error());
	}
	    while($col=mysqli_fetch_assoc($res)){
		 $id[]=$col['TrainID'];
		 $no[]=$col['StopNumber'];
		 $depa[]=$col['DepartureTime'];
		 $cou[]=$col['Days'];
		 $sd[]=$col['SourceDistance'];
		 //echo $id[1];
		}
		
		while($col2=mysqli_fetch_assoc($res2)){
			 $id2[]=$col2['TrainID'];
		     $no2[]=$col2['StopNumber'];
			 $arr[]=$col2['ArrivalTime'];
			 $cou2[]=$col2['Days'];
             $sd2[]=$col2['SourceDistance'];

		}
	
     	if($res->num_rows>0&&$res2->num_rows>0){
      $val=0;
     for($i=0;$i<count($id);$i++){
		 for($j=0;$j<count($id2);$j++){

			 if($id[$i]==$id2[$j]){
				      if($no[$i]<$no2[$j])
					  {
						  $val++;
							  $avl="SELECT AvailableDays FROM Days_Available WHERE TrainID='$id[$i]'";
							  $re= mysqli_query($db,$avl);
		                     if(! $re){
		                      die("could not get data: ". mysqli_error());
	                           }
							   $check=mysqli_fetch_assoc($re);
	                            $d=$check['AvailableDays'];
								if(strpos($d,$day)!==false){
									
															   // echo $id[$i],$sid,$did;
																$dis=($sd2[$j]-$sd[$i]);
						   // for train name										
									$n="SELECT * FROM Train WHERE TrainID='$id[$i]'";
                                    $na=mysqli_query($db,$n);
                                     $nam=mysqli_fetch_assoc($na);
                                     $tname=$nam['TrainName'];		
                            // for train status
                                    $s="SELECT * FROM Train_Status WHERE TrainID='$id[$i]' AND AvailableDate='$dep'";
                                    	$st=mysqli_query($db,$s);
										if($st->num_rows==0)
										{
											$c="SELECT * FROM Train_Class WHERE TrainID='$id[$i]'";
											$cl=mysqli_query($db,$c);
											$cla=mysqli_fetch_assoc($cl);
											$f1=$cla['FareClass1'];
											$s1=$cla['SeatClass1'];
											$f2=$cla['FareClass2'];
											$s2=$cla['SeatClass2'];
											$f3=$cla['FareClass3'];
											$s3=$cla['SeatClass3'];
											//echo $f1;
											/*$ex="INSERT INTO Train_Status(AvailableDate) VALUES ('$dep')";
											if($db->query($ex)==TRUE)
											 {
												 echo "sucsses";
											 }
											 else{
												 echo "fail";
											 }*/
$ins="INSERT INTO Train_Status (TrainID,AvailableDate,BookedSeats1,WaitingSeats1,AvailableSeats1,BookedSeats2,WaitingSeats2,AvailableSeats2,BookedSeats3,WaitingSeats3,AvailableSeats3,BookedSeats4,WaitingSeats4,AvailableSeats4,BookedSeats5,WaitingSeats5,AvailableSeats5,BookedSeats6,WaitingSeats6,AvailableSeats6) VALUES ('$id[$i]','$dep',0,0,'$f1',0,0,'$s1',0,0,'$f2',0,0,'$s2',0,0,'$f3',0,0,'$s3')";
                                  /*  $rins=mysqli_query($db,$ins);
	   		if(! $rins){
		die("could not get data: ". mysqli_error());
	}                                         */
										 if($db->query($ins)==TRUE)
											 {
												// echo "sucsses";
											 }
											 else{
												 echo "fail";
											 }
										}
									
                                     $sta=mysqli_fetch_assoc($st);
									 //echo $sta['AvailableSeats1'];
									 if($class=="First AC")
									 {

										 if($sta['AvailableSeats1']==0&&  $sta['BookedSeats1']!=0)
										 {
											 $status="waiting".$sta['WaitingSeats1']."";
										 }
										 else if($sta['AvailableSeats1']==0&& $sta['BookedSeats1']==0)
										 {
											 $status="First AC is not Available";
										 }
										 else
											 $status=$sta['AvailableSeats1'];
										     $price=$dis*1.0;
									 }
									 else if($class=="Sleeper class")
									 {
										 if($sta['AvailableSeats2']==0&& $sta['BookedSeats2']!=0)
										 {
											 $status="waiting".$sta['WaitingSeats2']."";
										 }
										 else if($sta['AvailableSeats2']==0&& $sta['BookedSeats2']==0)
										 {
											 $status="Sleeper is not Available";
										 }
										 else
											 $status=$sta['AvailableSeats2'];
										     $price=$dis*0.4;
									 }
									 else if($class=="Second AC")
									 {
										 if($sta['AvailableSeats3']==0&& $sta['BookedSeats3']!=0)
										 {
											 $status="waiting".$sta['WaitingSeats3']."";
										 }
										 else if($sta['AvailableSeats3']==0&& $sta['BookedSeats3']==0)
										 {
											 $status="Second AC is not Available";
										 }
										 else
											 $status=$sta['AvailableSeats3'];
										     $price=$dis*0.8;
									 }
									 else if($class=="General")
									 {
										 if($sta['AvailableSeats4']==0&& $sta['BookedSeats4']!=0)
										 {
											 $status="waiting".$sta['WaitingSeats4']."";
										 }
										 else if($sta['AvailableSeats4']==0&& $sta['BookedSeats4']==0)
										 {
											 $status="General is not Available";
										 }
										 else
											 $status=$sta['AvailableSeats4'];
										     $price=$dis*0.2;
									 }
									 else if($class=="Third AC")
									 {
										 if($sta['AvailableSeats5']==0&& $sta['BookedSeats5']!=0)
										 {
											 $status="waiting".$sta['WaitingSeats5']."";
										 }
										 else if($sta['AvailableSeats5']==0&& $sta['BookedSeats5']==0)
										 {
											 $status="Third AC is not Available";
										 }
										 else
											 $status=$sta['AvailableSeats5'];
										     $price=$dis*0.6;
									 }
									 //if($class=="Chair car")
									 else
									 {
										 if($sta['AvailableSeats6']==0&& $sta['BookedSeats6']!=0)
										 {
											 $status="waiting".$sta['WaitingSeats6']."";
										 }
										 else if($sta['AvailableSeats6']==0&& $sta['BookedSeats6']==0)
										 {
											 $status="Chair car is not Available";
										 }
										 else
											 $status=$sta['AvailableSeats6'];
										 $price=$dis*0.3;
									 }
                                    if($price<0)
									{
										 $price=$price*(-1);
									}
                               //taking values into sessions
							   $_SESSION['date']=$dep;
							   $_SESSION['source']=$sr;
							   $_SESSION['did']=$did;
							   $_SESSION['sid']=$sid;
							   $_SESSION['destination']=$dst;
							   $_SESSION['class']=$class;
                             				
												?>
						<center>	
                        <br><br>						
						<table style="width:80%">
						<tr>
						      <th>Train ID</th><th>Train Name</th><th>Source</th><th>Destination</th>
							  <th>Departure</th><th>Arraival</th><th>Availability</th><th>Fare</th>
						</tr>
						<tr>
						       <td><?php echo $id[$i];?></td><td><?php echo $tname;?></td><td><?php echo $sr;?></td>
							   <td><?php echo $dst;?></td><td><?php echo $depa[$i]; echo " \n"."day ".$cou[$i].""; ?></td><td><?php echo $arr[$j]; echo " day ".$cou2[$j]."";?></td>
							   <td><?php echo $status;?></td><td><?php echo " Rs. ".$price.""; ?></td>
							   <td> <?php echo "<form action='train-booking.php?id=".$id[$i]."' method='post' enctype='multipart/form-data'><input type='hidden' name='tname' value=".$tname.">
							                                                                                  <input type='hidden' name='Departure' value=".$depa[$i]." day".$cou[$i].">
							                                                                                  <input type='hidden' name='Arraival' value=".$arr[$j]." day".$cou2[$j].">
							                                                                                           <input type='hidden' name='status' value=".$status.">
							                                                                                  <input type='hidden' name='price' value=".$price.">
							                                                                           <button class='btn btn-default border-radius custom-button' >Book</button></form>"; ?></td>
						</tr>
                         </table>	
                          						 
                          </center>                      												
									<?php							
								}
								else{?>
									
									<div class="inform">
	                               <p style="color:black;">
	                               <?php
									echo "train ".$id[$i]." is available on".$d." days only";
									return;
									?>
									</p>
									<div>
									<?php
								}
					   }
			 }
			 
		 }
	 }
		}
		else{   ?>
									
									<div class="inform">
	                               <p style="color:black;">
	                               <?php
				 echo "no trains are available";
				 return;
			 
		}
			 if($val==0){
				 ?>
									</p>
									</div>
									<div class="inform">
	                               <p style="color:black;">
	                               <?php
				 echo "no trains are available";
			 
			 }
		
		
	    //return json data
    //echo json_encode($data);
?>
      </p>
	  </div>
</div>

		</div>
</body>
</html>