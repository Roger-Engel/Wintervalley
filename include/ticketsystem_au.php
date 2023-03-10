<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    error_reporting(E_ERROR | E_PARSE);

    $input_au = $_POST['input'];

    // PDO Connection
    $host = "localhost";
    $dbname = "s169849_wintervalley";
    $username = "s169849_wintervalley";
    $password = "Roger123";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Failsafe PDO Connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect());
    }

    // Retrieve the number of tickets from the database

    // Austria tickets

    $sql = "SELECT tickets FROM event_tickets_austria WHERE event_id = 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_tickets = $row['tickets'];

    if (is_numeric($input_au) && $input_au > 0) {
        if ($total_tickets >= $input_au) {
            $total_tickets -= $input_au;
            $sql = "UPDATE event_tickets_austria SET tickets = $total_tickets WHERE event_id = 1";
            mysqli_query($conn, $sql);
            echo "<br> You have bought $input_sw ticket(s).";
        } else {
            echo "<br> Sorry, there are only $total_tickets tickets left.";
        }
    }

    mysqli_close($conn);

    ?>


</body>

</html>