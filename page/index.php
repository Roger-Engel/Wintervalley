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
    <img src="../img/Home/buitenfestivalborder.png" alt="buiten-festival" />
    <div class="hometitles">
        <h1 class="homeevents">WinterValley</h1>
    </div>
    <div class=ticketshomediv>
        <p class="homeeventstext">
            The time has come, it's finally time for the next edition of Wintervalley!<br>
            <br>
            Wintervalley is an annual festival that takes place during the cold months and is known for its vibrant atmosphere, delicious food, and spectacular entertainment.<br>
            The festival is held in a picturesque valley surrounded by snow-capped mountains, making it a perfect destination for those seeking an escape from the hustle and bustle of city life.<br>
            <br>
            Visitors can expect a wide range of activities, from ice skating and skiing to music performances, art exhibitions, and culinary delights.<br>
            Whether you're a winter sports enthusiast or simply looking to enjoy a fun-filled weekend, Wintervalley has something for everyone.<br>
            <br>
            So gather your friends and family, pack your bags, and get ready to experience the magic of Wintervalley!
        </p>
        <div class="empty4"></div>
        <!-- upconing events -->
        <div class="ticketshomeall">
            <div class="ticketshome">
                <div class=ticketshomealltext>
                    <h1 class="hometickettext">Upcoming Event</h1>
                    <div>ㅤ</div>
                    <p class="home_date_event_live">28th February 2023 16:00 - 00:00<br>
                        <br>
                        WinterValley Sweden<br>
                        <br>
                        Ticket Sale Started
                    </p>
                </div>
                <div class="tickets_homebutton">
                    <div>ㅤ</div>
                    <div>ㅤ</div>
                    <div>ㅤ</div>
                    <div>ㅤ</div>
                    <input type="button" name="moreinfo" value="More Info" id="moreinfo" onClick="location.href='../page/events.php'" />
                    <input type="button" name="hometickets" value="Tickets" id="hometickets" onClick="location.href='../page/tickets.php'" />
                </div>
            </div>
            <h2 class="home_wintervally"> WinterValley 2023</h2>
            <input type="allevents" name="allevents" value="All Events" id="allevents" onClick="location.href='../page/events.php'" />
            <div>ㅤ</div>
        </div>
    </div>
    <div>ㅤ</div>
    <div>ㅤ</div>
    <!-- footer -->
    <?php include "../include/footer.php" ?>
</body>

</html>