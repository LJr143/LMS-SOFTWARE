<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'lms_db';

// Create a database connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check for connection errors
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "Connected to the database!";
    // You can perform database queries or other operations here.
}

// Close the database connection when done
$connection->close();
?>
