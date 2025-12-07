<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "andrinugroho0600@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "-";
    $message = $_POST["message"];

    $body = "
Name: $name
Email: $email
Phone: $phone

Message:
$message
";

    $headers = "From: $name <$email>";

    if (mail($to, $subject, $body, $headers)) {
        echo "OK";
    } else {
        echo "Error sending email.";
    }
}
?>
