<?php 

$server = "localhost";
$user = "root";
$pass = "aditi26";
$database = "mpp";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>