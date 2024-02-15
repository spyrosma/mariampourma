<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(stripslashes(trim($_POST["name"])));
    $email = htmlspecialchars(stripslashes(trim($_POST["email"])));
    $subject = htmlspecialchars(stripslashes(trim($_POST["subject"])));
    $message = htmlspecialchars(stripslashes(trim($_POST["message"])));
    $to = 'spyrosma@gmail.com'; // Specify your email address
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "MIME-Version: 1.0" . "\r\n" .
               "Content-Type: text/html; charset=UTF-8" . "\r\n";

    $body = "
    <html>
    <head>
        <title>$subject</title>
    </head>
    <body>
        <p><b>Name:</b> {$name}</p>
        <p><b>Email:</b> {$email}</p>
        <p><b>Message:</b></p>
        <p>{$message}</p>
    </body>
    </html>
    ";

    // Send Email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent to $to";
    } else {
        echo "Email sending failed...";
    }
}
?>
