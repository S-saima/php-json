<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$Gender = $_POST['gender'];
$emailId = $_POST['Email'];
$userNameId = $_POST['userNameId'];
$Password = $_POST['password'];
$RecoveryEmail = $_POST['Remail'];

$arr = array('fname' => $firstName, 'lname' => $lastName, 'gender' => $Gender, 'Email' => $emailId, 'userNameId' => $userNameId, 'password' => $Password, 'Remail' => $RecoveryEmail);
		$json_encoded = json_encode($arr);



   $f = fopen("data1.txt","a");
   fwrite($f, $json_encoded . "\r\n");	
		fclose($f);


 header('Location: login.html');
		exit;


		
	?>

</body>
</html>