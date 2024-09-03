<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "system";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$output = "connection successfully";
?>