<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "doanphp";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Kết nối thất bại " . mysqli_connect_error());
}
