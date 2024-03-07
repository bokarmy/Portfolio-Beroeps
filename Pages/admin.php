<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// admin.php

$hostname = "localhost:3306";
$username = "dbz88885";
$password = "bokarmy6806";
$database = "88885_database";
$conn = mysqli_connect($hostname, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $pageName = $_POST['page_name'];
    $content = mysqli_real_escape_string($conn, $_POST['content']); // Escape the content

    // Update content in the database
    $query = "UPDATE page_content SET content = '$content' WHERE page_name = '$pageName'";
    mysqli_query($conn, $query);
}

// Fetch the current content from the database
$pageName = 'about'; // Change this to the desired page name
$query = "SELECT content FROM page_content WHERE page_name = '$pageName'";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $currentContent = $row ? $row['content'] : '';
} else {
    $currentContent = "Content not found.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Admin Page</title>
</head>
<body>
    <h1>Admin Page</h1>

    <form method="post" action="">
        <label for="page_name">Page Name:</label>
        <input type="text" name="page_name" value="<?php echo $pageName; ?>" readonly>
        <br>

        <label for="content">Content:</label>
        <textarea name="content" rows="10" cols="30"><?php echo $currentContent; ?></textarea>
        <br>

        <input type="submit" name="submit" value="Update Content">
    </form>
</body>
</html>