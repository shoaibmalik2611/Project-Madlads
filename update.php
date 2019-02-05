<?php
include 'server.php';
if (isset($_GET['updater'])) {
    $oldtitle = $_GET['Rname'];
    $newtitle = $_GET['Rnamenew'];
    $newdesc = $_GET['rnewdesc'];
    $update_product = "update admin set soft_name='$newtitle',soft_desc='$newdesc' where soft_name='$oldtitle';";
    $update_pro = mysqli_query($db, $update_product);
    if ($update_pro) {
        header("location: " . $_SERVER['PHP_SELF']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>Update</title>
</head>
<body>
    <div class="tasveer">
        <center><h1 class="bg"> Update Soft</h1></center><br>
        <div class="bg">
            <div class="container-fluid ">
                <div class="row justify-content-center">
                    <div class="col-auto col-md-5 col-sm-6 col-lg-5 col-xl-4">
                        <form class="form-container"method="get">
                            <b> Software Name</b>: <input type="text" name="Rname">
                            <br>
                            <b> new Software</b>: <input type="text" name="Rnamenew">
                            <textarea type="text" id="form7" class="md-textarea form-control" rows="3"
                                      name="rnewdesc"></textarea>
                            <br>
                            <button type="submit" class="button" value="Submit" name="updater">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>