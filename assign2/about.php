<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Web Application Development">
    <meta name="keywords" content="HTML, PHP">
    <meta name="author" content="Josiah Sonsie">
    <title>Assignment 2</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="style.css" href="style.css">
</head>
<body>
<?php include("functions/header.php"); ?>
    <div class="container jumbotron">
        <h1>My Friend System</h1>
        <h2>About This Assignment</h2>
    </div>
    <div class="container">
        <ul>
            <li><strong>"What tasks have you not attempted or not completed?"</strong></li>
            <ul>
                <li>I have not attempted/completed all of Part 4. so Task 8 and Task 9</li>
            </ul>
            <li><strong>"What special features have you done, or attempted, in creating the site that we should know about?"</strong></li>
            <ul>
                <li>Other than using bootstrap for the styling, I have not attempted any special features for the site.</li>
            </ul>
            <li><strong>"Which parts did you have trouble with?"</strong></li>
            <ul>
                <li>I had the most trouble working out the logic for adding/removing friends. I had issues getting the session variables to be strings/ints instead of mysql result objects which caused issues echoing the variables.</li>
            </ul>
            <li><strong>"What would you like to do better next time?"</strong></li>
            <ul>
                <li>I would probably try harder to get the extension tasks done, showing mutual friends and splitting up the lists into pages.</li>
            </ul>
            <li><strong>"What additional features did you add to the assignment?"</strong></li>
            <ul>
                <li>I didn't add any special features.</li>
            </ul>
        </ul>
        <a href="friendlist.php" class="btn btn-secondary">Friend List</a>
        <a href="friendadd.php" class="btn btn-secondary">Add Friends</a>
        <a href="index.php" class="btn btn-secondary">Home Page</a>
        <img src="images/discussion.png" alt="Discussion Comment">
    </div>
</body>
</html>