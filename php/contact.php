<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];

		if (!empty($name) && !empty($email)) {
			$to = "christian.badolo@centrale-casablanca.ma"; 
			$subject = "New Contact Form Inquiry";
			$body = "Name: {$name}\nEmail: {$email}\nMessage: {$msg}";
			$headers = "From: 'christianbadolo@portfolio.com'"; // Write your server email id
			$headers .= "Reply-to: {$email}";

			if (mail($to, $subject, $body, $headers)) {
				echo true;
			} else {
				echo false;
			}
		}

	} else {
		echo false;
	}

?>