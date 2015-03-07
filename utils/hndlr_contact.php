<?php
/*
if (isset($_POST["message"])) {
	$email = $_POST["email"];
	$msg = "Business Name: ".$_POST["business_name"]."\n".
	       "Contact Name: ".$_POST["contact_name"]."\n".
	       "E-mail Address: ".$email."\n".
	       "Phone: ".$_POST["phone"]."\n".
	       "Message: \n".$_POST["message"];
	$headers = "From: ".$email;
	if (mail("register@krmtech.com", "Web Site Inquiry", $msg, $headers)) {
		header("Location: ../contact_thankyou.html");
	}
	else {
		header("Location: ../contact_error.html");
	}
}
else {
	header("Location: ../contact.html");
}
*/

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
//    $from = 'From: TangledDemo'; 
    $from = 'From: krmtech.techneers'; 
    $to = 'kent@krmtech.com'; 
    $subject = 'Techneers inquiry';
    $human = $_POST['human'];
			
    $body = "From: $name\nE-Mail: $email\nMessage:\n $message";
				
    if ($_POST['submit'] && $human == '5') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
		echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '5') {
		echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
