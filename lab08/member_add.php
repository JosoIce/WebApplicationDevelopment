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
    <div>
        <h1>Web Programming - Lab08</h1>
    </div>
    <div>
    <?php
    if (isset ($_POST["fname"]) && isset ($_POST["lname"]) && isset ($_POST["gender"]) && isset ($_POST["email"]) && isset ($_POST["phone"])) {
        
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];


        require_once ("settings.php");

        $conn = @mysqli_connect($host, $user, $pswd) or die('Failed to connect to server');
        @mysqli_select_db($conn, $dbnm);

        if (!$conn) {
            echo "<p>connection didn't work</p>";
        } else {
        
            $sql_table = "vipmembers";

            $createQuery = "CREATE TABLE `s101094376_db`. ( `member_id` INT NOT NULL AUTO_INCREMENT , `fname` VARCHAR(40) NOT NULL , `lname` VARCHAR(40) NOT NULL , `gender` VARCHAR(1) NOT NULL , `email` VARCHAR(40) NOT NULL , `phone` VARCHAR(20) NOT NULL , PRIMARY KEY (`member_id`)) ENGINE = InnoDB;";

            $query = "INSERT INTO vipmembers (fname, lname, gender, email, phone) VALUES ('$fname', '$lname', '$gender', '$email', '$phone')";

            if (mysqli_query($conn, $query)) {
                echo "added";
            } else {
                echo "not added";
            }


    

    
            // Close the connection
        
            mysqli_close($conn);
        }
    } else {
        echo "<p>fill all fields</p>";
    }
    
    ?>
    <p><a href="homepage.php">Return Home</a></p>
    </div>
</body>
</html>