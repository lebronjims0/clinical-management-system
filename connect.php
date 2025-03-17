<?php
$host="localhost";
$user="root";
$pass="";
$db="clinic";
$mysqli = new mysqli(hostname: $host,
                     username: $user,
                     password: $pass,
                     database: $db);
$conn=new mysqli($host,$user,$pass,$db);
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
?>

