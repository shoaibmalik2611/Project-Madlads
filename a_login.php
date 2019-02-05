<?php
include "server.php";
if(isset($_POST['okk'])){
    $_name=$_POST['name'];
    $_pass=$_POST['pass'];

    $query = "select * from a_page where username='$name' and password= '$pass'";
    $count = mysqli_query($db, $query);

    if($count!=0) {
       header('location:admin.php');
    }
    else
        $error_msg = 'Wrong username or password, try again';
}
?>

<html>
    <head>
        <link rel="stylesheet" href="all.css">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="indexCss.css">
        <title>Admin Page</title>
    </head>
    <body>
    <div class="loli"></div>
    <div class="login-f">

        <img src="avatar.png" class="avatar">
        <h1>Login Form</h1>
        <form>
            <p> User Name</p>
            <input type="text" name="name" placeholder="Enter your User Name" >
            <p> Password</p>
            <input type="password" name="pass" placeholder="Enter your Password" >
            <input type="submit" name="okk" value="Login" >
            <a href="forget.html" target="_top">Forgot Password?</a>
        </form>
    </div>
    </body>
</html>