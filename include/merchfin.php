<html>

<head>
</head>

<body>
    <?php
    error_reporting(0);
    $merch_fin = $_POST['merch_fin'];

    // Connect to the database
    $host = "localhost";
    $dbname = "s169849_wintervalley";
    $username = "s169849_wintervalley";
    $password = "Roger123";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //merch finland t-shirts to change the amount 
    // Retrieve the number of tickets from the database
    $sql = "SELECT amount FROM merch WHERE id = 2";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_amount = $row['amount'];

    if (is_numeric($merch_fin) && $merch_fin > 0) {
        if ($total_amount >= $merch_fin) {
            $total_amount -= $merch_fin;
            $sql = "UPDATE merch SET amount = $total_amount WHERE id = 2";
            mysqli_query($conn, $sql);
            echo "T-shirt(s) left: $total_amount";
        } else {
            echo "Sorry, there are only <br>$total_amount T-shirt(s) left.";
        }
    }


    ?>
</body>

</html>