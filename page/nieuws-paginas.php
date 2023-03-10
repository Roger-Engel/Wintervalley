<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>WinterValley</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon" />
    <style>
        <?php include '../style.css'; ?>
    </style>
</head>
<div id="overlay"></div>

<body>
    <!-- logo -->
    <div class="logo">
        <a href="index.php"> <img src="../img/logo.png" alt="logo" /></a>
        <h1>WinterValley</h1>
        <div class="empty"></div>

        <!--login/register -->
        <?php

        if (isset($_SESSION["useruid"])) {
            echo '<a class="log-out-button" href="../include/logout.inc.php">Log out</a>';
        } else {
            include "../include/login.php";
        ?> <div class="empty2"></div> <?php
                                        include "../include/register.php";
                                    }
                                        ?>
        <div class="empty3"></div>


    </div>
    <!-- navbar -->
    <?php include "../include/navbar.php" ?>

    <!-- main content -->

    <?php

    $id = $_GET['id'];

    $serverName = "localhost";
    $dbname = "s169849_wintervalley";
    $dBUsername = "s169849_wintervalley";
    $dBPassword = "Roger123";
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$serverName;dbname=$dBName;charset=$charset";

    try {
        $pdo = new PDO($dsn, $dBUsername, $dBPassword);
    } catch (\PDOException $e) {
        echo 'error connecting to database 😦 on line : ' . $e->getMessage();
    }


    $stmt = $pdo->prepare('SELECT * FROM news WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $news = $stmt->fetch(PDO::FETCH_OBJ);

    function getTitle()
    {
        global $news;
        return $news->titel;
    }

    function getTekst()
    {
        global $news;
        return $news->tekst;
    }

    ?>

    <div class="news-content-header">
        <h1><?php echo getTitle(); ?></h1>
    </div>

    <div class="news-content">

        <p><?php echo getTekst(); ?></p>

    </div>
    <?php include "../include/footer.php" ?>
</body>

</html>