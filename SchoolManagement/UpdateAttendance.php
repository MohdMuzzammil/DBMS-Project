<?php
	include 'connectdb.php';
	session_start();
	if($_SESSION['session_id']!=session_id())
	{
		header("Location:http://localhost/SchoolManagement/AdminLogin.php");
	}
	$q = "update attendance set English=".$_POST['English']." ,Hindi=".$_POST['Hindi']." ,Kannada=".$_POST['Kannada']." ,
	 GS=".$_POST['GS'].", SS=".$_POST['SS'].", Math=".$_POST['Math']." where student_id=".$_POST['student_id'];
	$result = mysqli_query($con,$q);
	if($result)
	header("Location:http://localhost/SchoolManagement/FetchAttendance.php");
?>