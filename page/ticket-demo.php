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
 
<?php

try {
    // PDO Connection
    $serverName = "localhost";
    $dbname = "wintervalley";
    $dBUsername = "root";
    $dBPassword = "";
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$serverName;dbname=$dbname;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $dBUsername, $dBPassword, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
// Table connection
$stmt = $pdo->prepare("SELECT * FROM tickets_sweden");
$stmt->execute();
$tickets_sweden = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM tickets_finland");
$stmt->execute();
// $total_tickets_finland = $stmt->fetchColumn();
$tickets_finland_data = $stmt->fetchAll();



$stmt = $pdo->prepare("SELECT * FROM tickets_austria");
$stmt->execute();
$tickets_austria = $stmt->fetchAll();

// Retrieve current quantity
$stmt = $pdo->prepare("SELECT quantity FROM `tickets_finland` WHERE id = :id");
$stmt->bindParam(':id', $tickets_finland_data[0]['id']);
$stmt->execute();
$total_tickets_finland = $stmt->fetchColumn();

// Database ticket_pop-up content
if(isset($_POST['ticketQuantity_finland'] ) && is_numeric($ticketQuantity_finland) && $ticketQuantity_finland > $total_tickets_finland) {
    $finland = $_POST['ticketQuantity_finland'];
    echo '<script>console.log ('. $finland . '); </script>';
    // echo "invalid input";
    $new_total_tickets = $total_tickets_finland['quantity'] - $finland;
    $stmt = $pdo->prepare("UPDATE tickets_finland SET quantity = :new_total_tickets");
    $stmt->bindParam(':new_total_tickets', $new_total_tickets);
    $stmt->execute();
} 
// // Database ticket_pop-up content
// $ticketQuantity_finland = isset($_POST['ticketQuantity_finland']) ? $_POST['ticketQuantity_finland'] : null;
// if (!is_numeric($ticketQuantity_finland) || $ticketQuantity_finland > $total_tickets_finland) {
// // Retrieve current quantity
// $stmt = $pdo->prepare("SELECT quantity FROM tickets_finland WHERE id = :id");
// $stmt->bindParam(':id', $tickets_finland_data[0]['id']);
// $stmt->execute();
// $total_tickets_finland = $stmt->fetchColumn();
// ?>


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

    <!-- Ticket pop-ups -->

    <!-- Ticket pop-up (Sweden) -->
    <div class="ticketPopupBox">
    <div id="overlay"></div>
        <div class="ticketPopup" id="ticket_pop-up_sweden">
            <form class="ticketContainer">
                <label for="ticketCheckbox">
                    <h2 class="popup_ticket_title">
                        <?php
                        foreach ($tickets_sweden as $ticket_sw) {
                            echo $ticket_sw['event_id'] . "<br>";
                        }
                        ?></h2>
                </label>
                <div class="checkbox_info">
                    <?php
                    foreach ($tickets_sweden as $ticket_sw) {
                        echo "€" . $ticket_sw['ticket_price'] . "<br>";
                    }
                    ?>
                    <form method="post" action="../page/tickets.php">
                        <label for="ticketQuantity">Number of tickets:</label>
                        <input type="number" id="ticketQuantity_sweden" name="ticketQuantity_sweden" value="1" min="1" max="8" required>
                        <input type="submit" value="Buy" class="btnTicket" onsubmit="return false">
                    </form>
                    <?php
                    foreach ($tickets_sweden as $ticket_sw) {
                        echo $ticket_sw['quantity'] . " Remaining" . "<br>";
                    }
                    ?>
                    <div class="ticket_featuring">
                        <ol>
                            <p>Featuring:</p>
                            <li>The Neighbourhood</li>
                            <li>Taylor Swift</li>
                            <li>Ariana Grande</li>
                            <li>Robbie Williams</li>
                        </ol>
                    </div>
                    <button type="button" class="btn_cancelTicket" onclick="ticket_closePopupSweden()">Close</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Ticket pop-up (Finland) -->
    <div class="ticketPopupBox">
    <div id="overlay"></div>
        <div class="ticketPopup" id="ticket_pop-up_finland">
            <form class="ticketContainer">
                <label for="ticketCheckbox">
                    <h2 class="popup_ticket_title">
                        <?php
                        foreach ($tickets_finland_data as $ticket_fi) {
                            echo $ticket_fi['event_id'] . "<br>";
                        }
                        ?></h2>
                </label>
                <div class="checkbox _info">
                    <?php
                    foreach ($tickets_finland_data as $ticket_fi) {
                        echo "€" . $ticket_fi['ticket_price'] . "<br>";
                    }
                    ?>
                    <form method="post" >
                        <label for="ticketQuantity">Number of tickets:</label>
                        <input type="number" id="ticketQuantity_finland" name="ticketQuantity_finland" value="1" min="1" max="8" required>
                        <input type="submit" value="Buy" class="btnTicket" onsubmit="return false">
                    </form>
                    <?php
                    foreach ($tickets_finland_data as $ticket_fi) {
                        echo $ticket_fi['quantity'] . " Remaining" . "<br>";
            
                    }
                    ?>
                    <div class="ticket_featuring">
                        <ol>
                            <p>Featuring:</p>
                            <li>Sarah Brightman</li>
                            <li>Ed Sheeran</li>
                            <li>Kate Bush</li>
                            <li>Linkin Park</li>
                        </ol>
                    </div>
                    <button type="button" class="btn_cancelTicket" onclick="ticket_closePopupFinland()">Close</button>
                </div>
        </div>
    </div>

    <!-- Ticket pop-up (Austria) -->
    <div class="ticketPopupBox">
    <div id="overlay"></div>
        <div class="ticketPopup" id="ticket_pop-up_austria">
            <form class="ticketContainer">
                <label for="ticketCheckbox">
                    <h2 class="popup_ticket_title">
                        <?php
                        foreach ($tickets_austria as $ticket_au) {
                            echo $ticket_au['event_id'] . "<br>";
                        }
                        ?></h2>
                </label>
                <div class="checkbox_info">
                    <?php
                    foreach ($tickets_austria as $ticket_au) {
                        echo "€" . $ticket_au['ticket_price'] . "<br>";
                    }
                    ?>
                    <form method="post" action="../page/tickets.php">
                        <label for="ticketQuantity">Number of tickets:</label>
                        <input type="number" id="ticketQuantity_austria" name="ticketQuantity_austria" value="1" min="1" max="8" required>
                        <input type="submit" value="Buy" class="btnTicket" onsubmit="return false">
                    </form>
                    <?php
                    foreach ($tickets_austria as $ticket_au) {
                        echo $ticket_fi['quantity'] . " Remaining" . "<br>";
                    }
                    ?>
                    <div class="ticket_featuring">
                        <ol>
                            <p>Featuring:</p>
                            <li>Mariah Carey</li>
                            <li>Imagine Dragons</li>
                            <li>Michael Bublé</li>
                            <li>Aurora</li>
                        </ol>
                    </div>
                    <button type="button" class="btn_cancelTicket" onclick="ticket_closePopupAustria()">Close</button>
                </div>
        </div>
    </div>

    <!-- Ticket info -->
    <div class="ticket_box">
        <h1 class="ticket_h1">Tickets for Upcoming Events</h1>
        <div class="ticket_afstand">
            <div class="sweden_bg">
                <div class="ticket_content">
                    <h2 class="ticket_head">WinterValley Sweden</h2>
                    <ul>
                        <li>16:00-00:00</li>
                        <li>28th February 2023</li>
                        <li>Götgatan 62, 118 26 Stockholm</li>
                        <div class="ticket_padding_button"><button onclick="ticket_openPopupSweden()" class="ticket_button">Buy now</button></div>
                    </ul>
                </div>
            </div>

            <div class="finland_bg">
                <div class="ticket_content">
                    <h2 class="ticket_head">WinterValley Finland</h2>
                    <ul>
                        <li>16:00-00:00</li>
                        <li>25th March 2023</li>
                        <li>Eerikinkatu 3, 00100 Helsinki</li>
                        <div><button onclick="ticket_openPopupFinland()" class="ticket_button">Buy now</button></div>
                    </ul>
                </div>
            </div>

            <div class="oostenrijk_bg">
                <div class="ticket_content">
                    <h2 class="ticket_head">WinterValley Austria</h2>
                    <ul>
                        <li>16:00-00:00</li>
                        <li>25th April 2023</li>
                        <li>Neustiftgasse 3, 1070 Wien</li>
                        <div><button onclick="ticket_openPopupAustria()" class="ticket_button">Buy now</button></div>
                    </ul>
                </div>
            </div>
        </div>
        ㅤ
    </div>

    <div>ㅤ</div>
    <?php include "../include/footer.php" ?>
</body>

<script>
    // functie pop-up Sweden
    function ticket_openPopupSweden() {
        document.getElementById("ticket_pop-up_sweden").style.display = "block";
        disableButtons();
    }

    function ticket_closePopupSweden() {
        document.getElementById("ticket_pop-up_sweden").style.display = "none";
        enableButtons();
    }
    // functie pop-up Finland
    function ticket_openPopupFinland() {
        document.getElementById("ticket_pop-up_finland").style.display = "block";
        disableButtons();
    }

    function ticket_closePopupFinland() {
        document.getElementById("ticket_pop-up_finland").style.display = "none";
        enableButtons();
    }
    // functie pop-up Austria
    function ticket_openPopupAustria() {
        document.getElementById("ticket_pop-up_austria").style.display = "block";
        disableButtons();
    }

    function ticket_closePopupAustria() {
        document.getElementById("ticket_pop-up_austria").style.display = "none";
        enableButtons();
    }

    function disableButtons() {
        let buttons = document.querySelectorAll("button:not(.popup-button)");
        for (let i = 0; i < buttons.length; i++) {
            buttons[i].setAttribute("disabled", true);
        }
    }

    function enableButtons() {
        let buttons = document.querySelectorAll("button:not(.popup-button, btn_cancelTicket, btn cancel, cancel-button)");
        for (let i = 0; i < buttons.length; i++) {
            buttons[i].removeAttribute("disabled");
        }
    }

    // functie pop-up Sweden
function ticket_openPopupSweden() {
  document.getElementById("ticket_pop-up_sweden").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function ticket_closePopupSweden() {
  document.getElementById("ticket_pop-up_sweden").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

document.getElementById("swedenBtn").addEventListener("click", ticket_openPopupSweden);

    // functie pop-up Finland
    function ticket_openPopupFinland() {
  document.getElementById("ticket_pop-up_finland").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function ticket_closePopupFinland() {
  document.getElementById("ticket_pop-up_finland").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

document.getElementById("finlandBtn").addEventListener("click", ticket_openPopupFinland);

    // functie pop-up Austria
    function ticket_openPopupAustria() {
  document.getElementById("ticket_pop-up_austria").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function ticket_closePopupAustria() {
  document.getElementById("ticket_pop-up_austria").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

document.getElementById("austriaBtn").addEventListener("click", ticket_openPopupAustria);
</script>

</html>