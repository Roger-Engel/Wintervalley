<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Secret Story</title>
    <link rel="icon" href="../img/Nav-Footer/secret.png" type="image/x-icon" />
    <style>
        <?php include '../style.css'; ?>
    </style>
</head>
<div id="overlay"></div>
<body>
    <!-- logo -->
    <div class="logo">
        <a href="index.php"> <img src="../img/Nav-Footer/secret.png" alt="logo" /></a>
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

    <div class="news-content-header">
        <h1>A Fun Story By ChatGPT</h1>
    </div>

    <div class="news-content">
        <p>Er was eens een groep vrienden genaamd Michel, Robin, Joris en Roger. Ze waren allemaal studenten in een softwareontwikkelingsklas en voor hun Scrum schoolproject besloten ze een website te maken voor een festival genaamd WinterValley.<br>
        <br>
Ze begonnen enthousiast aan het project, tijdens de les in de klas en soms ook thuis. Michel was verantwoordelijk voor de vormgeving en het ontwerp van de front-end, terwijl Robin zich bezighield met de technische kant van de front-end. Roger en Joris waren verantwoordelijk voor de back-end ontwikkeling.<br>
<br>
Joris was de scrum leader en hield de planning en voortgang van het project bij en zorgde ervoor dat iedereen op de hoogte was van de taken en verantwoordelijkheden. Ook hield hij stand-up meetings bij om te zorgen dat iedereen op dezelfde lijn zat en eventuele problemen konden worden besproken.<br>
<br>
Na vele weken hard werken, presenteerde de groep hun website aan hun docenten Jeffry, Michel en Jos. De docenten waren onder de indruk van de prachtige vormgeving van de website en de soepele functionaliteit. Ze waren ook onder de indruk van de hoeveelheid informatie en middelen die de studenten hadden opgenomen over het fictieve festival. Jeffry, Michel en Jos gaven de groep de hoogste score van de klas voor hun geweldige werk.<br>
<br>
De groep voelde zich trots op hun prestatie en waren blij dat hun harde werk was beloond. Ze hadden geleerd veel over scrum methodologie en hoe ze een website konden ontwikkelen. Vanaf die dag werden ze bekend als de "WinterValley Crew" en hadden ze een band voor het leven.<br>
<br>
Het Einde
        </p>
    </div>
    <div class="secret_head">
    <a href="https://openai.com/blog/chatgpt/"><img src="../img/Nav-Footer/secret-collab.png" alt="secret_head" /></a>
    </div>
    <?php include "../include/footer.php" ?>
</body>

</html>