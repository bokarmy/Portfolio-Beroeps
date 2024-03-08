<?php
// admin_skills.php

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Add or update skill
    if (isset($_POST['add_skill'])) {
        $newSkillName = $_POST['new_skill_name'];
        $newSkillPercentage = $_POST['new_skill_percentage'];

        $addSkillQuery = "INSERT INTO coding_skills (skill_name, skill_percentage) VALUES ('$newSkillName', '$newSkillPercentage')";
        mysqli_query($conn, $addSkillQuery);
    } elseif (isset($_POST['update_skills'])) {
        $updatedSkills = $_POST['updated_skills'];

        foreach ($updatedSkills as $id => $percentage) {
            $updateSkillQuery = "UPDATE coding_skills SET skill_percentage = '$percentage' WHERE id = $id";
            mysqli_query($conn, $updateSkillQuery);
        }
    }
}

$querySkills = "SELECT * FROM coding_skills";
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
    <link rel="stylesheet" href="../Assets/CSS/admin.css"> <!-- Add your admin styles -->
    <title>Admin - Coding Skills</title>
</head>
<body>
    <div class="container">
        <h2>Manage Coding Skills</h2>

        <!-- Add Skill Form -->
        <form method="post" action="">
            <label for="new_skill_name">New Skill Name:</label>
            <input type="text" name="new_skill_name" required>

            <label for="new_skill_percentage">Skill Percentage:</label>
            <input type="number" name="new_skill_percentage" min="0" max="100" required>

            <button type="submit" name="add_skill">Add Skill</button>
        </form>

        <!-- Update Skill Form -->
        <form method="post" action="">
            <?php
            // Display existing skills for modification
            while ($rowSkill = mysqli_fetch_assoc($resultSkills)) {
                $skillId = $rowSkill['id'];
                $skillName = $rowSkill['skill_name'];
                $skillPercentage = $rowSkill['skill_percentage'];

                echo '<div class="skill">';
                echo "<span class='skill-name'>$skillName</span>";
                echo '<input type="number" name="updated_skills[' . $skillId . ']" value="' . $skillPercentage . '" min="0" max="100" required>';
                echo '</div>';
            }
            ?>

            <button type="submit" name="update_skills">Update Skills</button>
        </form>
    </div>
</body>
</html>