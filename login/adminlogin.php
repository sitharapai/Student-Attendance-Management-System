<?php 

	include("E:\php\htdocs\SAMS\connection.php");


 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Admin Login</title>
	<style type="text/css">
	
		.box{
			margin-top: 40px;
			height:200px;
			width:200px;
		}
	</style>
</head>
<body>
	
	<nav class="amber">
    <div class="nav-wrapper">
      <a href="#" class="align center brand-logo"><b>ADMIN LOGIN</b></a>
      <ul id="nav-mobile" class="right">
      </ul>
    </div>
  </nav>

    <div class=" container align center box">
	    <form action="../login/adminlogin.php" method="POST">
	       <b>EMAIL :</b><br>	
		   <input type="email" name="email" placeholder="Enter email"><br><br>
		   <b>PASSWORD :</b><br>
		   <input type="password" name="password" placeholder="Enter password"><br><br>
		   <input class="wave-effects wave-lighten btn grey darken-3 white-text hoverable" type="submit" name="submit" value="submit">
		   
		</form>
		<?php 
			 if(isset($_POST['submit']))
			 	{ 
			 		   session_start();
			 		   $email=$_POST['email']; 	
			 		   $pass=$_POST['password'];
			 		   $e="abc@gmail.com";
			 		   $p=12345;
                       if($email==$e && $pass==$p)	
        				 {
           				 		session_start();
	        					$message = 'LOGIN SUCCESSFULL -->WELCOME ADMIN';       					
	        					echo "<script>alert('$message');
       							window.location.replace(\"../mainpages/adminmain.php\");</script>";

          					 } 
      					      else{
         							$message = "LOGIN FAILED ---->RETRY LOGIN";
									echo "<script type='text/javascript'>alert('$message');
									window.location.replace(\"adminlogin.php\");</script>";
       					 	      		
        						 }  

			 	}
          
  
 

  ?>

   </div>
 </div>
</body>
</html>