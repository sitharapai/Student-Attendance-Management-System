<?php 

 include("E:\php\htdocs\SAMS\connection.php");
session_start();

                                
                       if(isset($_POST['submit'])){
                                $usn=$_POST['jj'];
                                $date=$_POST['date'];
                                $scode=$_POST['sub--code'];
                                $status = $_POST['status'];
                                $qy="INSERT INTO `daily_attendance` (`usn`, `date`, `sub_code`, `status`) VALUES ('{$usn}', '{$date}', '{$scode}', '{$status}')";
                                $result=mysqli_query($conn,$qy);

                                if($result) {
                                      $message = "Marking of attendance successful";
                                      echo "<script>alert('$message');
                                      window.location.replace(\"markatten.php\");</script>";
                                    } 
                                 else{
                                     $message = "Marking of attendance unsuccessful".$usn.$date.$scode.$status."";
                                     echo "<script>alert('$message');
                                     window.location.replace(\"markatten.php\");</script>";
                                    }
                              }

                          
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
     <!-- Import Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <!-- <style type="text/css"> -->
	
		<!-- /*.box{
			height=200px;
			width=200px;
		}*/ -->
	</style> 
	<title>MARK ATTENDANCE</title>
</head>
<body>
  <nav class="amber">
    <div class="nav-wrapper">
      <a href="#" class="align center brand-logo"><b>MARK STUDENT ATTENDENCE</b></a>
      <ul id="nav-mobile" class="right">
      </ul>
    </div>
  </nav>
	<div>
		<form action="" method="post">
			
                <label  for="">NAME</label>  
                       <br><br>     
                      <?php 
                           include("E:\php\htdocs\SAMS\connection.php");
                              // $a = $_SESSION['username'];
                            $sql = "SELECT * FROM `student`";
                            
                            $result = mysqli_query($conn,$sql);        
                            echo "<select style='padding:0;color:black;' name='jj'>";
                        
                           while ($row = mysqli_fetch_array($result))
                         {
             
                           echo "<option  value='".$row['usn']."'> ".$row['fname'] . "
                                              
                          </option>"; 
             
                          }
                          echo "</select>";

                      ?>
                      
                    <label  for="">SUBJECT CODE</label>  
                    
                          <?php 
                           include("E:\php\htdocs\SAMS\connection.php");
                               $a = $_SESSION['staff_id'];
                            $sql = "SELECT `sub_code` FROM `staff` WHERE staff_id='$a'";
                            
                           $result = mysqli_query($conn,$sql);        
                           
                           while ($row = mysqli_fetch_array($result))
                         {
             
                           echo "<input name='sub--code'' value='" .$row['sub_code']."'> "."
                                              
                          </input>"; 
             
                          }
                        

                      ?>       
 

                  
			             <br><br><br><br>
			             DATE:
                   <input type="date" name="date" class="datepicker"><br><br><br><br><br>
                   STATUS:<input type="radio" name="status" value="PRESENT" checked> Present
                          <input type="radio" name="status" value="ABSENT"> Absent<br><br><br>
                          <input  class="wave-effects wave-lighten btn grey darken-3 white-text hoverable" type="submit" name="submit" value="submit">
                          
		</form>
	</div>

</body>
</html>



