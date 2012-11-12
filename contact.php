<?php
// Really simple php script for bootstrap contact form
// check for form submission 
if (!empty($_POST)) {
	// get the posted data 
	$name = $_POST['name']; 
	$email_address = $_POST['email']; 
	$email_subject = $_POST['subject']; 
	$message = $_POST['message']; 


	// write the email content 
	$email_content = "Name: $name\n"; 
	$email_content .= "Email Address: $email_address\n"; 
	$email_content .= "Message:\n\n$message"; 

	// send the email 
	$success= mail ("gef@ponnuki.net", $email_subject, $email_content); 

	// send the user back to the form 
	if ($success){
		print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html?mode=success\">";
	}
	else{
		print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html?mode=fail\">";
	}
}
?>
