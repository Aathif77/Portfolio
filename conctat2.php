<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Include the EmailJS SDK -->
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script>
        (function(){
            emailjs.init("aathif.20221079@iit.ac.lk"); // Replace with your User ID
        })();
        
        // Function to send email using EmailJS
        function sendEmail() {
            // Prevent the default form submission
            event.preventDefault();
            
            // Get the form values
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var subject = document.getElementById('subject').value;
            var message = document.getElementById('message').value;
            
            // Send the email
            emailjs.send("service_f3bu4dn", "template_pquqhtu", {
                name: name,
                email: email,
                subject: subject,
                message: message
            })
            .then(function(response) {
                // Email sent successfully
                alert("Your message has been sent!");
                document.getElementById('contact-form').reset(); // Reset the form
            }, function(error) {
                // Error sending email
                console.error('Error sending email:', error);
                alert("There was an error sending your message. Please try again later.");
            });
        }
    </script>
</head>
<body>
    <h1>Contact Us</h1>
    <form id="contact-form" onsubmit="sendEmail()">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <button type="submit">Send Message</button>
    </form>
</body>
</html>

