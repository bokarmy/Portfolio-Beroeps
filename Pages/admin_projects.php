<?php
// admin_projects.php

$hostname = "localhost:3306";
$username = "dbz88885";
$password = "bokarmy6806";
$database = "88885_database";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

// Voeg een nieuw project toe
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addProject'])) {
    $projectName = $_POST['project_name'];
    $projectDescription = $_POST['project_description'];
    $projectImage = $_POST['project_image'];

    $sql = "INSERT INTO projects (name, description, image) VALUES ('$projectName', '$projectDescription', '$projectImage')";

    if ($conn->query($sql) === TRUE) {
        echo "Project succesvol toegevoegd.";
    } else {
        echo "Fout bij het toevoegen van het project: " . $conn->error;
    }
}

// Verwijder een bestaand project
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteProject'])) {
    $projectId = $_POST['project_id'];

    $sql = "DELETE FROM projects WHERE id = $projectId";

    if ($conn->query($sql) === TRUE) {
        echo "Project succesvol verwijderd.";
    } else {
        echo "Fout bij het verwijderen van het project: " . $conn->error;
    }
}

// Haal alle projecten op
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Admin - Projects</title>
</head>
<body>
    <main>
        <h1>Admin Panel</h1>
        <form class="admin" action="admin_projects.php" method="post">
            <!-- Voeg de invoervelden toe om nieuwe projecten toe te voegen -->
            <input type="text" name="project_name" placeholder="Project Name" required>
            <input type="text" name="project_description" placeholder="Project Description" required>
            <input type="text" name="project_link" placeholder="Project link" required>
            <input type="text" name="project_image" placeholder="Project Image URL" required>
            <input type="submit" name="addProject" value="Add Project">
        </form>

        <div id="projectContainer" class="projects-container">
            <?php
            // Toon elk project met een "Verwijder" knop
            while ($row = $result->fetch_assoc()) {
                echo '<div class="project-card">';
                echo '<h3>' . $row["name"] . '</h3>';
                echo '<p>' . $row["description"] . '</p>';
                echo '<p>' . $row["project_link"] . '</p>';
                echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
                echo '<form method="post" action="admin_projects.php" class="delete-form">';
                echo '<input type="hidden" name="project_id" value="' . $row["id"] . '">';
                echo '<input type="submit" name="deleteProject" value="Delete Project" class="delete-button">';
                echo '</form>';
                echo '</div>';
            }
            ?>
        </div>
    </main>
</body>
</html>

<?php
$conn->close();
?>
