<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('139.59.94.81','registation','b2bdd26f863d53fa89da95c843ab3320d135fd85b1590dd9','registration');
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
