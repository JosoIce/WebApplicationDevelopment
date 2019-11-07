<?php
    session_start();
    if ((!isset ($_SESSION["number"])) && (!isset ($_SESSION["guesses"]))) {
        $_SESSION["number"] = rand(1, 100);
        $_SESSION["guesses"] = 0;
    }
    $num = $_SESSION["number"];
    $guessAmount = $_SESSION["guesses"];
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
<p>
Enter a number between 1 and 100, <br/>
then press the Guess button.
</p>
<form action="guessinggame.php" method="post">
<input type="text" name="guess">
<button type="submit" name="btnGuess">Guess</button>
</form>
<?php
    if (isset ($_POST["guess"])) {
        $guess = $_POST["guess"];
        $_SESSION["guesses"]++;

        if ($guess == $num) {
            echo "<p>Congratulations! You guessed the number!.</p>";
            $guessAmount = $_SESSION["guesses"];
            echo "Number of Guesses: $guessAmount";
        } else if ($guess < $num) {
            echo "<p>The number is higher.</p>";
            $guessAmount = $_SESSION["guesses"];
            echo "Number of Guesses: $guessAmount";
        } else if ($guess > $num) {
            echo "<p>The number is lower.</p>";
            $guessAmount = $_SESSION["guesses"];
            echo "Number of Guesses: $guessAmount";
        } else if ($guess < 1 && $guess > 100) {
            echo "<p>Your guess has to be between 1 and 100.</p>";
        }
    }
?>
<p><a href="giveup.php">Give Up</a></p>
<p><a href="startover.php">Start Over</a></p>
</body>
</html>