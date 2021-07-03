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
  background-color: orange;
 /* background-image: url("../images/pic3.jpg");*/
  padding: 20px;
}
</style>
<body>

<div>
  <h3>ADD A NEW STUDENT</h3>
  <form action="#" method="POST">
    <label for="usn">Enter the USN:</label><br>
    <input type="text" id="usn" name="usn" placeholder="enter usn ">
<br>
    <label for="fname">Enter the first name:</label><br>
    <input type="text" id="fname" name="fname" placeholder="enter first name">
<br>
    <label for="lname">Enter the last name:</label><br>
    <input type="text" id="lname" name="lname" placeholder="enter last name">
<br>
    <label for="dnum">Select the department:</label><br>
   <!--  <input type="date" id="ord_date" name="ord_date" placeholder="enter the order date"> -->
   <?php 
                           include("E:\php\htdocs\SAMS\connection.php");
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
    <label for="sem">Enter the semester:</label><br>
    <input type="text" id="itemid" name="itemid" placeholder="enter the item number">
   <br>
    <input type="submit" value="submit" name="submit">  </form>
  
<div>
  <a href="../mainpages/adminmain.php">Back</a>
</div> 

   <!-- <label for="order_no">order no</label>
    <input type="text" id="order_no" name="order_no" placeholder="enter the order number">-->
<?php 
if(isset($_POST['submit']))
{ 
$usn=$_POST['usn'];   
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dnum=$_POST['dnum'];
$sem=$_POST['sem'];
 $q="INSERT INTO `student`(`usn`, `fname`, `lname`, `dnum`, `sem`) VALUES ('{$usn}','{$fname}','{$lname}','{$dnum}','{$sem}')";
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