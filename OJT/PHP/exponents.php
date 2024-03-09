<?php
//Anthony A. Cabulang

//Part 1
// $digits = array(3, 12, 30);
// function exponential($arr)
// {
//    $result = array();
//    foreach($arr as $value) {
//         $result[] = pow($value, 3);
//    }
// }
// $result = exponential($digits);
// var_dump($result); 
/* expected output:
        array (size=3)
        0 => int 27
        1 => int 1728
        2 => int 27000
*/


//Part 2
$digits = array(8,11, 4);
function exponential($arr, $exponent) {
   $result = array();
   foreach($arr as $value) {
        $result[] = pow($value, $exponent);
   }
   return $result;
}
$result = exponential($digits, 4);  
var_dump($result);
/* This should dump which contains [4096, 14641,  256]. */
?>