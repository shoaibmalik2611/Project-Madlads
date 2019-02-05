<?php
    include('server.php');
    if(isset($_POST['logout'])) {
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mad-Lad</title>
            <link rel="stylesheet" href="bootstrap.css">
            <link rel="stylesheet" href="all.css">
    </head>
    <body>
        <div class="navbar">
            <div class="logo">
                <img src="ter.jpg" alt="Mad Lad..">
            </div>
            <div class="header">
                <ul>
                    <li><a href="ContactUs.html" target="_top">Contact Us</a></li>
                    <li><a href="AboutUs.html" target="_top">About Us</a></li>
                    <li><a href="a_login.php" target="_top">Admin Login</a></li>
                    <li><a href="register.php" target="_top">Register</a></li>
                    <li><a class="active" href="index.php" target="_top">Home</a></li>
                </ul>
            </div>
        </div>
        </div>
        <div class="imge">
            <center><h1>An Environment where u Know! Who you Are...</h1></center>
        </div>
        <div class="end">
            <center><h1>Technologies for you</h1>
                <p>Your Shop for Software Devolpment</p>
            </center>
            <div class="soft">
                <img src="so.png" alt="sofwares">
                <img src="globe.png" alt="world">
            </div>
        </div>
        <div class="footer">
            <div class="a">
                <p>Mad-Lad Coorporations @MC</p><br>
                <center><p>Copyright © 2019 MAD_LAD Inc. All rights reserved.</p></center>
            </div>
        </div>
        <div class="login-f">
            <input type="submit" name="logout">
        </div>
    </body>
</html>