<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="user";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


$fname=$_POST['fname'];
$lname=$_POST['lname'];
//$uname=$_POST['username'];
$pswd=$_POST['password'];
$cpwd=$_POST['cpassword'];
$mail=$_POST['email'];
//$startdate=date('y-m-d');
//$enddate=date('y-m-d',strtotime("+30 days"));
//$_SESSION['edate']=$enddate;
if($pswd==$cpwd)
{
	
	$che="SELECT * from reg WHERE email='$mail'";
	$res= mysqli_query($conn,$che);
	
    if(! $res){
		die("could not get data: ". mysqli_error());
	}
	if($res->num_rows>0)
	{
		$mes1="Enter another email id";
		echo "<script type='text/javascript'>alert('$mes1')</script>";
        echo "<script>setTimeout(\"location.href = 'signuppage.html';\",100);</script>";
	}
	else
	{
      $password=md5($pswd);
     $qr="insert into reg values('$fname','$lname','$mail','$password','$password')";

	if ($conn->query($qr) === TRUE)
	{
		//echo "New record created successfully";
		header("location:loginpage.html");
	}
	else
	{
		echo "Error: " . $qr . "<br>" . $conn->error;
	}
	}
}
else
{
	$msg="Password does not match!!";
	echo"<script type='text/javascript'>alert('$msg');</script>";
		echo "<script>setTimeout(\"location.href = 'signuppage.html';\",100);</script>";

}
	
?>