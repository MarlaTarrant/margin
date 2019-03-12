<?php

    if (isset($_POST['submit'])) {

        var_dump($_POST);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $plan = $_POST['plan'];
        $message = $_POST['message'];

        $mailTo = "info@margineco.com";
        $subject = 'New message';
        $headers = "From: ".$email;
        $txt = "You have received an email from" .$name;".\n\n".$message;

        mail($mailTo, $plan, $txt, $headers, $subject);
        header("Location: index.html?mailsend");
    }

?>