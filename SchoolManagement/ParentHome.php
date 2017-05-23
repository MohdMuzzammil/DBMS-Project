

	

<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	
	session_start();
	if($_SESSION['session_id']!=session_id())
	{
		header("Location:http://localhost/SchoolManagement/ParentLogin.php");
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
	
	$q = "select * from attendance where student_id=$student_id";
	$q1 = "select subject,faculty_name from subject as s join faculty as f on s.faculty_id=f.faculty_id where s.class=$class order by subject asc";
	$result = mysqli_query($con,$q);
	$result = mysqli_fetch_assoc($result);
	$fac = array();
	$att = array();
	$att['English']=$result['English'];
	$att['Hindi']=$result['Hindi'];
	$att['Kannada']=$result['Kannada'];
	$att['GS']=$result['GS'];
	$att['SS']=$result['SS'];
	$att['Math']=$result['Math'];
	$result = mysqli_query($con,$q1);
	while($array=mysqli_fetch_assoc($result))
	{
		$sub = $array['subject'];
		$fac[$sub] = $array['faculty_name'];
	}
	?>



  <title>Parent Home</title>
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
		<li><a href="http://localhost/SchoolManagement/ParentHome.php"><i class="fa fa-home>" aria-hidden="true"></i> Home</a></li>
        <li><a href="http://localhost/SchoolManagement/Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center" >    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    
  <img src=<?php echo "$student_photo"; ?> alt="boy">
  
  <form class="text-left">
  <div>
  <h4 align="center">Student ID : <?php echo " $student_id"; ?></h4>
  </div>
  </form>


      </div>
    <div class="col-sm-8 text-left" > 
      <h1>Welcome</h1><hr>
     <div class="col-sm-5 text-left" >
     <form action="/action_page.php">
     <div class="form-group">
     
  
  Student Name:<input type="text" class="form-control" name="text" disabled="" value=<?php echo "$student_name";?> ></div>
  <div class="form-group">
  
  DOB:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$student_dob";?> ></div>
  <div class="form-group">
  
  Class:<input type="text" name="text" class="form-control"  disabled="" value=<?php echo "$class";?> ></div>
  <div class="form-group">
  
  <input type="text" name="text" class="form-control"  style="display:none" value=<?php echo "$class";?> ></div>
  <div class="form-group">
  
  
  email:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$student_email";?> ></div>
  <div class="form-group">
  
  Nationality:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$student_nation";?> ></div>
  <div class="form-group">
  
  Gender:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$student_gender";?> ></div>
  <div class="form-group">
  
  Religion:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$student_rel";?> ></div>
  <div class="form-group">
  
  Aadhar number:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$student_aadhaar";?> ></div>

</form>
</div>
<div class="col-sm-2 text-left" >
  </div>
  <div class="col-sm-5 text-left" >
     <form action="/action_page.php">
  <div class="form-group">
  Father Name:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$f_name"; ?> ></div>
  <div class="form-group">
  
  Mother Name:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$m_name";?> >
  </div>

<div class="form-group">
  
  Address:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$address";?> >
  </div><div class="form-group">
  
  Mobile:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$mob_no";?> >
  
  </div><div class="form-group">
  Income:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$income";?> >
  </div><div class="form-group">
  
  Father Occupation:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$f_occup";?> >
  </div><div class="form-group">
  
  Mother Occupation:<input type="text" name="text" class="form-control" disabled="" value=<?php echo "$m_occup";?> >
  </div>
</form>
</div>
  
      <hr>
      <br>
      <div class="col-sm-12">
      <hr style="height:50px;" />
  
      <h3>Academic Details</h3>
<table>
	
  <tr>
    <th>Subject</th>
    <th>Teacher</th>
    <th>Attendance</th>
  </tr>

  <tr>
  <?php
	$sub='English';
	echo '
    <td>'.$sub.'</td>
    <td>'.$fac['English'].'</td>
    <td>'.$att['English'].'</td>';
	?>
  </tr>
  <tr>
    <?php
	$sub='Hindi';
	echo '
    <td>'.$sub.'</td>
    <td>'.$fac['Hindi'].'</td>
    <td>'.$att['Hindi'].'</td>';
	?>
  </tr>
  <tr>
	<?php
	$sub='Kannada';
	echo '
    <td>'.$sub.'</td>
    <td>'.$fac['Kannada'].'</td>
    <td>'.$att['Kannada'].'</td>';
	?>
  </tr>
  <tr>
    <?php
	$sub='SS';
	echo '
    <td>'.$sub.'</td>
    <td>'.$fac['SS'].'</td>
    <td>'.$att['SS'].'</td>';
	?>
  </tr>
  <tr>
    <?php
	$sub='GS';
	echo '
    <td>'.$sub.'</td>
    <td>'.$fac['GS'].'</td>
    <td>'.$att['GS'].'</td>';
	?>
  </tr>
  <tr>
    <?php
	$sub='Math';
	echo '
    <td>'.$sub.'</td>
    <td>'.$fac['Math'].'</td>
    <td>'.$att['Math'].'</td>';
	?>
  </tr> 
</table>

<br>
<hr>
<br>
<h3>Leave Letter</h3>

<form action="UploadLetter.php" method="POST">
<div class="form-group">
  Subject:<br>
  <input type="text" name="subject" class="form-control">
  </div>
  
  <br>
  <div class="form-group">
  Body:<br>
  <textarea rows="10" cols="50" name="letter" class="form-control"></textarea>
  <br><br>
  <div class="form-group">
  <input class="btn btn-primary" type="submit" name="submit" value="Submit">
  </div>
  </div>
</form> 
<hr>


        </div></div>
     <div class="col-sm-2 sidenav">
      <div class="well">
        <p><a class="btn btn-primary btn-lg" href="http://localhost/SchoolManagement/EditParentAndStudent.php" role="button" target="_blank">Edit Details</a></p>
      </div>
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>&copy; 2017 - ALL RIGHTS RESERVED FREEDOM PUBLIC SCHOOL</p>
</footer>

</body>
</html>
</a>