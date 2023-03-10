<!DOCTYPE html>
<html lang="en">

<body>

    <?php

    error_reporting(E_ERROR | E_PARSE);

    $input_sw = $_POST['input_sw'];

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

    // Sweden tickets

    $sql = "SELECT tickets FROM event_tickets_sweden WHERE event_id = 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_tickets = $row['tickets'];

    if (is_numeric($input_sw) && $input_sw > 0) {
        if ($total_tickets >= $input_sw) {
            $total_tickets -= $input_sw;
            $sql = "UPDATE event_tickets_sweden SET tickets = $total_tickets WHERE event_id = 1";
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