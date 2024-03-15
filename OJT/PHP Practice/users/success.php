<?php
require('new-connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <p>Welcome <?=$_SESSION['first_name'] ?>!</p>
    <form>
        <a href="process.php">Log Out</a>
    </form>

</body>
</html>