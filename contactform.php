<?php

// define empty variables

$name_error = $email_error = $subject_error = $message_error = "" ;
$name = $mailFrom = $phone = $subject = $message = $successMessage = $failMessage = "";

// validate input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) { // name verification
        $name_error = "Naam vereist";
    } else {
        $name = test_input($_POST["name"]);
        // check if name contains letters and whitespace only
        if (!preg_match("/^[a-zA-Z'. -]+$/",$name)) {
            $name_error = "Enkel letters zijn toegelaten";
        }
    }

    if (empty($_POST["email"])) {
        $email_error = "E-mailadres vereist";
    } else {
        $mailFrom = test_input($_POST["email"]);
        if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Ongeldig e-mailadres";
        }
    }

    if (empty($_POST["subject"])) {
        $subject_error = "Onderwerp vereist";
    } else {
        $subject = test_input($_POST["subject"]);
    }

    if (empty($_POST["message"])) {
        $message_error = "Bericht vereist";
    } else {
        $message = test_input($_POST["message"]);
    }

    if ($name_error == '' && $email_error == '' && $message_error == '' && $subject_error == '') {
        $message_body = "";
        unset($_POST['submit']);
        foreach ($_POST as $key => $value) {
            $message_body .= "$key: $value\n";
        }
//email receiver
        $mailTo = 'erickmedinabe@gmail.com';
// who the mail is from
        $headers = "From: " . $mailFrom;
// message sent
        $txt = "Bericht van het contactformulier: "."\n\n". "Zender: " . $name  . ".\n" . "Telefoonnummer is: " . $phone .  "\n\n" . "Bericht: " . $message ;

// show successful message to user
        if (mail($mailTo, $subject, $txt, $headers)) {
            $successMessage = "<div class='alert alert-success text-center'>Uw bericht is succesvol verstuurd! Bedankt" . " " . $name . ", We nemen contact met u op.</div>";
            $name = $mailFrom = $phone = $message = $subject = '';

            } else {
            $failMessage = "<div class='alert alert-danger text-center'>Er is iets fout gegaan! Probeer opnieuw</div>";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>