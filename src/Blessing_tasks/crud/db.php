<?php
$servername = "prog23-db-1";
$username = "Project";
$password = "password";
$dbname = "Project";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
?>