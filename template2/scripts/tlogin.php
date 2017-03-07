<html>
<head>
<title>Login Page</title>
       <meta name="viewport" content="width =device-width, initial-scale=1"/>
       	   	   <link type="text/css" rel="stylesheet" href="login-style.css" media="screen,projection">

</head>
<body>
<?php
	  session_start();
	  session_unset();
	  session_destroy();
	  
	?>
  <script>
    function validate(){
	 /*var email= document.getElementByID("email").value;
	 var password=document.getElementById("pw").value;*/
	  var email= document.forms["frm_login"]["email"].value;
	  var password= document.forms["frm_login"]["password"].value;
	 
	  if(email==""||email==null)
	  {
	  alert("Error: Please enter email");
	  return false;
	  }
	  if(password==""||password==null)
	 {
	  alert("Error:Please enter password");
	   return false;
	  }
	  return true;
	}
  </script>
        <div class="home">
           <a href="home.php" >Home </a>
        </div>
  <center>
  <h1 class="heading">Login Here !</h1>
  <div class="c1">
  
       <form method="post"  onsubmit="return validate();"  action="process_login.php" name="frm_login" enctype="multipart/form-data">
	   <input type="email" placeholder="Email" name="email"id="email"/>
	   <input type="password" placeholder="Password" name="password" id="pw"/>
	   <input type="submit" name="submit" value="Log in"/>
	   </form>
  </div>
  
   <p class="int">If you are not regestered yet, then</p>
   <h4><a style="color:red;" href="reg.html">Register Now</a></h4>
  </center>
                 

</body>
</html>