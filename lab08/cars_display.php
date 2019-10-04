<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="php" />
    <meta name="author" content="Josiah Sonsie" />
    <title>Lab 8</title>
</head>
<body>
<h1>Web Programming - Lab08</h1>
<?php
    require_one ("settings.php");

    $conn = @mysqli_connect($host, $user, $pswd) or die('Failed to connect to server');
    @mysqli_select_db($conn, $dbnm);

    $query = "SELECT car_id, make, model, price FROM cars";

    $results = mysqli_query($conn, $query);

    



    // Close the connection
    mysqli_free_result($resulst);
    mysqli_close($conn);
?>
</body>
</html>