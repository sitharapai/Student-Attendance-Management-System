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
    <style>
	
		.box{
			height=200px;
			width=200px;
		}
	</style>
	
 	<title>department delete</title>
 </head>
 <body>
 	<nav class="amber">
    <div class="nav-wrapper">
      <a href="#" class="align center brand-logo"><b>REMOVE DEPARTMENT</b></a>
      <ul id="nav-mobile" class="right">
      </ul>
    </div>
  </nav>
	<div class="container align center box">
 	<form action="" method="POST">
 		<b>ENTER THE DEPARTMENT NUMBER</b><br><br>
 		<input type="number" name="dnum" placeholder="Enter department number">
 		<br><br>
 		<input class="wave-effects wave-lighten btn grey darken-3 white-text hoverable"  type="submit" name="submit" value="REMOVE">

 	</form>

<?php 
if(isset($_POST['submit']))
{ 
$dnum=$_POST['dnum']; 	
$q="DELETE FROM `department` WHERE dnum='$dnum'";
 $query=mysqli_query($conn,$q);
    if($query==TRUE)
        {
	        echo "One row deleted";

        } 
        else{
        	echo "not deleted";
        }  

}
?>
    </div>
 </body>
 </html>