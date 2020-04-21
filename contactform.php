<?php

// validate input
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // email receiver
    $mailTo = "erickmedinabe@gmail.com";
    // who the mail is from
    $headers = "From: ". $mailFrom;
    // message sent
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    // show successful message to user
    if (mail($mailTo, $subject, $txt, $headers)) {
        echo "Sent successfully! Thank you"." ".$name.", We will contact you shortly";

    } else {
      echo 'Something went wrong!';
    }

    mail($mailTo, $subject, $txt, $headers);
    // function to take us back to the homepage
    header("Location: contact.php?mailsend");

}






