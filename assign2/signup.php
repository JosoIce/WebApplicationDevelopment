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
    <div class="container jumbotron">
            <h1>My Friend System</h1>
            <h2>Registration Page</h2>
        </div>
    <div class="container">
        <form action="signup.php" method="POST">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="john.smith@example.com" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="name">Profile Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="e.g. John" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" name="confirmPassword">
            </div>
            <div class="d-flex justify-content-between">
            <button type="submit" name="register" class="btn btn-primary">Register</button>
            <button type="reset" class="btn btn-warning">Clear</button>
            </div>
        </form>
    </div>
    <div class="container">
    <?php
    require_once ("functions/settings.php");

    $conn = mysqli_connect($host, $user, $pswd, $dbnm) or die("Failed to connect to server");

    if (isset ($_POST["register"])) {

        $email = $_POST["email"];
        $name = $_POST["name"];
        $pass = $_POST["password"];
        $cPass = $_POST["confirmPassword"];

        $valid = true;

        
        $query = "SELECT * FROM friends WHERE friend_email = \"$email\"";
        if ($conn->query($query) === TRUE) {
            $valid = false;
            echo "<span style=\"color:red;\">Email already registered</span>";
        }
        $pattern = "/^[a-zA-Z]{1,30}$/";
        if (!preg_match($pattern, $name)) {
            $valid = false;
            echo "<span style=\"color:red;\">Not a valid name</span>";
        }
        $pattern = "/^[a-zA-Z0-9]{1,30}$/";
        if (!preg_match($pattern, $pass)) {
            $valid = false;
            echo "<span style=\"color:red;\">Not a valid password</span>";
        }
        if ($pass !== $cPass) {
            $valid = false;
            echo "<span style=\"color:red;\">Passwords must match</span>";
        }

        $date = date('Y-m-d');

        if ($valid == true) {
            $query = "INSERT INTO `friends`(`friend_email`, `password`, `profile_name`, `date_started`, `num_of_friends`) VALUES (\"$email\",\"$pass\",\"$name\",\"$date\",0)";

            if ($conn->query($query) === TRUE) {
                $_SESSION['logged_in'] = 1;

                $query = "SELECT friend_id FROM friends WHERE friend_email = '$email'";
                $result = mysqli_query($conn, $query) or die("Something went wrong.");
                $id = $result->fetch_assoc();
                $_SESSION['user'] = $id["friend_id"];

                $_SESSION['name'] = $name;
                $_SESSION['friends'] = 0;
                header ("Location: friendadd.php");
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
        }
    }
    ?>
    </div>
</body>
</html>