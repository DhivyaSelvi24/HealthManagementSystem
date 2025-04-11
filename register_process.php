<?php
session_start();

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['number'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirm'];
    $currentDate = date('Y-m-d');
    $usertype = 1;
    $_SESSION['USERTYPE'] = 1;

    // Validate input and check if passwords match
    if ($password !== $confirm_pass) {
        // Passwords do not match, handle this error
        echo "Password do not match";
        exit();
    }

    // Hash the password
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    $checkEmailQuery = "SELECT * FROM `health-test` WHERE Email = '$email'";
    $checkEmailResult = mysqli_query($con, $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        echo "Email already Registered. Please Login!";
        exit();
    } else {
        $sql = "INSERT INTO `health-test` (Name, Email, MobileNo, Password_hash, timestamp, Usertype) VALUES ('$name','$email','$mobile','$password_hashed','$currentDate','$usertype')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // Registration successful
            echo "success";
            exit();
        } else {
            // Registration failed
            echo "Registration failed. Please try again.";
            exit();
        }
    }
}
?>
