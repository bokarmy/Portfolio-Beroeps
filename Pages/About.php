<?php
// about.php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$hostname = "localhost:3306";
$username = "dbz88885";
$password = "bokarmy6806";
$database = "88885_database";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$pageName = basename($_SERVER['PHP_SELF'], ".php");

$query = "SELECT content FROM page_content WHERE page_name = '$pageName'";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $content = $row['content'];
} else {
    $content = "Content not found.";
}

$querySkills = "SELECT skill_name, skill_percentage FROM coding_skills";
$resultSkills = mysqli_query($conn, $querySkills);
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
    <link rel="stylesheet" href="../Assets/CSS/main.css">
    <link rel="stylesheet" href="../Assets/CSS/about.css">
    <link rel="stylesheet" href="../Assets/CSS/bubbles.css">
    <title>Document</title>
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
                <li><a class="active" href="About.php">About me</a></li>
                <li><a href="Projecten.php">Projects</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="bubblesabout">

        <div class="text">
            <h1 class="title"><?php echo $content; ?></h1>
        </div>

        <?php
        // Display skills
        if (mysqli_num_rows($resultSkills) > 0) {
            echo '<div class="skills-bar">';
            echo '<h2>Coding Skills</h2>';
            while ($rowSkill = mysqli_fetch_assoc($resultSkills)) {
                $skillName = $rowSkill['skill_name'];
                $skillPercentage = $rowSkill['skill_percentage'];

                echo '<div class="skill">';
                echo "<span class='skill-name'>$skillName</span>";
                echo '<div class="skill-bar">';
                echo "<div class='skill-progress' style='width: $skillPercentage%;'></div>";
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo "No coding skills found.";
        }
        ?>


        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
      </div>  
</body>
</html>