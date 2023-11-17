<?php

session_start();

$siteUrl = 'http://localhost/food-secrets/';

$relativePath = 'private';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodsecrets";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
