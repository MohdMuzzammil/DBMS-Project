<html>
<head></head>
<body>
<?php
include 'connectdb.php';
$user = $_POST['username'];
$password = $_POST['password'];
$password = hash('sha256',$password);
$query = "select student_id from user where username='$user' and password='$password'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	session_start();
	$array = mysqli_fetch_assoc($result);
	$_SESSION['session_id']=session_id();
	$_SESSION['student_id']=$array['student_id'];
	$_SESSION['parent_id']=$array['student_id'];
	header("Location:http://localhost/SchoolManagement/ParentHome.php");
}
else
{
	header("Location:http://localhost/SchoolManagement/ParentLogin.php");
}
?>
</body>
</html>