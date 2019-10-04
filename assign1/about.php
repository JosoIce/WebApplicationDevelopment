<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Web Application Development">
    <meta name="keywords" content="PHP">
    <meta name="author" content="Josiah Sonsie">
    <title>Assignment 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
        <li><a href="searchjobform.php">Search Jobs</a></li>
        <li class="active"><a href="about.php">About</a></li>
        </ul>
    </div>
    </nav>
    <div class="container">
        <h1>About this assignment</h1>
        <?php
            echo "<p>Current PHP Version: " . phpversion() . "</p>"; // gets current php version
        ?>
        <p>I have not attempted task 8.</p>
        <p>I have used bootstrap for the styling of the website</p>
        <p>I didn't participate in the discussion board posts for this assignment. There was a post about a permissions error that I would have contributed to but another student posted the same answer that I would have posted.</p>
        <p>
            <a href="index.php">Return to Home Page</a>
        </p>
    </div>
</body>
</html>