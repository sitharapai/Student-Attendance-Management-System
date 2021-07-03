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

	<h2>STUDENT DETAILS</h2>
	<table id="student">
	
		<tr>
			<thead class="thead-dark text-white">
				<th>USN</th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>
				<th>DEPT. NO.</th>
				<th>SEMESTER</th>
				<th class="edit">edit</th>
			</thead>
		</tr>

		<?php 
		   include("E:\php\htdocs\SAMS\connection.php");
			 $q ="CALL view_student_details()";
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
                  <td><a href="../update/editstudent.php?usn=<?php echo $row['usn'];?>"><button class="btn-primary">edit</button></a></td>
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