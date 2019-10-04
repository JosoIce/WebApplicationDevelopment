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
        <h1>Web Programming Form - Lab 5</h1>
        <form action="shoppingsave.php" method="post">
            <p>
                <label>Item name:</label>
                <input type="text" name="itemName">
            </p>
            <p>
                <label>Quantity:</label>
                <input type="text" name="quantity">
            </p>
            <p>
                <input type="submit" value="Submit" />
            </p>
        </form>
    </div>
</body>
</html>