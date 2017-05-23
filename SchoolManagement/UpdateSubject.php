<?php

		session_start();
		if($_SESSION['session_id']!=session_id())
		{
			header("Location:http://localhost/SchoolManagement/AdminLogin.php");
		}
		if(isset($_POST['submit']))
		{
			include 'connectdb.php';
			$subject = $_POST['subject'];
			$faculty_id =  $_POST['faculty_id'];
			$class =  $_POST['class']."\n";
			$query = "update subject set faculty_id=$faculty_id where subject='$subject' and class=$class";
			echo $query;
			$result = mysqli_query($con,$query);
			header("Location:http://localhost/SchoolManagement/FetchSubject.php");
		}

?>