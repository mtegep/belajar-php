<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_login";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed')</script>");
}
?>