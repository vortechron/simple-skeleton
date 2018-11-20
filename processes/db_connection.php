<?php

$database = $CONFIG['database'];

// Create connection
$conn = new mysqli($database['servername'], $database['username'], $database['password'], $database['name']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>