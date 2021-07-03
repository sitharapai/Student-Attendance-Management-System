<?php 
   include("E:\php\htdocs\SAMS\connection.php") ;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>display student</title>
  <link rel="stylesheet"  href="table.css">
  <link rel="stylesheet"  href="style.css"> -->
  <style>
    body{
      background-color: white;
    }
    div{
      width: 500px;
      margin: 100px 200px;
      
    }
     #staff {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#staff td, #staff th {
  border: 1px solid #ddd;
  padding: 8px;
}

#staff tr:nth-child(even){background-color: #f2f2f2;}

#staff tr:hover {background-color: #ddd;}

#staff th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  background-color: darkorange;
  color: white;
}
    
  </style>
</head>
<body>

  <h3>STAFF DETAILS</h3>
  <table id="staff">
  
    <tr>
      <thead class="thead-dark text-white">
        <th>STAFF ID</th>
        <th>STAFF NAME</th>
        <th>SUBJECT CODE</th>
        <th>DEPT. NO.</th>
        <th>PASSWORD</th>
        <th class="edit">edit</th>
      </thead>
    </tr>

    <?php 
       include("E:\php\htdocs\SAMS\connection.php");
       $q ="CALL view_staff_details()";
          // $q="SELECT * from student";
             $r=mysqli_query($conn,$q);
             while($row=mysqli_fetch_array($r))
                {

                 ?>
                 <tr>
                 <td><?php echo $row['staff_id'] ?></td>
                  <td><?php echo $row['staff_name'] ?></td>
                  <td><?php echo $row['sub_code'] ?></td>
                  <td><?php echo $row['dnum'] ?></td>
                  <td><?php echo $row['password'] ?></td>
                  <td><a href="../update/editstaff.php?staff_id=<?php echo $row['staff_id'];?>"><button class="btn-primary">edit</button></a></td>
             </tr>
             <?php 
              }

              ?>
  </table>

 <div>
  <a href="../mainpages/adminmain.php">Back</a>
</div> 
</body>
</html>