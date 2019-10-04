<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Web development">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Josiah Sonsie">
    <title>Using if and while statements</title>
</head>
<body>
    <?php
    include "mathfunctions.php";
    ?>
    <h1>Web Programming - Lab 3</h1>
    <?php
    if (isset($_POST["number"])) { // check if form data exists
        $num = $_POST["number"];      // obtain the form data
        if ($num > 0) {     // check if $num is a positive number
            if ($num == round($num)) {  // check if $num is an integer
                echo "<p>", $num, "! is ", factorial($num), ".</p>";
            } else {                // number is not an integer
                echo "<p>Please enter an integer.</p>";
            }
        } else {                    // number is not positive
            echo "<p>Please enter a positive integer.</p>";
        }
    } else {                        // no input
        echo "<p>Please enter a valid input.</p>";
    }
    ?>
</body>
</html>