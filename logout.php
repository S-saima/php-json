<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>Log Out</title>
</head>
<body>

 <?php
     $_SESSION['first name'];
     $_SESSION['email'];
     $_SESSION['user Id'];

 session_destroy();
header("location: RegistrationHandling.html");

 ?>

</body>
</html>