<?php 

 include("E:\php\htdocs\SAMS\connection.php");
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
     <!-- Import Google Icon Font -->
   <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    
  <style>
	 #student {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#student td, #student th {
  border: 1px solid #ddd;
  padding: 8px;
}

#student tr:nth-child(even){background-color: #f2f2f2;}

#student tr:hover {background-color: #ddd;}

#student th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  background-color: darkorange;
  color: white;
} 
	
		 /*.box{
			height=200px;
			width=200px;
		}*/ 
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
		<form action="" method="POST">
                       <label>SUBJECT CODE</label>  
                    
                          <?php 
                              include("E:\php\htdocs\SAMS\connection.php");
                              $a = $_SESSION['staff_id'];
                              $sql = "SELECT `sub_code` FROM `staff` WHERE staff_id='$a'";
                              $result = mysqli_query($conn,$sql);        
                              while ($row = mysqli_fetch_array($result))
                              {
                                  echo "<input name='sub--code'' value='" .$row['sub_code']."'> "."</input>"; 
                              }
                          ?>       
			             <br><br><br><br>
			             DATE:
                   <input type="date" name="date" class="datepicker"><br><br><br><br><br>
                  <!--  STATUS:<input type="radio" name="status" value="PRESENT" checked> Present
                          <input type="radio" name="status" value="ABSENT"> Absent<br><br><br>
                          <input  class="wave-effects wave-lighten btn grey darken-3 white-text hoverable" type="submit" name="submit" value="submit"> -->

        <table id="student">
	
		<tr>
			<thead class="thead-dark text-white">
        <th>Sl.No</th>
				<th>usn</th>
				<th>fname</th>
        <th>lname</th>
			    <th>status</th>
				<!-- <th>Dnum</th>
				<th>sem</th>
				<th class="edit">edit</th> -->
			</thead>
		</tr>

		<?php 
		      include("E:\php\htdocs\SAMS\connection.php");
		      $a = $_SESSION['staff_id'];
          $sql = "SELECT `sub_code` FROM `staff` WHERE staff_id='$a'";          
          $result = mysqli_query($conn,$sql);
			   $q ="SELECT `usn`,`fname`,`lname` FROM student s,staff st where s.dnum=st.dnum and staff_id='$a' ";
          
               $r=mysqli_query($conn,$q);
               $i=1;
              
               while($row=mysqli_fetch_array($r))
               {
              	 echo "<tr>
                 <td align='center'>".@$i."</td>

                 <td align='center'>".@$row['usn']."</td>
                 <td align='center'>".@$row['fname']."</td>
                 <td align='center'>".@$row['lname']."</td>
                 <td align='center'>

                 <input type=\"hidden\" value=\"".$row['usn']."\" name=\"rowIDs[]\" />
                 <input type=\"radio\" name=\"".$row['usn']."\" value=\"PRESENT\">present
                 <input type=\"radio\" name=\"a_".$row['usn']."\" value=\"ABSENT\">absent

                 </td>
                 </tr>";
                 $i++;
               }   

          ?>
	     </table><br><br><br>
	     <input type="submit" name="submit" value="submit">
                          
	</form>
	</div>

</body>
</html>
<?php 
    if(isset($_POST['submit'])){
                                $usn=$_POST['usn'];
                                $date=$_POST['date'];
                                $scode=$_POST['sub--code'];
                               // $status = $_POST['status'];
                                $rowIDs = $_POST['rowIDs'];
                                foreach($rowIDs as $rowID) {


                                $radioButtonValue = $_POST['a_'.$rowID];
                                //mysqli_query("update `yourtable` SET `attendance` = '".$radioButtonValue."' WHERE `enrolloment_no` = '".$rowID."'");

                                $qy="INSERT INTO `daily_attendance` (`usn`, `date`, `sub_code`, `status`) VALUES ('{$usn}', '{$date}', '{$scode}', '{$rowID}')";

                                $result=mysqli_query($conn,$qy);
	                                }

                                if($result) {
                                      $message = "Marking of attendance successful";
                                      echo "<script>alert('$message');
                                      window.location.replace(\"newmark.php\");</script>";
                                    } 
                                 // else{
                                 //     $message = "Marking of attendance unsuccessful".$usn.$date.$scode.$status."";
                                 //     echo "<script>alert('$message');
                                 //     window.location.replace(\"newmark.php\");</script>";
                                 //    }
                              }

?>