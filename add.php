<?php
    include 'server.php';

if(isset($_GET['AdminInsert'])){
    $title=$_GET['sname'];
    $description=$_GET['sdesc'];
    $insert_product = "insert into admin (soft_name,soft_Desc) 
                  VALUES ('$title','$description');";
    $insert_pro = mysqli_query($db, $insert_product);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>Add Softwares</title>
</head>
<body>
    <div class="tasveer">
        <center><h1 class="bg"> Add Soft</h1></center><br>
        <div>
            <div class="container-fluid ">
                <div class="row justify-content-center">
                    <div class="col-auto col-md-5 col-sm-6 col-lg-5 col-xl-4">
                        <form class="form-container"  class="l" method="get">
                            <b> Software Name:</b>
                            <input type="text" name="sname">
                            <br>
                            <textarea name="sdesc"placeholder="description" type="text" id="form7" class="md-textarea form-control"
                                      rows="3"></textarea>
                            <br>
                            <button type="submit" class="button" value="Submit" name="AdminInsert">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>