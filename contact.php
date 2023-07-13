<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('sql6.freesqldatabase.com','sql6632287','cKgCPPTgYT','sql6632287');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registrationName, email, subject, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name, $email, $subject, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully....";
		$stmt->close();
		$conn->close();
	}
?>
