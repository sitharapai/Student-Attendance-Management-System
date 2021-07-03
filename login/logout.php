<?php 
	session_start();

	if(isset($_SESSION['email'])){
		session_destroy();
		// echo "<script>location.href='C:\xampp\htdocs\SAMS\login\adminlogin.php'</script>";
		echo "<script>window.location.replace(\"../login/adminlogin.php\");</script>";
	}
	else{

		echo "<script>window.location.replace(\"../login/adminlogin.php\");</script>";

	}



 ?>