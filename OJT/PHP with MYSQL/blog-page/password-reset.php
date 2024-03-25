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
    <title>Users Password Reset</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Users Password Reset</h1>
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
            <input type="hidden" name="action" value="reset_password">
            <label>Enter your mobile number to reset your password:</label>

            <label for="email">Email:</label>
            <input type="text" name="email">


            <input type="submit" name="reset_password" value="Reset Password">
            <h4>Already have an account? <a href="index.php"> Login</a></h4>
        </form>
    </main>
</body>
</html>