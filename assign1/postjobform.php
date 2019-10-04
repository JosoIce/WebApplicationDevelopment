<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Web Application Development">
    <meta name="keywords" content="PHP, CSS, HTML">
    <meta name="author" content="Josiah Sonsie">
    <title>Assignment 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <style>
        form  { display: table;      }
	    p     { display: table-row;  }
	    label { display: table-cell; vertical-align: middle; }
        input { display: table-cell; }
        
        #dateInput {
            width: 100px;
        }
    </style>
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
    <h1>Job Vacancy Posting System</h1>
    <form action="postjobprocess.php" method="post">
        <fieldset class="border">
            <legend class="border">Job Details</legend>
            <p>
                <label for="posInput">Position ID:</label>
                <input id="posInput" type="text" name="posID" placeholder="e.g. P0001" pattern="[P]\d{4}">
            </p>
            <p>
                <label for="titleInput">Title:</label>
                <input id="titleInput" type="text" name="title" placeholder="e.g. IT Manager" pattern="^[a-zA-Z0-9!,. ]{1,20}$">
            </p>
            <p>
                <label for="descInput">Description:</label>
                <textarea id="descInput" name="descrip" rows="4" cols="50" maxlength="260">
                </textarea>
            </p>
            <p>
                <label for="dateInput">Closing Date:</label>
                <input id="dateInput" type="text" name="closeDate" value="<?php echo date("d/m/y"); ?>" pattern="^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{2}$">
            </p>
            <p>
                <label>Position:</label>
                <input type="radio" name="position" value="Full Time">Full Time
                <input type="radio" name="position" value="Part Time">Part Time
            </p>
            <p>
                <label>Contract:</label>
                <input type="radio" name="contract" value="Ongoing">On-going
                <input type="radio" name="contract" value="Fixed Term">Fixed Term
            </p>
            <p>
                <label>Application by:</label>
                <input type="checkbox" name="application" value="post">Post
                <input type="checkbox" name="application" value="mail">Mail
            </p>
            <p>
                <label>Location:</label>
                <select name="selectState">
                    <option value="">---</option>
                    <option value="ACT">ACT</option>
                    <option value="NT">NT</option>
                    <option value="NSW">NSW</option>
                    <option value="QLD">QLD</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="VIC">VIC</option>
                    <option value="WA">WA</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Post" />
                <input type="reset" value="Reset" />
            </p>
        </fieldset>
    </form>
    <p>
    All fields are required.
    <a href="index.php">Return to Home Page</a>
    </p>
    </div>
</body>
</html>