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

	<title>Attendance</title>

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
                    FREEDOM SCHOOL
                </a>
            </div>

             <ul class="nav">
                <li>
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
                <li  class="active">
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
                    <a class="navbar-brand" href="">Attendance</a>
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
                <div class="row">
                    
                    <form role="form" method="POST" action="FetchAttendance.php" accept-charset="UTF-8">
                    <div class="row">
                    <div class="col-md-6">    
                        
                        <label for="class" class="m-t-10">Class</label>
					
                        <select id="class" class="form-control" name="class">
							<option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        
                        </select>
                        </div>
                      <br><div class="col-md-1" style="margin:5px;" >
                         <center><input type="submit" class="btn btn-basic m-t-10" id="submitbtn" name="submit" value="Submit"></center></div>
                   </div>

                    </form>
                                     
                       

                       <div class="col-md-12">
                    <table>
                <br><br><br><br>
  <tr>
    <th><p><b>Student ID</b></p></th>
    <th width="25%"><p><b>Student Name</b></p></th>
    <th><p><b>English</b></p></th>
    <th><p><b>Hindi</b></p></th>
    <th><p><b>Kannada</b></p></th>
    <th><p><b>Maths</b></p></th>
    <th><p><b>GS</b></p></th>
    <th><p><b>SS</b></p></th>
        <th><p><b>Update</b></p></th>
  
  </tr>
  <?php
  include 'connectdb.php';
  if(isset($_POST['class']))
  {
	  $class = $_POST['class'];
  }
  else
  {
	  $class = 1;
  }
  $q = "select s.student_id as student_id,s.student_name as student_name,English,Hindi,Kannada,Math,GS,SS from attendance as a, student as s where 
  a.student_id=s.student_id and s.class=$class";
  $result = mysqli_query($con,$q);
  if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result))
  {
  echo'<tr>
  <form class="form-group" action="UpdateAttendance.php" method="POST">
    <td><input type="text" name="student_id" class="form-control" value="'.$row['student_id'].'" readonly=""></td>
    <td><input type="text" name="student_name" class="form-control" value="'.$row['student_name'].'" readonly=""></td>
    <td><input type="text" name="English" class="form-control" value="'.$row['English'].'" ></td>
    <td><input type="text" name="Hindi" class="form-control" value="'.$row['Hindi'].'" ></td>
    <td><input type="text" name="Kannada" class="form-control" value="'.$row['Kannada'].'" ></td>
    <td><input type="text" name="Math" class="form-control" value="'.$row['Math'].'" ></td>
    <td><input type="text" name="GS" class="form-control" value="'.$row['GS'].'" ></td>
    <td><input type="text" name="SS" class="form-control" value="'.$row['SS'].'" ></td>
  
    <td><input type="submit" name="submit" value="Update" class="form-control"></td>
  </form>
  </tr>';
  }}
	?>
</table>

                         </div>



                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                  </nav>
                <p class="copyright pull-right">
                    &copy; 2017 - ALL RIGHTS RESERVED FREEDOM PUBLIC SCHOOL
                </p>
            </div>
        </footer>


    </div>
</div>


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
