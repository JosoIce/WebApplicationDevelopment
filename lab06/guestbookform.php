<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web Application Development" />
    <meta name="keywords" content="PHP" />
    <meta name="author" content="Josiah Sonsie" />
    <title>Understanding File Functions</title>
    <style>
        form  { display: table;      }
	    p     { display: table-row;  }
	    label { display: table-cell; vertical-align: middle; }
	    input { display: table-cell; }

        div {
            border: 1px solid black;
            padding: 10px;
            max-width: 500px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Lab05 Task 2 - Guestbook</h1>
        <form action="guestbooksave.php" method="post">
            <fieldset>
                <legend>Enter your details to sign our Guest Book</legend>
                <p>
                    <label>Name:</label>
                    <input type="text" name="name">
                </p>
                <p>
                    <label>Email:</label>
                    <input type="text" name="email">
                </p>
                <p>
                    <input type="submit" value="Submit" />
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>