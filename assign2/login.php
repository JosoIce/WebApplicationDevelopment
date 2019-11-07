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
            <h2>Log In Page</h2>
        </div>
    <div class="container">
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="d-flex justify-content-between">
            <button type="submit" name="login" class="btn btn-primary">Log In</button>
            <button type="reset" class="btn btn-warning">Clear</button>
            </div>
        </form>
    </div>
    <div class="container">
    <?php
        require_once ("functions/settings.php");
        $conn = @mysqli_connect($host, $user, $pswd, $dbnm) or die("Failed to connect to server");

        if (isset ($_POST["login"])) {
            $email = $_POST["email"];
            $pass = $_POST["password"];

            $valid = true;

            $query = "SELECT * FROM `friends` WHERE friend_email = \"$email\"";
            $result = $conn->query($query);
            if (mysqli_num_rows($result) == 0) {
                $valid = false;
                echo "<span style=\"color:red;\">Invalid Email</span>";
            }
            $query = "SELECT * FROM `friends` WHERE password = '$pass'";
            if ($conn->query($query) === $pass) {
                $valid = false;
                echo "<span style=\"color:red;\">Invalid Password</span>";
            }

            if ($valid == true) {
                $query = "SELECT * FROM `friends` WHERE friend_email = '$email' AND password = '$pass'";
                $result = mysqli_query($conn, $query) or die("Something went wrong.");
                if (mysqli_num_rows($result) !== 0) {
                    $_SESSION['logged_in'] = 1;

                    $query = "SELECT friend_id FROM friends WHERE friend_email = '$email'";
                    $result = mysqli_query($conn, $query) or die("Something went wrong.");
                    $id = $result->fetch_assoc();
                    $_SESSION['user'] = $id['friend_id'];

                    $query = "SELECT profile_name FROM friends WHERE friend_email = '$email'";
                    $result = mysqli_query($conn, $query) or die("Something whent wrong.");
                    $profile = $result->fetch_assoc();
                    $_SESSION['name'] = $profile['profile_name'];
                    
                    $query = "SELECT num_of_friends FROM friends WHERE friend_email = '$email'";
                    $result = mysqli_query($conn, $query) or die("Something went wrong.");
                    $num = $result->fetch_assoc();
                    $_SESSION['friends'] = $num['num_of_friends'];

                    header ("Location: friendlist.php");
                } else {
                    echo "<span style=\"color:red;\">Invalid Email or Password</span>";
                }
            }
        }
    ?>
    </div>
</body>
</html>