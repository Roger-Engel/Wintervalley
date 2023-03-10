<?php

$host = "localhost";
$dbname = "s169849_wintervalley";
$username = "s169849_wintervalley";
$password = "Roger123";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
