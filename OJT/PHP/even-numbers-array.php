<?php
//Anthony A. Cabulang
$even_array = array();
for($num =0; $num <=10000; $num++){
  if($num % 2 == 0){
    $even_array[] = $num;
  }
}
var_dump($even_array);
?>