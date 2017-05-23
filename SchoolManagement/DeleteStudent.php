<?php

session_start();
if($_SESSION['session_id']!=session_id())
{
	header("Location:http://localhost/SchoolManagement/Home.php");
}
include 'connectdb.php';
$parent_id = $_POST['parent_id'];
$student_id = $_POST['student_id'];
$student = "delete from student where student_id=$student_id";
mysqli_query($con,$student);
header("Location:http://localhost/SchoolManagement/Student.php");
?>