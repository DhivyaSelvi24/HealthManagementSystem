<?php
$title = $_POST['title'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$sharingMode = $_POST['sharingMode'];
$email = $_POST['email'];
$contactNumber = $_POST['contactNumber'];
$score = $_POST['score'];

$to = "durgasofficial@gmail.com";
$subject = "Score Details";
$body = "Dear $to,

You have received a new application form submission.

The applicant's details are as follows:

Title: $title;
First name: $firstName;
Last name: $lastName;
Age: $age;
Sharing mode: $sharingMode;
Email Id: $email;
Contact number: $contactNumber;
Score: $score;

Please review the application form and take appropriate action.

Thank you,
The Application Form Team";

mail($to, $subject, $body);

?>

