<?php
require_once('connection.php');
session_start();
session_destroy();
unset($_SESSION['loggedin']);
header("location:login.html");

// if (isset($_GET['loggedin'])) {
//     # code...
    
    
// }
// else
// {
//     echo "wrong";
// }
?>