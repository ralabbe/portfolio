<?php
	if (isset($_POST)) {
		$name = $_POST['name'];
		$name = ucwords($name);
		$email = $_POST['email'];
		$message = $_POST['message'];


		mail("rafael.r.labbe@gmail.com", "Email from " . $name, $message . "// Senders email: " . $email); // Email sent

		mail("9546017186@tmomail.net", "Email from " . $name, "From the portfolio site."); // Text notification
	}
?>