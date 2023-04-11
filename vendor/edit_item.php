<?php
include_once "../shared/connection.php";
include_once "menu.php";

$pid = $_GET['pid'];
$name = $_GET['name'];
$price = $_GET['price'];
$details = $_GET['details'];
$impath = $_GET['impath'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img{
            height: 150px;
            width: 150px;
            align-items: center;
        }
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">

<!-- 10 mb -> 10 1mb parts according to bandwidth -->

        <form enctype="multipart/form-data" class="w-26 p-3 bg-warning" method="post" action="edit_server.php">

            <h3 class="text-center" >Edit Product</h3>

            <input type="hidden"  value="<?php echo "$pid";?>" name="pid">

            <input value="<?php echo "$name";?>" type="text" class="form-control mt-3" name="name" required>

            <input value="<?php echo "$price";?>" type="text" class="form-control mt-3" name="price" required>

            <textarea name="details" cols="45" rows="5" class="mt-3"><?php echo "$details";?></textarea>

            <input accept=".jpg, .png" type="file"  class="form-control mt-3" name="imname" id="item_img" required hidden>
            <br>
            <label for="item_img">
                <img src="<?php echo "$impath";?>"  alt="">
            </label>
            <br>    
            <input type ="submit" value="Update" class="mt-3 btn btn-success">
            
        </form>

    </div>

</body>
</html>


