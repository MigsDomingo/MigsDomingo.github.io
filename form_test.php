<?php 
if($_GLOBALS['REQUEST_METHOD'] == 'POST' || count($_POST) > 0) {
		$to = 'miguelcdomingo@gmail.com,asdi_manila@yahoo.com';
		//$to = 'miguelcdomingo@gmail.com,hoppingsamurai@yahoo.com';
		$name = $_POST["Name"];
		$subject = "Subject: [Website Inquiry] " . $_POST["Purpose"];
		$client_email_address = "From Client Email Address: " . $_POST["Email"] . "\r\n";
		$body = $_POST["Message"];
		$message = wordwrap("\n" . $client_email_address . "\n" . $body);

		$sendMail = mail($to, $subject, $message);
		if ($sendMail){
			echo "<script type='text/javascript'>alert('Inquiry Submitted! Redirecting...'); window.location.replace(\"https://asdi.ph\"); </script>";
			//echo "\n";
			//echo "Email Sent Successfully. We will get back shortly to you.";
			//header("Location: index.html");
			//exit;
		}
		else {
			echo "<script type='text/javascript'>alert('Submit Failed! Please check your network.');  window.location.replace(\"https://asdi.ph\");</script>";
		}

}

?>