<?php
// submitted to server through form

// build the email message by using
// info received by the HTML form
$msg = 'Test Mail';

// send email using PHP's built in 
// command, mail()
mail('example@example.com', 
	'Sample Comments', $msg);

// redirect to the thank you page
// header('location: contact-us-thank-you.html');

// exit this script - just to make sure nothing else gets run
exit(0);
?>