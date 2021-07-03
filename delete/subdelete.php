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
    <style type="text/css">
	
		.box{
			height=200px;
			width=200px;
		}
	</style>
	
 	<title>subject delete</title>
 </head>
 <body>
 	<nav class="amber">
    <div class="nav-wrapper">
      <a href="#" class="align center brand-logo"><b> REMOVE SUBJECT</b></a>
      <ul id="nav-mobile" class="right">
      </ul>
    </div>
  </nav>
	<div class="container align center box">
 	<form action="" method="POST">
 		<b>ENTER THE SUBJECT CODE</b><br><br>
 		<input type="number" name="scode" placeholder="Enter subject code">
 		<br><br>
 		<input class="wave-effects wave-lighten btn grey darken-3 white-text hoverable"  type="submit" name="submit" value="REMOVE">

 	</form>

<?php 
if(isset($_POST['submit']))
{ 
$scode=$_POST['scode']; 	
$q="DELETE FROM `subject` WHERE sub_code='$scode'";
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