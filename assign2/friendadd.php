<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Web Application Development">
    <meta name="keywords" content="HTML, PHP">
    <meta name="author" content="Josiah Sonsie">
    <title>Assignment 2</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="style.css" href="style.css">
</head>
<body>
<?php include("functions/header.php"); ?>
<?php if($_SESSION['logged_in'] == 1): ?>
    <div class="container jumbotron">
            <h1>My Friend System</h1>
            <?php 
            $friends = $_SESSION['friends'];
            echo "<h2>" . $_SESSION['name'] . "'s Friend List</h2>"; 
            echo "<h3>Total Number of Friends is " . $friends . ".</h3>";
        ?>
        </div>
    <div class="container">
        <table class="table table-striped table-bordered">
            <tbody>
            <?php
                include_once ("functions/settings.php");
                $conn = @mysqli_connect($host, $user, $pswd, $dbnm) or die("Failed to connect to server");

                $userID = $_SESSION['user'];

                $query = "SELECT * FROM friends WHERE friend_id NOT IN (SELECT myfriends.friend_id2 FROM `myfriends` WHERE myfriends.friend_id1 = $userID) AND friend_id != $userID";
                
                $result = mysqli_query($conn, $query) or die("Something whent wrong.");
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>". $row['profile_name'] . "</td>";
                        echo '<td width="50px"><form action="friendadd.php" method="POST"><input name="id" value="' . $row['friend_id'] . '" hidden="hidden"></input><button type="submit" name="friend" class="btn btn-warning">Friend</button></form></td>';
                        echo "</tr>";
                    }
                }

                if (isset ($_POST["friend"])) {   

                    $targetID = $_POST['id'];

                    $query = "INSERT INTO myfriends (friend_id1, friend_id2) VALUES ($userID, $targetID)";
                    if ($conn->query($query) === TRUE) {
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }

                    $query = "UPDATE friends SET num_of_friends = cast(num_of_friends + 1 as signed) WHERE friend_id = $userID";
                    if ($conn->query($query) === TRUE) {
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                    }

                    $query = "SELECT num_of_friends FROM friends WHERE friend_id = '$userID'";
                    $result = mysqli_query($conn, $query) or die("Soething went wrong.");
                    $num = $result->fetch_assoc();
                    $_SESSION['friends'] = $num['num_of_friends'];

                    header("Refresh:0");
                }
            ?>
            </tbody>
        </table>
    </div>
<?php elseif($_SESSION['logged_in'] == 0): header('Location: login.php'); ?>
<?php endif; ?> 
</body>
</html>