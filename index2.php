<?php
// $_SERVER super global variable - gives information about the current web page

foreach ($_SERVER as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

// we can use PHP_SELF to access the current file name/location,
// which is good for easier access in the action attribute of a form

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted";
}
// REQUEST_METHOD tells us reliably if the form was really submitted
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"></form>
</body>

</html>