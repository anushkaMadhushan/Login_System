<?php
$host = "localhost";
$dbname = "auth_sys";
$user = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);

// if ($conn == true) {
//     echo "Working Fine";
// } else {
//     echo "Not Working";
// }
