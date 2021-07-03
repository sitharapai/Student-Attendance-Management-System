<?php  

include("../connection.php");

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
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<div>
  <h2>INSERT DEPARTMENTt</h2><br>
  <form action="#" method="POST">
    <label for="dnum">Department number</label><br>
    <input type="text" id="dnum" name="dnum" placeholder="enter department number">
<br>
    <label for="dname">department name</label><br>
    <input type="text" id="dname" name="dname" placeholder="enter department name">
 <br>
    <label for="num">no of sbject</label><br>
    <input type="text" id="subject" name="subject" placeholder="enter number of subject ">
<br> 

 <label for="hod">Head of dept</label><br>
    <input type="text" id="hod" name="hod" placeholder="enter the hod name">
   <br>
    <input type="submit" value="submit" name="submit">  </form>
  
<div>
  <a href="../mainpages/adminmain.php">Back</a>
</div> 

   
<?php 
if(isset($_POST['submit']))
{ 
$dnum=$_POST['dnum'];   
$dname=$_POST['dname'];
$nos=$_POST['subject'];
$hod=$_POST['hod'];
$insertdept="INSERT INTO `department` (`dnum`, `dname`, `no_of_sub`, `HOD`) VALUES ('{$dnum}', '{$dname}', '{$nos}', '{$hod}')";
   $query=mysqli_query($conn,$insertdept);
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