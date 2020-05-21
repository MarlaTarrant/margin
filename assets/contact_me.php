<?php

    if (isset($_POST['submit'])) {

        var_dump($_POST);

        //honey pot field
	    $honeypot = $_POST['firstname'];
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $radio = $_POST['radio'];
        $message = $_POST['message'];

        $mailTo = "info@margineco.com";
        $subject = "New message from ".$name;
        $headers = "From: ".$email;
        $txt = "You have received an email from ".$name." with regards to ".$radio.".\n\n".$message;

        //check if the honeypot field is filled out. If not, send a mail.
	if( ! empty( $honeypot ) ){
		return; //you may add code here to echo an error etc.
	}else{

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsend");
    }
}
?>

