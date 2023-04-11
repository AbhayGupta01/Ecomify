<?php


    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(isset($_SESSION['cart']))
{
    $local_cart = $_SESSION['cart'];

    $total_count = count($local_cart);
}
else
{
    $total_count = 0;
}

include_once "../shared/bootstrap.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    

    <style>
        .parent_menu
        {
            display:flex;
            justify-content:start;
            gap:30px;

        }
        .parent_menu div
        {
            padding:10px;
        }
        .parent_menu a
        {
            color:inherit;
            border-radius:10px;
            padding: 10px;
            text-decoration:none;
        }
        .parent_menu a:hover
        {
            background-color:#3461a8;
            
        }
        .cart-count-parent
        {
            position: relative;
        }
        .cart-count
        {
            padding:5px;
            border-radius:50%;
            background-color:tomato;
            color:white;
            font-weight:bold;
            position:absolute;
            right:-10px;
            top:-10px;
        }
        .user
        {
            margin: 10px 10px 0px 5px;
            
        }
    </style>


<body>
    
<div class="d-flex bg-primary p-4 text-white w-100 justify-content-between">

    <div class="parent_menu" >

        <div class="ml-4">
        <a href='index.php'>View Products</a>
        </div>
        <div>
        <a href='cart.php'>View Cart</a>
        </div>
        <div>
        <a href='order.php'>View order</a>
        </div>
    </div>

<div class="d-flex">
    <div class="user">
    <h6>Welcome, <?php echo $_SESSION['cname'];?></h6>
    </div>
    <div class="cart-count-parent">
        <a href='cart.php'>
        <button class="btn btn-warning"> 
            <i class='bi-cart'> </i> 
        </button>
        </a>
        <span class="cart-count">
        <?php 
        echo "$total_count";
        ?>
            
        </span>
    </div>

    <div class="ms-3">
        <a href='logout.php'>
        <button class="btn btn-danger"><i class="bi-box-arrow-right"></i> Logout</button>
        </a>
    </div>
</div>
</div>
</body>
</html>
