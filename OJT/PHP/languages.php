<?php
//Anthony A. Cabulang
$languages = array('PHP', 'JS', 'Ruby');

//for loop
echo "<select>";
for($i = 0; $i < count($languages); $i++) {
    echo "<option>$languages[$i]</option>";
}
echo "</select>";

echo "<br><br>";

//foreach loop
echo "<select>";
foreach($languages as $language) {
    echo "<option>$language</option>";
}
echo "</select>";

echo "<br><br>";

//adding two new language
array_push($languages, 'HTML', 'CSS');
echo "<select>";
foreach($languages as $language) {
    echo "<option>$language</option>";
}
echo "</select>";
?>