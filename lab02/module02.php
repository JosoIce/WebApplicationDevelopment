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
        $marks = array (85, 85, 95);        // declare and initialise array
        $marks[1] = 90;                     // modify second element
        $ave = ($marks[0] + $marks[1] + $marks[2]) /3;  // compute average
        ($ave >= 50)                        //  checks status
            ? $status = "PASSED"
            : $status = "FAILED" ;
        
        echo "<p>The average score is $ave. You $status</p>";
    ?>
</body>