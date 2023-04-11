<?php

include "menu.php";
include "../shared/connection.php";

echo "order is working";

$cid = $_POST['cid'];
$cname = $_POST['cname'];
$cno = $_POST['cnumber'];
$cmail = $_POST['cmail'];
$cadd = $_POST['caddress'];

echo "$cid";
echo "$cname <br>";
echo "$cmail <br>";
echo "$cno <br>";
echo "$cadd <br>";
?>