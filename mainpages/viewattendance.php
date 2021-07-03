<?php
 include("E:\php\htdocs\SAMS\connection.php") ;
session_start();
 $sql="SELECT * FROM student";

 $result=mysqli_query($conn,$sql);

	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>View Attendance</title>
 	<style>
    body{
      background-color: white;
    }
    div{
      width: 500px;
      margin: 100px 200px;
      
    }
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
    
  </style>
   
 </head>
 <body>
    <h2>STUDENT ATTENDANCE DETAILS</h2>
  <table id="student">
  
    <tr>
      <thead class="thead-dark text-white">
        <th>USN</th>
        <th>FIRST NAME</th>
        <th>SUBJECT CODE</th>
        <th>PERCENTAGE</th>
        
      </thead>
    </tr>
 	<?php  		
 				$a = $_SESSION['staff_id'];
         $sql = "SELECT `sub_code` FROM `staff` WHERE staff_id='$a'";
            $result = mysqli_query($conn,$sql);        
                           
                           while ($row = mysqli_fetch_array($result))
                         {
             
                           $s=$row['sub_code']; 
             
                          }
	 $q="SELECT d.usn,st.fname,d.sub_code,((COUNT(status)/(no_of_hrs))*100) PERCENTAGE FROM daily_attendance d,subject s, student st where d.sub_code=s.sub_code and s.sub_code='$s' and d.usn=st.usn and status='PRESENT' group by usn,s.sub_code";			
 	           $result=mysqli_query($conn,$q);

            

              
         		    while($row=mysqli_fetch_array($result))
  					   	{
                ?>
    							 <tr>
                 <td><?php echo $row['usn'] ?></td>
                  <td><?php echo $row['fname'] ?></td>
                  <td><?php echo $row['sub_code'] ?></td>
                  <td><?php echo $row['PERCENTAGE'] ?></td>
                 
                  </tr>
                  <?php }  ?>
 					  	
                    </table>
                 
 									

               
    
     
</body>
</html>


 						 




 
