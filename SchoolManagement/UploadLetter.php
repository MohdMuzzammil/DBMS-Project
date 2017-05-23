<html>

<head>
<?php

session_start();
if($_SESSION['session_id']!=session_id())
{
	header("Location:http://localhost/SchoolManagement/Home.php");
	die();
}
include 'connectdb.php';
$student_id = $_SESSION['student_id'];
$subject = $_POST['subject'];
$letter = $_POST['letter'];
$query = "insert into request_table values($student_id,'$subject','$letter',CURRENT_DATE())";
$result = mysqli_query($con,$query);
if($result==1)
{
	echo '<script>window.alert("Letter sent")</script>';
	echo '<script>window.open("http://localhost/SchoolManagement/ParentHome.php","_self")</script>';
}
else
{
	echo '<script>window.alert("Letter not sent")</script>';
	echo '<script>window.open("http://localhost/SchoolManagement/ParentHome.php","_self")</script>';
}

?>
</head>

</html>