<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // In a real application, you would send an email or save to database
    // For now, we'll just display a success message

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Message Sent - OfferSpark.com</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>
    <body>
        <div class='container' style='text-align: center; padding: 100px 20px;'>
            <h1>Thank You!</h1>
            <p>Your message has been sent successfully. We'll get back to you soon.</p>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong> $message</p>
            <a href='index.php' class='btn'>Back to Home</a>
        </div>
    </body>
    </html>";
} else {
    // Redirect to contact page if accessed directly
    header("Location: contact.php");
    exit();
}
?>
