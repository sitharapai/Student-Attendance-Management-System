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
	<title>staff main</title>
<style>
  .box{
    margin-bottom: 40px;
  }
  .centeralign{
    height:200px;
      width:80%;
  }
  
</style>


  

</head>




<body background="../images/attendance.jpg">
  
  <nav class="amber box">
    <div class="nav-wrapper">
      <a href="#" class="align center brand-logo"><b>WELCOME STAFF</b></a>
      <ul id="nav-mobile" class="right">
      </ul>
    </div>
  </nav>


	<!-- VIEW ATTENDENCE CARD -->
	<div class="row centeralign">
    	<div class="col s12 m6">
     		<div class="card hoverable">
       		 	<div class="card-content">
          			<span class="card-title">VIEW ATTENDANCE</span>
          			
        		</div>
        		<div class="card-action red-text">
          		<a class="wave-effects wave-lighten btn grey darken-3 white-text hoverable" href="viewattendance.php" class="blue-text">CLICK HERE</a>
        		</div>
      		</div>
    	</div>

    	<div class="col s12 m6">
     		<div class="card hoverable">
       		 	<div class="card-content">
          			<span class="card-title">MARK ATTENDANCE</span>
          			        		</div>
        		<div class="card-action">
          		<a class="wave-effects wave-lighten btn grey darken-3 hoverable" href="newmark.php" class="blue-text">CLICK HERE</a>

          			
        		</div>
      		</div>
    	</div>

  </div>
 





</body>
</html>