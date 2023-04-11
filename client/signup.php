<?php

$username = $_POST['Username'];
$password = $_POST['Password1'];
$mobile = $_POST['mobile'];

echo "$mobile";
include "../shared/connection.php";

//$sql_obj1 = mysqli_query("select * from account where username = '$username'");

//$total_rows  = mysqli_num_rows($sql_obj);


$sql_obj = mysqli_query($conn, "select * from customer where cname = '$username' ");
$check  = mysqli_fetch_array($sql_obj);


if(isset($check))
{
    echo "<h1> Username Already exists </h1><br>";
    echo "<a href='registration.html' > Try again </a>";
    $sql_result = false;
    
}
else
{
    $cmd = "insert into customer (cname, cpass, cno) values('$username' , '$password' , '$mobile')";

    echo "Query - $cmd <br>";

    $sql_result = mysqli_query($conn,$cmd);

    
}

if ($sql_result)
{
    echo "Registration Successful <br>";
    echo "<a href='signin.html'> Login here </a>";

    
}
else
{
    echo "Registration Failed";
    
}

?>