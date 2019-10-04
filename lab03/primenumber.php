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
    <?php
    function is_prime ($n) {
        $pnum = $n;
        $result = true;
        for ($i = 2; $i < $pnum; $i++) {
            if ($pnum % $i == 0) {
                $result = false;
                break;
            }
        }
        return $result;
    }

    if (isset($_POST["primenumber"])) {
        $primenum = $_POST["primenumber"];
        if (is_prime($primenum)) {
            echo "<p>", $primenum, " is a prime number.";
        } else {
            echo "<p>", $primenum, " is not a prime number.";
        }
    } else {
        echo "<p>Please enter a valid input.</p>";
    }
    ?>
</body>
</html>