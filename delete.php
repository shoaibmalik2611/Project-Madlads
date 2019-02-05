<?php
include 'server.php';
if(isset($_GET['formdelete'])){
    $title=$_GET['sname'];
    $delete_product = "Delete from admin where soft_name= '$title';";
    $delete_pro = mysqli_query($db, $delete_product);
    if($delete_pro){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>Delete</title>
</head>
<body>
    <div class="tasveer">
        <center><h1 class="bg"> Delete Soft</h1></center><br>
        <div class="bg">
            <div class="container-fluid ">
                <div class="row justify-content-center">
                    <div class="col-auto col-md-5 col-sm-6 col-lg-5 col-xl-4">
                        <form method="get" class="form-container">
                            <b> Software Name</b>: <input type="text" name="sname">
                            <br><br>
                            <button type="submit" class="button" value="Submit"name="formdelete">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>