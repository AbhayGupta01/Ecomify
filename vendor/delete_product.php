<?php


include_once "../shared/connection.php";

$pid = $_GET['pid'];

echo "received Pid =$pid";

$cmd = "delete from product where pid=$pid";

$sql_status = mysqli_query($conn, $cmd);

if($sql_status)
{
    header('location:view.php');
}
else
{
    echo "Something went wrong";
}



?>