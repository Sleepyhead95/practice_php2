<?php
include("database.php"); // to connect this page to the DB

// we can also insert variables into the table
$username = "Patrick";
$password = "rock3";

// to hash our password, we use the password hash func & a default algorithm
$hash = password_hash($password, PASSWORD_DEFAULT);

// this query inserts a new row/user into our users table

$sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

// if any of the required values is missing, the query will fail
// try/catch block to handle errors
try {
    mysqli_query($connection, $sql); // to run the query (inserting a new user into the table)
    echo "New user added <br>";
} catch (mysqli_sql_exception) {
    echo "Could not register user";
}


mysqli_close($connection); // to close the connection
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hello <br>
</body>

</html>