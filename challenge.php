<?php

// Challenge Description:

// Create a simple PHP script that takes a user's name through a GET request and prints a greeting message to the user. If no name is provided, it should print a default greeting message.

// Hint:

// You can access the parameters passed through a GET request using the $_GET superglobal array. Check if the 'name' key exists and is not empty before using it.

var_dump($_GET)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Challenge</title>
</head>

<body>

    <form action="" method="get">
        <label for="name">Type name</label>
        <input type="text" name="name" id="name">
        <button type="submit">Send</button>
    </form>


    <?php
    if (empty($_GET['name'])) {
        echo 'Welcome User, type your name please';
    } elseif (isset($_GET['name'])) {
        echo 'Welcome' . ' ' . $_GET['name'];
    }
    ?>

</body>

</html>