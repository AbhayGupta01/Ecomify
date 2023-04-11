<?php

$pid = $_GET['pid'];

session_start();
$local_cart = $_SESSION['cart'];
print_r($local_cart);

$index = array_search($pid,$local_cart);
$status = array_splice($local_cart,$index,1);

$_SESSION['cart'] = $local_cart;

if($status)
{
    header('location:cart.php');
    $_SESSION['cart'];
}



?>