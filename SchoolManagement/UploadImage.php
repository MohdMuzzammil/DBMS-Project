<?php
session_start();
include 'connectdb.php';
if($_SESSION['session_id']==session_id())
{
	$var = $_SESSION['student_id'].'.jpg';
	$target_file = "images/$var";
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    
		if(file_exists($target_file))unlink($target_file);
		if($imageFileType == "jpg" || $imageFileType == "jpeg")
		{
			if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
				$v = $_SESSION['student_id'];
				mysqli_query($con,"update student set student_photo='$target_file' where student_id=$v");
			header("Location:http://localhost/SchoolManagement/EditParentAndStudent.php");
		}
		else{header("Location:http://localhost/SchoolManagement/EditParentAndStudent.php");}
		}
    
}
	
}
else
{
	header("Location:http://localhost/SchoolManagement/Home.php");
}

?>