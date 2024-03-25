<?php
require('new-connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success! - Raffle Ticket</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <p> Successfully added your  mobile number!</p>
        <table>
        <thead>
            <tr>
                <th>Mobile Number</th>
                <th>Created At</th>
            </tr>
        </thead>
        
        <tbody>
<?php foreach(fetch_all("SELECT * FROM ticket_entries ORDER BY created_at DESC;") as $user) { ?>
            <tr>
                <td><?= $user['mobile_number'] ?> </td>
                <td><?= $user['created_at'] ?></td>
            </tr>
<?php } ?>
        </tbody>
        </table>
    </main>
</body>
</html>