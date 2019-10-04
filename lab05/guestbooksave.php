<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web Application Development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Josiah Sonsie" />
    <title>Understanding File Functions</title>
</head>
<body>
    <h1>Lab05 Task 2 - Guestbook</h1>
    <?php
        if (isset ($_POST["fName"]) && isset ($_POST["lName"])) { // check if both items have been entered
            $fName = addslashes($_POST["fName"]); // set variable to the inputted data with escape characters
            $lName = addslashes($_POST["lName"]);
            $filename = "../../data/guestbook.txt"; // set filename and path
            $handle = fopen($filename, "a"); // open file in append mode
            $data = $fName . " " . $lName . "\n"; // concatenate data
            if (fwrite($handle, $data)) { // write data to file and check if it worked
                echo "<p>Thank you for signing the Guest Book!</p>";
            } else { // if it didn't work
                echo "<p>Cannot add name to the Guest Book</p>";
            }
            fclose($handle); // close the file
        } else {
            echo "<p>Please enter your name into the form, get back to that screen by pressing the back button on your browser.</p>";
        }
    ?>
    <p><a href="guestbookshow.php">Show Guest Book</a></p>
</body>
</html>