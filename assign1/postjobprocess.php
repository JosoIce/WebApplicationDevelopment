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
        <li class="active"><a href="postjobform.php">Post Job Listing</a></li>
        <li><a href="searchjobform.php">Search Jobs</a></li>
        <li><a href="about.php">About</a></li>
        </ul>
    </div>
    </nav>
    <div class="container">
    <?php
        if ((isset ($_POST["posID"])) && (isset ($_POST["title"])) && (isset ($_POST["descrip"])) && (isset ($_POST["closeDate"])) && (isset ($_POST["position"])) && (isset ($_POST["contract"])) && (isset ($_POST["application"])) && (isset ($_POST["selectState"]))) { // check if all fields set

            // set variables from form inputs
            $posId = $_POST["posID"];
            $title = addslashes($_POST["title"]);
            $descrip = addslashes($_POST["descrip"]);
            $closeDate = $_POST["closeDate"];
            $position = $_POST["position"];
            $contract = $_POST["contract"];
            $application = $_POST["application"];
            $selectState = $_POST["selectState"];

            // make directory if doesn't exist
            if (!is_dir('../../data/jobposts')){
                mkdir('../../data/jobposts', 0777, true);
                // where job posts are stored
                $dir = "../../data/jobposts";
                $filename = "$dir/jobs.txt";
            } else {
                $dir = "../../data/jobposts";
                $filename = "$dir/jobs.txt";
            }

            // read file to check for id uniqueness
            $handle = fopen($filename, "r"); // open file is read mode
            if (strpos(file_get_contents($filename), $posId) == false) {
                // if id unique
                fclose($handle);

                $handle = fopen($filename, "a"); // open file in append mode
                $data = $posId . "\t" . $title . "\t" . $descrip . "\t" . $closeDate . "\t" . $position . "\t" . $contract . "\t" . $application . "\t" . $selectState . "\n"; // concatenate data
            
                if (fwrite($handle, $data)) { // write data to file and check if it worked
                    // if worked
                    echo "<p>$title Job Posted</p><p><a href=\"index.php\">Return to Home Page?</a>";
                } else {
                    // if didn't work
                    echo "<p>Failed to post vacancy</p><p><a href=\"postjobform.php\">Return to Post Job Page<?/a></p>";
                }
                fclose($handle); // close the file
            } else {
                // if not unique
                echo "<p>Position ID must be unique</p><p><a href=\"postjobform.php\">Return to Post Job Page<?/a></p>";
            }
        } else {
            // if not all fields filled
            echo "<p>All Fields are Required.</p><p><a href=\"index.php\">Return to Home Page.</a></p><p><a href=\"postjobform.php\">Return to Post Job Page</a></p>";
        }
    ?>
    </div>
</body>
</html>