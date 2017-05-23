<!doctype html>
<html lang="en">
<head>
<?php
session_start();
if($_SESSION['session_id']!=session_id())
{
	header("Location:http://localhost/SchoolManagement/AdminLogin.php");
}
?>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Student</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <style > table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;

}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}


tr{
    background-color: #dddddd;
   


    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="black" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Freedom School
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="Student.php">
                        <i class="pe-7s-graph"></i>
                        <p>Student</p>
                    </a>
                </li>
                <li>
                    <a href="Faculty.php">
                        <i class="pe-7s-user"></i>
                        <p>Faculty</p>
                    </a>
                </li>
                <li>
                    <a href="FetchLetter.php">
                        <i class="pe-7s-note2"></i>
                        <p>Letter</p>
                    </a>
                </li>
                <li>
                    <a href="FetchAttendance.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Attendance</p>
                    </a>
                </li>
                <li>
                    <a href="FetchSubject.php">
                        <i class="pe-7s-science"></i>
                        <p>Subject</p>
                    </a>
                </li>
                <li>
                    <a href="PasswordReset.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Password Reset</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>
	
	
	
	
	
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Student Details</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                     <li>
                            <a href="AdminHome.php" ><i class="fa fa-home" aria-hidden="true"></i> Home
                                
                            </a>
                        </li>
                        <li>
                            <a href="Logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                
                                
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
			
            <div class="container-fluid">
			
			
			
			<br><br>
			<!--  modal code -->
			<div class="row"><div class="col-md-12" style="top: -50px;">
	<div class="col-md-5">
  <h3>To add a new student, Click</h3></div>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-basic btn-lg" data-toggle="modal" data-target="#myModal" data-backdrop="false">Add Student</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Student Details</h4>
        </div>
        <div class="modal-body">
        <form method="POST" action="RegisterStudent.php" enctype="multipart/form-data">
           
  <div class="form-group">
  
  Name:<input type="text" name="student_name" class="form-control" placeholder="Student Name"></div>
  <div class="form-group">
  
  DOB:<input type="date" name="student_dob" class="form-control" placeholder="YYYY/MM/DD"></div>
  <div class="form-group">
  
  Gender:<input type="text" name="student_gender" class="form-control" placeholder="Student's Gender(M/F)"></div>
  <div class="form-group">
  
  Aadhaar:<input type="text" name="student_aadhaar" class="form-control" placeholder="Aadhaar No"></div>
  <div class="form-group">
  
  Email:<input type="text" name="student_email" class="form-control" placeholder="Email"></div>
  <div class="form-group" >
  
  Nationality:<input type="text" name="student_nation" class="form-control" placeholder="Nation" ></div>

  <div class="form-group">
  
   Religion:<input type="text" name="student_rel" class="form-control" placeholder="Religion" ></div>
  
  <div class="form-group">
  
   Photo:<input type="file" name="student_photo" class="form-control" ></div>
  
  <div class="form-group"  >
  
   Class:<input type="text" name="class" class="form-control" placeholder="Class" ></div>
  <div class="form-group" >


  
  Father's Name:<input type="text" name="f_name" class="form-control" placeholder="Father's Name" ></div>
  
  <div class="form-group" >
        
  
   Mother's Name:<input type="text" name="m_name" class="form-control" placeholder="Mother's Name" ></div>


        
        <div class="form-group" >
  
   Address:<input type="text" name="address" class="form-control" placeholder="Address" ></div>
   
   <div class="form-group" >
  
   Mobile No:<input type="text" name="mob_no" class="form-control" placeholder="Mobile Number" ></div>
   
   <div class="form-group" >
  
   Family Income:<input type="text" name="income" class="form-control" placeholder="Income" ></div>
   
   <div class="form-group" >
  
   Father's Occupation:<input type="text" name="f_occup" class="form-control" placeholder="Father's Occupation" ></div>
	
	<div class="form-group" >
  
   Mother's Occupation:<input type="text" name="m_occup" class="form-control" placeholder="Mother's Occupation" ></div>


<input type="submit" class="form-control" value="Submit" name="submit" >
        
     </form>
        <footer class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></footer>
        
      
      
    </div>
  </div>
  
  </div></div>
</div>

	</div>
			
			
			
			
			
                <div class="row">
                    
							
                      

                       <div class="col-md-12">
                       
                       
                    <table> 
                <br><br>

  <tr>
    <th><p><b>Student ID</b></p></th>
	<th><p><b>Class</b></p></th>
    <th width="25%"><p><b>Name</b></p></th>
	 <th><p><b>Mobile Number</b></p></th>
    <th><p><b>View</b></p></th>
        <th><p><b>Delete</b></p></th>
  
  </tr>
  
  <?php
  include 'connectdb.php';
  $query = "select * from parent,student where parent.parent_id=student.student_id";
  $result = mysqli_query($con,$query);
  while($row = mysqli_fetch_assoc($result))
  {
  echo '<tr>
  <form class="form-group" action="DeleteStudent.php" method="POST">
    <td><input type="text" name="student_id" class="form-control" value="'.$row["student_id"].'" readonly=""></td>
	<input type="text" name="parent_id" value="'.$row["parent_id"].'" hidden="">
    <td><input type="text" name="class" class="form-control" value="'.$row["class"].'" readonly=""></td>
    <td><input type="text" name="student_name" class="form-control" value="'.$row["student_name"].'" readonly=""></td>
     <td><input type="text" name="mob_no" class="form-control" value="'.$row["mob_no"].'" readonly=""></td>
     <td><button type="button" data-toggle="modal" data-target="#'.$row["student_id"].'" data-backdrop="false" class="form-control">View</button></td>
    <td><input type="submit" name="submit" value="Delete" class="form-control"></td>
  </form>
  </tr>
  <!-- Modal -->
  <div class="modal fade" id="'.$row["student_id"].'" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Student Details</h4>
        </div>
        <div class="modal-body">
        <form method="POST" action="AdminEditParentAndStudent.php">
           
	<div class="form-group">
  
  
  <div class="form-group"><center><img src="'.$row["student_photo"].'"  width="20%" height="20%"/></center></div>
  
  <input type="text" name="student_id" value="'.$row["student_id"].'" hidden="">
  <input type="text" name="parent_id" value="'.$row["parent_id"].'" hidden="">
  Name:<input type="text" name="student_name" class="form-control" value="'.$row["student_name"].'" readonly=""></div>
  <div class="form-group">
  
  DOB:<input type="date" name="student_dob" class="form-control" value="'.$row["student_dob"].'" readonly=""></div>
  <div class="form-group">
  
  Gender:<input type="text" name="student_gender" class="form-control" value="'.$row["student_gender"].'" readonly=""></div>
  <div class="form-group">
  
  Aadhaar:<input type="text" name="student_aadhaar" class="form-control" value="'.$row["student_aadhaar"].'" readonly=""></div>
  <div class="form-group" >
  
  Email:<input type="text" name="student_email" class="form-control" value="'.$row["student_email"].'" readonly=""></div>
  <div class="form-group" >
  
  Nationality:<input type="text" name="student_nation" class="form-control"  value="'.$row["student_nation"].'" readonly=""></div>

  <div class="form-group">
  
   Religion:<input type="text" name="student_rel" class="form-control" value="'.$row["student_rel"].'" readonly=""></div>
  
  
  <div class="form-group"  >
  
   Class:<input type="text" name="class" class="form-control" value="'.$row["class"].'" readonly=""></div>
  <div class="form-group" >


  
  Father\'s Name:<input type="text" name="f_name" class="form-control" value="'.$row["f_name"].'" readonly=""></div>
  
  <div class="form-group" >
        
  
   Mother\'s Name:<input type="text" name="m_name" class="form-control" value="'.$row["m_name"].'" readonly=""></div>


        
        <div class="form-group" >
  
   Address:<input type="text" name="address" class="form-control" value="'.$row["address"].'" readonly=""></div>
   
   <div class="form-group" >
  
   Mobile No:<input type="text" name="mob_no" class="form-control" value="'.$row["mob_no"].'" readonly=""></div>
   
   <div class="form-group" >
  
   Family Income:<input type="text" name="income" class="form-control" value="'.$row["income"].'" readonly=""></div>
   
   <div class="form-group" >
  
   Father\'s Occupation:<input type="text" name="f_occup" class="form-control" value="'.$row["f_occup"].'" readonly=""></div>
	
	<div class="form-group" >
  
   Mother\'s Occupation:<input type="text" name="m_occup" class="form-control" value="'.$row["m_occup"].'" readonly=""></div>



<input type="submit" class="form-control" value="Edit" name="submit" >
        
     </form>
        <footer class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></footer>
        
      
      
    </div>
  </div>
  
  </div></div>
</div>
';
  }
  ?>
  
</table>

                         </div>



                </div>
            </div>
        </div>
            
<br>
        <footer class="footer" style="margin-top: 60px;">
            <div class="container-fluid">
                <nav class="pull-left">
                  </nav>
                <p class="copyright pull-right">
                    &copy; 2017 - ALL RIGHTS RESERVED FREEDOM PUBLIC SCHOOL
                </p>
            </div>
        </footer>

    
</div></div>
        


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
