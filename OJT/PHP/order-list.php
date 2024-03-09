<?php
//Anthony A. Cabulang
function print_orders ($orders) {
    echo "<ol>";
    foreach($orders as $order) {
        echo "<li>$order</li>";
    }
    echo "</ol>";
}
$x = array('Spaghetti', 'Pizza', 'Iced tea');
print_orders($x);
?>