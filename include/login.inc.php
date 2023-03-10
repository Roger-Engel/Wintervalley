<?php

if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'connection.php';
    require_once 'functions.inc.php';

    loginUser($conn, $username, $pwd);
} else {
    header("location: ../page/index.php");
    exit();
}
