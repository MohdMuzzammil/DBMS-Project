<?php

include 'connectdb.php';
session_start();
if($_SESSION['session_id']==session_id())
{
	$parent_id = $_POST['parent_id'];
	
	$student_id = $_POST['student_id'];
	$f_name = $_POST['f_name'];
	$m_name = $_POST['m_name'];
	$address = $_POST['address'];
	$mob_no = $_POST['mob_no'];
	$income = $_POST['income'];
	$f_occup = $_POST['f_occup'];
	$m_occup = $_POST['m_occup'];
	$q = "update parent set f_name='$f_name', m_name='$m_name', address='$address',
	mob_no='$mob_no', income=$income, f_occup='$f_occup', m_occup='$m_occup' where parent_id=$parent_id";
	$result1 = mysqli_query($con,$q);
	$student_name = $_POST['student_name'];
	$student_dob = $_POST['student_dob'];
	$student_email = $_POST['student_email'];
	$student_nation = $_POST['student_nation'];
	$student_rel = $_POST['student_rel'];
	$student_gender = $_POST['student_gender'];
	$student_aadhaar = $_POST['student_aadhaar'];
	$student_photo = $_POST['student_photo'];
	$class = $_POST['class'];
	$q = "update student set student_name='$student_name', student_dob='$student_dob', student_email='$student_email',
	student_nation='$student_nation', student_rel='$student_rel', student_gender='$student_gender',
	student_aadhaar='$student_aadhaar', class=$class where student_id=$student_id";
	$result2 = mysqli_query($con,$q);
	if(($result1==1 && $result2==1)){
	header("Location:http://localhost/SchoolManagement/Student.php");
	die();
	}
	else
	{
		header("Location:http://localhost/SchoolManagement/Student.php");
	}

}
else
{
	header("Location:http://localhost/SchoolManagement/Home.php");
}

?>