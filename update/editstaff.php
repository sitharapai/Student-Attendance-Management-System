<?php 
   include("../connection.php") ;

// if (isset($_GET['usn'])) {
	

 $staff_id=$_GET['staff_id'];
 // echo "$usn";
 // echo "success";
 $qry="SELECT * FROM staff where staff_id='$staff_id'";
 $res=mysqli_query($conn,$qry);
 while ($row=mysqli_fetch_assoc($res)) {
 	// $usn=$row['usn'];
 	$staff_name=$row['staff_name'];
 	$sub_code=$row['sub_code'];
 	$dnum=$row['dnum'];
 	$password=$row['password'];

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


  <div>
      <h3>edit the Staff</h3>
  	<form method="POST" action="#">
  <!-- 	USN<br>
  	<input type="text" name="usn" value="<?php echo $usn?>"><br> -->
  	STAFF NAME<br>
  	<input type="text" name="staff_name" value="<?php echo $staff_name?>"><br>
    subject <br>
  	<input type="text" name="sub_code" value="<?php echo $sub_code?>"><br>
  	DNUM<br>
  	<input type="text" name="dnum" value="<?php echo $dnum?>"><br>

    Password<br>
    <input type="text" name="password" value="<?php echo $password?>"><br>
    <input type="submit" name="submit" value="submit"> 

    </form>
     <div>
  <a href="../mainpages/t1.php">Back</a>
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
  $staff_name=$_POST["staff_name"];
	$sub_code=$_POST["sub_code"];
	$dnum=$_POST["dnum"];
	$password=$_POST["password"];

	$query="UPDATE staff set staff_name='$staff_name',sub_code='$sub_code',dnum='$dnum',password='$password' where staff_id='$staff_id'";
	 $r=mysqli_query($conn,$query);
	 header('location:t1.php');

  }

   ?>