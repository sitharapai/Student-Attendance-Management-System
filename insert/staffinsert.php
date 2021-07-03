<?php  

include("E:\php\htdocs\SAMS\connection.php");

 ?>



<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width:30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
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

div {
  border-radius: 4px;
  padding: 20px;
  background-color:darkorange;


}
</style>
<body>

<div>
  <h2>ADD A NEW STAFF</h2>
  <form action="#" method="POST">
    <label for="id">Enter the staff-id:</label><br>
    <input type="text" id="staffid" name="id" placeholder="enter staff id">
<br>
    <label for="sname">Enter the staff name:</label><br>
    <input type="text" id="sname" name="staffname" placeholder="enter staff name">
<!-- <br>
    <label for="lname">last name</label><br>
    <input type="text" id="lname" name="lname" placeholder="enter last name">
<br> -->
<br>
    <label for="code">Select the subject:</label><br>
     <?php 
                           include("E:\php\htdocs\SAMS\connection.php");
                              // $a = $_SESSION['username'];
                            $sql = "SELECT * FROM `subject`";
                            
                            $result = mysqli_query($conn,$sql);        
                            echo "<select style='padding:1;color:black;' name='code'>";
                        
                           while ($row = mysqli_fetch_array($result))
                         {
             
                           echo "<option  value='".$row['sub_code']."'> ".$row['sub_name'] . "
                                              
                          </option>"; 
             
                          }
                          echo "</select>";

                      ?>

    <br>
    <label for="dnum">Select the department:</label><br>
   <!--  <input type="date" id="ord_date" name="ord_date" placeholder="enter the order date"> -->
   <?php 
                           include("../connection.php");
                              // $a = $_SESSION['username'];
                            $sql = "SELECT * FROM `department`";
                            
                            $result = mysqli_query($conn,$sql);        
                            echo "<select style='padding:1;color:black;' name='dnum'>";
                        
                           while ($row = mysqli_fetch_array($result))
                         {
             
                           echo "<option  value='".$row['dnum']."'> ".$row['dname'] . "
                                              
                          </option>"; 
             
                          }
                          echo "</select>";

                      ?>
<br>
 <label for="password">Enter password:</label><br>
    <input type="text" id="password" name="password" placeholder="enter the password">
   <br>
    <input type="submit" value="submit" name="submit">  </form>
  
<div>
  <a href="../mainpages/adminmain.php">Back</a>
</div> 

   
 <?php 
if(isset($_POST['submit']))
{ 
$sid=$_POST['id'];  
$sname=$_POST['staffname'];
$scode=$_POST['code'];
$dnum=$_POST['dnum'];
$pass=$_POST['password'];
 $q="INSERT INTO `staff`(`staff_id`, `staff_name`, `sub_code`, `dnum`,`password`) VALUES ('{$sid}','{$sname}','{$scode}','{$dnum}','{$pass}')";
   $query=mysqli_query($conn,$q);
    if($query==TRUE)
        {
          echo "One row inserted";

        } 
        else{
          echo "not inserted";
        }  

}
   
  
 

  ?> 
   
  

</div>

</body>
</html>