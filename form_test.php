<html>
<body>

<?php 
	$to = 'miguelcdomingo@gmail.com,hoppingsamurai@yahoo.com';
	$name = $_POST["Name"];
	$subject = $_POST["Purpose"];
	$message = wordwrap($subject . "\n" . $_POST["Message"]);
	$client_email_address = "From: " . $_POST["Email"] . "\r\n";

	mail($to, $subject, $message, $client_email_address);
?>

</body>
</html>