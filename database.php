<?php
$db_server = "localhost";  //name of the server
$db_user = "root";          //username  
$db_password = "";          //password
$db_name = "my_first_DB";  //name of the database
$connection = "";          //variable to store the connection

// To establish a connection with the database: 
// it's best to wrap it in a try/catch statement to handle when
// the database is offline or the connection fails 
// (to avoid the user from seeing any error messages)
try {
    $connection = mysqli_connect(
        $db_server,
        $db_user,
        $db_password,
        $db_name
    );
} catch (mysqli_sql_exception) {
    echo "Connection failed"; // this is what the user will see if unable to connect to DB
}

// we can use an if statement to check to see if the connection is running
// but it's not strictly necessary as the try/catch statement will handle it
if ($connection) {
    echo "Connected to the database <br>";
} else {
    echo "Not connected to the database <br>";
}
