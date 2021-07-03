<?php 

  include("E:\php\htdocs\SAMS\connection.php");
    // $email="abc@gmail.com";
    // $pass=12345;
    // session_start();

    // if(isset($_POST['submit'])){

    //   $_SESSION['email']=$email;
    //   $_SESSION['password']=$pass;
      
      
    // }
    


 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<title>admin main</title>
  <style>
      .box{
        margin-bottom: 20px;
    }

</style>
</head>

<body>
  <nav class="amber box">
    <div class="nav-wrapper">
      <a href="#" class="align center brand-logo hide-only-med"><b>WELCOME ADMIN</b></a>
      <ul id="nav-mobile" class="right">
        <form action="../login/logout.php" method="POST">
          <input type="submit" name="submit" value="LOGOUT" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable" style="margin-right: 20px">
        </form>
        
      </ul>
    </div>
  </nav>

<div class="row">
  <!-- ROW-1 CARD-1 -->
      <div class="col  m6">
        <div class="card hoverable">
            <!-- CARD TITLE -->
            <div class="card-content black-text">
                <span class="card-title"><b>STAFF INFO</b></span>
            </div>
            <!-- CARD ACTION -->
              <div class="box">
                <div class="card-action black-text text-darken-3">
                <div class="align center">
                    <a href="../insert/staffinsert.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>ADD STAFF</span>  
                    <i class=" material-icons right">add</i> 
                    </a><br><br><br>

                    <a href="../delete/staffdelete.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>REMOVE STAFF</span>  
                    <i class=" material-icons right">remove</i> 
                    </a> <br><br><br> 

                     <a href="staffdetails.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>STAFF DETAILS</span>  
                    <i class=" material-icons right">details</i> 
                    </a> 
                 
                </div>
              </div>
              </div>
        </div>
      </div>


      <!-- ROW-1 CARD-2 -->
      <div class="col  m6">
        <div class="card hoverable">
            <!-- CARD TITLE -->
            <div class="card-content black-text">
                <span class="card-title"><b>STUDENT INFO</b></span>
            </div>
            <!-- CARD ACTION -->
              <div class="box">
                <div class="card-action black-text text-darken-3">
                <div class="align center">
                    <a href="../insert/studentinsert.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>ADD STUDENT</span>  
                    <i class=" material-icons right">add</i> 
                    </a><br><br><br>

                    <a href="../delete/studentdelete.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>REMOVE STUDENT</span>  
                    <i class=" material-icons right">remove</i> 
                    </a> <br><br><br> 

                     <a href="studentdetails.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>STUDENT DETAILS</span>  
                    <i class=" material-icons right">details</i> 
                    </a> 
                 
                </div>
              </div>
              </div>
        </div>
      </div>
         <!-- END OF ROW-1 -->
  </div>
      

<div class="row">
  <!-- ROW_2 CARD-1 -->
  <div class="col  m6">
        <div class="card hoverable">
            <!-- CARD TITLE -->
            <div class="card-content black-text">
                <span class="card-title"><b>DEPARTMENT INFO</b></span>
            </div>
            <!-- CARD ACTION -->
              <div class="box">
                <div class="card-action black-text text-darken-3">
                <div class="align center">
                    <a href="../insert/deptinsert.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>ADD DEPARTMENT</span>  
                    <i class=" material-icons right">add</i> 
                    </a><br><br><br>

                    <a href="../delete/deptdelete.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>REMOVE DEPARTMENT</span>  
                    <i class=" material-icons right">remove</i> 
                    </a><br><br><br> 

                     <a href="deptdetails.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>DEPARTMENT DETAILS</span>  
                    <i class=" material-icons right">details</i> 
                    </a>  
                 
                </div>
              </div>
              </div>
        </div>
  </div>

  <!-- ROW-2 CARD-2 -->
  <div class="col  m6">
        <div class="card hoverable">
            <!-- CARD TITLE -->
            <div class="card-content black-text">
                <span class="card-title"><b>SUBJECT INFO</b></span>
            </div>
            <!-- CARD ACTION -->
              <div class="box">
                <div class="card-action black-text text-darken-3">
                <div class="align center">
                    <a href="../insert/subjectinsert.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>ADD SUBJECT</span>  
                    <i class=" material-icons right">add</i> 
                    </a><br><br><br>

                    <a href="../delete/subdelete.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>REMOVE SUBJECT</span>  
                    <i class="material-icons right">remove</i> 
                    </a> <br><br><br>
                     <a href="subdetails.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>SUBJECT DETAILS</span>  
                    <i class=" material-icons right">details</i> 
                    </a> 
                 
                </div>
              </div>
              </div>
        </div>
  </div>
  <!-- END OF ROW-2 -->
  </div>
      

   
 </div> 
 <div class="row">
  <div class="col  m6">
        <div class="card hoverable">
            <!-- CARD TITLE -->
            <div class="card-content black-text">
                <span class="card-title"><b>STUDENT ARCHIVES</b></span>
            </div>
            <!-- CARD ACTION -->
              <div class="box">
                <div class="card-action black-text text-darken-3">
                <div class="align center">
                    <a href="studentarchives.php" class="wave-effects wave-lighten btn grey darken-3 white-text hoverable">
                    <span>CLICK HERE</span>  
                    <i class=" material-icons right">arrow</i> 
                    </a><br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>


    
</body>
</html>