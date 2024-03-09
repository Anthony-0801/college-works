<?php
// Anthony A. Cabulang

$users = array(
    array('cardholder_name' => "Michael Choi", 'cvc' => 123, 'acc_num' => '1234 5678 9876 5432'),
    array('cardholder_name' => "John Supsupin", 'cvc' => 789, 'acc_num' => '0001 1200 1500 1510'),
    array('cardholder_name' => "KB Tonel", 'cvc' => 567, 'acc_num' => '4568 456 123 5214'),
    array('cardholder_name' => "Mark Guillen", 'cvc' => 345, 'acc_num' => '123 123 123 123'),
    // Add 5 new entries here
    array('cardholder_name' => "Anthony Cabulang", 'cvc' => 234, 'acc_num' => '9876 5432 1234 5678'),
    array('cardholder_name' => "Johnny Bravo", 'cvc' => 456, 'acc_num' => '1111 2222 3333 4444'),
    array('cardholder_name' => "Eve Brown", 'cvc' => 678, 'acc_num' => '5555 6666 7777 8888'),
    array('cardholder_name' => "David Nyeknyekos", 'cvc' => 789, 'acc_num' => '9999 0000 1111 2222'),
    array('cardholder_name' => "Grace Garcia", 'cvc' => 123, 'acc_num' => '4444 5555 6666 7777')
);
?>

<html>
<head>
    <title>Credit Card</title>
</head>
<body>
    <h1>Credit Card</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Name in Uppercase</th>
            <th>Account Num</th>
            <th>CVC Num</th>
            <th>Full Account</th>
            <th>Length of Full Account</th>
            <th>Is Valid</th>
        </tr>

<?php for ($i = 0; $i < count($users); $i++) { ?>
        <tr<?= ($i % 3 === 2) ? ' style="background-color: lightgrey;"' : '' ?>>
            <td><?= $i + 1 ?></td>
            <td><?= $users[$i]['cardholder_name'] ?></td>
            <td><?= strtoupper($users[$i]['cardholder_name']) ?></td>
            <td><?= $users[$i]['acc_num'] ?></td>
            <td><?= $users[$i]['cvc'] ?></td>
            <td><?= $users[$i]['acc_num'].$users[$i]['cvc'] ?></td>
            <td><?= strlen(str_replace(' ', '', $users[$i]['acc_num'] . $users[$i]['cvc'])) ?></td>
            <td><?= (strlen(str_replace(' ', '', $users[$i]['acc_num'] . $users[$i]['cvc'])) === 19) ? 'valid' : 'not valid' ?></td>
        </tr>
<?php } ?>
    </table>
</body>
</html>
