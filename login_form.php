<?php
// creating a log in form connected to a DB
include("database.php"); // must always include the DB file

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to Fakebook!</h2>
        username: <br>
        <input type="text" name="username"> <br>
        password: <br>
        <input type="password" name="password"> <br> <br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>

</html>


<?php

// first, we check to see if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // then, we save the input from the form into variables and filter them from any malicious code
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    // then, we check to see if the input is empty
    if (empty($username) || empty($password)) {
        echo "Please fill in all fields";
    } else {
        // if the input is not empty, we has the password and insert 
        // both the username and the hashed password into our database
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
        mysqli_query($connection, $sql);
        echo "User registered successfully!";
    }
}

// don't forget to close the connection 
mysqli_close($connection);
?>