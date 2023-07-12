<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('cloudshrub-india.cqrotel9mtth.ap-south-1.rds.amazonaws.com','W5tgoP8DKv','Snp2eeuYod','contactusA');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registrationName, email, subject, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name, $email, $subject, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
