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
    <div class="container jumbotron">
            <h1>My Friend System</h1>
            <h2>Assignment Home Page</h2>
        </div>
    <div class="container">
        <p>
            Name: Josiah Sonsie
            <br>
            Student ID: 101094376
            <br>
            <a href="mailto:101094376@student.swin.edu.au">Email: 101094376@student.swin.edu.au</a>
        </p>
        <p>
        I declare that this assignment is my individual work. I have not worked collaboratively nor have I copied from any other student's work or from any other source.
        </p>
        <div class="d-flex justify-content-between">
            <a href="signup.php" class="btn btn-primary">Sign Up</a>
            <a href="login.php" class="btn btn-primary">Log In</a>
            <a href="about.php" class="btn btn-primary">About</a>
        </div>
    </div>
    <div class="container">
    <?php
    include_once ("functions/settings.php");

    $conn = mysqli_connect($host, $user, $pswd, $dbnm) or die("Failed to connect to server");

    // query to check if "friends" table exists
    $query = "DESCRIBE friends";
    $result = mysqli_query($conn, $query);

    // create table if not exists
    if (!$result) {
        $sql = "CREATE TABLE `friends` ( `friend_id` INT NOT NULL AUTO_INCREMENT , `friend_email` VARCHAR(50) NOT NULL , `password` VARCHAR(20) NOT NULL , `profile_name` VARCHAR(30) NOT NULL , `date_started` DATE NOT NULL , `num_of_friends` INT UNSIGNED , PRIMARY KEY (`friend_id`)) ENGINE = InnoDB;";

        if (mysqli_query($conn, $sql)) {
            echo "Table friends created successfully<br>";
        } else {
            echo "Error creating database: " . mysqli_error($conn) . "<br>";
        }

        // Populate tables with test data
        $date = date("Y-m-d");
        $records = 0;

        $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES ('vad@bu.sz','pass','Carl',\"$date\",2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES ('eku@jaiz.bq','pass','Bradley',\"$date\",2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES ('coghev@ca.jm','pass','Aiden',\"$date\",2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES ('azkubot@jaj.an','pass','David',\"$date\",2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES ('hirak@vuzlidedu.bd','pass','Harriet',\"$date\",2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES ('wik@tip.pg','pass','Max',\"$date\",2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES ('fo@bitvizaw.sm','pass','Robert',\"$date\",2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES ('senu@wi.au','pass','Isabella',\"$date\",2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES ('sanotsa@rud.ge','pass','Bertie',\"$date\",2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES ('safjo@ak.tz','pass','Amanda',\"$date\",2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        echo "<p>Added $records records to friends table.</p>";
    }

    // query to check if "myfriends" table exists
    $query = "Describe myfriends";
    $result = mysqli_query($conn, $query);

    // create table if not exists
    if(!$result) {
        $sql = "CREATE TABLE `myfriends` ( `friend_id1` INT NOT NULL , `friend_id2` INT NOT NULL ) ENGINE = InnoDB;";

        if (mysqli_query($conn, $sql)) {
            echo "Table myfriends created successfully<br>"; 
        } else {
            echo "Error creating database: " . mysqli_error($conn) . "<br>";
        }

        // populate table with test data
        $records = 0;

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (1,10)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (1,2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (2,1)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (2,3)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (3,2)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (3,4)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (4,3)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (4,5)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (5,4)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (5,6)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (6,5)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (6,7)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (7,6)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (7,8)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (8,7)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (8,9)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (9,8)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (9,10)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (10,9)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        $query = "INSERT INTO `myfriends`(`friend_id1`, `friend_id2`) VALUES (10,1)";
        if ($conn->query($query) === TRUE) {
            $records++;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        echo "<p>Added $records records to myfriends table.</p>";
    }

    mysqli_close($conn);
    ?>
    </div>
</body>
</html>