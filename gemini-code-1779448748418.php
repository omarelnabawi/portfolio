<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "omarelnabawi@gmail.com";
    $subject = "New Request from Portfolio: " . $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['email'];

    mail($to, $subject, $message, $headers);
    echo "Message sent successfully!";
}
?>