<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Web development">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Josiah Sonsie">
    <title>Using variables, arrays and operators</title>
</head>
<body>
    <h1>Web Programming - Lab 2</h1>
    <?php
        $number = 4;

        $number = round($number);
        if (is_numeric($number) && ($number % 2) == 0)
            echo "<p>The variable 'number' contains an even number.";
        else if (is_numeric($number) && ($number % 2) != 0)
            echo "<p>The variable 'number' contains an odd number.";
    ?>
</body>