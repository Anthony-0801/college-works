<?php 
require('new-connection.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lessons</title>
</head>
<body>
    <h1>Users</h1>
    <form action="process.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name">

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name">

        <label for="email">Email:</label>
        <input type="text" name="email">

        <input type="submit" name="submit" value="Add">
    </form>

</body>
</html>