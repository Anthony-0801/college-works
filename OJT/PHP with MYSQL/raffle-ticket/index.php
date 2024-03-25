<?php 
require('new-connection.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raffle Ticket</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Raffle Ticket</h1>
        <p>Enter your mobile number to join the raffle!</p>
        <form action="process.php" method="POST">
            <label for="mobile_number">Mobile Number:</label>
            <input type="text" name="mobile_number" min="11" max="11">

            <input type="submit" name="submit" value="Add">
        </form>
    </main>
</body>
</html>