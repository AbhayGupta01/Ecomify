<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
#edit.card-button:hover
{
   background-color: #ffcc00;
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


    echo "<div id='parent' class='card'>
    <div><img src='$impath' class='card-img'></div>
    <div class='card-info'>
      <p class='text-title'>$name </p>
      <p class='text-body'>$details</p>
    </div>
    <div class='card-footer'>
    <span class='text-title'>Rs.$price</span>
    <div class='d-flex '>

            <a href='edit_item.php?pid=$pid&name=$name&price=$price&details=$details&impath=$impath'>
            <button id='edit' class='card-button p-2 '> <i  class = 'bi-pencil'> </i> </button>
            </a>
            
            <a href='delete_product.php?pid=$pid'>
            <button id='delete' class='card-button p-2'> <i  class = 'bi-trash'> </i> </button>
            </a>
            </div></div></div>";
}




?>