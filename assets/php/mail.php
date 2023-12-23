<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = 'codersaro@gmail.com';
    $subject = 'New Contact Form Submission';

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    $emailBody = "Name: $name\n";
    $emailBody .= "Company Name: $companyName\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Phone: $phone\n\n";
    $emailBody .= "Message:\n$message";

    if (mail($to, $subject, $emailBody, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Error sending message.';
    }
} else {
    echo 'Invalid request';
}
?>
