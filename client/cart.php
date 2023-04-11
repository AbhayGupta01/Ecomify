<!DOCTYPE html>
<html lang="en">
<head>
<style>
#parent.card {
 width: 280px;
 display: inline-block ; 
 position:relative;
 margin: 20px;
 padding: .8em;
 background: white;
 overflow: visible;
 border-radius: 20px;
 box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.card-img {
 background-color: #ffcaa6;
 width: 270px;
 height: 250px;
 border-radius: 20px;
 transition: .3s ease;
}

.card-info {
 padding-top: 10%;
}

.card-footer {
 width: 100%;
 display: flex;
 justify-content: space-between;
 align-items: center;
 padding-top: 10px;
 border-top: 1px solid #ddd;
}

/*Text*/
.text-title {
 font-weight: 900;
 font-size: 1.2em;
 line-height: 1.5;
}

.text-body {
 font-size: .9em;
 padding-bottom: 10px;
}

/*Button*/
.card-button {
 border: 1px solid #252525;
 display: flex;
 padding: .3em;
 cursor: pointer;
 border-radius: 50px;
 transition: .3s ease-in-out;
 margin-right: 2px;
}
#delete.card-button:hover
{
    background-color: #FF0000;
}

/*Hover*/
.card-img:hover {
 transform: translateY(-12%);
 box-shadow: rgba(226, 196, 63, 0.25) 0px 13px 47px -5px, rgba(180, 71, 71, 0.3) 0px 8px 16px -8px;
}
.card-button:hover {
 border: 1px solid #ffcaa6;
 background-color: #ffcaa6;
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
$total_count = count($local_cart);
if($total_count == 0)
{
    echo "<h1> Cart is Empty </h1>";
    die;
}
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
    echo "<div id='parent' class='card'>
    <div><img src='$impath' class='card-img'></div>
    <div class='card-info'>
      <p class='text-title'>$name </p>
      <p class='text-body'>$details</p>
    </div>
    <div class='card-footer'>
    <span class='text-title'>Rs.$price</span>
    <div class='d-flex'>
            <a href='removecart.php?pid=$pid'>
            <button id='delete' class='card-button  p-2'> <i  class = 'bi-trash '> </i> </button>
            </a>
            </div></div></div>";
        
}
echo "<h2> Total Price = $total_price </h2>";
echo "<div class='d-flex justify-content-center'>
<a href='order.php?pid=$pid'>
<button class='btn btn-danger p-2' >Place Order</button>
</a></div>";
?>



