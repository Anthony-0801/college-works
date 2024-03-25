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
    <title>Users Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Users Registration</h1>
        <form action="process.php" method="POST">
<?php if(isset($_SESSION['errors'])) {
        foreach($_SESSION['errors'] as $error) { ?>
            <p><?= $error ?></p>
<?php   } ?>
<?php   unset($_SESSION['errors']);
        } ?>

<?php if(isset($_SESSION['success_message'])) { ?>
            <p><?= $_SESSION['success_message'] ?></p>
<?php   unset($_SESSION['success_message']);
        } ?>
            <input type="hidden" name="action" value="register">

            <label for="first_name">First Name:</label>
            <input type="text" name="first_name">

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name">

            <label for="contact_number">Mobile Number:</label>
            <input type="text" name="contact_number">

            <label for="password">Password:</label>
            <input type="password" name="password">

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password">

            <input type="submit" name="register" value="Register">
            <h4>Already have an account? <a href="index.php">Login</a></h4>
        </form>
    </main>
</body>
</html>