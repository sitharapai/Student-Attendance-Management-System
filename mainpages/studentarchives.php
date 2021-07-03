<?php 
   include("E:\php\htdocs\SAMS\connection.php") ;
 ?>
 <!DOCTYPE html>
 <html>
 <head><style>
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
   
   <title>archive details</title>
 </head>
  <body>

    <h2>STUDENT ARCHIVE DETAILS</h2>
  <table id="student">
  
    <tr>
      <thead class="thead-dark text-white">
        <th>USN</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>DEPT. NO.</th>
        <th>SEMESTER</th>
        
      </thead>
    </tr>
   
      	 <?php 
          
           $q ="SELECT * FROM students_archive";
          // $q="SELECT * from student";
             $r=mysqli_query($conn,$q);
           

               
                while($row=mysqli_fetch_array($r))
                {

             ?>                                                         
                 <tr>
                 <td><?php echo $row['usn'] ?></td>
                  <td><?php echo $row['fname'] ?></td>
                  <td><?php echo $row['lname'] ?></td>
                  <td><?php echo $row['dnum'] ?></td>
                  <td><?php echo $row['sem'] ?></td>
                  </tr>
            <?php 
              }

              ?>
      </table>
                 
                  

             

 
 
 </body>
 </html>
