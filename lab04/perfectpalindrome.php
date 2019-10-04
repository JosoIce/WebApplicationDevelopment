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
    <?php
        if (isset ($_POST["palindrome"])) {
            $str = $_POST["palindrome"];
            $pattern = "/^[A-Za-z ]+$/";
            if (preg_match($pattern, $str)) {
                $strReverse = strrev($str);
                if (!strcmp($str, $strReverse)) {
                    echo "<p>The text you entered \"", $str,"\" is a perfect palindrome!</p>";
                } else {
                    echo "<p>", $str, " is not a perfect palindrome :(</p>";
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