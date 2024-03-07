<?php
//Anthony A. Cabulang
$numbers = array (13, 143, 88, 65, 120);
$mean = 0;
for ($i = 0; $i < count($numbers); $i++) {
    $mean += $numbers[$i];
}
$mean = $mean / count($numbers);
echo  "The mean of the sequence is: " . $mean;
?>