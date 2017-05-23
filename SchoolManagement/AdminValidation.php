<html>

<head></head>
<body>
<?php
include 'connectdb.php';
$user = $_POST['username'];
$password = hash('sha256',$_POST['password']);
$query = "select * from admin where user='$user' and password='$password'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	session_start();
	$_SESSION['session_id']=session_id();
	header("Location:http://localhost/SchoolManagement/AdminHome.php");
}
else
{
	header("Location:http://localhost/SchoolManagement/AdminLogin.php");
}
?>
</body>

</html>