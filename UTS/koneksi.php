<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "uts_pemweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sql query to get profile data
$sqlProfile = "SELECT * FROM profile";
$result = $conn->query($sqlProfile);
$profile = $result->fetch_assoc();


// Sql Query to get project data
$sqlProject = "SELECT * FROM project";
$result = $conn->query($sqlProject);
$projects = $result->fetch_assoc();
