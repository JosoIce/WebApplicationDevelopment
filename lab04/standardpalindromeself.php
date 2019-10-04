<!DOCTYPE html
<html lang="end">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web Application Development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Josiah Sonsie" />
    <title>Understanding String Functions</title>
</head>
<body>
    <h1>Web Programming - Lab 4</h1>
    <form action="standardpalindromeself.php" method="post">
    Submit a word:<br>
    <input type="text" name="palindrome">
    </form>
    <?php
        if (isset ($_POST["palindrome"])) {     // check if form data exists
            $strg = $_POST["palindrome"];       // get form data
            $pattern = "/^[A-Za-z ]+$/";
            if (preg_match($pattern, $strg)) {  // check for correct input
                $str = preg_replace("/[[:punct:] ]+/", "", $strg); // remove punctuation
                $strLow = strtolower($str);     // set to all lower case
                $strReverse = strrev($strLow);  // get new string that is reverse of original string
                if (!strcmp($strLow, $strReverse)) { // check if normal string and reverse string match
                    echo "<p>The text you entered \"", $strg,"\" is a standard palindrome!</p>";            // if do match
                } else {
                    echo "<p>", $strg, " is not a standard palindrome :(</p>"; // if don't
                }   
            } else {
                echo "<p>Please enter a string containing only letters or space.</p>";
            }
            
        } else {
            echo "<p>Please enter a string from the input form.</p>";
        }
    ?>
</body>
</html>