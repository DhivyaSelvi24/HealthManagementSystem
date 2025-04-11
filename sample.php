<?php
session_start();
include 'connection.php';

$id = (rand(0000, 10000));
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['number'];
$Password_hash = $_POST['password'];
$con_pass = $_POST['confirm'];
$usertype = 1;
$currentDate = date('Y-m-d');
$_SESSION['USERTYPE'] = 1;

$select = "SELECT * FROM health-test WHERE `Name` = '$name' OR `Email` = '$email'";
$result = mysqli_query($con, $select);
$num = mysqli_num_rows($result);

if ($num === 1) {
    $_SESSION['status'] = 'Username and Email Already taken!';
    $_SESSION['info'] = 'Please Enter New Username and Email';
    $_SESSION['status_code'] = 'warning';
    header('Location:register.php');
} elseif (strlen($Password_hash) < 8) {
    $_SESSION['status'] = 'Password must be at least 8 characters long.';
    $_SESSION['info'] = 'Please choose a stronger password.';
    $_SESSION['status_code'] = 'warning';
    header('Location:register.php');
} elseif ($Password_hash !== $con_pass) {
    $_SESSION['status'] = 'Passwords do not match.';
    $_SESSION['info'] = 'Please enter the matching Password';
    $_SESSION['status_code'] = 'warning';
    header('Location:register.php');
} elseif (!preg_match('/[A-Z]/', $Password_hash) || !preg_match('/[a-z]/', $Password_hash) || !preg_match('/\d/', $Password_hash) || !preg_match('/[!@#$%^&*]/', $Password_hash)) {
    $_SESSION['status'] = 'Password does not meet the criteria.';
    $_SESSION['info'] = 'Please include at least one uppercase letter, one lowercase letter, one digit, and one special character.';
    $_SESSION['status_code'] = 'warning';
    header('Location:register.php');
} else {
    $Password_hash = password_hash($Password_hash, PASSWORD_DEFAULT);

    $register = "INSERT INTO health-test (Id,Name,Email,MobileNo,Password_hash,usertype,timestamp) VALUES ('$id','$name','$email','$mobile','$Password_hash','$usertype','$currentDate')";

    if (mysqli_query($con, $register)) {
        $_SESSION['status'] = 'Successfully Registered!';
        $_SESSION['info'] = 'Please Login';
        $_SESSION['status_code'] = 'success';
        header('Location: signin.php');
    } else {
        $_SESSION['status'] = 'Registration failed.';
        $_SESSION['info'] = 'Please try again later.';
        $_SESSION['status_code'] = 'warning';
        header('Location:register.php');
    }
}
?>
