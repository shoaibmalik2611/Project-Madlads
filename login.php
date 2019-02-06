<?php
    include "server.php";
    if(isset($_POST['okk'])){
        $_name=$_POST['name'];
        $_pass=$_POST['pass'];


        $query = "select * from users where username='$name' and password= '$pass'";
        $count = mysqli_query($db, $query);
        $checking = mysqli_num_rows($count);

        if($checking!=0) {
            if(empty($_POST['remember'])) {
                setcookie('name','' );
                setcookie('pass', '');
            } else {
                setcookie('name', $name, time() + (10 * 365 * 24 * 60 * 60));
                setcookie('pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
            }
            header('location: index.php');
        }
        else
            $error_msg = 'Wrong username or password, try again';
    }
?>
<html>
    <head>
        <title>Login form</title>
        <link rel="stylesheet" href="all.css">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="indexCss.css">
    </head>
    <body>
        <div class="navbar">
            <div class="logo">
                <img src="ter.jpg" alt="Mad Lad..">
            </div>
            <div class="header">
                <ul>
                    <li><a href="contactus.html" target="_top">Contact Us</a></li>
                    <li><a href="aboutUs.html" target="_top">About Us</a></li>
                    <li><a href="login.php" target="_top">Login Page</a></li>
                    <li><a class="active" href="index.php" target="_top">Home</a></li>
                </ul>
            </div>
        </div>

        <div class="lol"></div>
        <div class="login-f">

            <img src="avatar.png" class="avatar">
            <h1>Login Form</h1>
            <form>
                <p> User Name</p>
                <input type="text" name="name" placeholder="Enter your User Name" >
                <p> Password</p>
                <input type="password" name="pass" placeholder="Enter your Password" >
                <input type="submit" name="okk" value="Login" >
               
                <a href="register.php" target="_top">Not yet a Member</a><br>
                <a href="forget.html" target="_top">Forgot Password?</a>
            </form>
        </div>
    </body>
</html>