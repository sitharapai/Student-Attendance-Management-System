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
  background-color:orange;
  padding: 20px;
}
</style>
<body>

<div>
  <h2>ADD A NEW SUBJECT</h2>
  <form action="#" method="POST">
    <label for="code">Enter the subject code:</label><br>
    <input type="text" id="code" name="code" placeholder="enter subject code">
<br>
    <label for="sname">Enter the subject name:</label><br>
    <input type="text" id="sname" name="subname" placeholder="enter subjecr name">
<!-- <br>
    <label for="lname">last name</label><br>
    <input type="text" id="lname" name="lname" placeholder="enter last name">
<br> -->
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
 <label for="hours">Enter the total number of hours:</label><br>
    <input type="text" id="hours" name="hours" placeholder="enter the no of hrs">
   <br><br>
    <input type="submit" value="submit" name="submit">  </form>
  
<div>
  <a href="../mainpages/adminmain.php">Back</a>
</div> 

   
<?php 
if(isset($_POST['submit']))
{ 
$code=$_POST['code'];   
$subname=$_POST['subname'];
$dnum=$_POST['dnum'];
$hours=$_POST['hours'];
 $q="INSERT INTO `subject`(`sub_code`, `sub_name`, `dnum`, `no_of_hrs`) VALUES ('{$code}','{$subname}','{$dnum}','{$hours}')";
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