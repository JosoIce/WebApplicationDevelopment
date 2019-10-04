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
       $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");   //declare array with days of week

       echo "<p>The days of the week in English are: </p>";
       echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]</p>";  // print out the array

       $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");   //reassign array values with days of week in french

       echo "<p>The days of the week in French are: </p>";
       echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]</p>";  // print out the array
    ?>
</body>