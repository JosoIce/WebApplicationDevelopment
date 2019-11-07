<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Josiah S." />
    <title>TITLE</title>
</head>
<body>
<h1>Web Programming - Lab10</h1>
<?php
    require_once ("settings.php");
    require_once ("hitcounter.php");

    if (class_exists("HitCounter")) {
        $CountingHits = new HitCounter($host, $user, $pswd, $dbnm);
        $CountingHits->startOver();
        $CountingHits->closeConnection();
    } else {
        echo "<p>Class does not exist</p>";
    }
?>
</body>
</html>