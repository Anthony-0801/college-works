<?php 
require('new-connection.php'); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony A. Cabulang">
    <title>Users Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
    <h1>Users Login</h1>
    <form action="process.php" method="POST">
<?php if(isset($_SESSION['errors'])) {
        foreach($_SESSION['errors'] as $error) { ?>
            <p><?= $error ?></p>
<?php   } ?>
<?php   unset($_SESSION['errors']);
        } ?>
        <input type="hidden" name="action" value="login">

        <label for="contact_number">Mobile Number:</label>
        <input type="text" name="contact_number">

        <label for="password">Password:</label>
        <input type="password" name="password">

        <input type="submit" name="submit" value="Login">
    </form>

    <form>
        <a href="register.php">Register</a>
        <a href="password-reset.php"> Forgot Password?</a>
    </form>
    </main>
</body>
</html>