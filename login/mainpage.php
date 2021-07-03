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
	
	<title>main page</title>
</head>
<style>
	.box{
		margin: 40px;
	}
</style>


<body background="../images/attendance.jpg">
  
	<nav class="amber">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><b>STUDENT ATTENDANCE MANAGEMENT SYSTEM</b></a>
      <ul id="nav-mobile" class="right">
        <li><a href="about.php" class="hoverable">ABOUT</a></li>
       
      </ul>
    </div>
  </nav>

  <div class="align center box">
    <a href="adminlogin.php">
	   <div class="wave-effects wave-lighten btn grey darken-3 hoverable">ADMIN LOGIN</div><br><br>
	</a>
	<a href="stafflogin.php">
	   <div class="wave-effects wave-lighten btn grey darken-3 hoverable">STAFF LOGIN</div>
	</a>	
	</div>
    
	
</body>
</body>
</html>