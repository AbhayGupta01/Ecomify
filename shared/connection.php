<?php

$conn = new mysqli('localhost','root','','acme_july');


if($conn->connect_error)
{
    echo "<h3> Connection Error </h3>";
    die;
}


?>