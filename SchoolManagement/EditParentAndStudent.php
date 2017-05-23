<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
	if($_SESSION['session_id']!=session_id())
	{
		header("Location:http://localhost/SchoolManagement/Home.php");
		die();
	}	
include 'connectdb.php';
$parent_id = $_SESSION['parent_id'];
$q = "select * from parent where parent_id=$parent_id";
$result = mysqli_query($con,$q);
if(mysqli_num_rows($result)==1)
{
	$array = mysqli_fetch_assoc($result);
	$f_name = $array['f_name'];
	$m_name = $array['m_name'];
	$address = $array['address'];
	$mob_no = $array['mob_no'];
	$income = $array['income'];
	$f_occup = $array['f_occup'];
	$m_occup = $array['m_occup'];
}
$student_id = $_SESSION['student_id'];
$q = "select * from student where student_id=$student_id";
$result = mysqli_query($con,$q);
if(mysqli_num_rows($result)==1)
{
	$array = mysqli_fetch_assoc($result);
	$student_name = $array['student_name'];
	$student_dob = $array['student_dob'];
	$student_email = $array['student_email'];
	$student_nation = $array['student_nation'];
	$student_rel = $array['student_rel'];
	$student_gender = $array['student_gender'];
	$student_aadhaar = $array['student_aadhaar'];
	$student_photo = $array['student_photo'];
	$class = $array['class'];
}
?>
  <title>Edit Details Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }


    .navbar-brand {
 position: absolute;
    top: -2px;
    left: 10px;
    font-family: 'Arvo', courier, serif;
    font-size: 30px;
    font-weight: bold;
    line-height: 90%;
  }

  img {
    
    width: 175px; /* Set a small width */
    border: 1px solid #ddd; /* Gray border */
    border-radius: 4px;  /* Rounded border */
    padding: 5px; /* Some padding */
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.btn-lg{
  font-size:20px;
}

p {
  font-size: medium;
}

#line-height: 100px;


  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Freedom School</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="http://localhost/SchoolManagement/ParentHome.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="http://localhost/SchoolManagement/Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
    
  </div>
</nav>
  
<div class="container-fluid text-center" >    
  <div class="row content">
    <div class="col-sm-2 sidenav">
   
  <img src=<?php echo "$student_photo"; ?> alt="boy">
  
<form action="UploadImage.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
<input  style="margin-top:20%" type="file" name="photo" required>
</div>
<div class="form-group">
<input class="btn btn-primary" class="form-control" type="submit" name="submit" value="Submit">
</div>
</form>

      </div>
    <div class="col-sm-8 text-left" style="border: 2px solid black"> 
      <h1>Edit Details</h1><hr>
     
     <form id="myForm" action="http://localhost/SchoolManagement/UpdateParentAndStudent.php" method="POST">
     <div class="col-sm-5 text-left" >
	 <div class="form-group">
     
  
  Student Name:<input type="text" class="form-control" name="student_name"  value=<?php echo "$student_name";?> ></div>
  <div class="form-group">
  
  DOB:<input type="date" name="student_dob" class="form-control"  value=<?php echo "$student_dob";?> ></div>
  <div class="form-group">
  
  <input type="text" name="class" class="form-control" style="display:none"  value=<?php echo "$class";?> ></div>
  <div class="form-group">
  <input type="text" name="student_photo" class="form-control" style="display:none"  value=<?php echo "$student_photo";?> ></div>
  <div class="form-group">
  
  email:<input type="text" name="student_email" class="form-control"  value=<?php echo "$student_email";?> ></div>
  <div class="form-group">
  
  Nationality:<input type="text" name="student_nation" class="form-control"  value=<?php echo "$student_nation";?> ></div>
  <div class="form-group">
  
  Gender:   <select name="student_gender" class="form-control" value=<?php echo "$student_gender";?> >
  <option value="M">Male</option>
  <option value="F">Female</option>
</select> </div>
  <div class="form-group">
  
  Religion:<input type="text" name="student_rel" class="form-control"  value=<?php echo "$student_rel";?> ></div>
  <div class="form-group">
  
  Aadhar number:<input type="text" name="student_aadhaar" class="form-control" value=<?php echo "$student_aadhaar";?> ></div>

  </div>
<div class="col-sm-2 text-left" >
  </div>
  <div class="col-sm-5 text-left" >
<div class="form-group">
  Father Name:<input type="text" name="f_name" class="form-control"  value=<?php echo "$f_name"; ?> ></div>
  <div class="form-group">
  
  Mother Name:<input type="text" name="m_name" class="form-control"  value=<?php echo "$m_name";?> >
  </div>

<div class="form-group">
  
  Address:<input type="text" name="address" class="form-control"  value=<?php echo "$address";?> >
  </div><div class="form-group">
  
  Mobile:<input type="text" name="mob_no" class="form-control"  value=<?php echo "$mob_no";?> >
  
  </div><div class="form-group">
  Income:<input type="text" name="income" class="form-control"  value=<?php echo "$income";?> >
  </div><div class="form-group">
  
  Father Occupation:<input type="text" name="f_occup" class="form-control"  value=<?php echo "$f_occup";?> >
  </div><div class="form-group">
  
  Mother Occupation:<input type="text" name="m_occup" class="form-control"  value=<?php echo "$m_occup";?> >
  </div>
  </div>
  <div class="col-sm-5"></div>
  <div class="col-sm-2>
  <div class="well">
  <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit">
  </div>
  </div>
</form>


  
      <hr>
      <br>
      <div class="col-sm-12">
    
  
      


<br>
<hr>
<br>



        </div></div>
    
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy; 2017 - ALL RIGHTS RESERVED FREEDOM PUBLIC SCHOOL</p>
</footer>

</body>
</html>
</a>