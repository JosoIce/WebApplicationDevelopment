<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web Application Development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Josiah Sonsie" />
    <title>Understanding File and Array Functions</title>
</head>
<body>
    <h1>Web Programming - Lab 5</h1>
    <?php
        if (isset ($_POST["itemName"]) && isset ($_POST["quantity"])) { // check if both items have been entered
            $item = $_POST["itemName"]; 
            $qty = $_POST["quantity"];  
            $filename = "../../data/shop.txt"; 

            $alldata = array(); 
            if (file_exists($filename)) { 
                $itemdata = array(); 
                $handle = fopen($filename, "r");
                while (!feof($handle)) { // loop while not end of file
                    $onedata = fgets($handle); // read a line from the text file
                    if ($onedata != "") { // ignore blank lines
                        $data = explode(",", $onedata); // explode string to array
                        $alldata[] = $data; // create array element
                        $itemdata[] = $data[0]; // create string element
                    }
                }
                fclose($handle);
                $newdata = !(in_array($item, $itemdata)); // check if item exists in array
            } else {
                $newdata = true; // file does not exist, it must be new data
            }
            if ($newdata) {
                $handle = fopen($filename, "a");
                $data = $item . "," . $qty . "\n"; // concat item and qty with comma
                fputs($handle, $data);
                fclose($handle);

                $alldata[] = array($item, $qty); // add data to array

                echo "<p>Shopping item added</p>";
            } else {
                echo "<p>Shopping item already exists</p>";
            }

            sort($alldata); // sort array

            echo "<p>Shopping List</p>";
            foreach($alldata as $data) {
                echo "<p>", $data[0], " -- ", $data[1], "</p>";
            }
        } else {
            echo "<p>Please enter item and quantity in the input form.</p>";
        }
    ?>
</body>
</html>