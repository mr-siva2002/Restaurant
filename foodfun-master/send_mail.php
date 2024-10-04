<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "sanjubhainanci2000@gmail.com"; // Replace with the receiver's email address
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email;

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        // Redirect to thank you page if the mail is sent successfully
        header("Location: Thanku.html");
    } else {
        echo "There was an error sending the email.";
    }
}
?>
