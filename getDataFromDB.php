<?php
include("database.php");

$sql = "SELECT * FROM users WHERE user = 'Spongebob'";

// we call the query & store the results 
// the result will be an object / sort of an array
$result = mysqli_query($connection, $sql);

// to check how many rows are returned from table
// a row = associative array - we can acces the data via keys 
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result); // this func returns the next available row
    // we can access each value via its key 
    echo $row["id"] . "<br>";
    echo $row["user"] . "<br>";
    echo $row["register_date"] . "<br>";
}
else {
    echo "No use found <br>"
}

// if we want to retrieve all the rows from the table
// we can get rid of the WHERE clause in the query and use a while loop
// to loop through all the rows
$sql = "SELECT * FROM users";
$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["register_date"] . "<br>";
    }
}


mysqli_close($connection);
