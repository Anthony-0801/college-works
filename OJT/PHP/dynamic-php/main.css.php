<?php
header("Content-type: text/css; charset: UTF-8");

// Define font sizes
$pFontSize = rand(10, 300);
$emFontSize = rand(10, 300);
?>

p {
    font-size: <?php echo $pFontSize; ?>px;
}

em {
    font-size: <?php echo $emFontSize; ?>px;
}
