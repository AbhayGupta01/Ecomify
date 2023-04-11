<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .parent:hover
        {
            /* Style the card when it is hovered over */
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            transform: translateY(-10px);
        }
        .parent
        {
            width: fit-content;
            padding:10px;
            display:inline-block;
            background-color: bisque;
            margin-top:10px;
            margin-left:10px;
            

        }
        .parent img
        {
            width: 250px;
            height: 200px;

        }
        .price
        {
            color:tomato;
            

        }
        .currency
        {
            font-size:17px;
            margin-right:3px;

        }
        .name
        {
            background-color:yellow;
            color:black;
            margin:0px;
        }
        .details
        {
            width:inherit;
        }
    </style>
</head>
<body>
        
</body>
</html>



<?php
include "menu.php";

include_once "../shared/connection.php";



if(!isset($_SESSION['cart']))
{
    echo "<h1> Cart is Empty </h1>";
    die;
}
$local_cart = $_SESSION['cart'];

$pids = implode(",",$local_cart);

$cmd = "select * from product where pid in($pids)";

$sqli_obj = mysqli_query($conn,$cmd);

$total_price = 0;
while ($row= mysqli_fetch_assoc($sqli_obj))
{
    $pid = $row['pid'];
    $name = $row['name'];
    $price = $row['price'];
    $details = $row['details'];
    $impath = $row['impath'];

    $total_price += $price;
    echo "<div class = 'parent'>

            <h3 class='name'>$name</h3>
            <h2 class='price '><span class='currency'>Rs</span>$price </h2>
            <img class='image' src='$impath'>
            <p class='details'>$details</p>

            <div class='text-end'>
            <a href='removecart.php?pid=$pid'>
            <button class='btn btn-danger p-1'> <i  class = 'bi-trash'> </i> </button>
            </a>
            
            </div>
        </div>";
        
}
echo "<h2> Total Price = $total_price </h2>";

?>



