<html>
<head><title>Logout Page</title></head>
<body>

<?php
session_start();
session_destroy();
header("Location:http://localhost/SchoolManagement/Home.php")
?>

</body>
</html>