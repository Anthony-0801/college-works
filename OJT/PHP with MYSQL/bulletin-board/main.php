<?php
require('new-connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success! - Bulletin Board</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h1>Bulletin Board View</h1>
<?php foreach(fetch_all("SELECT * FROM bulletin_board ORDER BY created_at DESC;") as $user) { ?>
        <table>
            <thead>
                <tr>
                    <th><?= $user['created_at'] ?> - <?= $user['subject'] ?></th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td><?= $user['details'] ?> </td>
                </tr>
            </tbody>
        </table>
<?php } ?>
    </main>
</body>
</html>