<?php
// projecten.php

$hostname = "localhost:3306";
$username = "dbz88885";
$password = "bokarmy6806";
$database = "88885_database";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM projects";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='project'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
        echo "<p>" . $row['description'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No data found.";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&family=Sen&display=swap" rel="stylesheet">
    <script src="../Assets/JS/script.js"></script>
    <link rel="stylesheet" href="../Assets/CSS/main.css">
    <link rel="stylesheet" href="../Assets/CSS/projects.css">
    <link rel="stylesheet" href="../Assets/CSS/bubbles.css">
    <title>Projects</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <img src="../Assets/Images/hblogo.png" class="hblogo" alt="">
            </div>
            <input type="checkbox" class="menu-toggle" id="menu-toggle">
            <label for="menu-toggle" class="hamburger">&#9776;</label>
            <ul class="menu-items">
                <li><a href="../index.html">Home</a></li>
                <li><a href="About.php">About me</a></li>
                <li><a class="active" href="Projecten.php">Projects</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <h2>Current Projects:</h2>
    <div class="projects-container">
        <?php
        while ($rowProject = mysqli_fetch_assoc($resultProjects)) {
            echo '<div class="project-card">';
            echo '<img src="' . $rowProject["image"] . '" alt="' . $rowProject["name"] . '">';
            echo '<div class="project-details">';
            echo '<h3>' . $rowProject["name"] . '</h3>';
            echo '<p>' . $rowProject["description"] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

    <div class="bubble"></div>
    <div class="bubble"></div>
    <!-- ... Voeg hier extra bubbles toe indien nodig ... -->
</body>
</html>
