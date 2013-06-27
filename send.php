<?php 
	if (isset($_POST['complete'])){
		$to = "spurcell93@gmail.com";
		$name_field = $_POST['name'];
		$email_field = $_POST['email'];
		$message = stripslashes($_POST['message']);
		$subject = $_POST['subject'];
		$body = "From: $name_field\n\n E-Mail: $email_field\n\n Subject: $subject \n\n Message:\n\n $message\n";

		mail($to, $name_field, $body);
		header("Location: ./");
	}	
?>