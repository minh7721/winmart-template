<?php
$serverName = 'localhost';
$userName = "root";
$pass = "";
$dbName = "qlsieuthi";
$conn = mysqli_connect($serverName, $userName, $pass, $dbName);
if(!$conn){
    die('Connect database failed!!!');
}
?>