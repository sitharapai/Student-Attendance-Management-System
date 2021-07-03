<?php 
   include("../connection.php") ;

// if (isset($_GET['usn'])) {
	

 $usn=$_GET['usn'];
 // echo "$usn";
 // echo "success";
 $qry="SELECT * FROM student where usn='$usn'";
 $res=mysqli_query($conn,$qry);
 while ($row=mysqli_fetch_assoc($res)) {
 	// $usn=$row['usn'];
 	$fname=$row['fname'];
 	$lname=$row['lname'];
 	$dnum=$row['dnum'];
 	$sem=$row['sem'];

 }
 // $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
 // 	// $usn=$row['usn'];
 // 	$fname=$row['fname'];
 // 	$lname=$row['lname'];
 // 	$dnum=$row['dnum'];
 // 	$sem=$row['sem'];
 // // }

 // 	mysqli_close($conn);



  ?>

 

  <!DOCTYPE html>
  <html>
 <style>
 input[type=text], select {
 	width: 30%;
 	padding: 12px 20px;
 	margin: 8px 0;
 	display: inline-block;
 	border: 1px solid #ccc;
 	border-radius: 4px;
 	box-sizing: border-box;
 	}

 input[type=submit]{
 	width: 30%;
 	background-color: #4CAF50;
 	color: white;
 	padding: 14px 20px;
 	margin: 8px 0;
 	border: none;
 	border-radius: 4px;
 	cursor: pointer;

 } 
 input[type=submit]:hover {
 	background-color: #45a049;
 }
 div{
 	border-radius: 5px;
 	background-color: orange;
 	padding: 20px;
 }


</style>
  <body>

  <div>
    <h3>Edit the Student details:</h3>
  	<form method="POST" action="#">
  <!-- 	USN<br>
  	<input type="text" name="usn" value="<?php echo $usn?>"><br> -->
  	FIRST NAME<br><br>
  	<input type="text" name="fname" value="<?php echo $fname?>"><br>
  	LAST NAME<br><br>
  	<input type="text" name="lname" value="<?php echo $lname?>"><br>
  	DEPT NUM<br>
  	<input type="text" name="dnum" value="<?php echo $dnum?>"><br>
  	SEM<br>
  	<input type="text" name="sem" value="<?php echo $sem?>"><br>
  	<input type="submit" name="submit" value="EDIT"> 

  	</form>
      <div>
  <a href="../mainpages/t2.php">Back</a>
</div> 
  </div>

  </body>
  </html>

   <?php 
   include("../connection.php");

  if(isset($_POST['submit']))
  {
  	echo"success";
  	// $usn=$_POST["usn"];
  	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$dnum=$_POST["dnum"];
	$sem=$_POST["sem"];

	$query="UPDATE student set fname='$fname',lname='$lname',dnum='$dnum',sem='$sem' where usn='$usn'";
	 $r=mysqli_query($conn,$query);
	 header('location:t2.php');

  }

   ?>