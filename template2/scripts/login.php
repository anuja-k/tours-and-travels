<?php
session_destroy();
session_start();
/*if($_SESSION["username"]!="")
	header('Location:loginpage.html');*/
$servername = "localhost";
$username = "root";
$pass_word = "";
$db="user";
// Create connection
$conn = mysqli_connect($servername, $username, $pass_word,$db);

// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}


if($_SERVER["REQUEST_METHOD"] == "POST")
{
			$username=$_POST['username'];
			$password=$_POST['password'];
			//$_SESSION["username"]=$username;
			
			$qr="SELECT * FROM reg where email='$username'";
			$res=$conn->query($qr);
			 if($conn->error) exit($conn->error); 
			
			$pass=md5($password);
			echo $pass;
				if($res->num_rows>0)	
				{
						
						while($row = $res->fetch_assoc()) 
						{	
							
							if($pass==$row["password"])
							{
								$_SESSION["username"]=$row["email"];
							    //$_SESSION["id"]=$row["blogger_id"];
								$_SESSION["fname"]=$row["fname"];
								header("location: ../homepageuser.php");
								
							}
							else
							{
								//header("location:loginagain.html");
								$msg="Password does not match!!";
								echo"<script type='text/javascript'>alert('$msg');</script>";
								//echo "<script>setTimeout(\"location.href = 'loginpage.html';\",100);</script>";
								break;
								
								
							}
						  
						}
				} 
				else 
				{
					//header("location:loginpage.html");
						$message ="User doesnot exist";
						echo"<script type='text/javascript'>alert('$message');</script>";
						echo "<script>setTimeout(\"location.href = 'loginpage.html';\",100);</script>";
				}

}

?>