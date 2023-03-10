<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>WinterValley | Tickets</title>
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

    <!-- Ticket info -->
    <!-- Ticket box Sweden -->
    <div class="ticket_box">
        <h1 class="ticket_h1">Tickets for Upcoming Events</h1>
        <div class="ticket_afstand">
            <div class="sweden_bg">
                <div class="ticket_content">
                    <div>
                        <h2 class="ticket_head">WinterValley Sweden</h2>
                    </div>
                    <div class="ticket_row">
                        <div>
                            <form method="post">
                                <div class="ticket_margin_left">
                                    <div>
                                        <label for="input_sw">Ticket amount:</label>
                                        <input type="number" class="ticket_input_bg" id="input_sw" name="input_sw" value="1" min="1" max="8">
                                        <label for="input_sw"> € 69,99</label>
                                        <?php include "../include/ticketsystem_sw.php" ?>
                                    </div>
                                    <div>
                                        <input type="submit" value="Buy" class="ticket_button">
                                        <?php echo "$total_tickets Ticket(s) left"; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <ul>
                                <p>Info:</p>
                                <li>16:00-00:00</li>
                                <li>28th February 2023</li>
                                <li>Götgatan 62, 118 26 Stockholm</li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <p>Featuring:</p>
                                <li>The Neighbourhood</li>
                                <li>Taylor Swift</li>
                                <li>Ariana Grande</li>
                                <li>Robbie Williams</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ticket box Finland -->
            <div class="finland_bg">
                <div class="ticket_content">
                    <div>
                        <h2 class="ticket_head">WinterValley Finland</h2>
                    </div>
                    <div class="ticket_row">
                        <div>
                            <form method="post">
                                <div class="ticket_margin_left">
                                    <div>
                                        <label for="input_fi">Ticket amount:</label>
                                        <input type="number" class="ticket_input_bg" id="input_fi" name="input_fi" value="1" min="1" max="8">
                                        <label for="input_fi"> € 69,99</label>
                                        <?php include "../include/ticketsystem_fi.php" ?>
                                    </div>
                                    <div>
                                        <input type="submit" value="Buy" class="ticket_button">
                                        <?php echo "$total_tickets Ticket(s) left"; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <ul>
                                <p>Info:</p>
                                <li>16:00-00:00</li>
                                <li>25th March 2023</li>
                                <li>Eerikinkatu 3, 00100 Helsinki</li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <p>Featuring:</p>
                                <li>Sarah Brightman</li>
                                <li>Ed Sheeran</li>
                                <li>Kate Bush</li>
                                <li>Linkin Park</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ticket box Austria -->
            <div class="oostenrijk_bg">
                <div class="ticket_content">
                    <div>
                        <h2 class="ticket_head">WinterValley Austria</h2>
                    </div>
                    <div class="ticket_row">
                        <div>
                            <form method="post">
                                <div class="ticket_margin_left">
                                    <div>
                                        <label for="input">Ticket amount:</label>
                                        <input type="number" class="ticket_input_bg" id="input" name="input" value="1" min="1" max="8">
                                        <label for="input"> € 69,99</label>
                                        <?php include "../include/ticketsystem_au.php" ?>
                                    </div>
                                    <div>
                                        <input type="submit" value="Buy" class="ticket_button">
                                        <?php echo "$total_tickets Ticket(s) left"; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <ul>
                                <p>Info:</p>
                                <li>16:00-00:00</li>
                                <li>25th April 2023</li>
                                <li>Neustiftgasse 3, 1070 Wien</li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <p>Featuring:</p>
                                <li>Mariah Carey</li>
                                <li>Imagine Dragons</li>
                                <li>Michael Bublé</li>
                                <li>Aurora</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ㅤ
    </div>

    <div>ㅤ</div>
    <?php include "../include/footer.php" ?>
</body>

</html>