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
        <li class="active"><a href="searchjobform.php">Search Jobs</a></li>
        <li><a href="about.php">About</a></li>
        </ul>
    </div>
    </nav>
    <div class="container">
    <h1>Job Vacancy Posting System</h1>
    <form action="searchjobprocess.php" method="get">
        <p>
            <label for="searchInput">Search Jobs:</label>
            <input id="searchInput" type="text" name="searchIn">
        </p>
        <p>
            <label>Search Type:</label>
        </p>
        <p><input type="radio" name="searchType" value="Title"/>Title</p>
        <p><input type="radio" name="searchType" value="Position"/>Position</p>
        <p><input type="radio" name="searchType" value="Contract"/>Contract</p>
        <p><input type="radio" name="searchType" value="Application"/>Application Type</p>
        <p><input type="radio" name="searchType" value="Location">Location</p>
        <p>
            <input type="submit" value="Search" />
        </p>
    </form>
    <p>
    <a href="index.php">Return to Home Page</a>
    </p>
    </div>
</body>
</html>