<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "bookassignment";

$conn = new mysqli($servername, $username, $password, $db);


if (!$conn) {
    die("sorry failed to connect!!" . mysqli_connect_error());
}
