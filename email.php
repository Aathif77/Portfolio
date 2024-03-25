<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set up the recipient email address
    $to = 'aathif858@gmail.com'; // Replace this with your own email address

    // Set up the email subject
    $email_subject = 'New Message from Portfolio Contact Form: ' . $subject;

    // Build the email content
    $email_body = "Name: $name\n\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Set up the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Email sent successfully
        echo "<p>Thank you for your message. We will get back to you shortly.</p>";
    } else {
        // Email sending failed
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
} else {
    // If the form wasn't submitted, redirect back to the contact page
    header("Location: contact.html");
}
?>
