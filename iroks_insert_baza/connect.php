<?php


$dbServername = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dogodki";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
mysqli_set_charset($conn, "utf8");

