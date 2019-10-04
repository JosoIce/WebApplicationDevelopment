<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web Application Development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Josiah Sonsie" />
    <title>Understanding File Functions</title>
</head>
<body>
    <h1>Lab05 Task 2 - Guestbook</h1>
    <?php
        if (isset ($_POST["name"]) && isset ($_POST["email"])) { // check if both items have been entered
            $name = addslashes($_POST["name"]); // set variable to the inputted data with escape characters
            $email = addslashes($_POST["email"]);
            $filename = "../../data/guestbook.txt"; // set filename and path

            $alldata = array();
            if (file_exists($filename)) {
                $data = array();
                $handle = fopen($filename, "r");
                while (!feof($handle)) { // loop while not end of file
                    $onedata = fgets($handle); // read line from txt file
                    if ($onedata != "") { // ignore blank lines
                        $data = explode(",", $onedata); // explode string to array
                        $alldata[] = $data; // create array element
                        $namedata[] = $data[0]; // create string element
                        $emaildata[] = $data[1];
                    }
                }
                fclose($handle);
                $newdata = !(in_array($name, $namedata));
                $newdata = !(in_array($email, $emaildata));
            } else {
                $newdata = true;
            }
            if ($newdata) {
                $handle = fopen($filename, "a");
                $data = $name . ", " . $email . "\n";
                fputs($handle, $data);
                fclose($handle);

                $alldata[] = array($name, $email);

                echo "<p style=\"color:green\">Thank You for signing the Guest Book!</p>";
                echo "<p>" . "<strong>Name: </strong>" . $name . "</p>";
                echo "<p>" . "<strong>E-Mail: </strong>" . $email . "</p>";
            } else {
                echo "<p style=\"color:red\">You have already signed the Guest Book</p>";
            }
        } else {
            echo "<p>Please enter your name into the form, get back to that screen by pressing the back button on your browser.</p>";
        }
    ?>
    <p><a href="guestbookshow.php">Show Guest Book</a></p>
</body>
</html>