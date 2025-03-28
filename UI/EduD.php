<?php
session_start();
include("../connect.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="../CSS/EduD.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">EduD</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="EduD.php">HOME</a></li>
                    <li><a href="About.html">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="../logout.php" class="btn2">Logout</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div>
        <div class="content">
            <h1>Web Design & <br><span>Development</span> <br>Course</h1>
            <p class="par">Master the art of web design and development with our comprehensive course. Learn to create
                <br>
                stunning, responsive websites using the latest technologies. Gain hands-on experience <br>
                in HTML, CSS, JavaScript, and more. Elevate your skills and build a strong foundation <br>
                for a successful career in the digital world.
            </p>

        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <h3>EduD</h3>
                <p>Your gateway to mastering web design and development.</p>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="EduD.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h4>Follow Us</h4>
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 EduD. All Rights Reserved.</p>
        </div>
    </footer>
    </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>