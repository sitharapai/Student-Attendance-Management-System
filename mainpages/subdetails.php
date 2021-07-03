<?php 
   include("E:\php\htdocs\SAMS\connection.php") ;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>display subject</title>
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

    #subject {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#subject td, #subject th {
  border: 1px solid #ddd;
  padding: 8px;
}

#subject tr:nth-child(even){background-color: #f2f2f2;}

#subject tr:hover {background-color: #ddd;}

#subject th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  background-color: darkorange;
  color: white;
}
	</style>
</head>
<body>

	<h3>SUBJECT DETAILS</h3>
	<table id="subject">
	
		<tr>
			<thead class="thead-dark text-white">
				<th>SUBJECT CODE</th>
				<th>SUBJECT NAME</th>
			<!-- 	<th>subject code</th> -->
				<th>DEPT NO</th>
				<th>NO.OF HOURS</th>
				<th class="edit">Action</th>
			</thead>
		</tr>

		<?php 
		   include("E:\php\htdocs\SAMS\connection.php");
			 $q ="CALL view_sub_details()";
          // $q="SELECT * from student";
             $r=mysqli_query($conn,$q);
             while($row=mysqli_fetch_array($r))
                {

                 ?>
                 <tr>
                 <td><?php echo $row['sub_code'] ?></td>
                  <td><?php echo $row['sub_name'] ?></td>
                  <td><?php echo $row['dnum'] ?></td>
                  <td><?php echo $row['no_of_hrs'] ?></td>
                  <td><a href="../update/editsubject.php?sub_code=<?php echo $row['sub_code'];?>"><button class="btn-primary">edit</button></a></td>
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