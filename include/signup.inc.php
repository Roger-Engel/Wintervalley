<?php

if (isset($_POST["submit"])) {
    echo "It works";

    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'connection.php';
    require_once 'functions.inc.php';

    if (invalidUid($username) !== false) {
        header("location: ../page/index.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../page/index.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../page/index.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../page/index.php?error=usernametaken");
        exit();
    }

    createUser($conn, $voornaam, $achternaam, $email, $username, $pwd, $pwdRepeat);
} else {
    header("location: register.php");
    exit();
}
