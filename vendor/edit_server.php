<?php
include_once "../shared/connection.php";

$pid = $_POST['pid'];
$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];


$src_path = $_FILES['imname']['tmp_name'];

$imname = $_FILES['imname']['name'];

date_default_timezone_set("Asia/Kolkata");

$unique = date("YmDHis").".jpg";

echo "unique = $unique";

$dest_path = "../image/$unique";

move_uploaded_file($src_path,$dest_path);

echo "received Pid =$pid";

$cmd = "UPDATE product SET name='$name', price=$price, details='$details', impath='$dest_path' where pid=$pid";

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