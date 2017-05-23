<html>
<head><title>Faculty register form</title></head>

<?php
session_start();
if($_SESSION['session_id']!=session_id())
{
	header("Location:http://localhost/SchoolManagement/AdminLogin.php");
}
if(isset($_POST['submit']))
{
	include 'connectdb.php';
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$nation = $_POST['nation'];
	$gen = $_POST['gender'];
	$aadhaar = $_POST['aadhaar'];
	$qual = $_POST['qual'];
	$mob = $_POST['mob'];
	$address = $_POST['address'];
	$salary = $_POST['salary'];
	$des = $_POST['des'];
	$q = "insert into faculty(faculty_name,faculty_dob,faculty_nation,faculty_qual,faculty_gender,faculty_mob_no,
                   faculty_email,faculty_aadhaar,faculty_salary,faculty_address,faculty_designation)
                   values('$name','$dob','$nation','$qual','$gen',$mob,'$email','$aadhaar',$salary,'$address','$des')";
	$re = mysqli_query($con,$q);
	header("Location:http://localhost/SchoolManagement/Faculty.php");
}


?>
</html>