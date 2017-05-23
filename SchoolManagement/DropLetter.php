<?php

	
	session_start();
	if($_SESSION['session_id']!=session_id())
	{
		header("Location:http://localhost/SchoolManagement/AdminLogin.php");
	}
	include 'connectdb.php';
	$student_id = $_POST['student_id'];
	$request_date = $_POST["request_date"];
	echo $student_id;
	echo $request_date;
	$q = "DELETE from request_table where student_id=$student_id and request_date='$request_date'";
	$result = mysqli_query($con,$q);
	header("Location:http://localhost/SchoolManagement/FetchLetter.php");
	
?>