<?php

// validate input
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // email receiver
    $mailTo = 'erickmedinabe@gmail.com';
    // who the mail is from
    $headers = "From: " . $mailFrom;
    // message sent
    $txt = "Bericht van het contactformulier: \".\n\n\" . Zender: " . $name  . ".\n\n" . "Telefoonnummer is: " . $phone .  ".\n\n" . $message ;

    // show successful message to user

    if (mail($mailTo, $subject, $txt, $headers)) {
        echo "<div class='alert alert-success'>Sent successfully! Thank you" . " " . $name . ", We will contact you shortly</div> <a href='index.html'>Go back to homepage</a>";
        header("Location: contact.php?mailsend");
    } else {
        echo '<div class="alert alert-danger">Something went wrong! Please try again</div>';
    }
}

?>



