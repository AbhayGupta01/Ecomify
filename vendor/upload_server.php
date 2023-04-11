<?php



$src_path = $_FILES['imname']['tmp_name'];

$imname = $_FILES['imname']['name'];

date_default_timezone_set("Asia/Kolkata");

$unique = date("YmDHis").".jpg";

echo "unique = $unique";

$dest_path = "../image/$unique";

move_uploaded_file($src_path,$dest_path);

$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];


include_once "../shared/connection.php";
// $conn = new mysqli('localhost','root','','acme_july'); //DRY Principle

$cmd = "insert into product(name, price, details, impath) values ('$name', $price, '$details', '$dest_path')";

echo "$cmd";
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
