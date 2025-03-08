<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div class="navbar">
        <div>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
        </div>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    
    <div class="container">
        <p>
            Hello  <?php 
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT firstName, lastName FROM users WHERE email='$email'");
                if($row = mysqli_fetch_array($query)){
                    echo htmlspecialchars($row['firstName']) . ' ' . htmlspecialchars($row['lastName']);
                }
            }
            ?> :)
        </p>
    </div>
</body>
</html>
