<?php


    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


if(isset($_SESSION['login_status']))

{

    if($_SESSION['login_status']==false)

    {
        echo "<h2>Unauthorized Attempt</h2>";
        die;
    }
}
else
{
    echo "<h2>Illegal Attempt</h2>";
    echo "<h3>Login Required</h3>";
    echo "<a href='signin.html'>Click here to Login</a>";
    die;
}


?>
<!DOCTYPE html>
<html lang="en">

    <style >
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

svg {
 width: 20px;
 height: 20px;
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
    <div class='card-button'>
    <a href='addcart.php?pid=$pid'>
      <svg class='svg-icon' viewBox='0 0 20 20'>
        <path d='M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z'></path>
        <path d='M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z'></path>
        <path d='M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z'></path>
      </svg>
     </a> 
    </div></div></div>";
}
?>    
</body>
</html>





<!-- // <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
// <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
// <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
// <head>
// </head> -->




<!-- // .parent:hover
//         {
//             box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
//             transform: translateY(-10px);
//         }
//         .parent
//         {
//             width: fit-content;
//             margin-left:3px;
//             padding:20px;
//             display:inline-block;
//             background-color: bisque;
//             margin-top:10px;
//             margin-left:10px;

//         }
//         .parent img
//         {
//             width: 250px;
//             height: 200px;

//         }
//         .price
//         {
//             color:tomato;
//         }
//         .currency
//         {
//             font-size:12px;

//         }
//         .name
//         {
//             background-color:yellow;
//             color:black;
//             margin:0px;
//         }
// <div class = 'parent'>

//             <h3 class='name'>$name</h3>
//             <h2 class='price'>$price <span class='currency'>Rs</span></h2>
//             <img class='image' src='$impath'>
//             <p class='details'>$details</p>

//             <div class='text-end'>

//             <a href='addcart.php?pid=$pid'>
//             <button class='btn btn-danger p-1'> <i  class = 'bi-cart'> </i> </button>
//             </a>
//             </div>
//         </div> -->
