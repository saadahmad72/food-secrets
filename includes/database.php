<?php

session_start();

$siteUrl = 'http://localhost/portfolio/';

$relativePath = 'private';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deleciousfoodrecipe";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
