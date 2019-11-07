<?php
    session_start();
    $num = $_SESSION["number"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="php" />
    <meta name="author" content="Josiah Sonsie" />
    <title>Lab 9</title>
</head>
<body>
<h1>Guessing Game</h1>
<?php
    echo "<p>The Number was: $num</p>";
?>
</body>
</html>