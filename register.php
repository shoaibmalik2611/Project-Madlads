<?php
    include_once "server.php";

if(isset($_POST['done'])){
    $username=$_POST['username'];
    $password_1=$_POST['password_1'];
    $password_2=$_POST['password_2'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];

    $q= "INSERT INTO users(username,password,contact, gender)  VALUES  ('$username','$password_1','$contact','$gender');";
    $query=mysqli_query($db,$q);

    setcookie('username',$username,time()+60*60*7);
    header("location: index.php");

    if(isset($_COOKIE['username']) and isset($_COOKIE['password_1'])){
        $_username=$_COOKIE['username'];
        $_password=$_COOKIE['password_1'];
    }

    $_SESSION['username']=$username;
    $_SESSION['success']="You are now logged in";
    header('location: index.php');

    if(isset($_POST['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="all.css">
        <title>Register Yourself</title>
    </head>
    <body>
        
        <div class="IMG"></div>
        <div class=reg>
            <img src="avatar.png" class="avatar1">
            <h1>Register</h1>

            <form method="POST" action="register.php">
                <p>Name</p>
                    <input type="text" name="username" placeholder="Enter your name">   
                <p>Password</p>
                    <input type="password" name="password_1" placeholder="Password">
                <p>Confirm</p>
                    <input type="password" name="password_2" placeholder="Confirm New Password">
                <p>Contact</p>
                    <input type="numeric" name="contact" placeholder="Contact Number">
                <p>Gender</p>
                    <input type="text" name="gender" placeholder="Your Gender">

                    <input type="submit" name="done">
            </form>
        </div>
    </body>
</html>