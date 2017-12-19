<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "SE";


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
or die("Datenbank momentan nicht erreichbar");
mysqli_set_charset($conn,'utf8');
