<!DOCTYPE html>
<html>
<head>
	<title>Connection with database</title>
</head>
<body>



<?php

	$hostname = "localhost";
	$username = "wt_user";
	$password = "MH_SHAMIM";
	$dbname = "Registration";

	$conn2 = mysqli_connect($hostname, $username, $password, $dbname);
	if(mysqli_connect_error()) {
		echo "2. Database Connection Failed!...";
		echo "<br>";
		echo mysqli_connect_error();
	}
	else {
		echo "2. Database Connection Successful!";

		$sql2 = "insert into users ( ID,Password, FirstName, LastName, Gender, Email, RecoveryEmail) VALUES ('$UserName' ,'$Password' ,'$FirstName', '$LastName' ,'$Gender ','$Email' ,' $RecoveryEmail')";
		if(mysqli_query($conn2, $sql2)) 
		{
			echo "Data Insert Successful!";
		}
			else {
				echo "Failed to Insert Data.";
				echo "<br>";
				echo mysqli_error($conn2);
				}
		}
	?>
</body>
</html>