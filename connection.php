<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$db = 'jorimnet_healthtest';
 
// $HOSTNAME = 'localhost';
// $USERNAME = 'jorimtec_healthtest';
// $PASSWORD = 'jorimtec_healthtest';
// $db = 'jorimtec_healthtest';
 
 

$con = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
