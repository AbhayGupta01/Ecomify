<?php

session_start();
include "../shared/connection.php";
$username = $_GET['Username'];
$password = $_GET['Password'];


 
$sql_obj = mysqli_query($conn, "select * from customer where cname = '$username' and cpass = '$password' ");
$check  = mysqli_fetch_array($sql_obj);
$sql_obj1 = mysqli_query($conn, "select cid from customer where cname = '$username' and cpass = '$password' ");
$check1 = mysqli_fetch_all($sql_obj1);
$cid = $_SESSION['cid'];
if(isset($check))
{
    echo "<h1> Login, Successful </h1>";
    header('location:index.php');
    $_SESSION['login_status']=true;
    $_SESSION['cname']=$username;
    $_SESSION['cid'] = $check1;
    
}
else
{
    echo "<h1> Login, Failed (Incorrect Password/Username) </h1>";
    $_SESSION['login_status']=false;
    die;
}





?>