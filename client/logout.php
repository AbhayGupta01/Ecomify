<?php
session_start();
session_destroy();
include_once "../shared/bootstrap.php";
echo "<a href='signin.html'>
<button class='btn btn-warning p-2'>Go to Login page.</button>
</a>";

?>