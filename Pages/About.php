
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// about.php

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
                <li><a class="active" href="About.html">About me</a></li>
                <li><a href="Projecten.html">Projects</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="bubblesabout">

    <div class="text">
        <h1 class="title"><?php echo $content; ?></h1>
    </div>
       
           <div class="skills-bar">
            <h2>Coding Skills</h2>
            
            <div class="skill">
                <span class="skill-name">HTML</span>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: 90%;"></div>
                </div>
            </div>
        
            <div class="skill">
                <span class="skill-name">CSS</span>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: 80%;"></div>
                </div>
            </div>
        
            <div class="skill">
                <span class="skill-name">PHP</span>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: 70%;"></div>
                </div>
            </div>
        
            <div class="skill">
                <span class="skill-name">JavaScript</span>
                <div class="skill-bar">
                    <div class="skill-progress" style="width: 75%;"></div>
                </div>
            </div>


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