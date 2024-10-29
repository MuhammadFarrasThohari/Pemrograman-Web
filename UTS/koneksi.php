<?php
$servername = "localhost";
$username = "muhamma6_pemweb";
$password = "#Ayas1511";
$dbname = "muhamma6_pemweb";

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

// Sql Query to get skill data
$sqlSkill = "SELECT * FROM skills";
$result = $conn->query($sqlSkill);
$skills = $result->fetch_assoc();
$allSkills = json_decode($skills["skills"]);
