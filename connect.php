<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = ''; // Secuirty concern
$DATABASE = 'signupforms';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>