<?php

// hashing the password

$password = "janka123";
$hash = password_hash($password, PASSWORD_DEFAULT); // transforms the given
// password into sth encrypted 
//based on the algorithm passed in as the 2nd argument
if (password_verify($password, $hash)) {
    echo "Password is correct";
} else {
    echo "Password is incorrect";
}

// this function checks if the password matches the hash code - 
// if it does, it returns true, otherwise false