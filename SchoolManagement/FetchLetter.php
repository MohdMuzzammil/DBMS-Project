
<!doctype html>
<html lang="en">
<head>
<?php 

	session_start();
	if($_SESSION['session_id']!=session_id())
	{
	header("Location:http://localhost/SchoolManagement/Home.php");
	die();
	}

?>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Letter</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
	<link href="assets/js/light-bootstrap-dashboard.js" rel="text/javascript"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

.model-backdrop{z-index:-1;}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}


tr{
    background-color: #dddddd;
    
}
</style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="Black" data-image="assets/img/sidebar-5.jpg">

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
                <li  class="active">
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
                    <a class="navbar-brand" href="">Letter</a>
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
                    <div class="col-md-12">
                    <table>
                
  <tr>
    <th><p><b>Student ID</b></p></th>
    <th><p><b>Date</b></p></th>
    <th width="700px"><p><b>Subject</b></p></th>
    <th><p><b>Delete</b></p></th>
  </tr>
	
	
	
	
	
  <?php
	include 'connectdb.php';
	$query = "select * from request_table";
	$result = mysqli_query($con,$query);
	$i = 0;
	while($row=mysqli_fetch_assoc($result))
	{
	$student_id = $row['student_id'];
	$request_date = $row['request_date'];
	$subject = $row['subject'];
	$letter = $row['letter'];
	echo '
<div id="'.$i.'" class="modal fade" role="dialog" data-backdrop="false">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">'.$subject.'</h4>
      </div>
      <div class="modal-body">
        <p>'.$letter.'</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>';
	echo '
	<form class="form-group" action="DropLetter.php" method="POST"><tr>
    <td><input type="text" name="student_id" class="form-control" value='.$student_id.' readonly=""></td>
    <td><input type="text" name="request_date" class="form-control" value='.$request_date.' readonly=""></td>
    <td><input type="button" name="subject" class="form-control" data-toggle="modal" data-target="#'.$i.'" value='.$subject.'></td>
    <td><input type="submit" name="submit" value="Delete" class="form-control"></td>
	</tr></form>';
	
$i++;
	}
  ?>
  
  
</table>

                         </div>
						 
						 
		


                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="content table-responsive table-full-width">
                               
                            </div>
                        </div>
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
