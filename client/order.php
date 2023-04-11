<?php
include "menu.php";
echo "order is working";
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>


    </style>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">

<!-- 10 mb -> 10 1mb parts according to bandwidth -->

<form enctype="multipart/form-data" class="w-26 p-3 bg-warning" method="post" action="order_server.php">

<h3 class="text-center" >Delivery Address</h3>

    <input type="hidden"  value="<?php echo "$cid";?>" name="cid">

    <input placeholder="Name" type="text" class="form-control mt-3" name="cname" required>

    <input placeholder="Mobile Number" type="number" class="form-control mt-3" name="cnumber" required>

    <input placeholder="Email address" type="email" class="form-control mt-3" name="cmail" required>

    <textarea placeholder=" Address" name="caddress" cols="45" rows="8" class="mt-3" ></textarea>
    <br>
    <input type="submit" value="Confirm Order" class="mt-3 btn btn-success">

</form>

</div>
</body>
</html>