<?php 
require('new-connection.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
    <h1>Users Login</h1>
    <form action="process.php" method="POST">
        <input type="hidden" name="action" value="login">

        <label for="email">Email:</label>
        <input type="text" name="email">

        <label for="password">Password:</label>
        <input type="password" name="password">

        <input type="submit" name="submit" value="Login">
    </form>

    <form>
        <a href="register.php">Register</a>
    </form>
    </main>
</body>
</html>