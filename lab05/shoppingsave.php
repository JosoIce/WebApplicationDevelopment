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
    <h1>Web Programming - Lab 5</h1>
    <?php
        if (isset ($_POST["itemName"]) && isset ($_POST["quantity"])) { // check if both items have been entered
            $item = $_POST["itemName"];
            $qty = $_POST["quantity"];
            $filename = "../../data/shop.txt"; // set filename and path
            $handle = fopen($filename, "a"); // open the file in append mode
            $data = $item . ", " . $qty; // concatenate the data
            fwrite($handle, $data); // write to file
            fclose($handle); // close filestream
            echo "<p>Shopping List</p>";
            $handle = fopen($filename, "r"); // open file in read mode
            while (!feof($handle)) {
                $data = fgets($handle); // get the data from file
                echo "<p>", $data, "</p>"; // print data
            }
            fclose($handle); // close filestream
        } else {
            echo "<p>Please enter item and quantity in the input form.</p>";
        }
    ?>
</body>
</html>