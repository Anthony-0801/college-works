<?php
require_once('new-connection.php');
session_start();

// Validate and sanitize the input
function sanitizeInput($input) {
    // Sanitize input to prevent SQL injection
    $sanitizedInput = trim($input); // Remove leading/trailing spaces
    $sanitizedInput = stripslashes($sanitizedInput); // Remove backslashes
    $sanitizedInput = htmlspecialchars($sanitizedInput); // Convert special characters to HTML entities
    return $sanitizedInput;
}

if (isset($_POST['add'])) {
    $subject = sanitizeInput($_POST['subject']);
    $details = sanitizeInput($_POST['details']);

    if (empty($subject) || empty($details)) {
        $_SESSION['message'] = "Please fill up the details correctly!";
        header('Location: index.php');
        exit; // Exit to prevent further execution
    } else {
        $_SESSION['message'] = ""; // Clear the message
    }

    // Rest of code for adding to the database...
    $query = "INSERT INTO bulletin_board (subject, details, created_at) 
    VALUES ('$subject', '$details', NOW())";


if(run_mysql_query($query)) {
    $message = "Successfully added a taskboard!";
    header('Location: main.php');
}

    // Redirect to main.php
    header('Location: main.php');
    exit;
}

if (isset($_POST['skip'])) {
    // Redirect to main.php regardless of required fields
    header('Location: main.php');
    exit;
}
?>
