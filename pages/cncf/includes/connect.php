<?php
$servername = "localhost";
$username = "wi133961";
$password = "Mackenzie12!";
$dbname = "wi133961";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
