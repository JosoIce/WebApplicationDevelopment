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
            $guestBook = fread($handle, filesize($filename));
            echo "<pre>" . $guestBook . "</pre>";
        } else {
            echo "<p>Error reading file</p>";
        }
    ?>
</body>
</html>