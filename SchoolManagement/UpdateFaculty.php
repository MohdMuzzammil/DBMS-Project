<html>
<head></head>
<body>

<?php
session_start();
if($_SESSION['session_id']!=session_id())
{
	header("Location:http://localhost/SchoolManagement/AdminLogin.php");
}
	include 'connectdb.php';
	$faculty_id = $_POST['faculty_id'];
	
	$faculty_name = $_POST['faculty_name'];
	$faculty_dob = $_POST['faculty_dob'];
	$faculty_nation = $_POST['faculty_nation'];
	$faculty_qual = $_POST['faculty_qual'];
	$faculty_gender = $_POST['faculty_gender'];
	$faculty_mob_no = $_POST['faculty_mob_no'];
	$faculty_email = $_POST['faculty_email'];
	$faculty_aadhaar = $_POST['faculty_aadhaar'];
	$faculty_address = $_POST['faculty_address'];
	$faculty_salary = $_POST['faculty_salary'];
	$faculty_designation = $_POST['faculty_designation'];
	$q = "update faculty set faculty_name='$faculty_name', faculty_dob='$faculty_dob', faculty_nation='$faculty_nation',
	faculty_qual='$faculty_qual', faculty_gender='$faculty_gender', faculty_mob_no='$faculty_mob_no',
	faculty_email='$faculty_email', faculty_address='$faculty_address', faculty_aadhaar='$faculty_aadhaar', faculty_salary=$faculty_salary, faculty_designation='$faculty_designation' where faculty_id=$faculty_id";
	$result = mysqli_query($con,$q);
	header("Location:http://localhost/SchoolManagement/Faculty.php");
?>
</body>

</html>