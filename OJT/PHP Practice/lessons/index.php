<?php
require('new-connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Inserting User Data in the Database</h1>
    <form action="process.php" action="POST">
        <label for="first_name">First Name:</label>
        <input type="text" name="name" id="first_name">

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <input type="submit" value="Add User">
    </form>

</body>
</html>