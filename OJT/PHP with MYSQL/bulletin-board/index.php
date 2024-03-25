<?php 
require('new-connection.php');
session_start();
$_SESSION['message'] = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulletin Board Entry</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Bulletin Board Entry</h1>
        <form action="process.php" method="POST">
            <p><?= $_SESSION['message'] ?></p>
            <label for="subject">Subject:</label>
            <input type="text" name="subject" maxlength="45">

            <label for="details">Message:</label>
            <textarea name="details" rows="5" maxlength="500"></textarea>

            <input type="submit" name="add" value="Add">
            <input type="submit" name="skip" value="Skip">
        </form>
    </main>
</body>
</html>