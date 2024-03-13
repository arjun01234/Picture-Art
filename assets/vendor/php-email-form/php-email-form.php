<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "pictureartcreations@gmail.com";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"];

    // Additional headers, if needed
    // $headers .= "Content-type: text/html";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
}
?>