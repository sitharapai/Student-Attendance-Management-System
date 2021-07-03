<?php 
       include("E:\php\htdocs\SAMS\connection.php");
  
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
	   #dept {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#dept td, #dept th {
  border: 1px solid #ddd;
  padding: 8px;
}

#dept tr:nth-child(even){background-color: #f2f2f2;}

#dept tr:hover {background-color: #ddd;}

#dept th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  background-color: darkorange;
  color: white;
}
    
	</style>
</head>
<body>
	<h2>DEPARTMENT DETAILS</h2>
	<table id="dept">
	
		<tr>
			<thead class="thead-dark text-white">
				<th>DEPT NO</th>
				<th>DEPT NAME</th>
				<th>NO. OF SUBJECTS</th>
				<th>HOD</th>
	
				<!-- <th class="edit">edit</th> -->
			</thead>
		</tr>

		<?php 
             include("E:\php\htdocs\SAMS\connection.php");
		   
			 $q ="CALL view_dept_details()";
          // $q="SELECT * from student";
             $r=mysqli_query($conn,$q);
             while($row=mysqli_fetch_array($r))
                {

                 ?>
                 <tr>
                 <td><?php echo $row['dnum'] ?></td>
                  <td><?php echo $row['dname'] ?></td>
                  <td><?php echo $row['no_of_sub'] ?></td>
                  <td><?php echo $row['HOD'] ?></td>
               
               <!--    <td><a href="editstudent.php?usn=<?php echo $row['usn'];?>"><button class="btn-primary">edit</button></a></td> -->
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