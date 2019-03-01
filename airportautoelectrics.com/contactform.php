<?php

// This displays errors
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if(isset($_POST['name'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$mailTo = "info@vitaliedeveloper.com";
	$headers = "From: ".$email;
	$txt = "You have received an email from ".$name.".\n\n".$message;
	$subject= "You received a message from ".$name;

	mail($mailTo, $subject, $txt, $headers);

}
else {
	echo "<p>There was a problem with your email</p>";
}
// header("Location: contact.php?mailsend");
?>
