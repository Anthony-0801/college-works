<?php
//Anthony A. Cabulang
$cards = array(
    array('key' => 'King', 'value' => 13),
    array('key' => 'Queen', 'value' => 12),
    array('key' => 'Jack', 'value'=> 11),
    array('key' => 'Ace', 'value' => 1)
);

function print_cards($pairs) {
    echo "List of keys in the array: ";
    echo "<ul>";
    foreach($pairs as $pair) {
        echo "<li>" . $pair['key'] . "</li>";
    }
    echo "</ul>";
    echo "<br>";
    foreach($pairs as $pair) {
        echo "The value of {$pair['key']} in Pyramid Solitaire is {$pair['value']}.<br>";
    }
    echo "<br>";
}
print_cards($cards);
?>