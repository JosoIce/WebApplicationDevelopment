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
        if (isset ($_POST["string"])) {
            $str = $_POST["string"];
            $pattern = "/^[A-Za-z ]+$/";
            if (preg_match($pattern, $str)) {
                $ans = "";
                $len = strlen($str);
                for ($i = 0; $i < $len; $i++) {
                    $letter = substr($str, $i, 1);
                    if ((strpos ("AEIOUaeiou", $letter)) === false) {
                        $ans = $ans . $letter;
                    }
                }
                echo "<p>The word with no vowels is ", $ans, ".</p>";
            } else {
                echo "<p>Please enter a string containing only letters or space.</p>";
            }
        } else {
            echo "<p>Please enter a string from the input form.</p>";
        }
    ?>
</body>
</html>