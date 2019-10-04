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
        $filename = "../../data/guestbook.txt";
        $handle = fopen($filename, "r");
        if (is_readable($filename)) { // check if the file is readable
            while (!feof($handle)) {
                $line = fgets($handle);
                if ($line != "") {
                    $person = explode(",", $line);
                    $guests[] = $person;
                    $namedata[] = $person[0];
                    $emaildata[]= $person[1];
                }
            }

            echo "<table>";
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Email</th>";
            echo "</tr>";
            for ($i = 0; $i < count($guests); $i++) {
                echo "<tr>";
                echo "<th>" . $namedata[$i] . "</th>";
                echo "<th>" . $emaildata[$i] . "</th>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Error reading file</p>";
        }
        fclose($handle);
    ?>
</body>
</html>