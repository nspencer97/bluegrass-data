<? php

if (isset($_POST['submit'])) {
	$name = $_POST['name']:
	$company = $_POST['company'];
	$mailFrom = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mailTo = "ngspencer97@outlook.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: contact.html?mailsend");
}