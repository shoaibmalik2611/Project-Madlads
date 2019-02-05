<?php

    $db=mysqli_connect("localhost","root","","registration");
    if(!$db){
        die("connection failed..");
    }

    session_start();
	if(!isset($_SESSION['logged_in'])){
		//header("Location: server.php");
	}
?>