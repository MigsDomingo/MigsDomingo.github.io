<html>
<body>

<?php 
if($_GLOBALS['REQUEST_METHOD'] == 'POST' || count($_POST) > 0) {
		echo "Submitting Email...";
		$to = 'miguelcdomingo@gmail.com,hoppingsamurai@yahoo.com';
		$name = $_POST["Name"];
		$subject = $_POST["Purpose"];
		$client_email_address = "From: " . $_POST["Email"] . "\r\n";
		$message = wordwrap($subject . "\n" . $client_email_address . "\n" . $_POST["Message"]);

		$sendMail = mail($to, $subject, $message);
		if ($sendMail){
			echo "\n";
			echo "Email Sent Successfully";
		}

}

?>

</body>
</html>