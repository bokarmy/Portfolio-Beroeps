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
    <link rel="stylesheet" href="../Assets/CSS/contact.css">
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
                <li><a href="About.php">About me</a></li>
                <li><a href="Projecten.php">Projects</a></li>
                <li><a class="active" href="Contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="bubblescontact">

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $company = $_POST["company"];
        $message = $_POST["message"];
       
        $to = "oktaytecer40@gmail.com";
        $subject = "Nieuw formulier ingediend";
        $body = "Naam: $name\n";
        $body .= "E-mail: $email\n";
        $body .= "Telefoonnummer: $phone\n";
        $body .= "Bedrijfsnaam: $company\n";
        $body .= "Bericht:\n$message";
       
        mail($to, $subject, $body);
        echo "<p style='color:rgb(226, 226, 226); text-align:center;'>Bedankt! Je formulier is succesvol ingediend.</p>";
    }
        ?>
    
    <div class="contact">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="name">Name:</label><br>
            <input type="text" name="name" id="name" required><br><br>
 
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required><br><br>
 
            <label for="phone">(Optional)Phone number:</label><br>
            <input type="tel" name="phone" id="phone"><br><br>
 
            <label for="company">(Optional)Company:</label><br>
            <input type="text" name="company" id="company"><br><br>
 
            <label for="message">Message:</label><br>
            <textarea name="message" id="message" rows="auto" required></textarea><br>
 
            <button class="submit" type="submit" value="Submit">submit</button>
        </form>
    </div>

<<<<<<< HEAD

=======
    <body>
    
>>>>>>> 6da3d332f67af8661a667f69912002df93f92947

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
