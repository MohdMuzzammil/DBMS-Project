
<?php
session_start();
if($_SESSION['session_id']!=session_id())
{
	header("Location:http://localhost/SchoolManagement/AdminLogin.php");
}

if(isset($_POST['submit']))
{
	include 'connectdb.php';
	
			$name = $_POST['student_name'];
			$dob = $_POST['student_dob'];
			$email = $_POST['student_email'];
			$nation = $_POST['student_nation'];
			$rel = $_POST['student_rel'];
			$gen = $_POST['student_gender'];
			$aadhaar = $_POST['student_aadhaar'];
			$photo = $_FILES['student_photo']['name'];
			$class = $_POST['class'];
			$student_query = "insert into student(student_name,student_dob,student_email,student_nation,student_rel,
                   student_gender,student_aadhaar,student_photo,class)
                   values('$name','$dob','$email','$nation','$rel','$gen','$aadhaar','$photo',$class)";
			$result = mysqli_query($con,$student_query);
			$query = "select max(student_id) as student_id from student";
			$result = mysqli_query($con,$query);
			$result = mysqli_fetch_assoc($result);
			$student_id = $result['student_id'];
			$var = $student_id.".jpg";
			$target_file = "images/$student_id".".jpg";
			if(isset($_FILES['student_photo'])){
				
			if(file_exists($target_file))unlink($target_file);
					if (move_uploaded_file($_FILES["student_photo"]["tmp_name"], $target_file)) {
						$v = $student_id;
						mysqli_query($con,"update student set student_photo='$target_file' where student_id=$v");
					
			}
			}
	
	$father_name = $_POST['f_name'];
	$mother_name = $_POST['m_name'];
	$address = $_POST['address'];
	$mob = $_POST['mob_no'];
	$income = $_POST['income'];
	$foccup = $_POST['f_occup'];
	$moccup = $_POST['m_occup'];
	
	$parent_query = "insert into parent(parent_id,f_name,m_name,address,mob_no,income,f_occup,m_occup)
           values($student_id,'$father_name','$mother_name','$address','$mob',$income,'$foccup','$moccup')";
	
	$result=mysqli_query($con,$parent_query);
	
	$query = "insert into attendance values($student_id,0,0,0,0,0,0)";
		$result = mysqli_query($con,$query);
			
			
			
			
			
			
			
		
	
}
header("Location:http://localhost/SchoolManagement/Student.php");
?>
