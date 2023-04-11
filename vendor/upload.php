<?php
include_once "menu.php";
include_once "../shared/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<body>
    
    <div class="d-flex justify-content-center align-items-center vh-100">

        <!-- 10 mb -> 10 1mb parts according to bandwidth -->

        <form enctype="multipart/form-data" class="w-26 p-3 bg-warning" method="post" action="upload_server.php">

        <h3 class="text-center" >Upload Product</h3>

            <input placeholder="Product Name" type="text" class="form-control mt-3" name="name" required>

            <input placeholder="Product Price" type="text" class="form-control mt-3" name="price" required>

            <textarea placeholder="Product Description" name="details" cols="45" rows="10" class="mt-3"></textarea>

            <input accept=".jpg, .png" type="file" class="form-control mt-3" name="imname" required>

            <input type="submit" value="Upload" class="mt-3 btn btn-success">
        
        </form>

    </div>

</body>
</html>