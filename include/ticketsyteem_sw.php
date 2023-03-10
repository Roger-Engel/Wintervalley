<!DOCTYPE html>
<html lang="en">

<body>

    <form method="post" action="">
        <label for="input">Ticket amount:</label>
        <input type="number" id="input" name="input" min="1" max="8">
        <label for="input"> € 69,99</label>
        <input type="submit" value="Buy" class="btnTicket">
    </form>

    <?php

    $input_sw = $_POST['input'];

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

    // Finland tickets 

    // Austria tickets

    $sql = "SELECT tickets FROM event_tickets_sweden WHERE event_id = 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_tickets = $row['tickets'];

    if (is_numeric($input_sw) && $input_sw > 0) {
        if ($total_tickets >= $input_sw) {
            $total_tickets -= $input_sw;
            $sql = "UPDATE event_tickets_sweden SET tickets = $total_tickets WHERE event_id = 1";
            mysqli_query($conn, $sql);
            echo "You have bought $input_sw tickets. There are now $total_tickets tickets left.";
        } else {
            echo "Sorry, there are only $total_tickets tickets left.";
        }
    }

    mysqli_close($conn);

    ?>


</body>

</html>