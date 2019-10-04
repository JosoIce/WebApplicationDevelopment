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
        function factorial ($n) {   // declare the factorial function
            $result = 1;            // declare and initialise the resut variable
            $factor = $n;           // loop to multiple all factors until 1
            while ($factor > 1) {
                $result = $result * $factor;
                $factor--;          // next factor
            }                       // Note that the factor 1 is not multiplied
            return $result;
        }
    ?>
</body>
</html>