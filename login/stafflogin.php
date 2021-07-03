<?php 

session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'sams');

if(isset($_POST['submit'])){
	$sid = $_POST['sid'];
	$pass = $_POST['password'];

	$q = "SELECT * FROM `staff` WHERE `staff_id` = '$sid' && `password` = '$pass'";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);

if($num == 1)
{
    $_SESSION['staff_id'] = $sid;
    $row = mysqli_fetch_array($result);
     // $_SESSION['sub_code'] =$row['sub_code'];
   	$message = " LOGIN SUCCESSFULL --> welcome " .$_SESSION['staff_id'];
       echo "<script>alert('$message');
       window.location.replace(\"../mainpages/staffmain.php\");</script>";
}
else {

    $message = "went wrong";
	echo "<script type='text/javascript'>alert('$message');
	window.location.replace(\"stafflogin.php\");</script>";
}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
	
		.box{
			margin-top: 40px;
			height:200px;
			width:200px;
		}
	</style>
	
	<title>staff login</title>
</head>
<body>

	<nav class="amber">
    <div class="nav-wrapper">
      <a href="#" class="align center brand-logo"><b>STAFF LOGIN</b></a>
      <ul id="nav-mobile" class="right">
      </ul>
    </div>
  </nav>

	<div class="container box">
	<form action="" method="POST" class="align center">
        <b>STAFF ID :</b><br>
		<input type="text" name="sid" placeholder="Enter staff id" required><br><br>
		<b>  PASSWORD :</b><br>
		<input type="password" name="password" placeholder="Enter password" required><br><br>
		<a href="../mainpages/staffmain.php">
			<input class="btn grey darken-3 hoverable" type="submit" name="submit" value="LOGIN">
		<!-- <div class="btn red wave-effect hoverable">LOGIN</div> -->
		</a>
		
	</form>
    </div>
</body>
</html>