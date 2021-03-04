<?php 

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Session</title>
</head>
<body>

	<h1>Session</h1>

	<?php 

	$UserNameID = $_POST['userNameId1'];
    $Pass = $_POST['password1'];
    $f1 = fopen("data1.txt", "r");
		$read =  fread($f1, filesize("data1.txt"));

		$json_decode = json_decode($read, true);
		$json_decoded_delimeter = explode(",", $json_decode);
for($i = 0; $i < count($json_decoded_delimeter); $i++) {
 
     $_SESSION['fname']= $json_decoded_delimeter[0];
     $_SESSION['Email']= $json_decoded_delimeter[3];
     $_SESSION['userNameId']= $json_decoded_delimeter[4];
}

	?>

	<form action="logout.php" method = "GET">
		<input type="submit" value="Log Out">
	</form>


</body>
</html>