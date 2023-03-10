<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>WinterValley | Events</title>
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
        ?> <div class="empty2"></div>
         <?php include "../include/register.php"; } ?>
        <div class="empty3"></div>
    </div>
    <!-- navbar -->
    <?php include "../include/navbar.php" ?>
    <!-- table with events -->
    <div class="event_box">
        <div class="ticket_afstand">
            <h1 class="event_h1">Upcoming Events</h1>
            <div class="sweden_bg">
                <div class="ticket_content">
                    <h2 class="ticket_head">WinterValley Sweden</h2>
                    <ul>
                        <li>28th February 2023</li>
                        <li>Götgatan 62, 118 26 Stockholm</li>
                        <div class="ticket_padding_button">
                            <p><a class="event_link" href="tickets.php">Tickets and More</a></p>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- Finland --> 
            <div class="finland_bg">
                <div class="ticket_content">
                    <h2 class="ticket_head">WinterValley Finland</h2>
                    <ul>
                        <li>25th March 2023</li>
                        <li>Eerikinkatu 3, 00100 Helsinki</li>
                        <div class="ticket_padding_button">
                            <p><a class="event_link" href="tickets.php">Tickets and More</a>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- oostenrijk --> 
            <div class="oostenrijk_bg">
                <div class="ticket_content">
                    <h2 class="ticket_head">WinterValley Austria</h2>
                    <ul>
                        <li>25th April 2023</li>
                        <li>Neustiftgasse 3, 1070 Wien</li>
                        <div class="ticket_padding_button">
                            <p><a class="event_link" href="tickets.php">Tickets and More</a></div>
                    </ul>
                </div>
            </div>
            <h1 class="event_h1">Previous Events</h1>
            <!-- norway --> 
            <div class="norway_bg">
                <div class="ticket_content">
                    <h2 class="ticket_head">WinterValley Norway</h2>
                    <ul>
                        <li>31th December 2022</li>
                        <li>Grefsenkollveien 100, 0490 Oslo</li>
                    </ul>
                </div>
            </div>
            <!-- netherland --> 
            <div class="netherlands_bg">
                <div class="ticket_content">
                    <h2 class="ticket_head">WinterValley Netherlands</h2>
                    <ul>
                        <li>26th November 2022</li>
                        <li>De Passage 100, 1101 AX Amsterdam</li>
                    </ul>
                </div>
            </div>
        </div>  ㅤ
    </div>
    <?php include "../include/footer.php" ?>
</body>

</html>