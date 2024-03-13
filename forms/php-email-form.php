<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create email content
    $to = "recipient@example.com"; // Replace with the actual recipient's email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $message = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    $success = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($success) {
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.html");
    exit();
}
?>
