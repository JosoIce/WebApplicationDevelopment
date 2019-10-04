<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Web Application Development">
    <meta name="keywords" content="PHP">
    <meta name="author" content="Josiah Sonsie">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Assignment 1</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Job Posting System</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="postjobform.php">Post Job Listing</a></li>
        <li class="active"><a href="searchjobform.php">Search Jobs</a></li>
        <li><a href="about.php">About</a></li>
        </ul>
    </div>
    </nav>
    <div class="container">
    <h1>Job Vacancy Information</h1>
        <?php
            $filename = "../../data/jobposts/jobs.txt";
            if (isset ($_GET["searchIn"]) && file_exists($filename)) {
                // if both true
                $search = $_GET["searchIn"]; // getting search item
                if (isset ($_GET["searchType"])) {
                    $sType = $_GET["searchType"]; // get search type
                } else {
                    $sType = "NoType"; // if no search type, search all types
                }
                $file = file($filename); // set filepath
                $found = 0; // variable to count when items found
                // if user searched by Title
                if ($sType == "Title"){
                    foreach($file as $line) { // loop through each line
                        $comp = preg_split("/[\t]/", $line); // split line into array
                        // check if line contains what user searched
                        if (strpos($comp[1], $search) !== false) {
                            // print array
                            echo "<p>";
                            echo "<strong>Position ID:</strong> $comp[0]";
                            echo "<br>";
                            echo "<strong>Title:</strong> $comp[1]";
                            echo "<br>";
                            echo "<strong>Description:</strong> $comp[2]";
                            echo "<br>";
                            echo "<strong>Closing Date:</strong> $comp[3]";
                            echo "<br>";
                            echo "<strong>Position:</strong> $comp[4]";
                            echo "<br>";
                            echo "<strong>Contact:</strong> $comp[5]";
                            echo "<br>";
                            echo "<strong>Application by:</strong> $comp[6]";
                            echo "<br>";
                            echo "<strong>Location:</strong> $comp[7]";
                            echo "</p>";
                            $found++;
                        } else if ($found > 0) {
                            break; // if last result found stop looping
                        } else {
                            echo "<p>No vacancies found matching search term</p>";
                            break; // if no results found stop loop and tell user
                        }
                    }
                } else if ($sType == "Position") {
                    foreach($file as $line) { // loop through each line
                        $comp = preg_split("/[\t]/", $line); // split line into array
                        // check if line contains what user searched
                        if (strpos($comp[4], $search) !== false) {
                            // print array
                            echo "<p>";
                            echo "<strong>Position ID:</strong> $comp[0]";
                            echo "<br>";
                            echo "<strong>Title:</strong> $comp[1]";
                            echo "<br>";
                            echo "<strong>Description:</strong> $comp[2]";
                            echo "<br>";
                            echo "<strong>Closing Date:</strong> $comp[3]";
                            echo "<br>";
                            echo "<strong>Position:</strong> $comp[4]";
                            echo "<br>";
                            echo "<strong>Contact:</strong> $comp[5]";
                            echo "<br>";
                            echo "<strong>Application by:</strong> $comp[6]";
                            echo "<br>";
                            echo "<strong>Location:</strong> $comp[7]";
                            echo "</p>";
                        } else if ($found > 0) {
                            break; // if last result found stop looping
                        } else {
                            echo "<p>No vacancies found matching search term</p>";
                            break; // if no results found stop loop and tell user
                        }
                    }
                } else if ($sType == "Contract") {
                    foreach($file as $line) { // loop through each line
                        $comp = preg_split("/[\t]/", $line); // split line into array
                        // check if line contains what user searched
                        if (strpos($comp[5], $search) !== false) {
                            // print array
                            echo "<p>";
                            echo "<strong>Position ID:</strong> $comp[0]";
                            echo "<br>";
                            echo "<strong>Title:</strong> $comp[1]";
                            echo "<br>";
                            echo "<strong>Description:</strong> $comp[2]";
                            echo "<br>";
                            echo "<strong>Closing Date:</strong> $comp[3]";
                            echo "<br>";
                            echo "<strong>Position:</strong> $comp[4]";
                            echo "<br>";
                            echo "<strong>Contact:</strong> $comp[5]";
                            echo "<br>";
                            echo "<strong>Application by:</strong> $comp[6]";
                            echo "<br>";
                            echo "<strong>Location:</strong> $comp[7]";
                            echo "</p>";
                        } else if ($found > 0) {
                            break; // if last result found stop looping
                        } else {
                            echo "<p>No vacancies found matching search term</p>";
                            break; // if no results found stop loop and tell user
                        }
                    }
                } else if ($sType == "Application") {
                    foreach($file as $line) { // loop through each line
                        $comp = preg_split("/[\t]/", $line); // split line into array
                        // check if line contains what user searched
                        if (strpos($comp[6], $search) !== false) {
                            // print array
                            echo "<p>";
                            echo "<strong>Position ID:</strong> $comp[0]";
                            echo "<br>";
                            echo "<strong>Title:</strong> $comp[1]";
                            echo "<br>";
                            echo "<strong>Description:</strong> $comp[2]";
                            echo "<br>";
                            echo "<strong>Closing Date:</strong> $comp[3]";
                            echo "<br>";
                            echo "<strong>Position:</strong> $comp[4]";
                            echo "<br>";
                            echo "<strong>Contact:</strong> $comp[5]";
                            echo "<br>";
                            echo "<strong>Application by:</strong> $comp[6]";
                            echo "<br>";
                            echo "<strong>Location:</strong> $comp[7]";
                            echo "</p>";
                        } else if ($found > 0) {
                            break; // if last result found stop looping
                        } else {
                            echo "<p>No vacancies found matching search term</p>";
                            break; // if no results found stop loop and tell user
                        }
                    }
                } else if ($sType == "Location") {
                    foreach($file as $line) { // loop through each line
                        $comp = preg_split("/[\t]/", $line); // split line into array
                        // check if line contains what user searched
                        if (strpos($comp[7], $search) !== false) {
                            // print array
                            echo "<p>";
                            echo "<strong>Position ID:</strong> $comp[0]";
                            echo "<br>";
                            echo "<strong>Title:</strong> $comp[1]";
                            echo "<br>";
                            echo "<strong>Description:</strong> $comp[2]";
                            echo "<br>";
                            echo "<strong>Closing Date:</strong> $comp[3]";
                            echo "<br>";
                            echo "<strong>Position:</strong> $comp[4]";
                            echo "<br>";
                            echo "<strong>Contact:</strong> $comp[5]";
                            echo "<br>";
                            echo "<strong>Application by:</strong> $comp[6]";
                            echo "<br>";
                            echo "<strong>Location:</strong> $comp[7]";
                            echo "</p>";
                        } else if ($found > 0) {
                            break; // if last result found stop looping
                        } else {
                            echo "<p>No vacancies found matching search term</p>";
                            break; // if no results found stop loop and tell user
                        }
                    }
                } else if ($sType == "NoType") {
                    foreach($file as $line) { // loop through each line
                        $comp = preg_split("/[\t]/", $line); // split line into array
                        // check if line contains what user searched
                        if (strpos($line, $search) !== false) {
                            // print array
                            echo "<p>";
                            echo "<strong>Position ID:</strong> $comp[0]";
                            echo "<br>";
                            echo "<strong>Title:</strong> $comp[1]";
                            echo "<br>";
                            echo "<strong>Description:</strong> $comp[2]";
                            echo "<br>";
                            echo "<strong>Closing Date:</strong> $comp[3]";
                            echo "<br>";
                            echo "<strong>Position:</strong> $comp[4]";
                            echo "<br>";
                            echo "<strong>Contact:</strong> $comp[5]";
                            echo "<br>";
                            echo "<strong>Application by:</strong> $comp[6]";
                            echo "<br>";
                            echo "<strong>Location:</strong> $comp[7]";
                            echo "</p>";
                        } else if ($found > 0) {
                            break; // if last result found stop looping
                        } else {
                            echo "<p>No vacancies found matching search term</p>";
                            break; // if no results found stop loop and tell user
                        }
                    }
                }
            } else {
                // if not true
                echo "<p>Search not valid.</p><p><a href=\"index.php\">Return to Home Page.</a></p><p><a href=\"searchjobform.php\">Return to Search Job Page</a></p>";
            }
        ?>
        <p>
            <span style="float:left;">
                <a href="searchjobform.php">Search for another job vacancy</a>
            </span> 
            <span style="float:right;">
                <a href="index.php">Return to Home Page</a>
            </span>
        </p>
    </div>
</body>
</html>