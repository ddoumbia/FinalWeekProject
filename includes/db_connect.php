<?php
// includes/db_connect.php

$servername = "localhost";
$username = "root"; // Your MySQL username
$password = "";     // Your MySQL password
$dbname = "db";     // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

?>
