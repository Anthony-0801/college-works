<?php
// Anthony A. Cabulang

$successCount = 0;
$failCount = 0;

echo "Practice starts...<br>";

for ($i = 1; $i <= 1000; $i++) {
    if ($i % 4 == 0) {
        $successCount++;
        echo "Attempt $i: Shooting the ball... Success! ... Got {$successCount}x success and {$failCount}x epic fail(s) so far<br>";
    } else {
        $failCount++;
        echo "Attempt $i: Shooting the ball... Epic Fail! ... Got {$successCount}x success and {$failCount}x epic fail(s) so far<br>";
    }
}

echo "Practice ended.<br>";
?>
