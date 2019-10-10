<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="php" />
    <meta name="author" content="Josiah Sonsie" />
    <title>Lab 8</title>
</head>
<body>
    <div>
        <h1>Web Programming - Lab08</h1>
        <form action="member_add.php" method="post">
            <fieldset>
                <legend>Add Member</legend>
                <p>
                    <label>First name:</label>
                    <input type="text" name="fname">
                </p>
                <p>
                    <label>Last name:</label>
                    <input type="text" name="lname">
                </p>
                <p>
                    <label>Gender:</label>
                    <input type="text" name="gender">
                </p>
                <p>
                    <label>Email:</label>
                    <input type="text" name="email">
                </p>
                <p>
                    <label>Phone:</label>
                    <input type="text" name="phone">
                </p>
                <p>
                    <input type="submit" value="submit" />
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>