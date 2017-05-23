<?php

$con=mysqli_connect("localhost","root","","school_management");
if(! $con){
	die("Error in connecting to database".mysql_error());
}
?>