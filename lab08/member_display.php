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
    require_once ("settings.php");

    $conn = @mysqli_connect($host, $user, $pswd) or die('Failed to connect to server');
    @mysqli_select_db($conn, $dbnm);

    if (!$conn) {
        echo "<p>connection didn't work</p>";
    } else {

        $sql_table = "vipmembers";

        $query = "SELECT member_id, fname, lname FROM vipmembers";

        $result = mysqli_query($conn, $query);
    
        
        if (!$result) {
            echo "<p>Query didn't work</p>\n";
        } else {
            echo "<table border=\"1\">\n";
            echo "<tr>\n"."<th>Member ID</th>\n"."<th>First name</th>\n"."<th>Last Name</th>\n"."</tr>\n";
    
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>\n";
                echo "<td>",$row["member_id"], "</td>\n";
                echo "<td>",$row["fname"], "</td>\n";
                echo "<td>",$row["lname"], "</td>\n";
                echo "</tr>\n";
            }
            echo "</table>";

            mysqli_free_result($result);
        }
    
    
        // Close the connection
        
        mysqli_close($conn);
    }
    
?>
</body>
</html>