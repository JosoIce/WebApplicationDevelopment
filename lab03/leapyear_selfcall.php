<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Web development" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="Josiah Sonsie" />
    <title>Using if and while statements</title>
</head>
<body>
    <h1>Web Application Development - Lab 3</h1>
    <form action="leapyear_selfcall.php" method="post">
        Enter a number:<br>
        <input type="text" name="leapyear">
    </form>
    <?php
    function is_leapyear ($y) {
        $year = $y;
        if ($year % 4 == 0) { 
            if ($year % 100 == 0) {
                if ($year % 400 == 0) {
                    $return = true;
                } else {
                    $result = false;
                }
            } else {
                $result = true;
            }
        } else {
            $result = false;
        }
        return $result;
    }

    if (isset($_POST["leapyear"])) {
        $year = $_POST["leapyear"];
        if (is_leapyear($year)) {
            echo "<p>", $year, " is a leap year.";
        } else {
            echo "<p>", $year, " is not a leap year.";
        }
    } else {
        echo "<p>Please enter a valid input.</p>";
    }
    ?>
</body>
</html>