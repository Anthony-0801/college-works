<?php
// Initialize a session variable to keep track of the count
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}

// Generate a different message based on the count
$count = $_SESSION['count'];
$message = "You are {$count}x better than before!";

// Output the JavaScript code
header("Content-type: application/javascript");
?>
$(document).ready(function(){
    console.log("<?php echo $message; ?>");
});
