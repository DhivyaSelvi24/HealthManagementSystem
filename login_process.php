<?php
session_start();

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate and sanitize user input if needed

    $sql = "SELECT * FROM `health-test` WHERE Email = '$email'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
    
            if (password_verify($password, $user['Password_hash'])) {
                // Set session variables or cookies if needed
                echo "success";
                exit();
            } else {
                // Display error message in modal
                echo "Invalid email or password";
                exit();
            }
        } else {
            // Display error message in modal
            echo "Email not Registered. Please Register!";
            exit();
        }
    } else {
        $error = "Database error: " . mysqli_error($con);
        // Display error message in modal
        echo $error;
        exit();
    }
}
?>
