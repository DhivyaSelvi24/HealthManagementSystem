<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $title = $_POST["title"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $sharingMode = $_POST["sharingMode"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contactNumber"];
    // $message = $_POST["message"];
    
    // Recipient email address
    $to = "durgasofficial@gmail.com"; // Replace with your actual email address
    
    // Subject of the email
    $subject = "Appointment Request";

    // Compose the email message
    $message = "title: $title\n";
    $message .= "firstName: $firstName\n";
    $message .= "lastName: $lastName\n";
    $message .= "age: $age\n";
    $message .= "sharingMode: $sharingMode\n";
    $message .= "email : $email\n";
    $message .= "contactNumber Time: $contactNumber\n";
    // $message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your appointment request has been sent successfully.";
    } else {
        echo "There was an error sending your appointment request.";
    }
}
?>