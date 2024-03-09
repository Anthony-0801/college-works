<?php
// Anthony A. Cabulang

function convert_to_blanks($array) {
    foreach ($array as $item) {
        if (is_int($item)) {
            // For integers, display underscores based on the value
            echo str_repeat("_ ", $item);
        } elseif (is_string($item)) {
            // For strings, display the first letter and underscores for the rest
            echo strtoupper(substr($item, 0, 1)) . str_repeat("_ ", strlen($item) - 1);
        }
        echo "<br>";
    }
}

// Example usage
$list1 = array(6, 1, 3, 5, 7);
$list2 = array(4, 1, "Michael", 3, "Karen", 2, "Rogie");

echo "Part 1:<br>";
convert_to_blanks($list1);

echo "<br>Part 2:<br>";
convert_to_blanks($list2);
?>
