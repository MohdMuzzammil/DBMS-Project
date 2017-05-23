<?php

session_start();
if($_SESSION['session_id']!=session_id())
{
	header("Location:http://localhost/SchoolManagement/AdminLogin.php");
}
include 'connectdb.php';

if(isset($_POST['submit']))
{
$faculty_id = $_POST['faculty_id'];
$query = "delete from faculty where faculty_id=$faculty_id";
$result = mysqli_query($con,$query);
header("Location:http://localhost/SchoolManagement/Faculty.php");
}
?>