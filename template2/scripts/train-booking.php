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

<script>
    function validate(){
	/* var adult= document.getElementByID("adult").value;
	 var age=document.getElementById("age").value;*/
	 
	  var p1= document.forms["book"]["person1"].value;
	  var a1= document.forms["book"]["age1"].value;
	  
	   var p2= document.forms["book"]["person2"].value;
	  var a2= document.forms["book"]["age2"].value;
	  
	   var p3= document.forms["book"]["person3"].value;
	  var a3= document.forms["book"]["age3"].value;
	  
	   var p4= document.forms["book"]["person4"].value;
	  var a4= document.forms["book"]["age4"].value;
	  
	   var p5= document.forms["book"]["person5"].value;
	  var a5= document.forms["book"]["age5"].value;
	  
	   var p6= document.forms["book"]["person6"].value;
	  var a6= document.forms["book"]["age6"].value;
	 
	  var re=/^[\w ]+$/;
            var rs=/^[0-9]+$/;
			
			
			if(/\d/.test(p1))
	        {
		        alert("Name is INVALID");
		        return false;
	        }
	        if(!re.test(p1))
	        {
		        alert("Error:Name contains INVALID characters");
		        return false;
	        }
			if(!rs.test(a1))
			{
				 alert("Error:age should contain numbers only");
			    return false;

			}
			
			if(p2!="")
		{ 
				 if(/\d/.test(p2))
	        {
		        alert("Name is INVALID");
		        return false;
	        }
	        if(!re.test(p2))
	        {
		        alert("Error:Name contains INVALID characters");
		        return false;
	        }
			if(!rs.test(a2))
			{
				 alert("Error:age should contain numbers only");
			    return false;

			}
		}
		
		if(p3!="")
		{ 
				 if(/\d/.test(p3))
	        {
		        alert("Name is INVALID");
		        return false;
	        }
	        if(!re.test(p3))
	        {
		        alert("Error:Name contains INVALID characters");
		        return false;
	        }
			if(!rs.test(a3))
			{
				 alert("Error:age should contain numbers only");
			    return false;

			}
		}
		if(p4!="")
		{ 
				 if(/\d/.test(p4))
	        {
		        alert("Name is INVALID");
		        return false;
	        }
	        if(!re.test(p4))
	        {
		        alert("Error:Name contains INVALID characters");
		        return false;
	        }
			if(!rs.test(a4))
			{
				 alert("Error:age should contain numbers only");
			    return false;

			}
		}
		if(p5!="")
		{ 
				 if(/\d/.test(p5))
	        {
		        alert("Name is INVALID");
		        return false;
	        }
	        if(!re.test(p5))
	        {
		        alert("Error:Name contains INVALID characters");
		        return false;
	        }
			if(!rs.test(a5))
			{
				 alert("Error:age should contain numbers only");
			    return false;

			}
		}
		if(p6!="")
		{ 
				 if(/\d/.test(p6))
	        {
		        alert("Name is INVALID");
		        return false;
	        }
	        if(!re.test(p6))
	        {
		        alert("Error:Name contains INVALID characters");
		        return false;
	        }
			if(!rs.test(a6))
			{
				 alert("Error:age should contain numbers only");
			    return false;

			}
		}
			return true;
	}
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
                              $dep=$_SESSION['date'];
							   $sr=$_SESSION['source'];
							   $dst=$_SESSION['destination'];
							   $class=$_SESSION['class'];
							   //echo $class;
	if(isset($_GET['id']))
{  
     
    $tid=$_GET['id'];
	$tname=$_POST['tname'];
	$arr=$_POST['Arraival'];
	$depa=$_POST['Departure'];
	$price=$_POST['price'];
	$status=$_POST['status'];
	//echo $status;
	
	$_SESSION['price']=$price;
	$_SESSION['status']=$status;
	$_SESSION['tname']=$tid;
?>
<div class="a">
<center>	
                        <br>						
						<table style="width:80%">
						<tr>
						     <th>Train ID</th><th>Train Name</th><th>Source</th><th>Destination</th>
							  <th>Departure</th><th>Arraival</th><th>Availability</th><th>Fare</th>
						</tr>
						<tr>
						       <td><?php echo $tid;?></td><td><?php echo $tname;?></td><td><?php echo $sr;?></td>
							   <td><?php echo $dst;?></td><td><?php echo $depa; ?></td><td><?php echo $arr;?></td>
							   <td><?php echo $status;?></td><td><?php echo " Rs. ".$price.""; ?></td>
						</tr>
                         </table>	
                          						 
                          </center>  
</div>						  

<center>
	 <div class="inform" >
	 <form name="book" method="POST" onsubmit="return validate();" action='train-payment.php' enctype="multipart/form-data">
	<label for="adult">person1</label>
		                 <input class="ui-widget"  id="adult" name="person1"style="width:250px;" required>
     &nbsp&nbsp&nbsp&nbsp<label for="age">Age</label>
	         <input class="ui-widget" id="age" name="age1" style="width:50px;" required>
	  &nbsp&nbsp&nbsp&nbsp<label for="gender">Gender</label>
		                 <select id="gender" name="gender1"style="width:100px;" required>
							<option>Male</option>
							<option>Female</option></select>
							<br>
		<label for="adult">person2</label>
		                 <input class="ui-widget"  id="adult" name="person2"style="width:250px;">
     &nbsp&nbsp&nbsp&nbsp<label for="age">Age</label>
	         <input class="ui-widget" id="age" name="age2" style="width:50px;">
	  &nbsp&nbsp&nbsp&nbsp<label for="gender">Gender</label>
		                 <select id="gender" name="gender2"style="width:100px;">
							<option>Male</option>
							<option>Female</option></select>
							<br>
        <label for="adult">person3</label>
		                 <input class="ui-widget"  id="adult" name="person3"style="width:250px;">
     &nbsp&nbsp&nbsp&nbsp<label for="age">Age</label>
	         <input class="ui-widget" id="age" name="age3" style="width:50px;">
	  &nbsp&nbsp&nbsp&nbsp<label for="gender">Gender</label>
		                 <select id="gender" name="gender3"style="width:100px;">
							<option>Male</option>
							<option>Female</option></select>
							<br>
        <label for="adult">person4</label>
		                 <input class="ui-widget"  id="adult" name="person4"style="width:250px;">
     &nbsp&nbsp&nbsp&nbsp<label for="age">Age</label>
	         <input class="ui-widget" id="age" name="age4" style="width:50px;">
	  &nbsp&nbsp&nbsp&nbsp<label for="gender">Gender</label>
		                 <select id="gender" name="gender4"style="width:100px;">
							<option>Male</option>
							<option>Female</option></select>
                             <br>
       <label for="adult">person5</label>
		                 <input class="ui-widget"  id="adult" name="person5"style="width:250px;">
     &nbsp&nbsp&nbsp&nbsp<label for="age">Age</label>
	         <input class="ui-widget" id="age" name="age5" style="width:50px;">
	  &nbsp&nbsp&nbsp&nbsp<label for="gender">Gender</label>
		                 <select id="gender" name="gender5"style="width:100px;">
							<option>Male</option>
							<option>Female</option></select>		
                             <br>
       <label for="adult">person6</label>
		                 <input class="ui-widget"  id="adult" name="person6"style="width:250px;">
     &nbsp&nbsp&nbsp&nbsp<label for="age">Age</label>
	         <input class="ui-widget" id="age" name="age6" style="width:50px;">
	  &nbsp&nbsp&nbsp&nbsp<label for="gender">Gender</label>
		                 <select id="gender" name="gender6"style="width:100px;">
							<option>Male</option>
							<option>Female</option></select>							 
	 </div></center>
						
		<?php
       	 
 }
 
?>
<center><input class="new" type="submit" value="CONTINUE PAYMENT" name="SUBMIT" style="background-color:white;margin-top:30px;margin-bottom:50px;"></input></center>
</form>
</body>
</html>