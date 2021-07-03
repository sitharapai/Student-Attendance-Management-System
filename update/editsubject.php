<?php 
   include("E:\php\htdocs\SAMS\connection.php") ;

// if (isset($_GET['usn'])) {
	

 $sub_code=$_GET['sub_code'];
 // echo "$usn";
 echo "success";
 $qry="SELECT * FROM subject where sub_code='$sub_code'";
 $res=mysqli_query($conn,$qry);
 while ($row=mysqli_fetch_assoc($res)) {
 	// $usn=$row['usn'];
 	$sname=$row['sub_name'];

 	$dnum=$row['dnum'];
 	$hrs=$row['no_of_hrs'];

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
 	background-color: #f2f2f2;
 	padding: 20px;
 }


</style>
  <body>
  <h3> EDIT SBJECT DETAILS</h3>

  <div>
  	<form method="POST" action="#">
  <!-- 	USN<br>
  	<input type="text" name="usn" value="<?php echo $usn?>"><br> -->
  	SUBJECT NAME<br><br>
  	<input type="text" name="subname" value="<?php echo $sname?>"><br>
   <!--  DEPT_number <br><br>
  	// <input type="text" name="dnum" value="<?php echo $dnum?>"><br> -->
  	<br>
    NO_OF_HOURS<br>
  	<input type="text" name="hrs" value="<?php echo $hrs?>"><br>
    <input type="submit" name="submit" value="submit"> 

    </form>
      <div>
  <a href="../mainpages/subdetails.php">Back</a>
</div> 
  </div>

  </body>
  </html>

   <?php 
   include("E:\php\htdocs\SAMS\connection.php");

  if(isset($_POST['submit']))
  {
  	echo"success";
  	// $usn=$_POST["usn"];
  $subname=$_POST["subname"];
	// $dnum=$_POST["dnum"];
	$hrs=$_POST["hrs"];

	$query="UPDATE subject set sub_name='$subname',no_of_hrs='$hrs' where sub_code='$sub_code'";
	 $r=mysqli_query($conn,$query);
	 header('location:../mainpages/subdetails.php');

  }

   ?>