<?php
//Anthony A. Cabulang
$even_array = array();
for($num =1; $num <=1000; $num++){
  if($num % 3 == 0){
    echo "This number is a multiple of 3: " . $num . "<br>";
  }
  else{
    echo "This number is not a multiple of 3: " . $num . "<br>";
  }
}
?>