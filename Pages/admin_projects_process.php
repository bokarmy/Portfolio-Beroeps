<?php
include("admin_header.php"); // Zorg ervoor dat je het juiste pad hebt
include("admin_nav.php"); // Zorg ervoor dat je het juiste pad hebt

// Database Connection
$hostname = "localhost:3306";
$username = "dbz88885";
$password = "bokarmy6806";
$database = "88885_database";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Add Project
if (isset($_POST['add_project'])) {
    $project_name = mysqli_real_escape_string($conn, $_POST['project_name']);
    $project_description = mysqli_real_escape_string($conn, $_POST['project_description']);
    $project_image = mysqli_real_escape_string($conn, $_POST['project_image']);
    
    // Implement SQL query to add the project to the database
    // After adding, redirect to the admin_projects.php page
}

// Remove Project
if (isset($_POST['remove_project'])) {
    $project_id = mysqli_real_escape_string($conn, $_POST['project_id']);
    
    // Implement SQL query to remove the selected project from the database
    // After removing, redirect to the admin_projects.php page
}

include("admin_footer.php"); // Zorg ervoor dat je het juiste pad hebt
?>
