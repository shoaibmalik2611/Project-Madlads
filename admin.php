<?php

    if(isset($_POST['ok']))
    {
        header("location:add.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">

    <title>Admin Panel</title>
</head>
<body>
    <div class="tasveer">
        <br>
        <br>
        <br>
        <br>
        <br>
        <center><h1><b>Admin Control Panel</h1></center>
        <button type="button" class="btn btn-primary btn-block" onkeypress="add.php">Add</button><br>
        <button type="button" class="btn btn-primary btn-block">Delete</button><br>
        <button type="button" class="btn btn-primary btn-block" name="ok">update</button><br>
        
    </div>
</body>
</html>