<?php
//Anthony A. Cabulang

$score = rand(1, 100);
for ($i = 1; $i <= 50; $i++) {
    $score = rand(1, 100);
    echo "<hr>"; // Add a horizontal line for readability
    echo "<h1>Your score: $score</h1>";
    if ($score >= 95) {
        echo "<h2>What an excellent singer!</h2>";
    } elseif ($score >= 80) {
        echo "<h2>You're getting better!</h2>";
    } elseif ($score >= 50) {
        echo "<h2>Practice more!</h2>";
    } else {
        echo "<h2>Never sing again, ever!</h2>";
    }
}
?>