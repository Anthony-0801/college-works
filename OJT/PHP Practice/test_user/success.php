<?php
require('new-connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success!</title>
</head>
<body>
    <ul>
        <?php foreach(fetch_all("SELECT * FROM test_users") as $user) { ?>
            <li><?= $user['first_name'] ?> <?= $user['last_name'] ?> - <?= $user['email'] ?></li>
        <?php } ?>
    </ul>
</body>
</html>