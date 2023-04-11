<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<head>

    <style>
        .parent:hover
        {
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
            border-radius: 0px;
            background: #fbd8bc;
            box-shadow:  5px 5px 0px #d8baa2, -5px -5px 0px #fff6d6;

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
        .parent a
        {
            text-decoration:none;
        }
    </style>
<body>
    
</body>
</html>



<?php

include "menu.php";

include_once "../shared/connection.php";

$mysqli_obj  = mysqli_query($conn, "select * from product");


//$total_rows = mysqli_num_rows($mysqli_obj);

while($row = mysqli_fetch_assoc($mysqli_obj))
{
    $pid = $row['pid'];
    $name = $row['name'];
    $price = $row['price'];
    $details = $row['details'];
    $impath = $row['impath'];


    echo "<div class = 'parent'>

            <h3 class='name'>$name</h3>
            <h2 class='price '><span class='currency'>Rs</span>$price </h2>
            <img class='image' src='$impath'>
            <p class='details'>$details</p>

            <div class='text-end'>

            <a href='edit_item.php?pid=$pid&name=$name&price=$price&details=$details&impath=$impath'>
            <button class='btn btn-warning p-1'> <i  class = 'bi-pencil'> </i> </button>
            </a>
            
            <a href='delete_product.php?pid=$pid'>
            <button class='btn btn-danger p-1'> <i  class = 'bi-trash'> </i> </button>
            </a>
            </div>
        </div>";
}




?>